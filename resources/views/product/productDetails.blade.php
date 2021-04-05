<!DOCTYPE HTML>
<html>
<head>
    <title>Fire Safety Products Catalogue</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">

    <!-- Header -->
    <header id="header">
        <a class="logo" href="/">Fire Safety Products Catalogue</a>
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </header>

    <!-- Nav -->
    <nav id="menu">
        <ul class="links">
            <li><a href="#">Home</a></li>
            <li><a href="/aboutUs">About</a></li>
            <li><a href="/products">Products</a></li>
            <li><a href="/contactUs">Contact Us</a></li>
            <li><a href="/team">Team</a></li>
        </ul>
    </nav>
    <!-- Body -->
    <div class="container" style="margin: 50px;">

        <div>
            <div class="box">
                <div class="image fit">
                </div>
                <div class="content">
                
                    <header class="align-center">
                    <img src="{{asset('storage/'.$productDetails->image)}}" alt="" style="width: 400px; height: 400px;"/>
                        <h2>{{$productDetails->p_name}}</h2>
                        <p>{{$productDetails->p_desc}}</p>
                    </header>
                    <hr>
                </div>
            </div>
        </div>

    </div>
</body>

</html>