<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUs;
use Mail;

class ContactUsController extends Controller
{
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactUs()
   {
       return view('contactUs');
   }


   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactUsPost(Request $request)
   {

       $this->validate($request, [
           'name' => 'required',
           'email' => 'required|email',
           'message' => 'required'
        ]);
        
        ContactUs::create($request->all());
        Mail::send('email', array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'user_message' => $request->get('message')
        ), function($message)
        {
            $message->from('yalerebf@gmail.com');
            $message->to('jgallardo@cadurango.mx', 'YALER TL_Comunicaciones')->subject('YALER TL-Comunicaciones');
        });
        return back()->with('success', 'Gracias!! En breve nos pondremos en contacto con usted.');
    }
}