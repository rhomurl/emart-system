<section class="section-content padding-y">
    <div class="container">
        <!-- =============== SECTION REGION =============== -->
        <section class="padding-left">
        
            <header class="section-heading heading-line">
                <h4 class="title-section text-uppercase">We only deliver in the following areas</h4>
            </header>
            <h3>Cuenca, Balete, Batangas City, and San Jose</h2>
            {{--
            <ul class="row mt-4">
                <li class="col-md col-6"><a href="#" class="icontext"> <img class="icon-flag-sm" src="images/icons/flags/CN.png"> <span>China</span> </a></li>
                <li class="col-md col-6"><a href="#" class="icontext"> <img class="icon-flag-sm" src="images/icons/flags/DE.png"> <span>Germany</span> </a></li>
                <li class="col-md col-6"><a href="#" class="icontext"> <img class="icon-flag-sm" src="images/icons/flags/AU.png"> <span>Australia</span> </a></li>
                <li class="col-md col-6"><a href="#" class="icontext"> <img class="icon-flag-sm" src="images/icons/flags/RU.png"> <span>Russia</span> </a></li>
                <li class="col-md col-6"><a href="#" class="icontext"> <img class="icon-flag-sm" src="images/icons/flags/IN.png"> <span>India</span> </a></li>
                <li class="col-md col-6"><a href="#" class="icontext"> <img class="icon-flag-sm" src="images/icons/flags/GB.png"> <span>England</span> </a></li>
                <li class="col-md col-6"><a href="#" class="icontext"> <img class="icon-flag-sm" src="images/icons/flags/TR.png"> <span>Turkey</span> </a></li>
                <li class="col-md col-6"><a href="#" class="icontext"> <img class="icon-flag-sm" src="images/icons/flags/UZ.png"> <span>Uzbekistan</span> </a></li>
                <li class="col-md col-6"><a href="#" class="icontext"> <i class="mr-3 fa fa-ellipsis-h"></i> <span>More regions</span> </a></li>
            </ul>--}}
            </section>
            <!-- =============== SECTION REGION .//END =============== -->


        <!-- ========================= SECTION MAIN  ========================= -->
        <section class="section-main padding-y">
        <main class="card">
            <div class="card-body">
        
        <div class="row">
            <aside class="col-lg col-md-3 flex-lg-grow-0">
                <nav class="nav-home-aside">
                    <h6 class="title-category">MY MARKETS <i class="d-md-none icon fa fa-chevron-down"></i></h6>
                    <ul class="menu-category">
                        @foreach ($categories as $category)
                            <li><a href="{{ route('shop.searchcategory', $category->slug) }}">{{ $category->name }}</a></li>
                            @if($category->id == '8')
                                @break
                            @endif
                        @endforeach
                        
                        <li class="has-submenu"><a href="#">More categories</a>
                            <ul class="submenu">
                            @foreach ($categories as $category)    
                                @if($category->id > '7')
                                    <li><a href="{{ route('shop.searchcategory', $category->slug) }}">{{ $category->name }}</a></li>
                                    @continue
                                @endif
                             @endforeach 
                            </ul>
                        </li>
                    </ul>
                </nav>
            </aside> <!-- col.// -->
            <div class="col-md-9 col-xl-7 col-lg-7">
        
        <!-- ================== COMPONENT SLIDER  BOOTSTRAP  ==================  -->
        <div id="carousel1_indicator" class="slider-home-banner carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel1_indicator" data-slide-to="0" class=""></li>
            <li data-target="#carousel1_indicator" data-slide-to="1" class=""></li>
            <li data-target="#carousel1_indicator" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item">
            <img src="images/banners/slide1.jpg" alt="First slide"> 
            </div>
            <div class="carousel-item">
            <img src="images/banners/slide2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item active">
            <img src="images/banners/slide3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel1_indicator" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel1_indicator" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div> 
        <!-- ==================  COMPONENT SLIDER BOOTSTRAP end.// ==================  .// -->	
        
            </div> <!-- col.// -->
            <div class="col-md d-none d-lg-block flex-grow-1">
                <aside class="special-home-right">
                    <h6 class="bg-blue text-center text-white mb-0 p-2">Featured category</h6>
                    
                    <div class="card-banner border-bottom">
                    <div class="py-5" style="width:80%">
                        <a href="#" class="btn btn-secondary btn"> Instant Noodles </a>
                        {{--<h6 class="card-title">Category</h6>
                        <a href="#" class="btn btn-secondary btn-sm"> Source now </a>--}}
                    </div> 
                    <a href="{{ route('shop.searchcategory', 'lnstant-noodles') }}">
                        <img src="storage/images/products/lm-pancit.c-chili-mansi-png.png" height="80" class="img-bg">
                    </a>
                    </div>
        
                    <div class="card-banner border-bottom">
                    <div class="py-5" style="width:80%">
                        <a href="#" class="btn btn-secondary btn"> Frozen Foods </a>
                        {{--<h6 class="card-title">Category 2</h6>
                        <a href="#" class="btn btn-secondary btn-sm"> Source now </a>--}}
                    </div> 
                    <a href="{{ route('shop.searchcategory', 'frozen-foods') }}">
                        <img src="images/items/2.jpg" height="80" class="img-bg">
                    </a>
                    </div>
        
                    <div class="card-banner border-bottom">
                    <div class="py-3" style="width:80%">
                        <a href="#" class="btn btn-secondary btn"> Fish and Meat </a>
                      {{--  <h6 class="card-title">Category 3</h6>--}}
                        
                    </div> 
                    <a href="{{ route('shop.searchcategory', 'fish-and-meat') }}">
                        <img src="images/items/6.jpg" height="80" class="img-bg">
                    </a>
                    </div>
        
                </aside>
            </div> <!-- col.// -->
        </div> <!-- row.// -->
        
            </div> <!-- card-body.// -->
        </main> <!-- card.// -->
        
        </section>
        <!-- ========================= SECTION MAIN END// ========================= -->
        
        
        <!-- =============== SECTION ITEMS =============== -->
        <section class="padding-bottom-sm">
        
        <header class="section-heading heading-line">
            <h4 class="title-section text-uppercase">Recommended items</h4>
        </header>
        
        <div class="row row-sm">


            @foreach ($products1 as $product)
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="card card-sm card-product-grid">
                        <a href="{{ route('product.details', $product->slug ) }}" class="img-wrap"> <img src="{{ asset('storage') }}/{{ $product->image }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="{{ route('product.details', $product->slug ) }}" class="title">{{ $product->name }}</a>
                            <div class="price mt-1">₱ {{ $product->selling_price }}</div> <!-- price-wrap.// -->
                            <a wire:click.prevent="addToCart({{ $product->id }})" href="#" class="btn btn-primary"> 
                                Add to cart</a>
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
            @endforeach

            @foreach ($products as $product)
            <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                <div class="card card-sm card-product-grid">
                    <a href="{{ route('product.details', $product->slug ) }}" class="img-wrap"> <img src="{{ asset('storage') }}/{{ $product->image }}"> </a>
                    <figcaption class="info-wrap">
                        <a href="{{ route('product.details', $product->slug ) }}" class="title">{{ $product->name }}</a>
                        <div class="price mt-1">₱ {{ $product->selling_price }}</div> <!-- price-wrap.// -->
                        <a wire:click.prevent="addToCart({{ $product->id }})" href="#" class="btn btn-primary"> 
                            Add to cart</a>
                    </figcaption>
                </div>
            </div> <!-- col.// -->
        @endforeach
        </div> 
            
        </section>
        <!-- =============== SECTION ITEMS .//END =============== -->
        
        
        
    
        
        <article class="my-4">
            <img src="images/banners/ad-sm.png" class="w-100">
        </article>
    </div>
</section>