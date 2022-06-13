@include('layout.header')
 
<body class="home-v1">
 
 
 <div class="canvas ff">
   
   
@include('layout.nav');
   <div class="content">

    
       <div class="trends bg-alt py-3 my-3 animate slideInUp">
         <div class="container">
           <h2 class="mb-2">{{ $category}}  Testimonies</h2>
           <p class="animate slideInUp">See amazing testimonies on {{ $category}}. </p>

           <div id="content-6-1" class="content horizontal-images light news">
             <ul>
               <li class="mr-2 rounded mb-3">
                 <a href="" class="overlay"></a>
                 <div>
                   <h4 style="color: #FFD457"> ....for his goodness endureth forever</h4>
                 
                 </div>
               </li>
            

              
             </ul>
           </div>
         </div>
       </div>
       
       <div class="container">
         <div class="blog-list row mt-4 pt-2">

           @if( $posts->count())

           @foreach ( $posts as $post )
             
           
           
        <div class="blog-block mb-4 pb-2 col-sm-4  animate slideInUp">
            <a href="{{ route('post.details', $post) }}" class="overlay"></a>
            <div class="media">
               
              <div class="media-body">
                
                <p class="mt-0 mb-1 text-uppercase">{{ $post->category}} Testimony</p>
                <h2>{{ $post->title}}</h2>

                <h4 class="mb-3">{!! Str::limit( $post->body, 25 )!!}</h4>


                <p class="mb-0"><a href="{{route('post.user', $post->user)}}"> {{ $post->user->username}}</a> <br>  {{ $post->user->church}}  Member <br><span class="mr-4">{{ $post->created_at->diffForHumans()}}</span><span>5 min read</span></p>
              </div>
              
              <div class="mt-4"> 
                <img class="ml-3 blog-img-rt" src="{{asset('images/search-thumb-04.png')}}" alt="image"> 
                <div class="text-right mt-4 img-opacity">

           
                  
        @if (  !$post->isAuthUserLikedPost() )
          
            <form action="{{ route('post.likes', $post)}}" method="POST"> 
              @csrf
              <button type=""submit style="background: transparent; border: 0px;"> <img src="{{asset('images/heart.svg')}}" alt="image" > <span style="color: #FFD457"> {{  $post->likes()->count() }} </span>
              </button>
          </form>
        @else
  
              <form action="{{ route('post.likes', $post)}}" method="POST"> 
                @csrf
                @method('DELETE')
                <button type=""submit style="background: transparent; border: 0px;">  <img src="{{asset('images/heart-fill.svg')}}" alt="image"> <span style="color: #FFD457"> {{  $post->likes()->count() }}</span>
                </button>
                </form>
        @endif 
                  <form acttion="{{ route('post.likes', $post)}}" method="POST">
                        <a class="share-btn share-btn-lg share-btn-more" href="" title="More share options">
                          <span class="share-btn-icon"></span>
                          <span class="share-btn-text-sr"><img src="{{asset('images/export.svg')}}" alt="image"></span>
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
<h3>No Testimony is available</h3>
@endif

         <hr style="color: white;">

       


       
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