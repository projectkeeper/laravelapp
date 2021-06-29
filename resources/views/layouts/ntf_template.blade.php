<html>
<head>
<link rel="stylesheet" href="/laravelapp/public/css/menu.css">
<link rel="stylesheet" href="/laravelapp/public/css/parts.css">
<script type="text/javascript" src="/laravelapp/public/js/total_common.js"></script>
<title> @yield('title')</title>
<style>
body {font-size:16pt; color:#999; margin:5px;}
h1 {font-size:100pt; text-align:right; color:#f6f6f6; margin:-20px 0px -30px 0px;letter-spacing: -4pt}
ul { font-size:12pt;}
hr { margin:25px 100px; border-top:1px dashed #ddd;}
.menutitle {font-size:14pt; font-weight:bold; margin:0px;}
.content{margin:10px;}
.footer {text-align:right; font-size:10pt; margin:10px; border-bottom:solid 1px #ccc; color:#ccc;}
</style>
</head>
<body>

<div class="content">
  @yield('header')
</div>

<div class="content">
  @yield('init_screen')
</div>

<div class="content">
  @yield('exe_biz_logic')
</div>

<div class="content">
  @yield('get_confirm')
</div>

<div class="content">
  @yield('get_result')
</div>

<div class="footer">
  @yield('footer')
</div>
</body>
</html>
