@extends('layouts.app')
@section('title', 'İnsan Kaynakları')
@section('content')
<x-breadcrumb color="fff" title="İnsan Kaynakları" image="img/intro_img/7.jpg" description=""/>
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
                                        <input class="textfield" name="tc" type="text" placeholder="Tc Kimlik No" value="{{ old('tc') }}" />
                                    </div>
                                    @error('tc')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror                                                                
                                </div>
                                <div class="row">
                                    <div class="input-wrp col-lg-6 col-md-6 col-12">
                                        <input class="textfield" name="birth_place" type="text" placeholder="Doğum Yeri" value="{{ old('birth_place') }}" />
                                    </div>
                                    @error('birth_place')
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
                                        <input class="textfield" name="email" type="text" placeholder="E-posta" value="{{ old('email') }}" />
                                    </div>
                                    @error('email')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                    <div class="input-wrp col-lg-6 col-md-6 col-12">
                                        <input class="textfield" name="phone" type="text" placeholder="Telefon" value="{{ old('phone') }}" />
                                    </div>
                                    @error('phone')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>                               
                                <div class="input-wrp">
                                    <input class="textfield" name="address" type="text" placeholder="Adres" value="{{ old('address') }}" />
                                </div>
                                @error('email')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                                <div class="row mt-5">
                                    <select name="sex" class="input-wrp col-lg-4 col-md-4 col-12">
                                        <option selected>Cinsiyet:</option>
                                        <option value="bay">Bay</option>
                                        <option value="bayan">Bayan</option>
                                    </select>
                                    <select name="status" class="input-wrp col-lg-4 col-md-4 col-12">
                                        <option selected>Medeni Durumunuz:</option>
                                        <option value="0">Bekar</option>
                                        <option value="1">Evli</option>
                                    </select>
                                    <select name="driver" class="input-wrp col-lg-4 col-md-4 col-12">
                                        <option selected>Ehliyet</option>
                                        <option value="1">Var</option>
                                        <option value="0">Yok</option>
                                    </select>
                                </div>
                                <div class="input-wrp">
                                    <input class="textfield" name="health_problem" type="text" placeholder="Sağlık Problemleri (yoksa boş bırakın)" />
                                </div>
                                @error('health_problem')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                                <div class="input-wrp">
                                    <input class="textfield" name="travel_problem" type="text" placeholder="Gezme Problemleri (yoksa boş bırakın)" />
                                </div>
                                @error('travel_problem')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                                <div class="input-wrp">
                                    <input class="textfield" name="languages" type="text" placeholder="Bildiğiniz Diller" />
                                </div>
                                @error('languages')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                                <div class="input-wrp">
                                    <input class="textfield" name="worked" type="text" placeholder="Çalıştığınız Yerler" />
                                </div>
                                @error('worked')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                                <div class="input-wrp">
                                    <input class="textfield" name="references" type="text" placeholder="Referanslar" />
                                </div>
                                @error('references')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
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