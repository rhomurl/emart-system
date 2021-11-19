<section class="section-content padding-y">
    <div class="container">
    
    <nav class="row">
        @foreach($categories as $category)
            <div class="col-md-3">
                
                <div class="card mb-3">
                  <div class="img-wrap" style="background: #ffd7d7">
                    <a href="{{ route('product.details', $category->slug ) }}">
                      <img src="images/items/1.jpg">
                    </a>
                    </div>
                  <div class="card-body">
                    <h4 class="card-title"><a href="#">{{ $category->name }}</a></h4>
                  </div>
                </div>
            </div> <!-- col.// -->
        @endforeach
    </section>