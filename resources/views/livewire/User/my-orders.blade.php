
   

<div>
    @if($orders)
        {{ $orders->links() }}
    @endif
    
    @forelse($orders as $order)
        <article class="card mb-4">
        <header class="card-header">
            {{--<a href="#" class="float-right"> <i class="fa fa-print"></i> Print</a>--}}
            <strong class="d-inline-block mr-3">Order ID: {{ $order->id }}</strong>
            <span>Order Date: {{ \Carbon\Carbon::parse($order->created_at)->isoFormat('MMM Do YYYY')}}</span>
        </header>
        <div class="card-body">
            <div class="row"> 
                <div class="col-md-8">
                    Status: {{ $order->status }}<br><br>

                    <a href="{{ route('user.order.details', $order->id ) }}" class="btn btn-outline-primary">More Details</a> 
                </div>

                <div class="col-md-4">
                    <h6 class="text-muted">Payment</h6>
                    <span class="text-success">
                        Cash on Delivery
                    </span>
                    <p>Subtotal: PHP {{ $order->subtotal }} <br>
                        Shipping fee: PHP 
                        @if(!$order->shippingfee)
                        0.00
                        @else
                            {{ $order->shippingfee }}
                        @endif <br> 
                        Incl. Tax: PHP {{ $order->tax }} <br> 
                        <span class="b">Total: PHP {{ $order->total }} </span>
                    </p>
                </div>
            </div> <!-- row.// -->
        </div> <!-- card-body .// -->

        </article> <!-- card order-item .// -->
    @empty
        No orders found
    @endforelse
</div>
