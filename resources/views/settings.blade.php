@include('layout.header')
  <body class="contact-page">
  
  
  <div class="canvas ff">
    @include('layout.nav')
    <div class="contact-head">
      <div class="logo text-center mt-5 mb-2">
        <img src="{{asset('images/logo.svg')}}" class="mb-4" alt="image">
		<h2 class="mb-5">Thank you for being part of the family!<br>

We Would love to know you more</h2>
      </div>


      

      <form action="{{ route('dashboard.settings')}}" method="POST">
		  @csrf
	  	<div class="contact-form">
        <div class="form-group">
          <input type="text" class="form-control mb-3 form-control-lg adv border-top-0 border-left-0 border-right-0 border-bottom rounded-0 pt-3 px-0" id="formGroupExampleInput"  name="uname" value="{{ old('uname')}}">
          <label for="formGroupExampleInput">Choose a username (You can also use your name)</label>
        </div>
        <div class="form-group">
          <input type="text" class="form-control mb-3 form-control-lg adv border-top-0 border-left-0 border-right-0 border-bottom rounded-0 pt-3 px-0" id="formGroupExampleInput2" name="church" value="{{old('church')}}">
          <label for="formGroupExampleInput2">Tell us your church or spiritual family</label>
        </div>
        <div class="form-group">
          <input type="text" class="form-control mb-3 adv form-control-lg border-top-0 border-left-0 border-right-0 border-bottom rounded-0 pt-3 px-0" id="formGroupExampleInput3" name="location" value="{{old('location')}}">
          <label for="formGroupExampleInput2">Tell Us where you are [location]</label>
        </div>
		
      
		
		  <input type="submit" value="Submit" class="btn btn-border py-3 btn-block mt-5 mb-3" />

         </div>
      </form>
	  
	  

	  
	  <!-- contact-address-sec end here -->
    </div>

  </div>
@include('layout.footer')


  @include('layout.script')
  </body>

</html>