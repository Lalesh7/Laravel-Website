<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Blog1Controller extends Controller
{
    public function index()
    {
        return view('frontend.blog_1');
    }
}
