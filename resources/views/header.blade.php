<?php
use App\Http\Controllers\ProductController;
$total = "";
if (Session::has('user'))
{
  $total= ProductController::cartItem();
}


?>
<nav class="navbar navbar-inverse bg-dark custom-nav">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/home" style="font-weight:500;">FOODMART-0</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="/home" class="active">Home</a></li>
      <li><a href="/about">About us</a></li>
      <!-- <li><a href="#">Contact us</a></li> -->
      <li><a href="/products">Products</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="/search">
      <div class="form-group">
        <input type="text" name="search-query" class="form-control searchbox" placeholder="Search meals you like">
      </div>
      <button type="submit" class="btn btn-default">Search</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
    <li><a href="/cartList"><span class="glyphicon glyphicon-shopping-cart"></span> Cart {{$total}}</a></li>
    @if(Session::has('user'))
    <li><a href="#"><span class="glyphicon glyphicon-user"></span> {{Session::get('user')['name']}}</a></li>
      <li><a href="/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      @else
      <li><a href="/signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      @endif
    </ul>
  </div>
</nav>
  

