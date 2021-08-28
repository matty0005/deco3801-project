<?php

namespace App\Http\Controllers\Account;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as InertiaRequest;


class BillingController extends Controller
{
    public function index() {
        $user = Auth::user();

        $customer = $user->createOrGetStripeCustomer();

        $details = [];

        if ($user->hasDefaultPaymentMethod()) {
            //exp_month, exp_year, last4, brand
            $pm = $user->defaultPaymentMethod();
            $card = $pm->card;

            $details = [
                'exp_month' => $card->exp_month,
                'exp_year' => $card->exp_year,
                'last4' => $card->last4,
                'brand' => $card->brand,
                'name' => $pm->billing_details->name
            ];
        }
        
        return Inertia::render('Parents/Settings/Billing', [
            'details' => $details,
            'intent' => $user->createSetupIntent()
        ]);
    }

    public function store() {
        $user = Auth::user();

        $data = InertiaRequest::validate([
            'token' => ['required'],
        ]);

        $user->updateDefaultPaymentMethod($data['token']);

        return Redirect::route('user_billing'); 

    }
}
