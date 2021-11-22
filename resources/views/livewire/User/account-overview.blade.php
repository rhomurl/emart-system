@section('title')
    Overview
@endsection

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
                    {{--<a href="#" class="btn btn-light btn-sm">Edit</a>--}}
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
                        <h4 class="title">{{ $order_count }}</h4>
                    <span>Orders</span>
                </div>
            </figure>
            <figure class="card bg">
                <div class="p-3">
                        <h4 class="title">{{ $pro_orders }}</h4>
                    <span>Processing</span>
                </div>
            </figure>
            <figure class="card bg">
                <div class="p-3">
                        <h4 class="title">{{ $shpd_orders }}</h4>
                    <span>Shipped</span>
                </div>
            </figure>
            <figure class="card bg">
                <div class="p-3">
                        <h4 class="title">{{ $deliveredorders }}</h4>
                    <span>Delivered Orders</span>
                </div>
            </figure>
        </article>
        

    </div> <!-- card-body .// -->
</article> <!-- card.// -->

<article class="card  mb-3">
    <div class="card-body">
        <h5 class="card-title mb-4">Recent orders </h5>	

        <div class="row">
        @forelse($orders as $order)
            <div class="col-md-6">
                <figure class="itemside  mb-3">
                    <div class="aside">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    </div>
                    <figcaption class="info">
                        <time class="text-muted"><i class="fa fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($order->created_at)->format('F j, Y')}}</time>
                        <p>Order #{{ $order->id }} - 
                        <span class="text-success">
                        @if($order->status == 'otw')
                            On The Way
                        @elseif($order->status == 'ordered')
                            Ordered
                        @elseif($order->status == 'delivered')
                            Delivered
                        @else
                            {{ $order->status }} 
                        @endif
                        </span></p>
                        
                    </figcaption>
                </figure>
            </div> <!-- col.// -->
        @empty
            No recent orderes
        @endforelse
    </div> <!-- row.// -->

    <a href="{{ route('user.orders') }}" class="btn btn-outline-primary btn-block"> See all orders <i class="fa fa-chevron-down"></i>  </a>
    </div> <!-- card-body .// -->
</article> <!-- card.// -->