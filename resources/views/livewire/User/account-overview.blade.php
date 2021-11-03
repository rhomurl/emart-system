<section class="section-pagetop bg-gray">
    <div class="container">
        <h2 class="title-page">My Account</h2>
    </div> <!-- container //  -->
</section>

<section class="section-content padding-y">
    <div class="container">
    
    <div class="row">
        <aside class="col-md-3">
            <nav class="list-group">
                <a class="list-group-item active" href="page-profile-main.html"> Account overview  </a>
                <a class="list-group-item" href="#"> My Address </a>
                <a class="list-group-item" href="#"> My Orders </a>
                <a class="list-group-item" href="#"> Settings </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="list-group-item" href="{{ route('logout') }}" 
                    onclick="event.preventDefault();
                            this.closest('form').submit();"> Log out </a>
                </form>
            </nav>
        </aside> <!-- col.// -->
        <main class="col-md-9">
    
            <article class="card mb-3">
                <div class="card-body">
                    
                    <figure class="icontext">
                            <div class="icon">
                                <img class="rounded-circle img-sm border" src="{{ asset('images/avatars/avatar3.jpg') }}">
                            </div>
                            <div class="text">
                                <strong> {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</strong> <br> 
                                <p class="mb-2"> {{ Auth::user()->email }}  <br>
                                {{ Auth::user()->contact_number }}</p> 
                                <a href="#" class="btn btn-light btn-sm">Edit</a>
                            </div>
                    </figure>
                    <hr>
                    <p>
                        <i class="fa fa-map-marker text-muted"></i> &nbsp; My address:  
                            <br>
                        <!--Tashkent city, Street name, Building 123, House 321 &nbsp; 
                        <a href="#" class="btn-link"> Edit</a>!-->
                    </p>
    
                    
    
                    <article class="card-group card-stat">
                        <figure class="card bg">
                            <div class="p-3">
                                    <h4 class="title">0</h4>
                                <span>Orders</span>
                            </div>
                        </figure>
                        <figure class="card bg">
                            <div class="p-3">
                                    <h4 class="title">0</h4>
                                <span>Processing</span>
                            </div>
                        </figure>
                        <figure class="card bg">
                            <div class="p-3">
                                    <h4 class="title">0</h4>
                                <span>Ready for Delivery</span>
                            </div>
                        </figure>
                        <figure class="card bg">
                            <div class="p-3">
                                    <h4 class="title">0</h4>
                                <span>Delivered items</span>
                            </div>
                        </figure>
                    </article>
                    
    
                </div> <!-- card-body .// -->
            </article> <!-- card.// -->
    
            <article class="card  mb-3">
                <div class="card-body">
                    <h5 class="card-title mb-4">Recent orders </h5>	
    
                    <div class="row">
                    <div class="col-md-6">
                        <figure class="itemside  mb-3">
                            <div class="aside"><img src="{{ asset('images/items/1.jpg') }}" class="border img-sm"></div>
                            <figcaption class="info">
                                <time class="text-muted"><i class="fa fa-calendar-alt"></i> 01.01.2021</time>
                                <p>Order 1</p>
                                <span class="text-success">Delivered </span>
                            </figcaption>
                        </figure>
                    </div> <!-- col.// -->
                    <div class="col-md-6">
                        <figure class="itemside  mb-3">
                            <div class="aside"><img src="{{ asset('images/items/2.jpg') }}" class="border img-sm"></div>
                            <figcaption class="info">
                                <time class="text-muted"><i class="fa fa-calendar-alt"></i> 12.09.2019</time>
                                <p>Order 2</p>
                                <span class="text-warning">Processing</span>
                            </figcaption>
                        </figure>
                    </div> <!-- col.// -->
                    <div class="col-md-6">
                        <figure class="itemside mb-3">
                            <div class="aside"><img src="{{ asset('images/items/3.jpg') }}" class="border img-sm"></div>
                            <figcaption class="info">
                                <time class="text-muted"><i class="fa fa-calendar-alt"></i> 02.02.2021</time>
                                <p> Order 3 </p>
                                <span class="text-success">Shipped  </span>
                            </figcaption>
                        </figure>
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
    
                <a href="#" class="btn btn-outline-primary btn-block"> See all orders <i class="fa fa-chevron-down"></i>  </a>
                </div> <!-- card-body .// -->
            </article> <!-- card.// -->
    
        </main> <!-- col.// -->
    </div>
    
    </div> <!-- container .//  -->
    </section>