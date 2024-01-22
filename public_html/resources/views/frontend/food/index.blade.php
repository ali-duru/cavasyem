@extends('layouts.app')
@section('title', 'Beslenme Önerileri')
@section('content')
    
    <x-breadcrumb color="fff" title="Beslenme Önerileri" image="img/intro_img/1.jpg" description="" />
    <main role="main">
        @include('partials.lazy-script')
        <section class="section section-pt">
            <div class="container-fluid">
                <div class="products-list">
                    @foreach ($foods as $food)
                        <div class="__item">
                            <div class="__inner">
                                <div class="row align-items-lg-center justify-content-sm-center">
                                    <div class="col-12 col-md-9 col-lg-6">
                                        <div class="__image">
                                            <img class="img-fluid lazy" src="{{ asset('img/blank.gif') }}" data-src="{{ asset(Storage::URL($food->thumbnail)) }}" alt="demo"/>
                                        </div>
                                    </div>
                                    <div class="col-12 my-3 d-lg-none"></div>
                                    <div class="col-12 col-md-9 col-lg-6">
                                        <div class="__content">
                                            <h3 class="__title">{{ $food->name }}</h3>
                                            <p>{{ $food->description }}</p>
                                            <p>
                                                <a class="custom-btn custom-btn--medium custom-btn--style-1" href="{{ route('food.show', [$food->slug]) }}">Daha Fazla</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>


@endsection