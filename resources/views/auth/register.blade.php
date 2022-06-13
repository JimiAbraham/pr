<!doctype html>
<html lang="en">
  
@extends('layout.header')
  <body>
  
  
  <div class="canvas">
    
    <div class="login" style="background-image: url(images/form-bg.jpg)">
      <div class="logo text-center mb-4">
        <img src="images/logo.svg" alt="image">
      </div>


      

      <form action="{{ route('register')}}" method="POST">
        @csrf

        <div class="form-group">
          @error('name')
          <p style="color:red">{{ $message}}</p>
        @enderror
          <input type="text" class="form-control mb-3 adv form-control-lg border-top-0 border-left-0 border-right-0 border-bottom rounded-0 pt-3 px-0" id="formGroupExampleInput" name="name" value="{{ old('name')}}">
          <label for="formGroupExampleInput" >Full Name</label>

         
        </div>

        
        <div class="form-group">
          @error('email')
          <p style="color:red">{{ $message}}</p>
        @enderror
          <input type="email" class="form-control mb-3 adv form-control-lg border-top-0 border-left-0 border-right-0 border-bottom rounded-0 pt-3 px-0" id="formGroupExampleInput2" name="email" value="{{ old('email')}}">
          <label for="formGroupExampleInput2" >Email</label>
         
        </div>
        <div class="form-group">
          @error('password')
          <p style="color:red">{{ $message}}</p>
        @enderror
          <input type="password" class="form-control mb-3 adv form-control-lg border-top-0 border-left-0 border-right-0 border-bottom rounded-0 pt-3 px-0" id="formGroupExampleInput3" name="password">
          <label for="formGroupExampleInput2" >Password</label>
       
        </div>
        <div class="form-group">
          <input type="password" class="form-control mb-3 adv form-control-lg border-top-0 border-left-0 border-right-0 border-bottom rounded-0 pt-3 px-0" id="formGroupExampleInput4" name="password_confirmation" >
          <label for="formGroupExampleInput2" >Confirm Password</label>
        </div>
          <input type="submit" value="Sign Up" class="btn btn-border py-3 btn-block my-5" />

          <p class="mt-5 mb-0 text-center">Already have an account? <a href="login.html">Sign In</a></p>
      </form>
    </div>

  </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   @include('layout.script')

  </body>

</html>