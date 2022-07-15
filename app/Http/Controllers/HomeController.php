<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application Home Page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('website.pages.home');
    }

    /**
     * Show the application Contact Page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact_page()
    {
        //return view('website.pages.contact');
    }

    /**
     * Show the application About Page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about_page()
    {
        return view('website.pages.home');
    }
}
