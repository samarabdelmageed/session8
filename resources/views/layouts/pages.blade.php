<!doctype html>
<html class="no-js" lang="zxx">
    <head>
    @include('includes.head')
		
    </head>
    <body>
			
    @include('includes.header')
	
    @yield('content')
		
    @include('includes.footer')

    @include('includes.footerJs')

    @include('includes.info')

    </body>
</html>