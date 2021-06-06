@extends('layout')

@section("content")

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detailimg" src="{{$product['image']}}" alt="">

        </div>
        <div class="col-sm-6">
            <a href="/products">Back</a>
            <h2>{{$product['name']}}</h2>
            <h3>{{$product['price']}}</h3>
            <br>
            <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{$product['id']}}">
            <button class="btn btn-primary">Add to Cart</button>
            </form>
            <br><br>
            <button class="btn btn-danger">Order</button>
            <br><br>
        </div>
        
    </div> 

</div> 
      
  

@endsection