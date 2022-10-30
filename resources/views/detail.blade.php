@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img style="height: 200px" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <h2>{{$product['name']}}</h2>
            <h3>Price : {{$product['price']}}</h3>
            <h4>Detail : {{$product['description']}}</h4>
            <h4>Category : {{$product['category']}}</h4>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-primary">Add to Cart</button>
            </form>
            <br>
            <button class="btn btn-primary">Buy Now</button>
            <br><br>
            <button class="btn btn-danger"><a href="/" style="color: white">Go Back</a></button>
        </div>
    </div>
</div>
@endsection


