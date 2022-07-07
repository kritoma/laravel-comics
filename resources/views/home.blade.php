@extends('layout.base')

@section('page-title')
    DC Comics
@endsection

@section('page-content')
    <section class="hero">
    </section>
    <section class="current_series">
        <div class="container relative">
            <button class="btn_current">CURRENT SERIES</button>
            <ul class="cards">
                @foreach ($comics as $elm) 
                    <li class="card">
                        <img src="{{$elm['thumb']}}" alt="{{$elm['title']}}">
                        <h3>{{$elm['title']}}</h3>
                    </li>
                @endforeach 
                </ul>
            <div class="div_btn">
                <button class="btn_load">LOAD MORE</button>
            </div>
        </div>   
    </section>
    <section class="digital_comics">
        <div class="container">
            <ul>
                <li>
                    <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="digital comics">
                    <h5>DIGITAL COMICS</h5>
                </li>
                <li>
                    <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="merchandise">
                    <h5>DC MERCHANDISE</h5>
                </li>
                <li>
                    <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="subscription">
                    <h5>SUBSCRIPTION</h5>
                </li>
                <li>
                    <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="comic shop locator">
                    <h5>COMIC SHOP LOCATOR</h5>
                </li>
                <li>
                    <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="dc power visa">
                    <h5>DC POWER VISA</h5>
                </li>
            </ul>
        </div>
    </section>
@endsection