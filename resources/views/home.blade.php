 @include('layout.header')
 
 <body class="home-v1">
  
  
  <div class="canvas ff">
    
    
@include('layout.nav');
    <div class="content">

      <div class="container">
        <h1 class="mb-0">Categories of Testimonies</h1>
        @auth
        <p class="mb-3">Dear {{ auth()->user()->name }}, See amazing categories below that may <b>boost your faith</b></p>
        @endauth

        @guest
        <p class="mb-3"> Beloved, see amazing categories of testimonies of what the Lord is doing.</p>

        @endguest
        <div id="content-5" class="content home-1-slide home-1-slider horizontal-images light rounded mb-3">
          <ul>
            <li class="">
          <a class="" href="{{ route('testimony.category', 'Finance')}}"><img src="images/health-img.png" alt="image" class="mb-2" />Finance </a>
            </li>
            <li class="mr-3"><a class="" href="{{ route('testimony.category',['category' => "Healing"])}}"><img src="images/sports-img.png" alt="image" class="mb-2" />Healing </a></li>
            <li class="mr-3"><a class="" href="{{ route('testimony.category', ['category' => "Miracles"])}}"><img src="images/politics-img.png" alt="image" class="mb-2" />Miracles</a></li>
            <li class="mr-3"><a class="" href="{{ route('testimony.category', ['category' => "Deliverance"])}}"><img src="images/world-img.png" alt="image" class="mb-2" />Deliverance</a></li>
            <li class="mr-3"><a class="" href="{{ route('testimony.category', ['category' => "Suprises"])}}"><img src="images/tech-img.png" alt="image" class="mb-2" />Suprises</a></li>
          
          </ul>
        </div>

        
        


          
</div>
        <div class="trends bg-alt py-3 my-3 animate slideInUp">
          <div class="container">
            <h2 class="mb-2">Featured Testimonies</h2>
            <p class="animate slideInUp"> God still does amazing Signs and Wonders. </p>

            <div id="content-6-1" class="content horizontal-images light news">
              <ul>
              
           @foreach ($fposts as $fp )
             
          

                <li class="mr-2 rounded mb-3" style="width: 45%; margin-right:5%;">
                  <a href="blog-detail.html" class="overlay"></a>
                  <div><img src="images/news-thumb2.jpg" alt="image" />
                  <div class="data-text text-left py-3 px-3">
                    <h4> {!! Str::limit( $fp->body, 120 )!!}</h4>
                    {{-- <p class="mb-4">Lorem Ipsum is simply dummy</p> --}}
                    <p class="mb-0"><a href="{{route('post.user', $fp->user)}}"> {{ $fp->user->username}}</a> <br>  {{ $fp->user->church}}  Member <br><span class="mr-4">{{ $fp->created_at->diffForHumans()}}</span><span>5 min read</span></p>
                  </div>
				  </div>
                </li>

                @endforeach
              </ul>
            </div>
          </div>
        </div>
        
        <div class="container">

          <h2 class="mb-2">See arrays of Testimonies</h2>
          <p class="animate slideInUp">  </p>

          <div class="blog-list row mt-4 pt-2">


            @if( $posts->count())

            @foreach ( $posts as $post )
              
            
            
          <div class="blog-block mb-4 pb-2 col-sm-4  animate slideInUp" style="border-bottom:0.1px solid #62593f">
            <a href="{{ route('post.details', $post) }}" class="overlay"></a>
            <div class="media">
               
              <div class="media-body">
                
                <p class="mt-0 mb-1 text-uppercase">{{ $post->category}} Testimony</p>
                <h2>{{ $post->title}}</h2>

                <h5 class="mb-3">{!! Str::limit( $post->body, 67 )!!}</h5>


                <p class="mb-0"><a href="{{route('post.user', $post->user)}}"> {{ $post->user->username}}</a> <br>  {{ $post->user->church}}  Member <br><span class="mr-4">{{ $post->created_at->diffForHumans()}}</span><span>5 min read</span></p>
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

                  {{-- <form action="{{ route('post.destroy', $post)}}" method="POST"> 
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background: transparent; border: 0px;"> <span style="color: #FFD457"> Delete</span>
                    </button>
                </form> --}}


</div>
<p> </p>

              </div>

              
            </div>
          </div>
          
    @endforeach


@else
<h3>No Testimony is available</h3>
@endif
        
        </div>
      </div>
    
</div>
   
    
	<!-- footer end here -->

  @include('layout.footer')
  

</div>
<!-- canvas end here -->


@include('layout.script')

    
  </body>

</html>