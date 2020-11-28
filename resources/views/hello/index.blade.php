<html>
<head>
<title>Hello/index</title>
<style>
    body {font-size:16pt; color:#999;}
    h1 {foont-size:100pt; text-align:right; color:#eee;
        margin:-40px 0px -50px 0px; letter-spacing:-4px; }
</style>
</head>
<body>
    <h1>Blade/Index</h1>
    <p>&#064;foreachディレクティブの例</p>
    <ol>
      @foreach($data as $item)
      <li>{{$item}}</li>
      @endforeach
    </ol>
    </ol>
</body>
</html>