<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('about', [
            'title' => 'About',
            'active' => 'about',
            'name' => 'Gerry Satria Halim',
            'email' => 'gerrysatria10@gmail.com',
            'image' => 'gerry.jpg'
        ]);
    }
}
