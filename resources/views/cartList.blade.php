@extends('layout')

@section("content")

<div class="container custom-product">
    <div class="row">
       

        <div class="col-sm-10">
        <div class="menu-wrapper">
          <h3>Your Cart</h3>
          
              @foreach($products as $item)
             <div class="row searched-item cartlistdivider">
                <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
               <img class="mealpic" src="{{$item->image}}" alt="mealname">
                
              </a>
                </div>

                <div class="col-sm-4">
                <a href="detail/{{$item->id}}">
                <div class="fooditem">
                    <h2>{{$item->name}}</h2>
                </div>
              </a>
                </div>

                <div class="col-sm-3">
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a>
                </div>
              
             </div>
             @endforeach
             </div>

               <div class="row">
               <div class="col-sm-6 pull-right">
                <a href="/order" class="btn btn-success">Order now</a>
                </div>
                <div class="col-sm-6">
                <a href="/products" class="btn btn-primary pull-right">Back</a>
                </div>
            
               </div>
              
        </div>
        </div>
        
     
     
      </div> 

      </div> 
      
  

@endsection