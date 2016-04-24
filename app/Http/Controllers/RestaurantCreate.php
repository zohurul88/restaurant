<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RestaurantCreate extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    { 
    	return view('restaurant.all');
    }


    function insert()
    {
    	return view('restaurant.add');
    }
}
