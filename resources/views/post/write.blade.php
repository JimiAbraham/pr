<!doctype html>
<html lang="en">
  
@extends('layout.header')
  <body class="contact-page write-blog-page">
  
  
  <div class="canvas ff">

  @include('layout.nav')

    <div class="contact-head">
      

      <form action="{{ route('write') }}"  method="POST" enctype="multipart/form-data">

        @csrf
	  	
      <center><h1>Share Your Testimony</h1></center>
    
      @if (session('Success')) 
    <center>  <h3 style="color: red;"> {{ session('Success') }}</h3> </center>
      @endif


		<div class="form-group">
     
		 <h6 class="mb-0 pb-1 mt-4 pt-1">Title</h6>
          <input type="text" class="form-control mb-3 form-control-lg adv border-top-0 border-left-0 border-right-0 border-bottom rounded-0 pt-3 px-0" id="formGroupExampleInput" placeholder="Suggest A Suitable Title" name="title"  value=" {{ old('title') }}" >
         <!-- <label for="formGroupExampleInput">Write A Title</label>-->
         @error('title') <p style="color:red;">{{ $message }} </p>@enderror
        </div>

        <div class="form-group">
          <h6 class="mb-0 pb-1 mt-4">Select  Testimony Category</h6>
          <select  name = "category" class="form-control mb-2 form-control-md adv border-top-0 border-left-0 border-right-0 border-bottom rounded-0 pt-3 px-0">
            <option value="">Select Category</option>
            <option value="Finance">Finance</option>
            <option value="Miracles">Miracles</option>
            <option value="Healing">Healing</option>
            <option value="Deliverance">Deliverance</option>
      
      
          </select>
          </div>
      
		
		<div class="form-group mb-0">
		<h6 class="mb-0 pb-1 mt-4">Share to the World God's Goodness</h6>
          <!--<label for="formGroupExampleInput">Start Writing Your Blog</label>-->
          <textarea class="ckeditor form-control mb-2 form-control-lg adv border-top-0 border-left-0 border-right-0 border-bottom rounded-0 pt-3 px-0" name="body"></textarea>
          @error('body') <p style="color:red;">{{ $message }} </p>@enderror
        </div>

       <br>
              <div class="form-group mb-0">
                <div class="input-file-button">
                  <input type="file" name="image">
                  <div class="btn-content"><img src="images/upload-pic01.png" alt="image" class="mr-3"> <span>Upload picture of your testimony (If Available)</span></div>
                  @error('image') <p style="color:red;">{{ $message }} </p>@enderror
                  </div>
              </div>

		       
<br>
		<input type="checkbox" name="anon"> <span style="color: red;"> Share testimony as anonymous</span> 

		<input type="submit" value="Publish Now" class="btn btn-border py-3 btn-block mb-5 mt-4 publish-now" />
         
      </form>
	  
	  
	  
	  
	 
    </div>

  </div>
  
 @extends('layout.footer')



    @include('layout.script')

    
  </body>

  <script src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>

</html>