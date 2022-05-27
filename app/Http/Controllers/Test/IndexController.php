<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
  
   public function __invoke(Request $request, Response $response,$id="urlほしいデータの住所を入力してください") {
       $data=["res"=>$response,"req"=>$request,"id"=>$id];
       return view('php.index',$data);
   }

}

