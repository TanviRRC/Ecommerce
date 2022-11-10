@extends('master')
@section('content')
    <div class="custom-product">
        <div class="col-sm-10">
            <table class="table">
                <thead>
                <tr>
                    <td>Amount</td>
                    <td>tk {{$total}}</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Tax</td>
                    <td>tk 0</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>tk 1000</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>tk {{$total+1000}}</td>
                </tr>
                </tbody>
            </table>
            <div>
                <form action="/orderplace" method="post">
                    @csrf
                    <div class="mb-3 form-group">
                        <textarea name="address" type="" class="form-control" placeholder="Enter your address" aria-describedby="address"></textarea>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="pwd" class="form-label">Payment Method</label>
                        <input type="radio" value="cash" name="payment"> <span>Online payment</span>
                        <input type="radio" value="cash" name="payment"> <span>EMI</span>
                        <input type="radio" value="cash" name="payment"> <span>Payment on delivery</span>
                    </div>
                    <button type="submit" class="btn btn-primary">Order Now</button>
                </form>
            </div>
        </div>
    </div>
@endsection
