<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Faker\Factory as Faker;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUsers()
    {
		return view('loremipsum.usergenerator');		
    }
	
	
	public function postUsers(Request $request)
	{
		//show the form for lorem generation
		$faker = \Faker\Factory::create();
		$how_many = $request->input('population');
		
		$this->validate($request, [
		'population' => 'required|numeric',
		]);
	 
		for ($i = 0; $i < ($how_many); $i++)
		{    			
			$users[$i]['name']=$faker->name;
			$users[$i]['address']=$faker->address;
			$users[$i]['phoneNumber']=$faker->phoneNumber;
			$users[$i]['freeEmail']=$faker->freeEmail;
			$users[$i]['paragraph']=$faker->paragraph;

			/* echo $faker->name, "<br>";
			  // 'Lucy Cechtelar';
			echo $faker->address, "<br>";
			  // "426 Jordy Lodge	
//if isset			  
			echo $faker->freeEmail, "<br>";
		  // "LCechtelar@yahoo.com	   */
			/* echo $faker->paragraph($nbSentences = 3),"<br>";	 */	
		}
	//	echo $users;
	return view('loremipsum.usergenerated')->with('users', $users);
	}
}