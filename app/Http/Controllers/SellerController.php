<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Application;
use App\Models\Category;
use App\Models\Service;
use App\Models\User;

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

    /**
     * Route "seller/home" handler
     * @return view
     */
    public function home() {

        $applications = Application::whereHas('service', function ($query) {
            $query->where('user_id', Auth::user()->id);
        })->get();

        return view('seller.home', compact("applications"));
    }

    public function portfolio() {
        $applications = Application::whereHas('service', function ($query) {
            $query->where('user_id', Auth::user()->id);
        })->get();
        return view('seller.portfolio', compact("applications"));
    }
}
