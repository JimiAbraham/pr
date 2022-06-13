@include('layout.header')
  <body class="contact-page">
  
  
  <div class="canvas ff">
    <div class="main-bar navigation-01">
      <div class="container py-4 d-block">
        <div class="row">
         @include('layout.nav')

          <div class="col text-center">
            <h3 class="m-0">Contact Us</h3>
          </div>

          <div class="col text-right">
            <a id="toggle-form"><img class="img-18" src="images/search-top-right-01.svg" alt="image"></a>
            <div class="form" id="form-expand">
              <form>
                <input type="text" placeholder="search here...">
               <button type="submit"><img class="img-18" src="images/search-top-right-01.svg" alt="image"></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="contact-head">
      <div class="logo text-center mt-5 mb-2">
        <img src="images/logo.svg" class="mb-4" alt="image">
		<h2 class="mb-5">We’d love to hear from you!<br>

Connect with us</h2>
      </div>


      

      <form>
	  	<div class="contact-form">
        <div class="form-group">
          <input type="text" class="form-control mb-3 form-control-lg adv border-top-0 border-left-0 border-right-0 border-bottom rounded-0 pt-3 px-0" id="formGroupExampleInput">
          <label for="formGroupExampleInput">Your Name</label>
        </div>
        <div class="form-group">
          <input type="email" class="form-control mb-3 form-control-lg adv border-top-0 border-left-0 border-right-0 border-bottom rounded-0 pt-3 px-0" id="formGroupExampleInput2">
          <label for="formGroupExampleInput2">Email Address</label>
        </div>
        <div class="form-group">
          <input type="Number" class="form-control mb-3 adv form-control-lg border-top-0 border-left-0 border-right-0 border-bottom rounded-0 pt-3 px-0" id="formGroupExampleInput3">
          <label for="formGroupExampleInput2">Phone</label>
        </div>
		<div class="form-group">
          <input type="text" class="form-control mb-3 form-control-lg adv border-top-0 border-left-0 border-right-0 border-bottom rounded-0 pt-3 px-0" id="formGroupExampleInput4">
          <label for="formGroupExampleInput">Organization</label>
        </div>
      
		
		<div class="form-group mb-0">
          <input type="text" class="form-control mb-2 form-control-lg adv border-top-0 border-left-0 border-right-0 border-bottom rounded-0 pt-3 px-0" id="formGroupExampleInput5">
          <label for="formGroupExampleInput">Message</label>
        </div>
		<div class="form-group">
          <textarea class="form-control mb-2 form-control-lg adv border-top-0 border-left-0 border-right-0 border-bottom rounded-0 pt-2 px-0"></textarea>
        </div>
          <input type="submit" value="Send" class="btn btn-border py-3 btn-block mt-5 mb-3" />

         </div>
      </form>
	  
	  
	  <div class="contact-address-sec text-center">
	  	<div class="container">
			<div class="row">
				<div class="col-sm-12">
				<div class="inner-cont-add-sec mt-5  pb-4">
					<h4>Phone Number</h4>
					<p class="mb-0"><a href="tel:2227306672">080 - kingdom</a></p>
				</div>
				<div class="inner-cont-add-sec mt-4 pb-4">
					<h4>Email</h4>
					<p class="mb-0"><a href="mailto:info@mobile&apps.com">email@mail.com</a></p>
				</div>
				<div class="inner-cont-add-sec mt-4 pb-4">
					<h4>Address</h4>
					<p class="mb-0">Somehere<br>

Nigeria</p>
				</div>
				
				<div class="inner-cont-add-sec mt-4 mb-5">
					<h4 class="mb-0">Social Connect</h4>
					<ul class="social-media">
						<li><a href="#"><img src="images/fb.png" alt="image" title=""></a></li>
						<li><a href="#"><img src="images/tw.png" alt="image" title=""></a></li>
						{{-- <li><a href="#"><img src="images/in.png" alt="image" title=""></a></li> --}}
					</ul>
				</div>
				</div>
			</div>
		</div>
	  	
	  </div>
	  
	  <!-- contact-address-sec end here -->
    </div>

  </div>
@include('layout.footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/swipe.js" ></script>
    <script src="js/scripts.js" ></script>

  </body>

</html>