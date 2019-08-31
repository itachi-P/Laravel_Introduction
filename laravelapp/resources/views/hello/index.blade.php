<html>
<head>
  <title>Hello/Index</title>
  <style>
  body {font-size:16pt; color:#999;}
  h1 {font-size:50pt; text-align:right; color:#f6f6f6;
      margin:-20px 0px -30px 0px; letter-spacing:-4pt;}
  </style>
</head>
<body>
  <h1>Blade/Index</h1>
  <p>&#064;forディレクティブの例</p>
  <ol>
  @for($i = 1; $i < 100; $i++)
    @if ($i % 2 == 1)
      @continue <!-- 奇数の場合は以下の処理に進まず即座にインクリメント($i++) -->
    @elseif ($i <= 10)
      <li>No, {{$i}}  <!-- 偶数かつ10以下の場合のみ表示 -->
    @else
      @break
    @endif
  @endfor
  </ol>
</body>
</html>