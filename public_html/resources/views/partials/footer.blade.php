<footer id="footer" class="footer footer--style-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                <div class="footer__item">
                    <a class="site-logo" href="{{ route('index') }}">
                        <img width="137" class="img-fluid" src="{{ asset('img/logo.png') }}" alt="cavaş yem" style="filter:drop-shadow(0px 0px 7px #ffffff50)" />
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="footer__item">
                    <nav id="footer__navigation" class="navigation">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="footer__item__title h6">Kategoriler</h5>
                                <ul>
                                    @foreach ($categories->slice(0, 3) as $category)
                                        <li style="padding-bottom: 5px">
                                            <a href="{{ route('product.index', [$category->slug]) }}">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="footer__item">
                    <nav id="footer__navigation" class="navigation">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="footer__item__title h6">KVKK</h5>
                                <ul>
                                    @foreach ($privacies as $privacy)
                                        <li style="padding-bottom: 5px">
                                            <a href="{{ route('privacy.show', [$privacy->slug]) }}">{{ $privacy->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="footer__item">
                    <h5 class="footer__item__title h6">İletişim</h5>
                    <address>
                        <p>Organize Sanayı Bölgesi 1. Cadde No:26 <br /> KARAMAN / TÜRKİYE</p>
                        <p>
                            <a href="tel:+903382241490">+90 338 224 14 90</a>, <a href="+905433045123">+90 543 304 51 23</a> 
                        </p>
                        <p>
                            <a href="mailto:info@cavasyem.com">info@cavasyem.com</a>
                        </p>
                    </address>
                    <div class="social-btns">
                        <a href="#"><i class="fontello-instagram"></i></a>
                        <a href="#"><i class="fontello-facebook"></i></a>
                        <a href="#"><i class="fontello-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-lg-end justify-content-lg-between copyright">
            <div class="col-12 col-lg-6">
                <div class="footer__item">
                    <span class="__copy">© {{ date('Y') }} <a href="{{ route('index') }}">Çavaş Yem</a> by <a class="__dev" href="https://ugi.net.tr" target="_blank">Ugi</a></span>
                </div>
            </div>
        </div>
    </div>
</footer>