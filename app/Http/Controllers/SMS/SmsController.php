<?php

namespace App\Http\Controllers\SMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Vonage\Client;
use Vonage\Client\Credentials\Basic;
use Vonage\SMS\Message\SMS;

class SmsController extends Controller
{
    public function create()
    {
        return view('user.sms.sms');
    }

    public function sendSms(Request $request)
    {
        //  validation
        $request->validate([
            'name'    => 'required|string|max:255',
            'phone'   => 'required|string|min:8',
            'message' => 'required|string|max:500',
        ]);

        try {
            // API credentials
           $basic  = new \Vonage\Client\Credentials\Basic("709859da", "ZZzz123456789Z");
           $client = new \Vonage\Client($basic);
            // sms in client
            $textMessage = "From: {$request->name}\nMessage: {$request->message}";

            // send SMS
            $response = $client->sms()->send(
                new SMS($request->phone, "MY_APP", $textMessage)
            );

            $message = $response->current();
            // dd($message);

            if ($message->getStatus() == 0) {
                return back()->with('success', ' SMS sent successfully!');
            } else {
                return back()->with('error', ' Failed with status: ' . $message->getStatus());
            }
        }
        catch (\Exception $e) {
            return back()->with('error', ' Error: ' . $e->getMessage() . ' | Trace: ' . $e->getTraceAsString());
        }
    }

}
