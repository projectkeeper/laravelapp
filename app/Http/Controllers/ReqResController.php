<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class ReqResController extends Controller
{

 public function index(Request $request, Response $response){

$html = <<<EOF
<html>
<head>
<title> Hello/Index</title>
<style>
body {font-size:16pt; color:#999;}
h1 {font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
</style>
</head>
<body>
<h1>hello Index</h1>
<p>This is page created by ReqResController</p>
<h3>Request</h3>
<pre>{$request}</pre>
<h3>Response</h3>
<pre>{$response}</pre>
<h3>Request</h3>
<h3>request->url</h3>
<pre>{$request->url()}</pre>
<h3>request->fullurl</h3>
<pre>{$request->fullurl()}</pre>
<h3>request->path</h3>
<pre>{$request->path()}</pre>
</body>
</html>
EOF;

   $response->setContent($html);
   return $response;
 }
}
