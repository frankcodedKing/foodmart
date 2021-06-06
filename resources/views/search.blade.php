@extends('layout')

@section("content")

<div class="container custom-product">
    <div class="row">
        <div class="col-sm-4">
            <a href="#">Filter</a>
        </div>

        <div class="col-sm-4">
        <div class="menu-wrapper">
          <h3>Search Result</h3>
              @foreach($products as $item)
             <div class="searched-item">
               <a href="detail/{{$item['id']}}">
               <img class="mealpic" src="{{$item['image']}}" alt="mealname">
                <div class="fooditem">
                    <h2>{{$item['name']}}</h2>
                </div>
              </a>
             </div>
             @endforeach  
        </div>
        </div>
        
     
     
      </div> 

      </div> 
      
  

@endsection