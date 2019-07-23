<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class TestController extends Controller
{
	public function welcome()
	{
		return view('welcome');
	}

	public function catalogs()
	{
		$products = Product::all();
		return view('catalogs')->with(compact('products'));
	}

	public function projects()
	{
		return view('projects');
	}

	public function contact()
	{
		return view('contact');
	}
    //
}
