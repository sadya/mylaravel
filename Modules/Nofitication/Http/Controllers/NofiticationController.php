<?php

namespace Modules\Nofitication\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Nexmo\Laravel\Facade\Nexmo;

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

}
