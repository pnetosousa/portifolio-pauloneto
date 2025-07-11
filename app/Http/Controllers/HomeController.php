<?php

namespace App\Http\Controllers;

/**
 * HomeController
 *
 * This controller handles the display of the home page.
 */
class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
}
