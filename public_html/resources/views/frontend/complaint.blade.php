@extends('layouts.app')
@section('title', 'Şikayet')
@section('content')
<x-breadcrumb color="fff" title="Şikayet" image="img/intro_img/7.jpg" description=""/>
<main role="main">
    <section class="section section--dark-bg  section--contacts">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12">
                    <div class="row justify-content-end">
                        <div class="col-md-12">
                            <form action="{{ route('complaint.store') }}" method="POST" class="contact-form">
                                @csrf                                
                                <div class="row">
                                    <div class="input-wrp col-lg-6 col-md-6 col-12">
                                        <input class="textfield" name="name" type="text" placeholder="Ad Soyad" value="{{ old('name') }}" />
                                    </div>
                                    @error('name')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror     
									<div class="input-wrp col-lg-6 col-md-6 col-12">
                                        <input class="textfield" name="phone" type="text" placeholder="Telefon" value="{{ old('phone') }}" />
                                    </div>
                                    @error('phone')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror    
									<div class="input-wrp col-lg-6 col-md-6 col-12">
                                        <input class="textfield" name="email" type="text" placeholder="E-posta" value="{{ old('email') }}" />
                                    </div>
                                    @error('email')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror     
                                    <div class="input-wrp col-lg-6 col-md-6 col-12">
                                        <input class="textfield" name="location" type="text" placeholder="Şehir" value="{{ old('location') }}" />
                                    </div>
                                    @error('location')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror                                                                
                                </div>
                                <div class="input-wrp">
                                    <textarea class="textfield" name="body" placeholder="Şikayet Nedeni"></textarea>
                                </div>
                                @error('body')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                                <button class="custom-btn custom-btn--medium custom-btn--style-3 wide" type="submit" role="button">Gönder</button>
                                <div class="form__note"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection