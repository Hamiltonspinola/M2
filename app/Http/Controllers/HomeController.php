<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cities = City::get();
        return view('pages.home', compact('cities'));
    }
}
