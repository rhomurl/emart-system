<div class="container">
    <!-- ============================  FILTER TOP  ================================= -->
    <div class="card mb-3">
        <div class="card-body">
            <ol class="breadcrumb float-left">
                <li class="breadcrumb-item"><a href="{{ route('user_home') }}">Home</a></li>
                <li class="breadcrumb-item active"><a href="#">All Products</a></li>
            </ol>
        </div> <!-- card-body .// -->
    </div> <!-- card.// -->
    <!-- ============================ FILTER TOP END.// ================================= -->
    
    
    <div class="row">
        <main class="col-md-12">
    
    
    <header class="mb-3">
            <div class="form-inline">
                <strong class="mr-md-auto">{{ $resultCount }} products found </strong>
                <span class="mr-3">Products per page</span>
                <select wire:model="perpage" class="mr-2 form-control">
                    <option>10</option>
                    <option>25</option>
                    <option>50</option>
                    <option>100</option>
                </select>
            </div>
    </header><!-- sect-heading -->
    
    @forelse($results as $result)
        <article class="card card-product-list">
            <div class="row no-gutters">
                <aside class="col-md-3">
                    <a href="{{ route('product.details', $result->slug ) }}" class="img-wrap">
                        <span class="badge badge-danger"> NEW </span>
                        <img src="{{ asset('storage') }}/{{ $result->image }}">
                    </a>
                </aside> <!-- col.// -->
                <div class="col-md-6">
                    <div class="info-main">
                        <a href="{{ route('product.details', $result->slug ) }}" class="h5 title">{{ $result->name }}</a>
                        <div class="rating-wrap mb-2">
                            
                            <div class="label-rating">{{ $result->brand->name }}</div>
                        </div> <!-- rating-wrap.// -->
                    
            
                        <p>{{ $result->description }} </p>
        
                    </div> <!-- info-main.// -->
                </div> <!-- col.// -->
                <aside class="col-sm-3">
                    <div class="info-aside">
                        <div class="price-wrap">
                            <span class="h5 price">₱ {{ $result->selling_price }}</span> 
                            <small class="text-muted">/per item</small>
                        </div> <!-- price-wrap.// -->
                        <small class="text-warning">{{--Paid shipping--}}</small>
                        
                        <p class="text-muted mt-3">{{ $result->category->name }}</p>
                        <p class="mt-3">
                            @if($result->quantity)
                            <a wire:click.prevent="addToCart({{ $result->id }})" href="#" class="btn btn-outline-primary"> Add to Cart </a>
                            @else
                                Out of stock
                            @endif
                        </p>
                    </div> <!-- info-aside.// -->
                </aside> <!-- col.// -->
            </div> <!-- row.// -->
        </article> <!-- card-product .// -->
    @empty
        No products found
    @endforelse
    
    
    {{ $results->links() }}
    
    
        </main> <!-- col.// -->
    
    </div>
    
    </div><br><br>