@extends('layouts.app')
@push('extra-css')
<style>
	.gallery-item {
		filter: drop-shadow(2px 4px 6px #00000057);
		border-radius: 17%;
	}
</style>
@endpush
@section('title', 'Galeri')
@section('content')
<x-breadcrumb color="fff" title="Galeri" image="img/intro_img/7.jpg" description="" />
<main role="main">
	<div class="container">
		<div class="row p-4">
			
			@foreach($galleries as $gallery)
  			<div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    			<img src="{{ asset(Storage::URL($gallery->image)) }}" class="w-100 shadow-1-strong rounded mb-4 gallery-item" alt="{{ $gallery->name }}" />
  			</div>
			@endforeach
 
		</div>
	</div>
</main>
@endsection