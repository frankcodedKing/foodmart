@extends('layout')

@section("content")

<div class="container custom-product">
    <div class="row">
        <!-- <div class="col-sm-4 col-sm-offset-4"> -->

       
        <main role="main" class="inner cover mycarusel">
          <!-- car0usel -->
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
            <div class="carousel-caption">
              <div class="intro">
                <h1 class="cover-heading">FOODMART-0</h1>
                <p class="lead">Order food from a wide range of popular dishes in Enugu while benefitting from promos and discounts and have your order delivered in 40 minutes tops.</p>
                <p class="lead">
                  <a href="#" class="btn btn-lg btn-danger">Learn more</a>
                </p>
              </div>
                </div>
            @foreach ($products as $item)
            <div class="item {{$item['id']==1?'active':''}}">
            
                <img src="{{$item['image']}}" alt="rice" class="slider-img">
               
              </div>

             @endforeach

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
        </main>

        <div class="menu-wrapper">
          <h3>Today's Menu</h3>
              @foreach($products as $item)
             <div class="menulist">
               <a href="detail/{{$item['id']}}">
               <img class="mealpic" src="{{$item['image']}}" alt="mealname">
                <div class="fooditem">
                    <h3>{{$item['name']}}</h3>
                </div>
              </a>
             </div>
             @endforeach
              
        </div>
     
     
      </div> 

      </div> 
      
  

@endsection