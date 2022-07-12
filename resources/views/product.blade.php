@extends('layout.base')

@section('page-title')
    Dc product
@endsection

@section('page-content')
    <section class="hero">
    </section>
    <section class="product">
        <div class="barra_blu">
            <div class="container">
                <div class="img_product">
                    <span>COMIC BOOK</span>
                    <img src="{{$prodotto['thumb']}}" alt="{{$prodotto['title']}}">
                    <div>VIEW GALLERY</div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="content_product">
                <div class="content_product_left">
                    <h2>{{$prodotto['title']}}</h2>
                    <div class="price">
                         <span>U.S. Price: {{$prodotto['price']}}</span>
                         <div class="available">
                            <div>AVAILABLE</div>
                            <div>Check Availability</div>
                         </div>
                    </div>
                    <p>{{$prodotto['description']}}</p>
                </div>
                <div class="content_product_right">
                    <h4>ADVERTISEMENT</h4>
                    <img src="{{asset('img/adv.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="info_product">
            <div class="container">
                <div class="info_flex">
                    <div class="talents">
                        <h3>Talent</h3>
                        <div class="tablet">
                            <div>Art by:</div>
                            <div class="blue">
                                @foreach ($prodotto['artists'] as $artist)
                                    <span>{{$artist}},</span>
                                @endforeach
                            </div>
                        </div>
                        <div class="tablet">
                            <div>written by:</div>
                            <div class="blue">
                                @foreach ($prodotto['writers'] as $writer)
                                    <span>{{$writer}},</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="specs">
                        <h3>Specs</h3>
                        <div class="tablet">
                            <div>Series:</div>
                            <div class="blue">{{$prodotto['series']}}</div>
                        </div>
                        <div class="tablet">
                            <div>U.S. Price:</div>
                            <div>{{$prodotto['price']}}</div>
                        </div>
                        <div class="tablet">
                            <div>On Sale Date:</div>
                            <div>{{$prodotto['sale_date']}}</div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
@endsection