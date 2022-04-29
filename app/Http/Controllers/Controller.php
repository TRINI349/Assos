<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Mail\Contact;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function contactForm(){
       // dd(captcha_img());
        return view("email.formulaire");
    }

    public function envoyerEmail(Request $request){
        $data=$request->validate([
            "email"=>"required|email",
            "sujet"=>"required",
            "message"=>"required",
            'captcha' => 'required|captcha'
        ]);
//dd($data["message"]);
        Mail::to('souad.trinib@hotmail.com')->send(new Contact($data["email"],$data["sujet"],$data["message"]));

        // Mail::send('email.email', [
        //     "email"=>$data["email"],
        //     "sujet"=>$data["sujet"],
        //     "texte"=>$data["message"]
        // ], function ($message) use ($data)  {
        //     $message->from($data["email"]);
        //     $message->to('timotheemoulin01@gmail.com', 'Admin');
        //     $message->replyTo($data["email"],);
        //     $message->subject('GretaVoyages '.$data["sujet"]);
        //     $message->priority(3);

        // });
    }



    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
