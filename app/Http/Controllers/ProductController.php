<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    /**
     * Display the static product detail page.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('frontend.product');
    }
}