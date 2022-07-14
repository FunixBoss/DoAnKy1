<div class="wp_navigation_menu">
    <button class="wp_close_btn"><i class="fa fa-times"></i></button>
    <div class="wp_nav_logo">
        <a href="/">
            <img src="{{asset('assets/client/images/logo.png')}}" alt="Keansburg Waterpark">
        </a>
    </div>
    <ul>
        @if(Auth::check())
        <li><i class="fa-solid fa-arrow-right-to-bracket"></i>{{Auth::User()->email}}</li>
        @endif

        <li class=""><a href="/"><i class="fa-solid fa-house-chimney"></i></i></i>Home</a></li>
        <li><a href="/gallery"><i class="fa-solid fa-images"></i></i>Gallery</a></li>
        <li><a href="/fare"><i class="fa fa-ticket" aria-hidden="true"></i></i>Fare</a></li>
        <li><a href="/playground"><i class="fas fa-dungeon" aria-hidden="true"></i></i>Playground</a></li>
        <li><a href="/contact"><i class="fa-solid fa-address-book"></i></i>Contact</a></li>
        <li><a href="/about"><i class="fa fa-user" aria-hidden="true"></i>About</a></li>
        @if(!Auth::check())
            <li><a href="/login"><i class="fa-solid fa-arrow-right-to-bracket"></i></i>Login</a></li>
            <li><a href="/register"><i class="fa-solid fa-user-plus"></i></i>Register</a></li>
        @else
        
        <li>
            <form action="{{route('getLogout')}}" method="post">
                @csrf
                <button type="submit" style="background: none; border:none">
                    <a href="/about"><i class="fa-solid fa-arrow-right-to-bracket" aria-hidden="true"></i>Logout</a>
                </button>
            </form>
        </li>

        @endif
    </ul>
</div>
