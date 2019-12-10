<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function action(Request $request)
    {
      $getAction = DB::table('action');
      if (!$request->action) {
        $getAction = $getAction->first('action');
        $getAction = $getAction ? $getAction->action : null;
        return $getAction;
      }

      $value = ['action' => $request->action];
      if ($getAction->first()) $getAction->update($value);
      else $getAction->insert($value);
      return $request->action;
    }
}
