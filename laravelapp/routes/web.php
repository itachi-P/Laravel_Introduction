<?php

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('hello', function () {
    return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
});
*/

Route::get('hello/{msg}', function ($msg) {

$html = <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body {font-size:16pt; color:#999; }
h1 {font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
</style>
</head>
<body>
    <h1>Hello</h1>
    <p>{$msg}</p>
    <p>これは、サンプルページです。</p>
</body>
</html>
EOF;

    return $html;
});

