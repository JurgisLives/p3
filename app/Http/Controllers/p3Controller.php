<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Faker\Factory as Faker;

class p3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
		return view('landing.index');		
    }
	
	/* public function postIndex(Request $request)
	{
		return view('loremipsum.loremipsum');
		
		$how_many = ($_POST['paragraphs']);
			
		$this->validate($request, [
		'population' => 'required|numeric',
		]);
		
		//create paragraphs	
		$generator = new \Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs(1);
		echo implode('<p>', $paragraphs); */		
		
	
			
//dd ($request->all());
	
	
	
	}