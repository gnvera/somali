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
		$products = Product::paginate(9);
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
	public function consortium()
	{
		return view('consortium');
	}
    //
}
