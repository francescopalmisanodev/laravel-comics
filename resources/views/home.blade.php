@extends('template.main-template')
@section('main-content')
    <div class="bg">
        <div class="container">
            <div class="cards">
                @foreach ($comics as $index => $comic)
                    <div class="card">
                        <a href="{{ route('comic-detail', ['id' => $index]) }}">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            <h3>{{ $comic['title'] }}</h3>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="button">
                LOAD MORE
            </div>
        </div>
        <div class="blue h-30"></div>
    </div>
@endsection
