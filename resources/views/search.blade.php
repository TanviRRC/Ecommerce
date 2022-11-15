@extends('master')
@section('content')
    <div class="container custom-product">
        <div class="trending-wrapper">
            <h2>Result for products</h2>
            @foreach($products as $item)
                <div class="searched-item">
                    <a href="detail/{{$item['id']}}">
                        <img class="trending-image" src="{{$item['gallery']}}">
                        <div class="">
                            <h2 style="color: black">{{$item['name']}}</h2>
                            <h5 style="color: black">{{$item['description']}}</h5>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>
@endsection
