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
@endsection