<section class="section-content bg-white padding-y">
  <div class="container">

    <ol class="breadcrumb py-2">
      <li class="breadcrumb-item"><a href="{{ route('user_home') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ route('shop.searchcategory', $product->category->slug) }}">{{ $product->category->name }} - {{ $product->category->type }}</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
  </ol>
  <!-- ============================ ITEM DETAIL ======================== -->
      <div class="row">
          <aside class="col-md-6">
  <div class="card">
  <article class="gallery-wrap"> 
      <div class="img-big-wrap">
        <div> <a href="#"><img src="{{ asset('storage') }}/{{ $product->image }}" onerror="this.src='{{ asset('storage/app/public/') }}/{{ $product->image }}'"></a></div>
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
      <var class="price h4">₱ {{ $product->selling_price }}</var> 
      <!--<span class="text-muted">USD 562.65 incl. VAT</span> !-->
  </div> <!-- price-detail-wrap .// -->
  
  <dl class="row">
    <dt class="col-sm-3">Brand</dt>
    <dd class="col-sm-9"><a href="#">{{ $product->brand->name }}</a></dd>
  
    <dt class="col-sm-3">Availabilty</dt>
    <dd class="col-sm-9">{{ $product->quantity == '0' ? 'Out of Stock' : 'In Stock'}}</dd>

    <dt class="col-sm-3 mt-2">Quantity</dt>
    <dd class="col-sm-9">
      <div class="form-group col-md flex-grow-0">
        <div class="input-group mb-2 input-spinner">
          <div class="input-group-prepend">
            <button wire:click.prevent="minusQty" class="btn btn-light" type="button" id="button-minus"> - </button>
          </div>
          <input wire:model="qty" type="text" class="form-control">
          <div class="input-group-append">
            <button wire:click.prevent="addQty" class="btn btn-light" type="button" id="button-plus"> + </button>
          </div>
        </div>
        {{ $product->quantity }} pieces available
    </div> <!-- col.// -->
    

    </dd>
  </dl>
      @role('customer')
      <div class="form-row">
          <div class="form-group col-md">
            @if ($product->quantity == 0)
              
            @else
                @if(!$this->qty)
                  <a wire:click.prevent="addToCart({{ $product->id }}, 1)" href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> <span class="text">Add to cart</span></a>  
                @else 
                  <a wire:click.prevent="addToCart({{ $product->id }}, {{ $this->qty }})" href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> <span class="text">Add to cart</span></a> 
                @endif
              
            @endif
                  
          </div> <!-- col.// -->
      </div> <!-- row.// -->
      @endrole
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
    
    <h5 class="title-description">Related products</h5>
    <div class="row">
      @foreach ($related_products as $related_product)
      <div class="col-md-3">
        <figure class="itemside mb-2">
          <div class="aside">
            <a href="{{ route('product.details', $related_product->slug ) }}">
              <img src="{{ asset('storage') }}/{{ $related_product->image }}" onerror="this.src='{{ asset('storage/app/public/') }}/{{ $related_product->image }}'" class="border img-sm">
            </a>
            </div>
          <figcaption class="info align-self-center">
            <a href="{{ route('product.details', $related_product->slug ) }}" class="title">{{ $related_product->name }}</a>
            <strong class="price">₱ {{ $related_product->selling_price }}</strong>
          </figcaption>
        </figure>
      </div> <!-- col.// -->
      @endforeach <!-- col.// -->
    </div> <!-- row.// -->
  </div>
</div><br><br>