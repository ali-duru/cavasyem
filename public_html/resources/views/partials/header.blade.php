<header id="top-bar" class="top-bar top-bar--style-3">
    <div class="top-bar__bg" style="background-color: #f1f1f1;background-repeat: no-repeat;background-position: left bottom;"></div>

    <div class="container-fluid">
        <div class="row align-items-center justify-content-between no-gutters">

            <a style="padding: 11px" class="top-bar__logo site-logo" href="{{ route('index') }}">
                <img width="107" class="img-fluid" src="{{ asset('img/logo.png') }}" alt="demo" />
            </a>

            <a id="top-bar__navigation-toggler" class="top-bar__navigation-toggler top-bar__navigation-toggler--light" href="javascript:void(0);"><span></span></a>

            <div id="top-bar__inner" class="top-bar__inner">
                <div>
                    <nav id="top-bar__navigation" class="top-bar__navigation navigation" role="navigation">
                        {{ menu('main', 'partials.menu.main') }}
                    </nav>
                </div>
            </div>

        </div>
    </div>
</header>