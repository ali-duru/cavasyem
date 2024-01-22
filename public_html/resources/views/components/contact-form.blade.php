<div class="container">
    <div class="row justify-content-end">
        <div class="{{ $size }}">
            <div class="row justify-content-end">
                <div class="col-md-11">
                    <div class="section-heading section-heading--white">
                        <h2 class="__title">İletişime <span>geçİn</span></h2>
                        <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                    </div>
                    <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
                        @csrf
                        <div class="input-wrp">
                            <input class="textfield" name="name" type="text" placeholder="Ad" value="{{ old('name') }}" />
                        </div>
                        @error('name')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                        <div class="input-wrp">
                            <input class="textfield" name="email" type="text" placeholder="E-posta" value="{{ old('email') }}" />
                        </div>
                        @error('email')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                        <div class="input-wrp">
                            <textarea class="textfield" name="message" placeholder="Mesajınız">{{ old('message') }}</textarea>
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