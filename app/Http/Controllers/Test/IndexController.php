<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
  
   public function __invoke(Request $request, Response $response) {
       return view('php.index',["res"=>$response]);
   }

}

