  @extends('layout.header')
  <body class="sm-top-bar">
  
  
  <div class="canvas ff">
    
    @include('layout.nav')

    <div class="banner mt-0">
      <div class="bg mb-2 mt-0 ha pt-5 pb-4" style="background-image:url(images/author.png)">
        <div class="container">
          <div class="author-detail text-center">
            <img src="images/author-img.png" class="author-image" alt="author">
            <h2 class="mb-0">{{ auth()->user()->name }}</h2>
            <p class="gold">Joined {{  auth()->user()->created_at->diffForHumans() }}</p>
 
            
            <div class="row mt-4">
              <div class="col-sm-4 offset-sm-4">

                <div class="row">
                  <div class="col-sm-6 pr-0 col text-center">
                    <p class="mb-0 mr-3"><span class="alt d-block">{{$posts->count()}} testiomies shared</span></p>
                  </div>

                  {{-- <div class="col-sm-6 pl-0 col text-right">
                    <a href="settings.html" class="mr-3"><img class="setting-image" src="images/setting.svg" alt="setting"></a>
                    <a href="#" class="btn btn-border">Follow</a>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@if ( empty( auth()->user()->username)  and empty(  auth()->user()->church )  )
    <div class="col-sm-12 col-lg-12 pl-0 col text-center">
                    <a href="{{route('dashboard.settings')}}" class="mr-3"><img class="setting-image" src="images/setting.svg" alt="setting"></a>
                    <br>
                    <br>
                    <p>Thank you for joining the family, we want to know you a lil bit more, kindly update your profile! Thanks</p>
                    <a href="{{route('dashboard.settings')}}" class="btn btn-border">Update your profile</a>
                  </div> 
@else

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
<div class="blog-block mb-4 pb-2 col-sm-4  animate slideInUp" style="border-bottom:0.1px solid #62593f">
<a href="{{ route('post.details', $post) }}" class="overlay"></a>
<div class="media">
        
          <div class="media-body">
            
            <p class="mt-0 mb-1 text-uppercase">{{ $post->category}} Testimony</p>
            <h2>{{ $post->title}}</h2>

            <h5 class="mb-3">{!! Str::limit( $post->body, 67 )!!}</h5>


            <p class="mb-0"><a href="{{route('post.user', $post->user)}}"></a><span class="mr-4">{{ $post->created_at->diffForHumans()}}</span><span>5 min read</span></p>
          </div>
          
          <div class="mt-4"> 
            <img class="ml-3 blog-img-rt" src="images/tt.jpg" alt="image"> 
            <div class="text-right mt-4 img-opacity">

      
              
    @if (  !$post->isAuthUserLikedPost() )
      
        <form action="{{ route('post.likes', $post)}}" method="POST"> 
          @csrf
          <button type="submit"  style="background: transparent; border: 0px;"> <img src="images/heart.svg" alt="image" > <span style="color: #FFD457"> {{  $post->likes()->count() }} </span>
          </button>
      </form>
    @else

          <form action="{{ route('post.likes', $post)}}" method="POST"> 
            @csrf
            @method('DELETE')
            <button type="submit" style="background: transparent; border: 0px;">  <img src="images/heart-fill.svg" alt="image"> <span style="color: #FFD457"> {{  $post->likes()->count() }}</span>
            </button>
            </form>
    @endif 
              <form acttion="{{ route('post.likes', $post)}}" method="POST" style="position: relative; right:15px;">
                    <a class="share-btn share-btn-lg share-btn-more" href="" title="More share options">
                      <span class="share-btn-icon"></span>
                      <span class="share-btn-text-sr"><img src="images/export.svg" alt="image"></span>
                    </a>
              </form>

              <form action="{{ route('post.destroy', $post)}}" method="POST"> 
                @csrf
                @method('DELETE')
                <button type="submit" style="background: transparent; border: 0px;"> <span style="color: #FFD457"> Delete</span>
                </button>
            </form>


</div>
<p> </p>

          </div>
        </div>
      </div>  
      @endforeach
    @else  
    <h4 style="color: #FFD457; margin: 10px;">Howdy! You are yet to tell the world about God's goodness to you! <a href="{{route('write')}}">Share your first testimony now!</a>
    </h4>
  </div>

@endif  
  </div>

</div>

  
@endif
            



@extends('layout.footer')
    
  </div>



  @include('layout.script')  
  </body>

</html>