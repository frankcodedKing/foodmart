<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="floating-labels.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>F00DMART-0</title>
    <style>
        body{
            background-color:#333333;
            color: #fff;
        }
        main{
            color: #fff;
            text-align: center;
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
        }
        .navbar-inverse .navbar-brand {
            color: #ffffff;
        }
        .custom-nav{
            border-color: rgba(0,0,0,0.5);
        }
        .footbrand{
            padding: 5px;
        }

        .contact{
            padding:20px;
        }
        .carousel-caption {
            right: 20%;
            left: 20%;
            padding-bottom: 50px;
            /* background: rgba(0,0,0,0.5) */
        }
        
        .custom-login{
            height: 500px;
            padding-top:50px;
        }
        .intro{
            padding: 10px;
            background: rgba(0,0,0,0.5);
            border-radius: 10px;
        }
        img.slider-img{
            height:400px !important;
            margin:auto;
        }
        .custom-product{
            height:600px;
        }
        .mycarusel{
            width:75%;
            margin:auto;
        }
        .mealpic{
            height:100px;
        }
        .menulist{
            float: left;
            width:20%;
        }
        .menu-wrapper{
            color: #fff;
        }
        .detailimg{
            height: 200px;
        }

        .searchbox{
            width:400px !important
        }
        .cartlistdivider{
            border-bottom:1px solid #fff;
            margin-bottom:20px;
            padding-bottom:20px;
        }
    </style>
</head>
<body>
    {{View::make('header')}}
    @yield("content")
    {{View::make('footer')}}
</body>
</html>