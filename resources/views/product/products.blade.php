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
                    <li><a href="/home">Home</a></li>
                    <li><a href="/aboutUs">About</a></li>
                    <li><a href="/products">Products</a></li>
                    <li><a href="/contactUs">Contact Us</a></li>
                    <li><a href="/team">Team</a></li>
                </ul>
            </nav>

    <!-- Banner -->
    <section id="banner">
        <div class="inner">
            <h1>Our Products</h1>
        </div>
        <!--<img src="images/banner1.jpg">--->
        <video autoplay loop muted playsinline src="images/banner1.mp4"></video>
    </section>

    <!-- Highlights -->
    <section class="wrapper">
        <div class="inner">
            <button><a href="/addproduct">Add Product</a></button>
            <header class="special">
                <h2>Our Products</h2>
                <p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor.</p>
            </header>
            <div class="highlights">
            @foreach($products as $data) 
                <section>
                    <div class="content border border-primary">
                        <header>
                            <img src="{{asset('storage/'.$data->image)}}" alt="" style="width: 40px; height: 40px;"/> 
                            <h3>{{$data->p_name}}</h3>
                        </header>
                        <p>{{$data->p_desc}}</p>
                        <a href="{{route('product.show', $data->id)}}" class="button" style="height: 40px; width: 80px; padding: 0px; line-height: 2.50em;">View More</a>
                        <a class="button" style="height: 40px; width: 80px; padding: 0px; line-height: 2.50em;">Delete</a>
                    </div>
                </section>
            @endforeach
            </div>
        </div>
    </section>

    <!-- Footer -->
        @extends('footer')
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>