@extends('layout.base')

@section('page-title')
    Dc product
@endsection

@section('page-content')
    <section class="product">
        <div class="barra_blu">
            <div class="container">
                <div class="img_product">
                    <span>COMIC BOOK</span>
                    <img src="{{$product['thumb']}}" alt="{{$product['title']}}">
                    <div>VIEW GALLERY</div>
                </div>
            </div>
        </div>
    </section>
@endsection