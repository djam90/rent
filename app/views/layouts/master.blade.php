<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

    <body>
        <header>
    		{{ link_to('/', 'Home') }} |

    		@if ( ! Sentry::check() )
    		{{ link_to('user/login', 'Login', $attributes = array(), $secure = null) }}
    		or
    		{{ link_to('user/add', 'Register', $attributes = array(), $secure = null) }}
			
			@else 
			{{ link_to('user/dashboard', 'Dashboard', $attributes = array(), $secure = null )}}
			{{ link_to('user/logout', 'Logout', $attributes = array(), $secure = null )}}
    		@endif

    	</header>

    	<hr />

        <div class="container">
            @yield('content')
        </div>

        <!-- Javascript -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>	