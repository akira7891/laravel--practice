<html>
<head>
   <title>Hello/Index</title>
   <style>
   body {font-size:16pt; color:#999; }
   h1 { font-size:100pt; text-align:left; color:#f6f6f6;
       margin:-50px 0px -100px 0px; }
   </style>
</head>
<body>
   <h1>Index</h1>
   <form action="/res" method="post">
      @csrf
      <input name="akira" type="text">
      <input type="submit" value="リクエスト要求　ポストメソッドでクライアントからウェブサーバーにのデータ受け渡し">
   </form>
   {{$ookubo}}
   <pre>{{$req}}</pre>
   <pre>{{$res}}</pre>
</body>
</html>
