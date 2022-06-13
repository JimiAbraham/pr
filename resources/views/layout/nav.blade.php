<div class="main-bar navigation-07">
      <div class="container py-4 d-block">
        <div class="row">
          <div class="col">
		  	
            <a class= "toggle" id="nav-toggle"><img src="{{asset('images/burger.svg')}}" alt="image"></a>
			
            <div class="navigation nav-v7 p-3" id="bs-navbar">
			<div class="nav-top-sec">
                <a href="#" class="logo mb-3"><img src="images/logo.svg" alt="image"></a>
                <a href="#" class="close mb-3"><img src="images/close.svg" alt="close"></a>

                <p class="small my-3">Tell about the goodness of the LORD!</p>
				@auth
          
   
						<ul>
						  <li class="has-dropdown">
							<a class="" href="#home" ><span class="menu-icon-v7"><img class="icon mr-2" src="{{asset('images/home.svg')}}" alt="image"><img class="icon mr-2" src="images/home-hover.svg" alt="image"></span>Home</a>
						  </li>
						  
						  <li>
							<a class="dropdown" href="{{route('dashboard')}}"><span class="menu-icon-v7"><img class="icon mr-2" src="images/profile.svg" alt="image"><img class="icon mr-2" src="images/profile-hover.svg" alt="image"></span> Dashboard</a>
						  </li>
             <li>
                <form action="{{ route('logout')}}" method="POST">
                  @csrf
                <button type="submit" class=" btn btn-sm">Logout</button>
                
</li>                     
						</ul>
            @endauth

</div>

			<div class="nav-7-wrap">
@guest
  

                <ul class="ml-3"> 

                    <li><a class="dropdown" href="{{route('login')}}"><span class="menu-icon-v7"><img class="icon mr-2" src="images/write.svg" alt="image"> <img class="icon mr-2" src="images/write-hover.svg" alt="image"></span> Login<br>
 Page</a></li>
                    <li><a class="dropdown p-3 d-block" href="search.html"><span class="menu-icon-v7"><img class="icon mr-2" src="images/search.png" alt="image"> <img class="icon mr-2" src="images/search-hover.html" alt="image"></span> Search<br>
                    Page</a></li>  
                    <li><a class="dropdown p-3 d-block" href="{{route('register')}}"><span class="menu-icon-v7"><img class="icon mr-2" src="images/interest.svg" alt="image"> <img class="icon mr-2" src="images/interest-hover.svg" alt="image"></span> Register
</a></li>
          
@endguest
                    
                </ul>
               
				
				

                <p class="copyright m-0 p-4">© Copyright {{ date('Y')}} | .<br>
 Developed by Jimi for Kingdom Advancement.</p>
		</div>
				</div>
            
          </div>
          
          <div class="col text-center">
            <a href="{{route('home')}}" class="logo"><img src="{{asset('images/logo.svg')}}"></a>
          </div>

          <div class="col text-right">
            <a id="toggle-form"><img class="img-18" src="images/search-top-right-01.svg" alt="image"></a>
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