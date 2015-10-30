<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Faker\Factory as Faker;

class TextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getText()
    {
		return view('loremipsum.loremipsum');		
    }
	
	public function postText(Request $request)
	{	$paragraphs = $request->input('paragraphs');
	
		
		$generator = new \Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs($paragraphs);
		return view('loremipsum.loremipsum_generated')->with('paragraphs', $paragraphs);
		/* return view('loremipsum.loremipsum');
		
		$how_many = ($_POST['paragraphs']);
			
		$this->validate($request, [
		'population' => 'required|numeric',
		]);
		
		//create paragraphs	
				
		 */

			
//dd ($request->all());
	}
}