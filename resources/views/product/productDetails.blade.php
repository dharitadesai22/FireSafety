<!DOCTYPE HTML>
<html>
<head>
    <title>Fire Safety Products Catalogue</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="<?php echo asset('assets/css/main.css') ?>">
   
</head>

<body class="is-preload">

    <!-- Header -->
    <header id="header">
        <a class="logo" href="/">Fire Safety Products Catalogue</a>
    
    </header>
    
    <!-- Body -->
    <section class="wrapper">
    <div class="inner">
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
                        <button><a href="##">Edit</a></button>
                    </header>
                    <hr>
                </div>
            </div>
        </div>

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