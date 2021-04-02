<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fire Safety Products Catalogue</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
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
            <li><a href="#">Contact Us</a></li>
            <li><a href="/team">Team</a></li>
        </ul>
    </nav>

    <!-- Body -->
    <div class="container" style="margin: 50px;">
        <div class="row">
            <div class="col-6">
                <h2>Add products</h2>
                <div class="container">
                    <form action="#">

                        <label for="fname">Product Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your name">
                        <div style="padding-bottom: 10px;"></div>

                        <label for="subject">Product Description</label>
                        <textarea id="subject" res name="subject" placeholder="Write something here" style="height:200px"></textarea>
                        <div style="padding-bottom: 20px;"></div>

                        <!-- image -->
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" value="{{old('image')}}" class="form-control @error('image') is-invalid @enderror" name="image" id="image">
                            @error('image')
                            <p class="text-danger" style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                        <div style="padding-bottom: 30px;"></div>

                        <input type="submit" value="Submit" style="background-color: black; color: white !important;">

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>