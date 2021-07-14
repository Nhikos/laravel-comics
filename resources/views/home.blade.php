@extends('template.template')

@section('main')
    <div class="container">
        @foreach ($fumetti as $fumetto)
            <div class="card">
                <img src="{{ $fumetto["thumb"] }} alt="{{ $fumetto["title"] }}">
                <span class="film_name">{{ $fumetto["title"] }}</span> 
            </div>
        @endforeach
    </div>
@endsection