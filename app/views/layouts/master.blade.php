<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  	<link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/foundation-min.css') }}">

	<script src="{{ asset('js/vendor/jquery.js') }}"></script>
	<script src="{{ asset('js/vendor/foundation-min.js') }}"></script>
	<script>
    $(document).foundation();
  </script>
</head>

    <body>
    	<header>
    		@if ( ! Sentry::check() )
    		{{ link_to('foo/bar', 'Login', $attributes = array(), $secure = null) }}
    		or
    		{{ link_to('foo/bar', 'Register', $attributes = array(), $secure = null) }}

    		@endif

    	</header>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>