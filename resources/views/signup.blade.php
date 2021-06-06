@extends('layout')

@section("content")

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
        <form action="signup" class="form-signin" method="POST">
          @csrf
      <div class="text-center mb-4">
        <!-- <img class="mb-4" src="" alt="" width="72" height="72"> -->
      </div>
      <main>
      <h1>Sign up</h1>
      <div class="form-label-group">
      <!-- name -->
      <input type="text" name="name" id="inputName" class="form-control" placeholder="Name" required autofocus>
      <br>
      <!-- <label for="inputEmail">Email address</label> -->
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        
      </div>
      <br>

      <div class="form-label-group">
      <!-- <label for="inputPassword">Password</label> -->
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
      </div>
      <br>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-primary btn-block" type="submit">Sign up</button>
  
    </form>
        </div>
        </main>
    </div>
</div>
@endsection