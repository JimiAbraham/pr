@include('layout.header')
  <body class="sm-top-bar">
  
  
  <div class="canvas ff">
    
    @include('layout.nav')


    {{-- <div class="banner mt-0">
      <div class="bg mb-2 mt-0 ha pt-5 pb-4" style="background-image:url(images/author.png)">
        <div class="container">
          <div class="author-detail text-center">
            <img src="{{ asset('images/author-img.png')}}" class="author-image" alt="author">
            <h2 class="mb-0">{{ $user->name}}</h2>
            {{-- <p class="gold">Member since {{ auth()->created_at}} </p> --}}

        
          </div>
        </div>
      </div>
    </div> --}}

    <div class="content">
      <div class="container">
	  	<div class="row">
			<div class="col-sm-12">
				<h2 class="mb-1 mt-4 pt-2">Recent Testimonies</h2>
			</div>
		</div>
        <div class="blog-list row">
@if( $posts->count())

@foreach( $posts as $post)
<div class="blog-block mb-4 pb-2 col-sm-4  animate slideInUp">
    <a href="{{ route('post.details', $post) }}" class="overlay"></a>
    <div class="media">
       
      <div class="media-body">
        
        <p class="mt-0 mb-1 text-uppercase">{{ $post->category}} Testimony</p>
        <h2>{{ $post->title}}</h2>

        <h4 class="mb-3">{{ $post->body}}</h4>

        {{-- <p class="mb-0"><a href="{{route('post.user', $post->user_id)}}"> {{ $post->user->name}}</a> <br> COZA Member <br><span class="mr-4">{{ $post->user->created_at->diffForHumans()}}</span><span>5 min read</span></p> --}}
      </div>
      
      <div class="mt-4"> 
        <img class="ml-3 blog-img-rt" src={{ asset('images/search-thumb-04.png')}} alt="image"> 
        <div class="text-right mt-4 img-opacity">

   
          
@if (  !$post->isAuthUserLikedPost() )
  
    <form action="{{ route('post.likes', $post)}}" method="POST"> 
      @csrf
      <button type=""submit style="background: transparent; border: 0px;"> <img src={{ asset("images/heart.svg")}} alt="image" > <span style="color: #FFD457"> {{  $post->likes()->count() }} </span>
      </button>
  </form>
@else

      <form action="{{ route('post.likes', $post)}}" method="POST"> 
        @csrf
        @method('DELETE')
        <button type=""submit style="background: transparent; border: 0px;">  <img src={{ asset("images/heart-fill.svg")}} alt="image"> <span style="color: #FFD457"> {{  $post->likes()->count() }}</span>
        </button>
        </form>
@endif 
          <form acttion="{{ route('post.likes', $post)}}" method="POST">
                <a class="share-btn share-btn-lg share-btn-more" href="" title="More share options">
                  <span class="share-btn-icon"></span>
                  <span class="share-btn-text-sr"><img src={{ asset("images/export.svg")}} alt="image"></span>
                </a>
          </form>

          <form action="{{ route('post.destroy', $post)}}" method="POST"> 
            @csrf
            @method('DELETE')
            <button type=""submit style="background: transparent; border: 0px;"> <span style="color: #FFD457"> Delete</span>
            </button>
        </form>


</div>
<p> </p>

      </div>
    </div>
  </div>  
          @endforeach
        @else  
          <h3> You are yet to share your testimonies...or are you saying God has not done anything for you?</h3>
        </div>

     @endif  
      </div>
 
    </div>
@extends('layout.footer')
    
  </div>



  @include('layout.script')  
  </body>

</html>