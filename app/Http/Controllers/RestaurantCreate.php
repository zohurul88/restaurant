<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RestaurantCreate extends Controller
{
    function index()
    {
    	return view('restaurant.all');
    }
}
