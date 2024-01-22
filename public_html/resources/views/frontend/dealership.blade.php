@extends('layouts.app')
@section('title', 'Bayilik Formu')
@section('content')
<x-breadcrumb color="fff" title="Bayilik Formu" image="img/intro_img/7.jpg" description=""/>
<main role="main">
    <section class="section section--dark-bg  section--contacts">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12">
                    <div class="row justify-content-end">
                        <div class="col-md-12">
                            <form action="{{ route('human.resource.store') }}" method="POST" class="contact-form">
                                @csrf                                
                                <div class="row">
                                    <div class="input-wrp col-lg-6 col-md-6 col-12">
                                        <input class="textfield" name="name" type="text" placeholder="Ad Soyad" value="{{ old('name') }}" />
                                    </div>
                                    @error('name')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror                                    
                                    <div class="input-wrp col-lg-6 col-md-6 col-12">
                                        <input class="textfield" name="city" type="text" placeholder="Şehir" value="{{ old('city') }}" />
                                    </div>
                                    @error('city')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror                                                                
                                </div>
                                <div class="row">
                                    <div class="input-wrp col-lg-6 col-md-6 col-12">
                                        <input class="textfield" name="education" type="text" placeholder="Eğitim Bilgileri" value="{{ old('education') }}" />
                                    </div>
                                    @error('education')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                    <div class="input-wrp col-lg-6 col-md-6 col-12">
                                        <input class="textfield" name="birth_date" type="text" placeholder="Doğum Tarihi" value="{{ old('birth_date') }}" />
                                    </div>
                                    @error('birth_date')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror                                   
                                </div>
                                <div class="row">
                                    <div class="input-wrp col-lg-6 col-md-6 col-12">
                                        <input class="textfield" name="phone" type="tel" placeholder="Telefon" value="{{ old('phone') }}" />
                                    </div>
                                    @error('phone')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                    <div class="input-wrp col-lg-6 col-md-6 col-12">
                                        <input class="textfield" name="job" type="text" placeholder="Meslek" value="{{ old('job') }}" />
                                    </div>
                                    @error('job')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>                               
                                <div class="input-wrp">
                                    <textarea class="textfield" name="message" placeholder="Ek Mesajınız"></textarea>
                                </div>
                                @error('message')
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