@include('layout.header')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<style> 
    body{
      background-color: #1E1E1E;
    }
    a{
      text-decoration: none;
      color: #fff;
    }
</style>

  <body class="blog-page blog-detail-03">
  
  
  <div class="canvas ff">
    <div class="main-bar clearheader">
      <div class="container py-4 d-block">
        <div class="row">
          <div class="col">
           <a href="{{ route('home')}}"><img src="{{ asset('images/arrow-left.svg')}}" alt="image"></a>
          </div>
          
          <div class="col text-center">
           <h3 class="m-0">Testimony Details</h3>
		   
          </div>

          <div class="col text-right">
            <a id="toggle-form"><img class="img-18" src="{{asset('images/search-top-right-01.svg')}}" alt="image"></a>
            <div class="form" id="form-expand">
              <form>
                <input type="text">
                <button type="submit"><img class="img-18" src="images/search-top-right-01.svg" alt="image"></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  
    
    
    <div class="detail-banner-03">
     
	  <div class="container">
	  <div class="row">
	  <div class="col-md-12">
	   <div class="yellow-strip-sec">
	   		<span class="yellow-bnr-heading">{{ $post->category}}</span>
	   </div>
	  	<h1 class="large-heading mb-0">{{ $post->title}}</h1>
</div>
</div>

	  </div>
      <div class="container">

        <div class="row blog-bnr-btm">
          <div class="col">
		  	<div class="blog-profile">
				<img src="{{asset('images/clayton-bowen.png')}}" alt="Clayton Bowen">
			</div>
			<div class="blog-review-content">
            <p class="mb-0 title grey-txt-color">{{ $post->user->name}}</p>
            <p class=" mb-0"><span class="month grey-txt-color pr-2">Shared on {{ $post->created_at}},  {{ $post->created_at->diffForHumans()}}</span>      <span class="time-text">5 min read</span></p>
			

			</div>
          </div>

          <div class="col">
            <div class="text-right">
              <a class="mr-3 favme" href="javascript:void(0);"><img src="{{asset('images/heart.svg')}}" alt="image"> <img src="{{asset('images/heart-fill.svg')}}" alt="image"></a>
              <a class="share-btn share-btn-lg share-btn-more" href="" title="More share options">
		<span class="share-btn-icon"></span>
		<span class="share-btn-text-sr"><img src="{{asset('images/export.svg')}}" alt="image"></span>
	</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="content">
      <div class="container">
		<div class="blog-content-sec">
		<h2 class="mb-4">Testimony In Full</h2>
		<ul class="px-3">
		  
		</ul>
        <p>{!! $post->body !!} </p>
		</div>
        

        

        

        
      </div>
	  <div class="blog-03-img-sec ">
	  		<div class="container animate slideInUp">
				<img src="{{asset('images/tt.jpg')}}" alt="image">
			</div>
	  </div>
	  

      <div class="large-heading-box txt-center animate slideInUp"> 
	  	<div class="container">
			<span class="impact-heading"><span class="italic-txt">The Kingdom Of God Advances </span> <span class="semibold-txt">Everyday,
All day,</span> <span class="italic-txt">and</span> 
<span class="semibold-txt">everywhere</span>
</span>
			
	  	</div>
	  </div>





    {{-- prayer pop up --}}

    <div class="blog-03-btm pt-4 mt-2 text-center">
      <div class="container">
      <div class="add-section animate slideInUp">
        <a data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{asset('images/add-btn-icon.png')}}" alt="image" class="add-pls-img"></a>
       </div>
      
      
      
      <div class="comment-text-box animate slideInUp">
      <a data-bs-toggle="modal" data-bs-target="#exampleModal"  id="write-comment" class="write-comment-btn"><h2 class="yellow-bnr-heading">Let's Pray</h2></a>
      <p>Don't just read, let's connect with the testimony with supplications in the spirit</p>

          <!-- Button trigger modal -->

      
      </div>
      
      </div>
      </div>


    {{-- prayer pop up --}}
      
<div class="adv py-3 my-1 related-reads animate slideInUp">
        <div class="container">
            <h3 class="mt-4">Related Testimonies</h3>
			<p>The God that does for one can do for all!</p>
			<div class="blog-list pt-3 row">

        @foreach ( $similar as $sim )
          
       

          <div class="blog-block mb-5 col-sm-6">
            <a href="{{ route('post.details', $post) }}" class="overlay"></a>
            <div class="media">
              <div class="media-body">
			  	<span class="yellow-bnr-heading">{{ $sim->title}}</span>
                <h4 class="mb-3">{!! Str::limit( $post->body, 60 )!!}</h4>

                <p class="mb-0"><a href="{{route('post.user', $post->user)}}"> Shared by: {{ $post->user->username}}</a> <br>  {{ $post->user->church}}  Member <br><span class="mr-4">{{ $post->created_at->diffForHumans()}}</span><span>5 min read</span></p>
              </div>
              
            
              
            </div>
          </div>
		  
		
          @endforeach

          
		  
        </div>
        </div>
      </div>   
	
    
	  
	  
    </div>


    @include('layout.footer')
  </div>



    @include('layout.script')
       
 <?php 

$financePrayer = ['Finance Prayers and scriptures', 'Finance Confessions', 'Speak In tounges with the mindset of fiance'];

$healingPrayer = ['Prayer of healing', 'The healing Power of God comes upon me', 'Halleluya, I am healed and made whole'];

$MiraclesPrayer = ['Miracles will never cease in my life', 'I am certain that the Lord will sort me out', 'Here we go, Faithful God. He will never let me sick!'];


?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">let's Pray On It</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <?php 
          
          if ($post->category == 'Finance')
          {
            shuffle( $financePrayer); 

            echo $financePrayer[0];

          }elseif ($post->category == 'Miracles') {
            shuffle( $MiraclesPrayer); 

            echo $MiraclesPrayer[0];
          }elseif ($post->category == 'Healing') {
            shuffle( $healingPrayer); 

            echo $healingPrayer[0];
          }
        
        ?>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" style="background-color: #1E1E1E; color:#fff;" data-bs-dismiss="modal">I have prayed</button>
      </div>
    </div>
  </div>
</div>
  </body>

</html>
