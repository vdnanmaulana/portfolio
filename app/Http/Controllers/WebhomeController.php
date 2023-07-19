<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebhomeController extends Controller
{
    public function index()
    {
        return view('front.home');
    }
}
