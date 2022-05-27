<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
  
   public function index(Request $request, Response $response) {
       $data=["res"=>$response,"req"=>$request,"ookubo"=>"ここにポストで送信されたデータが表示されます"];
       return view('php.index',$data);
   }

   public function post(Request $request, Response $response) {
    $data=["res"=>$response,"req"=>$request,"ookubo"=>$request->akira];
    return view('php.index',$data);
}

}

