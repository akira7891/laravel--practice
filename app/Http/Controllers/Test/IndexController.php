<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
  
   public function __invoke(Request $request, Response $response) {

$html = <<<EOF

  <h3>リクエスト</h3>
  <pre>{$request}</pre>
  <h3>レスポンス</h3>
  <pre>{$response}</pre>

EOF;
     
       return $html;
   }

}

