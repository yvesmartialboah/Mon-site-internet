<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendmailController extends Controller
{
    //
    public function SendMail(Request $request)
    {
        // dd($request);

        $request->validate([
            'name' => 'bail|required|max:255',
            'email' => 'required',
            'subject' => 'bail|required|max:255',
            'message' => 'bail|required|max:255',
        ]);

        $to_name = 'TO_NAME';
        $to_email = 'contact@mobili.ci';
        // $to_email = 'zukizuki161@gmail.com';
        $data = array(
            'name'=>$request->name, 
            "email" => $request->email , 
            "subject" =>$request->subject , 
            "body" =>$request->message
        );
        Mail::send('emails', $data, function($message) use ($to_name, $to_email ,$request)
        {
            $message->to($to_email, $to_email)->subject($request->subject );
            $message->from($request->email ,$request->subject);
            
        });
         return 'OK';
    }
}
