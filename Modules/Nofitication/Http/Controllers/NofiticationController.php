<?php

namespace Modules\Nofitication\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Nexmo\Laravel\Facade\Nexmo;
use Mail;
use Log;

class NofiticationController extends Controller
{

  public function sendSms()
  {
    // Nexmo::message()->send([
    //     'to'   => '+62 822 3237 8210',
    //     'from' => '+62 822 3237 8210',
    //     'text' => 'Using the facade to send a message.'
    // ]);
  }

  public function sendMail()
  {
    $to_name = 'ivar';
    $to_email = 'ivar@idnplay.com';
    $data = array('name'=>"Ogbonna Vitalis(ivar)", 'body' => "A test mail");
    Mail::send('template.mail', $data, function($message) use ($to_name, $to_email) {
    $message->to($to_email, $to_name)
    ->subject('Laravel Test Mail');
    $message->from('ivaronosogem315@gmail.com','Test Mail');
    });
  }

}
