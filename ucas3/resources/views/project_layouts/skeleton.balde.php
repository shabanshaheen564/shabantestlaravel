<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    
    <style>
        .header{
            height: 70px;
            width: 100%;
            position: fixed ;
            background-color: rgb(100,100,100);

        }
        .sidenav{
            height: 100%;
            width: 250px;
            position: fixed ;
            background-color: rgb(100,100,100);
        }
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
    </style>
   
</head>
<body>

<!-- ------------------ HEADER ------------------- -->
    <div class="header">
        @include('project_layouts.header')
    </div>
<!-- ------------------ SIDE NAVIGATION  ------------------- -->
    <div class="sidenav">
        @include('project_layouts.side_menu')

        
    </div>
<!-- ------------------ BODY ------------------- -->

    <div>
        @yield('page_content')
    </div>


<!-- ------------------ FOOTER ------------------- -->

      
</body>
</html>