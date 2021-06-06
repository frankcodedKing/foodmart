@extends('layout')

@section("content")

<div class="container custom-product">
    <div class="row"><br><br>
    <h2 class="text-center mb-4">Check Out</h2> 
    <table class="table table-dark">
  
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>Amount</td>
      <td>N {{$total}}</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Delivery Fee</td>
      <td>N 1500</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Total Amount</td>
      <td>N {{$total + 1500}} </td>
    </tr>
    
  </tbody>
</table>

<div>
<form action="/checkout" class="form-signin" method="POST">
          @csrf
      <div class="text-center mb-4">
        <!-- <img class="mb-4" src="" alt="" width="72" height="72"> -->
      </div>
      <main>
      <div class="form-label-group">
      <!-- name -->
      <br>
      <!-- <label for="inputEmail">Email address</label> -->
        <input type="address" name="address" id="inputEmail" class="form-control" placeholder="Enter address" required autofocus>
        
      </div>
      <br>

      <div class="form-label-group">
      <!-- <label for="inputPassword">Password</label> -->
      <input type="text" name="phone"  class="form-control" placeholder="Enter phone" required autofocus>
      </div>
      <br>
      <div class="form-label-group checkbox mb-3">
          <label for="payment">Select Payment Method</label><br><br>
          <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span><br><br>
          <input type="radio" value="cash" name="payment"> <span>Pay online</span><br><br>
        
      </div>
      <button class="btn btn-warning btn-block" type="submit">Check out</button>
      <!-- <a href="/checkout"><button class="btn btn-primary" type="submit">Checkout</button></a> -->
  
    </form>
    <!-- <a href="/checkout"><button class="btn btn-primary" type="submit">Checkout</button></a> -->

</div>
       

       
      </div> 

</div> 
      
  

@endsection