@extends('template.main-template')
@section('main-content')
    <div class="bg">
        <div class="container">
            <div class="cards">
                @foreach ($comics as $comic)
                    <div class="card">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        <h3>{{ $comic['title'] }}</h3>
                    </div>
                @endforeach
            </div>
            <div class="button">
                LOAD MORE
            </div>
        </div>
    </div>
@endsection
