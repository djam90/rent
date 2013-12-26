<html>
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