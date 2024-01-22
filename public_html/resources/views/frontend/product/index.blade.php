@extends('layouts.app')
@section('title', 'Ürünler')
@section('content')
<x-breadcrumb color="fff" title="Ürünler" image="" description="" />
<main role="main">
    @include('partials.lazy-script')
    <section class="section">
        {{-- <x-decor/> --}}
        <div class="container">
            <div class="goods-catalog">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-3">
                        <aside class="sidebar goods-filter">
                            <span class="goods-filter-btn-close js-toggle-filter"><i class="fontello-cancel"></i></span>
                            <div class="goods-filter__inner">
                                <x-search></x-search>
                                <div class="widget widget--categories">
                                    <small>toplam ürün sayısı: ({{ $product_count }})</small>
                                    <h4 class="h6 widget-title">Kategoriler</h4>
                                    @include('components.product-sidebar')
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-12 col-md-8 col-lg-9">
                        <div class="spacer py-6 d-md-none"></div>
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <span class="goods-filter-btn-open js-toggle-filter"><i class="fontello-filter"></i>Filter</span>
                            </div>
                        </div>
                        <div class="spacer py-3"></div>
                        <div class="goods goods--style-1">
                            <div class="__inner">
                                <div class="row">
                                    @if(count($products) > 0)
                                        @foreach ($products as $product)
                                            @include('components.product-card')
                                        @endforeach
                                    @else
                                    <div class="p-5">
                                        <h1>Ürün Bulunmadı</h1>
                                    </div>
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                        <div class="spacer py-5"></div>
                        {{ $products->links('vendor.pagination.default', ['category' => $search_category]) }}
                    </div>
                </div>
            </div>
        </div>
    </section>
   {{-- <x-banner></x-banner> --}}
</main>
@endsection