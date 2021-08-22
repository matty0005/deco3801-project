<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
 
    protected $appends = [
        'avatar',
        'theme'
    ];

    public function getThemeAttribute() {
        if (!Session::get('kidsMode')) {
            return null;
        }

        $theme = DB::table('user_settings')
            ->select('theme')
            ->where('type', 2)
            ->where('user_id', $this->id)
            ->first();
    
        return $theme->theme;

    }

    public function getAvatarAttribute()
    {
        $avatar = DB::table('user_settings')
            ->select('avatar')
            ->where('user_id', $this->id)
            ->where('type', Session::get('kidsMode') ? 2:1)
            ->first();


        if ($avatar == null || $avatar->avatar == ''){
           return  '/images/default_avatar.png';
        }

        return $avatar->avatar;
    }
}
