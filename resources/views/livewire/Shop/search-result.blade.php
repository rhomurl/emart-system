<div class="container">


    <!-- ============================  FILTER TOP  ================================= -->
    <div class="card mb-3">
        <div class="card-body">
            <ol class="breadcrumb float-left">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Search Results</a></li>
                <li class="breadcrumb-item active">{{ $this->sdata }}</li>
            </ol>
        </div> <!-- card-body .// -->
    </div> <!-- card.// -->
    <!-- ============================ FILTER TOP END.// ================================= -->
    
    
    <div class="row">
        {{--<aside class="col-md-2">
    
        <article class="filter-group">
            <h6 class="title">
                <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#collapse_1">	 Product type </a>
            </h6>
            <div class="filter-content collapse show" id="collapse_1">
                <div class="inner">
                    <ul class="list-menu">
                        <li><a href="#">Shorts  </a></li>
                        <li><a href="#">Trousers </a></li>
                        <li><a href="#">Sweaters  </a></li>
                        <li><a href="#">Clothes  </a></li>
                        <li><a href="#">Home items </a></li>
                        <li><a href="#">Jackats</a></li>
                        <li><a href="#">Somethings </a></li>
                    </ul>
                </div> <!-- inner.// -->
            </div>
        </article> <!-- filter-group  .// -->
        <article class="filter-group">
            <h6 class="title">
                <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#collapse_2"> Brands </a>
            </h6>
            <div class="filter-content collapse show" id="collapse_2">
                <div class="inner">
                    @foreach($results->unique('brand_id') as $bitem)
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <div class="custom-control-label">{{ $bitem->brand->name }}  
                          <b class="badge badge-pill badge-light float-right">120</b>  </div>
                    </label>
                    @endforeach
                </div> <!-- inner.// -->
            </div>
        </article> <!-- filter-group .// -->
        <article class="filter-group">
            <h6 class="title">
                <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#collapse_3"> Price range </a>
            </h6>
            <div class="filter-content collapse show" id="collapse_3">
                <div class="inner">
                    <input type="range" class="custom-range" min="0" max="100" name="">
                    <div class="form-row">
                    <div class="form-group col-md-6">
                      <label>Min</label>
                      <input class="form-control" placeholder="$0" type="number">
                    </div>
                    <div class="form-group text-right col-md-6">
                      <label>Max</label>
                      <input class="form-control" placeholder="$1,0000" type="number">
                    </div>
                    </div> <!-- form-row.// -->
                    <button class="btn btn-block btn-primary">Apply</button>
                </div> <!-- inner.// -->
            </div>
        </article> <!-- filter-group .// -->

    
        </aside> <!-- col.// -->
        --}}
        <main class="col-md-10">
    
    
    <header class="mb-3">
            <div class="form-inline">
                <strong class="mr-md-auto">{{ $resultCount }} products found </strong>
                <select class="mr-2 form-control">
                    <option>Latest items</option>
                    <option>Trending</option>
                    <option>Most Popular</option>
                    <option>Cheapest</option>
                </select>
                <div class="btn-group">
                       
                    <a href="page-listing-large.html" class="btn btn-light active" data-toggle="tooltip" title="" data-original-title="Grid view"> 
                        <i class="fa fa-th"></i></a>
                </div>
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
                            <span class="h5 price">PHP {{ $result->selling_price }}</span> 
                            <small class="text-muted">/per item</small>
                        </div> <!-- price-wrap.// -->
                        <small class="text-warning">{{--Paid shipping--}}</small>
                        
                        <p class="text-muted mt-3">{{ $result->category->name }}</p>
                        <p class="mt-3">
                            <a href="#" class="btn btn-outline-primary"> Add to Cart </a>
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