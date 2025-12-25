<?php

namespace App\Http\Controllers;

class ShopController extends Controller
{
    /**
     * Display the shop page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.shop');
    }
}

