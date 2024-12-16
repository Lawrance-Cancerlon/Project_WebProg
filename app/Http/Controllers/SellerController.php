<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    /**
     * Route "seller/" handler
     * @return redirect route to 'home'
     */
    public function index() {
        if( auth()->check() ) {
            return redirect()->intended("seller/home");

        } else {
            return redirect()->intended("login");
        }
    }

    public function home() {
        return view('seller.home');
    }
}
