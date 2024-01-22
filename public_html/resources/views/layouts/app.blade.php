<!DOCTYPE html>
<html class="no-js" lang="tr">
    <head>
        <title>@yield('title') | Cavas</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <meta name="viewport" content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui" />
        
        <meta name="author" content="Arash Sheyda" />

        <meta name="theme-color" content="#FCDB5A" />
        <meta name="msapplication-navbutton-color" content="#FCDB5A" />
        <meta name="apple-mobile-web-app-status-bar-style" content="#FCDB5A" />


        <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" />
        <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.ico') }}" />
        <link rel="stylesheet" href="{{ asset('css/critical.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
        <script type="text/javascript">
			WebFontConfig = {
				google: { families: [ 'Open+Sans:300,400,500,600,700,800', 'Raleway:100,400,400i,500,500i,700,700i,900'] }
			};
			(function() {
				var wf = document.createElement('script');
				wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
				wf.type = 'text/javascript';
				wf.async = 'true';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(wf, s);
			})();
		</script>

        <script type="text/javascript">
            var _html = document.documentElement,
                isTouch = "ontouchstart" in _html || navigator.msMaxTouchPoints > 0 || navigator.maxTouchPoints;

            _html.className = _html.className.replace("no-js", "js");
            _html.classList.add(isTouch ? "touch" : "no-touch");
        </script>
        <script type="text/javascript" src="{{ asset('js/device.min.js') }}"></script>
		@stack('extra-css')
        
    </head>

    <body class="{{ Nav::isResource('urunler') || Nav::isResource('search') ? 'woocommerce-page product-page' : '' }}">
        
        <div id="app">

            {{-- <x-weather></x-weather> --}}

            @include('partials.header')

            @yield('slider')

            @yield('content')

            @include('partials.footer')
            
        </div>

        <a class="bip-button" href="https://wa.me/+905433045120">
            <img class="wp" src="{{ asset('images/whatsapp.png') }}" />
        </a>
       
        @include('partials.top-button')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-2.2.4.min.js"><\/script>')</script>
		<script type="text/javascript" src="{{ asset('js/main.min.js') }}"></script>
    </body>

</html>