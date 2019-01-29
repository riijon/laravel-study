<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request, Response $response)
    {
        $html = <<<EOF
<html>
<head>
<title>Hello/Index</title>
<style>
body {font-size: 16px; color: #999;}
h1 {font-size: 30px; text-align: right; color: #eee; margin: -15px 0 0;}
</style>
</head>
<body>
<h1>Hello</h1>
<h3>Request</h3>
<pre>{$request}</pre>
<h3>Response</h3>
<pre>{$response}</pre>
</body>
EOF;
        $response->setContent($html);
        return $response;
    }
}
