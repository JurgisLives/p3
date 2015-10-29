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
		return view('loremipsum.index');		
    }
	
	public function postIndex(Request $request)
	{
		return view('loremipsum.loremipsum');
		
		$how_many = ($_POST['paragraphs']);
			
		$this->validate($request, [
		'population' => 'required|numeric',
		]);
		
		//create paragraphs	
		$generator = new \Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs(1);
		echo implode('<p>', $paragraphs);		
		

			
dd ($request->all());
	}
	
	
	public function createUsers(Request $request)
	{
		//show the form for lorem generation
		return view('loremipsum.usergenerator');
		$how_many = ($_POST['population']);
			
		$this->validate($request, [
		'population' => 'required|numeric',
		]);
		
		//getting $how_many from population field in form
		$how_many = ($_POST['population']);
		
		
			


 
		for ($i = 0; $i < ($how_many); $i++)
		{
			// use the factory to create a Faker\Generator instance
			$faker = \Faker\Factory::create();

			// generate data by accessing properties
			echo $faker->name, "<br>";
			  // 'Lucy Cechtelar';
			echo $faker->address, "<br>";
			  // "426 Jordy Lodge	  
			echo $faker->freeEmail, "<br>";
		  // "LCechtelar@yahoo.com	  
			echo $faker->paragraph($nbSentences = 3),"<br>";
			
		}
	}
}