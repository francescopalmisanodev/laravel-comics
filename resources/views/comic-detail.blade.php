@extends('template.main-template')
@section('main-content')
    <div class="jumbo">
        <div class="container">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
        </div>
    </div>
    <div class="blue">
    </div>
    <div class="container">
        <div class="row">
            <div class="info">
                <h2>{{ $comic['title'] }}</h2>
                <div class="green">
                    <div class="price">
                        U.S. Price: <span class="white-txt">{{ $comic['price'] }}</span>
                    </div>
                    <div class="available">
                        AVAILABLE
                        <div class="button white-txt">
                            Check availability
                        </div>
                    </div>
                </div>
                <p>
                    {{ $comic['description'] }}
                </p>
            </div>
            <div>
                <h4 class="txt-right">ADVERTISEMENT</h4>
                <img src="{{ asset('images/a.png') }}" alt="adv">
            </div>
        </div>
    </div>
@endsection
