<div class="wp_navigation_menu">
    <button class="wp_close_btn"><i class="fa fa-times"></i></button>
    <div class="wp_nav_logo">
        <a href="/">
            <img src="{{ asset('assets/client/images/logo.png') }}" alt="Keansburg Waterpark">
        </a>
    </div>
    <ul>
        <li class=""><a href="/"><i class="fa-solid fa-house-chimney"></i></i></i>Home</a></li>
        <li><a href="/gallery"><i class="fa-solid fa-images"></i></i>Gallery</a></li>
        <li><a href="/fare"><i class="fa fa-ticket" aria-hidden="true"></i></i>Fare & Buy Tickets</a></li>
        <li><a href="/playground"><i class="fas fa-dungeon" aria-hidden="true"></i></i>Playground</a></li>
        <li><a href="/contact"><i class="fa-solid fa-address-book"></i></i>Contact Us</a></li>
        <li><a href="/about"><i class="fa-solid fa-users"></i></i>About Us</a></li>

        @if (!Auth::check())
            <li><a href="/login"><i class="fa-solid fa-arrow-right-to-bracket"></i></i>Login</a></li>
            <li><a href="/register"><i class="fa-solid fa-user-plus"></i></i>Register</a></li>
        @else
<<<<<<< HEAD
        
        <li>
            <form action="{{route('getLogout')}}" method="post">
                @csrf
                <button type="submit" style="background: none; border:none">
                    <button class="btn btn-" type="submit">Logout</button>
                </button>
            </form>
        </li>

=======
            <li class="dropdown">
                <a href="#">
                    <i class="fa-solid fa-user"></i>{{ ucfirst(Auth::User()->fullname) }}
                    <span class="fa fa-angle-down" aria-hidden="true"></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="/cart"><i class="fa fa-angle-right" aria-hidden="true"></i>Cart</a>
                    </li>
                    <li>
                        <a>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <form action="{{ route('getLogout') }}" method="post">
                                @csrf
                                <button class="btn" type="submit">Logout</button>
                            </form>
                        </a>
                    </li>
                </ul>
            </li>
>>>>>>> cart
        @endif
    </ul>
</div>
