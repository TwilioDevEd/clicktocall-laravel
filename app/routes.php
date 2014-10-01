<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() 
{
	return View::make('home');
});

// POST URL to handle form submission and make outbound call
Route::post('/call', function() 
{
    // Get form input
    $number = Input::get('phoneNumber');

    // Set URL for outbound call - this should be your public server URL
    $host = parse_url(Request::url(), PHP_URL_HOST);
    $url = 'http://' . $host . '/outbound';

    // Create authenticated REST client using account credentials in
    // <project root dir>/.env.php
    $client = new Services_Twilio(
        $_ENV['TWILIO_ACCOUNT_SID'], 
        $_ENV['TWILIO_AUTH_TOKEN']
    );

    try {
        // Place an outbound call
        $call = $client->account->calls->create(
            $_ENV['TWILIO_NUMBER'], // A Twilio number in your account
            $number, // The visitor's phone number
            $url
        );
    } catch (Exception $e) {
        // Failed calls will throw
        return $e;
    }

    // return a JSON response
    return array('message' => 'Call incoming!');
});

// POST URL to handle form submission and make outbound call
Route::post('/outbound', function() 
{
    // A message for Twilio's TTS engine to repeat
    $sayMessage = 'Thanks for contacting our sales department. If this were a 
        real click to call application, we would redirect your call to our 
        sales team right now using the Dial tag.';

    $twiml = new Services_Twilio_Twiml();
    $twiml->say($sayMessage, array('voice' => 'alice'));
    // $response->dial('+16518675309');

    $response = Response::make($twiml, 200);
    $response->header('Content-Type', 'text/xml');
    return $response;
});