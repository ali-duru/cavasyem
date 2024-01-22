@extends('layouts.app')
@section('title', $product->name)
@section('content')

<x-breadcrumb color="fff" title="{{ $product->name }}" image="{{ asset(Storage::URL($product->category->slider)) }}" description="Daha Fazla" />

<main role="main">
    
    @include('partials.lazy-script')

    <section class="section">
        
        {{-- <x-decor /> --}}

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-single">
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <div class="__product-img">
                                    <img width="100%" src="{{ asset(Storage::URL($product->image)) }}" alt="demo" />

                                    <span class="product-label product-label--new">Çavaş Yem</span>
                                </div>
                            </div>

                            <div class="col-12 col-lg-5">
                                <div class="content-container">
                                    <h3 class="__name">{{ $product->name }}</h3>

                                    <div class="__categories">
                                        Ana Kategori: <a href="{{ route('product.index', [$product->category->slug]) }}"><span>{{ $product->category->slug }}</span></a>
                                    </div>
                                    <div class="__categories">
                                        Alt Kategori: <a href="{{ route('product.show', [$product->category->slug, $product->slug]) }}"><span>{{ $product->slug }}</span></a>
                                    </div>
                                    <div class="product-price">
                                        <a href="https://wa.me/+905375651548?text=Ürün: {{ $product->name }} | Kategori: {{ $product->name }}" target="_blank">
                                            <span class="product-price__item product-price__item--new">
                                                <i class="fab fa-whatsapp"></i>
                                            </span>
                                        </a>
                                        <a href="tel:+905375651548" title="Arash Sheyda">
                                            <span class="product-price__item product-price__item--new">
                                                <i class="fontello-phone"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tab-container">
                                        <nav class="tab-nav">
                                            <a href="#" class="active">Özet</a>
                                        </nav>
                                        <div class="tab-content">
                                            <div class="tab-content__item is-visible">
                                                <p>{!! $product->description !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   <div class="container">
                        <div class="col-12" style="padding-top: 50px">
                            {!! $product->text !!}
                        </div>
                   </div>

                    <div class="spacer py-5 py-md-9"></div>
                    <h2>Benzer <span>Ürünler</span></h2>
                    <div class="spacer py-2"></div>
                    <div class="goods goods--style-1">
                        <div class="__inner">
                            <div class="row">
                                @if(count($f_products) > 0)
                                    @foreach ($f_products as $product)
                                        @include('components.product-card')
                                    @endforeach
                                @else
                                <div class="p-5">
                                    <h1>Benzer Ürün Bulunmadı</h1>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 my-6 d-md-none"></div>
            </div>
        </div>
    </section>

    {{-- <x-banner></x-banner> --}}
</main>
@endsection