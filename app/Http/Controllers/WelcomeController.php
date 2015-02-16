<?php namespace App\Http\Controllers;

use App\Http\Requests\SendContactEmailRequest;
use Mail;
use Log;
use View;
use Session;

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
		return view('welcome');
	}

	public function contact(SendContactEmailRequest $request)
	{
        Mail::send('emails.contact', [
            'name' => $request->get('name'),
            'company' => $request->get('company'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'email_message' => $request->get('message')
        ], function($message) {
            $message->to('nathan@nathan-isaac.com', 'Nathan Isaac')->subject('Portfolio Contact Request');
        });

        Session::flash('flash.heading', 'You message has been sent');
        Session::flash('flash.message', 'I will get back to you soon.');

        return redirect()->back();
	}

}
