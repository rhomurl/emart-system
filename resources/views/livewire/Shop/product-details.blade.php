<section class="section-content bg-white padding-y">
    <div class="container">

      <ol class="breadcrumb py-2">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">{{ $product->category->name }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
    </ol>
    <!-- ============================ ITEM DETAIL ======================== -->
        <div class="row">
            <aside class="col-md-6">
    <div class="card">
    <article class="gallery-wrap"> 
        <div class="img-big-wrap">
          <div> <a href="#"><img src="{{ asset('storage') }}/{{ $product->image }}"></a></div>
        </div> <!-- slider-product.// -->

        <!--<div class="thumbs-wrap">
          <a href="#" class="item-thumb"> <img src="images/items/15.jpg"></a>
          <a href="#" class="item-thumb"> <img src="images/items/15-1.jpg"></a>
          <a href="#" class="item-thumb"> <img src="images/items/15-2.jpg"></a>
          <a href="#" class="item-thumb"> <img src="images/items/15-1.jpg"></a>
        </div> slider-nav.// -->
    </article> <!-- gallery-wrap .end// -->
    </div> <!-- card.// -->
            </aside>
            <main class="col-md-6">
    <article class="product-info-aside">
    
    <h2 class="title mt-3">{{ $product->name }}</h2>
    
    <!--<div class="rating-wrap my-3">
        <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
                <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i> 
            </li>
            <li>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i> 
            </li>
        </ul>
        <small class="label-rating text-muted">132 reviews</small>
        <small class="label-rating text-success"> <i class="fa fa-clipboard-check"></i> 154 orders </small
    </div> rating-wrap.// -->
    
    <div class="mb-3"> 
        <var class="price h4">PHP {{ $product->selling_price }}</var> 
        <!--<span class="text-muted">USD 562.65 incl. VAT</span> !-->
    </div> <!-- price-detail-wrap .// -->
    
    <dl class="row">
      <dt class="col-sm-3">Brand</dt>
      <dd class="col-sm-9"><a href="#">{{ $product->brand->name }}</a></dd>
    
      <dt class="col-sm-3">Availabilty</dt>
      <dd class="col-sm-9">In Stock</dd>

      <dt class="col-sm-3 mt-2">Quantity</dt>
      <dd class="col-sm-9">
        <div class="form-group col-md flex-grow-0">
          <div class="input-group mb-2 input-spinner">
            <div class="input-group-prepend">
              <button class="btn btn-light" type="button" id="button-minus"> - </button>
            </div>
            <input type="text" class="form-control" value="1">
            <div class="input-group-append">
              <button class="btn btn-light" type="button" id="button-plus"> + </button>
            </div>
          </div>
          {{ $product->quantity }} pieces available
      </div> <!-- col.// -->
      

      </dd>
    </dl>
    
        <div class="form-row">
            <div class="form-group col-md">
              @if ($product->quantity == 0)
                <a href="#" class="btn btn-primary"> 
              @else
                <a wire:click.prevent="addToCart({{ $product->id }})" href="#" class="btn btn-primary"> 
              @endif
                    <i class="fas fa-shopping-cart"></i> <span class="text">Add to cart</span> 
                </a>
            </div> <!-- col.// -->
        </div> <!-- row.// -->
    <hr>
    </article> <!-- product-info-aside .// -->
            </main> <!-- col.// -->
        </div> <!-- row.// -->
    
    <!-- ================ ITEM DETAIL END .// ================= -->
    
    
    </div> <!-- container .//  -->
    </section>

    <!-- ========== SECTION START // ============================ -->
    <section class="section-name padding-y bg">
      <div class="container">
      
      <div class="row">
        <div class="col-md-8">
          <h5 class="title-description">Description</h5>
          <p>
            {{ $product->description }}
          </p>

      
        </div> <!-- col.// -->
        {{--
        <aside class="col-md-4">
          <div class="box">
            <h5 class="title-description">You may like</h5>
          
            <article class="media mb-3">
              <a href="#"><img class="img-sm mr-3" src="images/posts/3.jpg"></a>
              <div class="media-body">
                <h6 class="mt-0"><a href="#">How to use this item</a></h6>
                <p class="mb-2"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin </p>
              </div>
            </article>
        
            <article class="media mb-3">
              <a href="#"><img class="img-sm mr-3" src="images/posts/2.jpg"></a>
              <div class="media-body">
                <h6 class="mt-0"><a href="#">New tips and tricks</a></h6>
                <p class="mb-2"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin </p>
              </div>
            </article>
        
            <article class="media mb-3">
              <a href="#"><img class="img-sm mr-3" src="images/posts/1.jpg"></a>
              <div class="media-body">
                <h6 class="mt-0"><a href="#">New tips and tricks</a></h6>
                <p class="mb-2"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin </p>
              </div>
            </article>
        
      
          
          </div> <!-- box.// -->
        </aside> <!-- col.// -->
        --}}
      </div> <!-- row.// -->
      
      </div> <!-- container .//  -->
      </section>
      <!--============ SECTION END=============-->



<div class="container">
    <div class="card card-body">
      
      <h5 class="title-description">Recently viewed</h5>
      <div class="row">
        <div class="col-md-3">
          <figure class="itemside mb-2">
            <div class="aside"><img src="../images/items/1.jpg" class="border img-sm"></div>
            <figcaption class="info align-self-center">
              <a href="#" class="title">Product 1</a>
              <strong class="price">PHP 241.99</strong>
            </figcaption>
          </figure>
        </div> <!-- col.// -->
    
        <div class="col-md-3">
          <figure class="itemside mb-2">
            <div class="aside"><img src="../images/items/2.jpg" class="border img-sm"></div>
            <figcaption class="info align-self-center">
              <a href="#" class="title">Product 2</a>
              <strong class="price">PHP 241.99</strong>
            </figcaption>
          </figure>
        </div> <!-- col.// -->
    
        <div class="col-md-3">
          <figure class="itemside mb-2">
            <div class="aside"><img src="../images/items/3.jpg" class="border img-sm"></div>
            <figcaption class="info align-self-center">
              <a href="#" class="title">Product 3</a>
              <strong class="price">PHP 241.99</strong>
            </figcaption>
          </figure>
        </div> <!-- col.// -->
    
        <div class="col-md-3">
          <figure class="itemside mb-2">
            <div class="aside"><img src="../images/items/4.jpg" class="border img-sm"></div>
            <figcaption class="info align-self-center">
              <a href="#" class="title">Product 4</a>
              <strong class="price">PHP 241.99</strong>
            </figcaption>
          </figure>
        </div> <!-- col.// -->
      </div> <!-- row.// -->
    </div>
</div><br><br>