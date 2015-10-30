<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Faker\Factory as Faker;

class p3Controller extends Controller
	{
		public function getIndex(Request $request)
		{
			return view('landing.index');		
		}
		
	}