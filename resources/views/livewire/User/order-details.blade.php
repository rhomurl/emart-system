@section('title', 'Order Details')
<div>
    <a href="{{ route('user.orders') }}" class="btn btn-primary"> <i class="fa fa-chevron-left"></i> Back to My Orders</a><br><br>

    
    <article class="card mb-4">
        <header class="card-header">
            <strong class="d-inline-block mr-3">Order ID: {{ $order->id }}</strong>
            <span class="float-right">Order Date and Time: {{ \Carbon\Carbon::parse($order->created_at)->format('F j Y h:i A')}}</span>
        </header>
        <div class="card-body">
            <div class="tracking-wrap">
                <div class="step {{ $order->status == 'ordered' ? 'active' : 'active' }}">
                    <span class="icon"> <i class="fa fa-check"></i> </span>
                    <span class="text">Order Placed</span>
                </div> <!-- step.// -->
                <div class="step {{ $order->status == 'ordered' ? '' : $order->status == 'processing' ? 'active' : $order->status == 'otw' ? 'active' : $order->status == 'delivered' ? 'active' : ''  }}">
                    <span class="icon"> <i class="fa fa-user"></i> </span>
                    <span class="text">Processing</span>
                </div> <!-- step.// -->
                <div class="step {{ $order->status == 'ordered' ? '' : $order->status == 'processing' ? '' : $order->status == 'otw' ? 'active' : $order->status == 'delivered' ? 'active' : ''  }}">
                    <span class="icon"> <i class="fa fa-truck"></i> </span>
                    <span class="text">On the way</span>
                </div> <!-- step.// -->
                <div class="step {{ $order->status == 'ordered' ? '' : $order->status == 'processing' ? '' : $order->status == 'otw' ? '' : $order->status == 'delivered' ? 'active' : ''  }}">
                    <span class="icon"> <i class="fa fa-box"></i> </span>
                    <span class="text">Delivered</span>
                </div> <!-- step.// -->
            </div><br>

            <div class="row"> 
                <div class="col-md-8">
                    <h6 class="text-muted">Delivery to</h6>
                    <p>{{ $address->entry_firstname }} {{ $address->entry_lastname }} <br>  
                        {{ $address->entry_company }}<br>
                        {{ $address->entry_street_address }}<br> {{ $address->barangay->name }}, {{ $address->barangay->city->name }}, {{ $address->barangay->city->zip }}<br>{{ $address->entry_phonenumber }}  
                    </p>
                </div>

                
                <div class="col-md-4">
                    <h6 class="text-muted">Payment</h6>
                    <span class="text-success">
                        Cash on Delivery
                    </span>
                    <p>Subtotal: ₱ {{ $order->subtotal }} <br>
                        Shipping fee: ₱ 
                        @if(!$order->shippingfee)
                        0.00
                        @else
                            {{ $order->shippingfee }}
                        @endif <br> 
                        Incl. Tax: ₱ {{ $order->tax }} <br> 
                        <span class="b">Total: ₱ {{ $order->total }} </span>
                    </p>
                </div>
            </div> <!-- row.// -->
        </div> <!-- card-body .// -->
        
        <div class="table-responsive">
        <table class="table table-hover ml-5">
                <tbody>
        <p class="p-2">Products</p>
            @foreach ($order->orderProduct as $item)

            <ul class="row">
                <li class="col-md-5">
                    <figure class="itemside mb-3">
                        <div class="aside"><img src="{{ asset('storage') }}/{{ $item->product->image }}" class="img-sm border"></div>
                        <figcaption class="info align-self-center">
                            <p class="title">{{ $item->product->name}}</p>
                            <span class="text-muted">₱ {{$item->price}} <br> Qty: {{$item->quantity}}</span>
                        </figcaption>
                    </figure> 
                </li>
            </ul>

            @endforeach
        </tbody></table>
        </div> <!-- table-responsive .end// -->
    </article>
</div>