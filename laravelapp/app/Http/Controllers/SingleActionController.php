<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleActionController extends Controller
{
    public function __invoke() {

        return <<<EOF
<html>
<head>
<title>SingleActionController</title>
<style>
body {font-size:16pt; color:#ccb; }
h1 {font-size:30pt; text-align:right; color:#ecc; }
</style>
</head>
<body>
    <h1>Single Action</h1>
    <p>これはシングルアクションコントローラーのアクションです。</p>
</body>
</html>
EOF;
    }
}
