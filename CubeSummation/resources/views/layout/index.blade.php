<!DOCTYPE HTML>

<html>
<head>
    <title>Cube Summation</title>
    <meta charset="utf-8" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>
<body>

<!-- Header -->
<header id="header">
    <nav class="left">
        <a href="#menu"><span>Menu</span></a>
    </nav>
    <p class="logo">Cube Summation</p>
</header>

<!-- Menu -->
<nav id="menu">
    <ul class="links">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('about') }}">About</a></li>
    </ul>
</nav>

@yield('content')

<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrolly.min.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/util.js"></script>
<script src="js/main.js"></script>

</body>
</html>