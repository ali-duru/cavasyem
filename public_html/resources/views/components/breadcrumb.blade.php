<div id="hero" class="jarallax" data-speed="0.7"
    style="background: 
        linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.7)),
        url({{ empty($image) ? asset('img/intro_img/3.jpg') : $image }}); color: #{{ $color }};
        width: 100%;
        height="auto"
        
        "
    
>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7">
                <h1 class="__title"><span>Çavaş Yem</span> {{ $title }}</h1>
                <p>{{ $description }}</p>
            </div>
        </div>
    </div>
</div>

