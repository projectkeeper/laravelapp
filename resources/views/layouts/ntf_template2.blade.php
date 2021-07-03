<html>
<head>
<link rel="stylesheet" href="/css/top_contents.css">
<link rel="stylesheet" href="/css/menu.css">
<script type="text/javascript" src="/js/total_common.js"></script>
<meta charset="UTF-8">
<title> @yield('title')</title>
</head>
<body>
<h2> @yield('title')</h2>

<div class="content">
  @yield('header')
</div>

<div class="content">
  @yield('main')
</div>

<div class="footer">
  @yield('footer')
</div>
</body>
</html>
