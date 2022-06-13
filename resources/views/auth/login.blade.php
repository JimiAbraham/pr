<!doctype html>
<html lang="en">
  
@extends('layout.header')
  <body>
  
  
  <div class="canvas">
    
    <div class="login" style="background-image: url(images/form-bg.jpg)">
      <div class="logo text-center mb-4 mm-b2">
        <img src="images/logo.svg" alt="image">
      </div>

      @if (session('status')) 
      <h3 style="color: red;"> {{ session('status') }}</h3>
      @endif
      
      <form action="{{ route('login')}}" method="POST">
        @csrf
        <div class="form-group">

          @error('name')
            <p style="color:red;"> {{ $message}}  </p>
          @enderror
          <input type="text" class="form-control pt-4 mb-3 adv form-control-lg border-top-0 border-left-0 border-right-0 border-bottom rounded-0 pt-3 px-0" id="formGroupExampleInput" name="email" value="{{ old('email')}}" > 
          <label for="formGroupExampleInput">Username</label>
        </div>
        <div class="form-group mb-0">
        
          <input type="password" class="form-control mb-3 adv form-control-lg border-top-0 border-left-0 border-right-0 border-bottom rounded-0 pt-4 px-0" id="formGroupExampleInput2" name="password">
          <label for="formGroupExampleInput2">Password</label>
        </div>
        <div class="mb-5 mm-b2 text-right"><a href="password.html" class="forgot">Forgot Password?</a></div>
          <input type="submit" value="Sign In" class="btn sign-btn btn-border py-3 btn-block mb-4" />

          <p class="text-center mt-2 mm-b2 mb-4">or Sign In With</p>

          <div class="btn-container">
              <a href="{{ route('google.login') }}" class="btn fb py-3"><img src="https://www.swarovski.com/_ui/responsive/theme-swarovski/images/icons/google-icon.svg" style="height: 30px; width: 30px;" alt="image"> Google</a>
              <a href="home.html" class="btn tw py-3"><img src="images/tw.svg" alt="image"> Twitter</a>
          </div>

          <p class="mt-5 mm-t2 mb-0 text-center">Don't have an account? <a href="signin.html">Sign Up</a></p>
      </form>
    </div>

    {{--  --}}

  </div>



 @include('layout.script')

  </body>

</html>