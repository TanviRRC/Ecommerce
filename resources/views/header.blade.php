<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user')){
    $total = ProductController::cartItem();
}

?>
<nav class="navbar navbar-expand-lg bg-black">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color: white">Ecommerce</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/" style="color: white">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/myorders" style="color: white">Order</a>
                </li>
                <li class="nav-item">
                    <form action="/search" class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                        <input class="form-control search-box" name="query" type="search" placeholder="Search" aria-label="Search">
                        </div>
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="cartList">cart({{$total}})</a>
                    @if(Session::has('user'))
                    <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{Session::get('user')['name']}}
                     </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                      </ul>
                    </li>
                    @else
                    <li><a href="/login"  style="color: white">Login</a></li>
                    <li><a href="/register" style="color: white">Register</a></li>
                    @endif
                </li>
            </ul>

        </div>
    </div>
</nav>
