<header class="section-header">
    <nav class="navbar p-md-0 navbar-expand-sm navbar-light border-bottom">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarTop4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbarTop4" style="">
        <ul class="navbar-nav mr-auto">
            <li>Free Shipping for Orders Above 5000 PHP</li>

            <!--
                <li class="nav-item dropdown">
                 <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">   Language </a>
                <ul class="dropdown-menu small">
                    <li><a class="dropdown-item" href="#">English</a></li>
                    <li><a class="dropdown-item" href="#">Arabic</a></li>
                    <li><a class="dropdown-item" href="#">Russian </a></li>
                </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> USD </a>
                    <ul class="dropdown-menu small">
                        <li><a class="dropdown-item" href="#">EUR</a></li>
                        <li><a class="dropdown-item" href="#">AED</a></li>
                        <li><a class="dropdown-item" href="#">RUBL </a></li>
                    </ul>
                </li>
            -->
        </ul>
        <ul class="navbar-nav">
            <li><a href="mailto:ems.almarez@gmail.com" class="nav-link"> <i class="fa fa-comment"></i> Email </a></li>
            <li><a href="tel:+639956093956" class="nav-link"> <i class="fa fa-phone"></i> Call us </a></li>
        </ul> <!-- list-inline //  -->
      </div> <!-- navbar-collapse .// -->
    </div> <!-- container //  -->
    </nav>
    
    <section class="header-main border-bottom">
        <div class="container">
    <div class="row row-sm align-items-center">
        <div class="col-lg-2 col-md-3 col-6">
            <a href="{{ route('user_home') }}" class="brand-wrap">
                <img class="logo" src="{{ asset('images/logo.png') }}">
            </a> <!-- brand-wrap.// -->
        </div>
        <div class="col-lg col-sm col-md col-6 flex-grow-0">
            <div class="category-wrap dropdown d-inline-block float-md-right">
               {{-- <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> 
                    <i class="fa fa-bars"></i> All category 
                </button>--}}
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                    <a class="dropdown-item" href="#">Machinery / Mechanical Parts / Tools </a>
                </div>
            </div>  <!-- category-wrap.// -->
        </div> <!-- col.// -->
        
        <livewire:shop.product-search/>

        <div class="col-lg-3 col-sm-12 col-md-12 col-12">
            <div class="widgets-wrap float-md-right">
                @guest
                    <div class="widget-header dropdown">
                        <a href="#" data-toggle="dropdown" data-offset="20,10" aria-expanded="false">
                            <div class="icontext">
                                <div class="icon">
                                    <i class="icon-sm rounded-circle border fa fa-user"></i>
                                </div>
                                <div class="text">
                                    <small class="text-muted">Sign in | Join</small>
                                    <div>My account <i class="fa fa-caret-down"></i> </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(138px, 42px, 0px);">
                            
                            
                            <form class="px-4 py-3" method="POST" action="{{ route('login') }}">
                                <x-jet-validation-errors class="mb-4" />
                                @csrf
                                <div class="form-group">
                                <label>Email address</label>
                                <input id="email" name="email" class="form-control" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus >
                                </div>
                                <div class="form-group">
                                <label>Password</label>
                                <input input id="password" name="password" class="form-control" placeholder="Password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password">
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                                </form>
                                <hr class="dropdown-divider">
                                <a class="dropdown-item" href="{{ route('register') }}">Don't have account? Sign up</a>
                                @if (Route::has('password.request'))
                                    <a class="dropdown-item" href="{{ route('password.request') }}">Forgot password?</a>
                                @endif
                        </div> <!--  dropdown-menu .// -->
                    </div>  <!-- widget-header .// -->        
                @endguest

                @auth
                    
                    
                    <!--<div class="widget-header mr-3">
                        <a href="#" class="widget-view">
                            <div class="icon-area">
                                <i class="fa fa-comment-dots"></i>
                                <span class="notify">1</span>
                            </div>
                            <small class="text"> Message </small>
                        </a>
                    </div>
                -->
                    <div class="widget-header mr-3">
                        <a href="{{ route('user.orders') }}" class="widget-view">
                            <div class="icon-area">
                                <i class="fa fa-store"></i>
                            </div>
                            <small class="text"> Orders </small>
                        </a>
                    </div>
                    <livewire:shop.cart-icon/> 

                    <div class="widget-header dropdown show">
                        <a href="#" class="ml-4 icontext" data-toggle="dropdown" data-offset="20,10" aria-expanded="true">
                            <div class="icon"><i class="text-primary fa fa-lg fa-user"></i></div>
                            <div class="text"> 
                                <small class="text-muted">Hello {{Auth::user()->firstname}}</small> 
                                <div>Account <i class="fa fa-caret-down"></i></div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-26px, 46px, 0px);">
                            <a class="dropdown-item" href="{{ route('user.overview') }}">Overview</a>
                            <a class="dropdown-item" href="{{ route('user.orders') }}">My orders</a>
                            <hr class="dropdown-divider">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    class="dropdown-item"
                                    onclick="event.preventDefault();
                                            this.closest('form').submit();
                                    ">{{ __('Logout') }}
                                </a>
                            </form>
                            
                        </div> <!--  dropdown-menu .// -->
                    </div>
                @endauth

            </div> <!-- widgets-wrap.// -->
        </div> <!-- col.// -->
    </div> <!-- row.// -->
        </div> <!-- container.// -->
    </section> <!-- header-main .// -->
    
    @if(!Route::is('user_home') )
    <nav class="navbar navbar-main navbar-expand-lg border-bottom">
      <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#main_nav4" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="main_nav4" style="">
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('shop.displayproducts')}}">All Products</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('shop.searchcategory', 'fruits-vegetables')}}">Fruits and Vegetables</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('shop.searchcategory', 'canned-goods')}}">Canned Goods</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('shop.searchcategory', 'rice')}}">Rice</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('shop.searchcategory', 'dairy-products') }}">Dairy Products</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('shop.searchcategory', 'lnstant-noodles') }}">Instant Noodles</a>
                <div class="dropdown-divider"></div>
                
                <a class="dropdown-item" href="{{ route('shop.searchcategory', 'hygiene') }}">Hygiene</a>
                <a class="dropdown-item" href="{{ route('shop.searchcategory', 'fish-and-meat') }}">Fish and Meat</a>
              </div>
            </li>
          </ul>
        </div> <!-- collapse .// -->
      </div> <!-- container .// -->
    </nav> <!-- navbar main end.// -->
    @endif

 </header>