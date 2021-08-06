<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected $guards = [];
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        if (Auth::user() == null) {
            $this->guards = $guards;
            return parent::handle($request, $next, ...$guards);

            // $this->authenticate($request, $guards);

            // return $next($request);
        }

        $hasDoneFirstQuiz = DB::table('parent_progress_quiz')
            ->join('users', 'users.id', 'user_id')
            ->count() > 0; 
        

        if (!$hasDoneFirstQuiz && $request->route()->getName() != 'parent_signup_quiz' && $request->route()->getName() != 'logout') {
            return Redirect::route('parent_signup_quiz');
        }
        return $next($request);
    }
}
