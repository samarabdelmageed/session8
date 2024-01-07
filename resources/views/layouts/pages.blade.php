<!doctype html>
<html class="no-js" lang="zxx">
    <head>
    @include('includes.head')
		
    </head>
    
    <body class="sub_page">
			
    @include('includes.header')
	
    @yield('content')
		
    @include('includes.footer')

    @include('includes.footerJs')

    @include('includes.info')

    </body>
</html>