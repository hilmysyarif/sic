<?php namespace App\Http\Controllers;

use SoapBox\Formatter\Formatter;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('frontend.deals.index');
	}

    public function news(){
        $xmlString = file_get_contents('http://wx.toronto.ca/festevents.nsf/torontoalleventsfeed.xml');
        $formatter = Formatter::make($xmlString, Formatter::XML)->toJson();
        $news = json_decode($formatter);
        return view('news')->with('news', $news);
    }

    public function test(){
        return view('test');
    }

}
