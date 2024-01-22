@extends('layouts.app')
@section('title', $trick->name)
@section('content')
    <x-breadcrumb color="fff" title="{{ $trick->name }}" image="{{ asset('img/intro_img/7.jpg') }}" description="" />
    <main role="main">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="content-container">
                            <div class="posts">
                                <div class="__content">
                                    <p>{!! $trick->text !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection