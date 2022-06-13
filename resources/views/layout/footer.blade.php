<div class="footer fixed">


    @auth
<ul>
    <li class="active"><a class="p-3" href="/"><img src={{ asset("images/home.svg" ) }} alt="image">Home</a></li>
    <li><a class="p-3" href="/write"><img src={{ asset("images/write.svg" ) }} alt="image">Write</a></li>



    <li><a class="p-3" href="{{ route('favourites')}}"><img src={{ asset("images/heart-fade.svg" ) }} alt="image">favorites</a></li>
    <li><a class="p-3" href="{{ route('billboard')}}"><img src={{ asset("images/interest.svg" ) }} alt="image">Bill Board</a></li>
</ul>

@endauth

@guest
<ul>
    <li class="active"><a class="p-3" href="{{ route('home')}}"><img src={{ asset("images/home.svg" ) }} alt="image">Home</a></li>
    <li><a class="p-3" href="/write"><img src={{ asset("images/write.svg" ) }} alt="image">Write</a></li>



    <li><a class="p-3" href="{{ route('message')}}"><img src={{ asset("images/contact.svg" ) }} alt="image">Contact Us</a></li>
    <li><a class="p-3" href="{{ route('billboard')}}"><img src={{ asset("images/interest.svg")}} alt="image">Bill Board</a></li>
</ul>
@endguest

</div>