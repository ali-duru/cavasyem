@extends('layouts.app')
@section('title', 'Beslenme Önerileri')
@section('content')
<x-breadcrumb color="fff" title="{{ $food->name }}" image="{{ asset(Storage::URL($food->thumbnail)) }}" description="" />

    <main role="main">
        
        @include('partials.lazy-script')
    
        <section class="section">
            
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-single">
                            <div class="row">
								{!! $food->text !!}
                           {{-- <div class="col-12 col-lg-12">
                                    <div class="__product-img">
                                        <img width="330" src="{{ asset(Storage::URL($food->thumbnail)) }}" alt="demo" />
    
                                        <span class="product-label product-label--new">Çavaş Yem</span>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection