<!DOCTYPE html>
<html>
<head>
  <title>@yield('title','全民舞动')--健身，舞动嗨起来</title>
   <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include("layouts._header")
<div class="container">
      @yield('content')
    </div>
</body>
@include("layouts._footer")
</html>
