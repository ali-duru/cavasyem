@extends('layouts.app')
@section('title', 'İletişim')
@section('content')
<x-breadcrumb color="fff" title="İletişim" image="img/intro_img/7.jpg" description="" />
<main role="main">
    <section class="section">
        <div class="container">
            <div class="company-contacts  text-center">
                <div class="__inner">
                    <div class="row justify-content-around">
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="__item">
                                <i class="__ico fontello-location"></i>
                                <h4 class="__title">Adres</h4>
                                <p>Organize Sanayı Bölgesi 1. Cadde No:26 <br/> KARAMAN / TÜRKİYE</p>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="__item">
                                <i class="__ico fontello-phone"></i>
                                <h4 class="__title">Telefon</h4>
                                <p>
                                    <a href="tel:+903382241490">+90 338 224 14 90</a>
                                    <br />
                                    <a href="tel:+905433045123">+90 543 304 51 23</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="__item">
                                <i class="__ico fontello-mail-1"></i>
                                <h4 class="__title">E-posta</h4>
                                <p>
                                    <a href="mailto:info@cavasyem.com">info@cavasyem.com</a>
                                    <br/>
                                    <a href="mailto:info@cavasyem.com">info@cavasyem.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--dark-bg  section--contacts">
        <x-contact-form size="col-12 col-md-6"></x-contact-form>
        <div class="row no-gutters">
            <div class="col-md-6  map-container map-container--left">
                <div class="g_map" data-api-key="AIzaSyBXQROV5YMCERGIIuwxrmaZbBl_Wm4Dy5U" data-longitude="37.21461235430043" data-latitude="33.302888440005525" data-marker="{{ asset('img/marker.png') }}" style="min-height: 255px"></div>
            </div>
        </div>
    </section>
</main>
@endsection