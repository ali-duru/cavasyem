@extends('layouts.app')
@section('title', $privacy->name)
@section('content')
    <x-breadcrumb color="fff" title="{{ $privacy->name }}" image="" description="" />
    <main role="main">
        <div class="container">
            <div class="card p-5">
                {!! $privacy->body !!}
            </div>
        </div>
    </main>
@endsection
