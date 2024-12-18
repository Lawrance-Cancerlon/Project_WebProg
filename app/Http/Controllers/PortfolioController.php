<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
{
    /**
     * route 'seller/portfolio/' handler
     */
    public function index() {
        return view("seller.portfolio.index");
    }

    /**
     * page handler for user manage their jobs
     */
    public function pesanan() {
        $applications = Application::whereHas('service', function ($query) {
            $query->where('user_id', Auth::user()->id);
        })->get();
        return view("seller.portfolio.pesanan", compact("applications"));
    }

/**
 * page handler for user manage their services
 */
    public function services() {
        $categories = Category::all();
        $services = Service::where("user_id", Auth::user()->id)->paginate(3);
        return view("seller.portfolio.services", compact(["services", "categories"]));
    }

}
