<!DOCTYPE html>
<html>
<head lang="en">
    <link rel="stylesheet" href="sources/css/main.css?<?php echo time(); ?>" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    <!--This is the CDN to connect with BootstrapCDN CSS-->
    <!-- JS AND JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    <meta charset="UTF-8">
    <!-- CDN FOR ICONS CART -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- CDN JS FUNCTIONS -->
    <script src="sources/js/functions.js?<?php echo time(); ?>"></script>
    <title>Store</title>
</head>
<body class="margin" onload="menuoption('NOTES')">
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" onclick="menuoption('NOTES')" href="#">NOTES </a>|
    <a class="navbar-brand" onclick="menuoption('CONFERENCES')" href="#">&nbsp;&nbsp;CONFERENCES </a>|
    <a class="navbar-brand" onclick="menuoption('SPEAKERS')" href="#">&nbsp;&nbsp;SPEAKERS </a>|
    <a class="navbar-brand" onclick="menuoption('USERS')" href="#">&nbsp;&nbsp;USERS </a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#"></a>
            </li>
        </ul>
    </div>
</nav>

<div id="contentviews">

</div>
</body>
</html>