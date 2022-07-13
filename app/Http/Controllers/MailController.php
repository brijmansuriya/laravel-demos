<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
   public function sendEmail()
   {
   $details = [
      'tital' => 'Email Tital test 1',
      'body' => 'Email body',
   ];

   Mail::to("brijmansuriya.ai@gmail.com")->send(new TestMail($details));
   return "Email Send";
   }
}
