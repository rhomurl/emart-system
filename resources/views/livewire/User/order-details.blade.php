@section('title', 'Order Details')
<div>
    <a href="{{ route('user.orders') }}" class="btn btn-primary"> <i class="fa fa-chevron-left"></i> Back to My Orders</a>
    <article class="card mb-4">
        <header class="card-header">
            <strong class="d-inline-block mr-3">Order ID: {{ $order->id }}</strong>
            <span class="float-right">Order Date: {{ \Carbon\Carbon::parse($order->created_at)->isoFormat('MMM Do YYYY')}}</span>
        </header>
        <div class="card-body">
            <div class="row"> 
                {{--<div class="col-md-8">
                    <h6 class="text-muted">Delivery to</h6>
                    <p>Michael Jackson <br>  
                    Phone +1234567890 Email: myname@gmail.com <br>
                    Location: Home number, Building name, Street 123, <br> 
                    P.O. Box: 100123
                    </p>
                </div>--}}

                <div class="card-body row no-gutters">
                    {{--<div class="col">
                        <strong>Delivery Estimate time:</strong> <br>16:40, 12 nov 2018
                    </div>--}}
                    <div class="col">
                        <strong>Shipping company:</strong> <br> Default
                    </div>
                    <div class="col">
                        <strong>Status:</strong> <br> {{ $order->status }}
                    </div>
                   
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
        
        <div class="table-responsive">
        <table class="table table-hover">
                <tbody>
        <p class="p-2">Products</p>
            @foreach ($order->orderProduct as $item)

            <ul class="row">
                <li class="col-md-5">
                    <figure class="itemside mb-3">
                        <div class="aside"><img src="{{ asset('storage') }}/{{ $item->product->image }}" class="img-sm border"></div>
                        <figcaption class="info align-self-center">
                            <p class="title">{{ $item->product->name}}</p>
                            <span class="text-muted">PHP {{$item->price}} <br> Qty: {{$item->quantity}}</span>
                        </figcaption>
                    </figure> 
                </li>
            </ul>
        @endforeach
        </tbody></table>
        </div> <!-- table-responsive .end// -->
    </article>
</div>