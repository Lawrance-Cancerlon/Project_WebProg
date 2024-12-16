<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * route 'seller/portfolio/' handler
     */
    public function index() {
        return view("seller.portfolio.index");
    }
}
