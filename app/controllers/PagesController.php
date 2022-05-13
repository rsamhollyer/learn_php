<?php

namespace App\Controllers;

/**
 * 
 * @package 
 */
class PagesController {

    public function home() {

        return view('index');
    }

    public function about() {
        $company = 'Sammies';
        return view('about', compact('company'));
    }

    public function contact() {
        return view('contact');
    }

    public function culture() {
        return view('culture');
    }
}
