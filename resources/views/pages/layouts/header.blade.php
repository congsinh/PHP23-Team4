<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="user-menu">
                    <ul>
                        <li><a href="{{ url('/my-cart') }}"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                        @if(Auth::check() && Auth::user()->is_admin === 0 )
                            <li><a href="{{ url('/info',Auth::user()->id) }}"><i class="fa fa-user"></i> My Account</a>
                            </li>
                            <li><a>Xin chào {{ ucfirst(Auth::user()->name) }}</a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="header-right">
                    <ul class="list-unstyled list-inline">
                        @if(Auth::check() && Auth::user()->is_admin === 0 )
                            <li class="dropdown dropdown-small">
                                <a class="dropdown-toggle" href="{{URL::route('logout')}}"><span class="key  "> <i
                                                class="fa fa-power-off"></i> Đăng xuất</span></a>
                            </li>
                        @else
                            <li><a href="{{ url('/register') }}"><i class="fa fa-user"></i> Đăng kí </a></li>
                            <li><a href="{{URL::route('get-login-user')}}"><i class="fa fa-user"></i> Login</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End header area -->
<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
                    <h1><a href="{{url('/')}}"><img src="{{asset("img/logo.png")}}"></a></h1>
                </div>
            </div>
            <div class="col-sm-6 ">
                <div class="pull-right">
                    <div class="shopping-item " id="shopping-item">
                        <a href="">Cart - <span class="cart-amunt">{{ Cart::subtotal(0) }} VND</span> <i
                                    class="fa fa-shopping-cart"></i> <span
                                    class="product-count">{{ Cart::count() }}</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End site branding area -->

@include('pages.layouts.menu')