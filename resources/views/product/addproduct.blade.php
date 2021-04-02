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
                    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group"> 
                        <label for="p_name">Product Name</label>
                        <input type="text" value="{{old('p_name')}}" class="form-control @error('p_name') is-invalid @enderror" id="p_name" name="p_name" placeholder="Enter product name">
                        @error('p_name')
                            <p class="text-danger" style="color:red;">{{$message}}</p>
                        @enderror
                        <div style="padding-bottom: 10px;"></div>
                        </div>

                        <!-- p_desc -->
                        <div class="form-group">
                            <label for="p_desc">description:</label>
                            <!-- <input id="address" type="hidden" name="content"> -->
                            <!-- <trix-editor input="content"></trix-editor> -->
                            <textarea class="form-control @error('p_desc') is-invalid @enderror"
                                    name="p_desc" id="p_desc" rows="4">{{old('p_desc')}}</textarea> 
                            @error('p_desc')
                                <p class="text-danger" style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                         <div style="padding: 10px;"></div>
                        

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