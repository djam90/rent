<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sbadmin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('font-awesome/css/font-awesome.css') }}">
    

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

    <body>
        
        <div id="wrapper">
            @include('admin.layouts.nav')

            <div id="page-wrapper">
                @yield('content')
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Javascript -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
        <script src="{{ asset('js/sbadmin.js') }}"></script>

    </body>
</html>	