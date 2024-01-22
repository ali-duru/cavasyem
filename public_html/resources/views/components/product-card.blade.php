<div class="col-12 col-sm-6 col-lg-4">
    <div class="card">
        <figure class="__image">
            <a href="{{ route('product.show', [$product->slug]) }}">
                <img class="lazy" width="100%" src="{{ asset('img/blank.gif') }}" data-src="{{ asset(Storage::URL($product->image)) }}" alt="{{ $product->name }}, çavaş yem" />
            </a>
        </figure>
        {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg> --}}
        <div class="card-body">
            <a href="{{ route('product.show', [$product->slug]) }}">
                <h5 class="card-title">{{ $product->name }}</h5>
            </a>
            <p class="card-text">{{ $product->description }}</p>
            <a class="custom-btn custom-btn--medium custom-btn--style-1" href="{{ route('product.show', [$product->slug]) }}">İncelle</a>
        </div>
      </div>
</div>