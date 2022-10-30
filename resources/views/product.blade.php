@extends('master')
@section('content')
    <div class="container custom-product">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($products as $item)
                    <div class="carousel-item {{$item['id']==1?'active':''}}">
                        <a href="detail/{{$item['id']}}">
                        <img src="{{$item['gallery']}}" class="slider-img">
                        <div class="carousel-caption">
                            <h3 style="color: black">{{$item['name']}}</h3>
                            <p style="color: black">{{$item['description']}}</p>
                        </div>
                        </a>
                    </div>

                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-secondary" aria-hidden="false"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-secondary" aria-hidden="false"></span>
                <span class="sr-only" >Next</span>
            </button>
            </div>
        <div class="trending-wrapper">
            <h3>Trending Products</h3>
            @foreach($products as $item)
                <div class="trending-item">
                    <a href="detail/{{$item['id']}}">
                    <img class="trending-image" src="{{$item['gallery']}}">
                    <div class="">
                        <h3 style="color: black">{{$item['name']}}</h3>
                    </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>
@endsection

