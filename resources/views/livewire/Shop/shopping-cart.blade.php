
<div class="container">
    <div class="row">
        
    <main class="col-md-9">
        @if($this->checkout_message)
            <div class="alert alert-danger" role="alert">
                {{ $this->checkout_message}}
             </div>
        @endif
    <div class="card">
        
        <table class="table table-borderless table-shopping-cart">
        <thead class="text-muted">
        @if(!$cartItems->count() == 0)
            <tr class="small text-uppercase">
            <th scope="col">Product</th>
            <th scope="col" width="120">Quantity</th>
            <th scope="col" width="120">Price</th>
            <th scope="col" class="text-right" width="200"> </th>
            </tr>
        @endif
        </thead>
        <tbody>
        @forelse ($cartItems as $cartItem)
            <tr>
                <td>
                    <figure class="itemside">
                        <div class="aside">
                            <a href="{{ route('product.details', $cartItem->slug ) }}">
                            <img src="{{ asset('storage') }}/{{ $cartItem->image }}" class="img-sm">
                            </a>
                        </div>
                        <figcaption class="info">
                            <a href="{{ route('product.details', $cartItem->slug ) }}" class="title text-dark">{{ $cartItem->name }}</a>
                            <p class="text-muted small">{{--Size: XL, Color: blue, <br>--}}Brand: {{ $cartItem->brand }}</p>
                        </figcaption>
                    </figure>
                </td>
                <td> 
                    <div class="form-inline">
                        <button wire:click.prevent="decreaseQuantity({{ $cartItem->id }}, {{$cartItem->qty }})" type="submit" class="btn btn-sm btn-light mr-2">-</button>
                            {{ $cartItem->qty }}
                        <button wire:click.prevent="increaseQuantity({{ $cartItem->id }})" type="submit" class="btn btn-sm btn-light ml-2">+</button>
                    </div>
                </td>
                <td> 
                    <div class="price-wrap"> 
                        <var class="price">₱ {{ $cartItem->selling_price * $cartItem->qty }}</var> 
                        <small class="text-muted">₱ {{ $cartItem->selling_price }}  </small> 
                    </div> <!-- price-wrap .// -->
                </td>
                <td class="text-right"> 
                <a wire:click.prevent="removefromCart({{$cartItem->id }})" href="" class="btn btn-light"> Remove</a>
                </td>
            </tr>
        @empty
            <tr >
                <td colspan="4">No items in cart</td>
            </tr>

        @endforelse

        </tbody>
        </table>

            <div class="card-body border-top">
                <a wire:click.prevent="setAmountForCheckout()" href="#" class="btn btn-primary float-md-right"> Checkout <i class="fa fa-chevron-right"></i> </a>
                <a href="#" class="btn btn-light"> <i class="fa fa-chevron-left"></i> Continue shopping </a>
            </div>	
    </div> <!-- card.// -->

    <div class="alert alert-success mt-3">
        <p class="icontext"><i class="icon text-success fa fa-truck"></i> Free Shipping for Orders Above 5000 PHP</p>
    </div>

    </main> <!-- col.// -->
        <aside class="col-md-3">
            <div class="card mb-3">
                <div class="card-body">
                <form>
                    <div class="form-group">
                        <label>Have coupon?</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="" placeholder="Coupon code">
                            <span class="input-group-append"> 
                                <button class="btn btn-primary">Apply</button>
                            </span>
                        </div>
                    </div>
                </form>
                </div> <!-- card-body.// -->
            </div>  <!-- card .// -->
            <div class="card">
                <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Total price:</dt>
                            <dd class="text-right">PHP {{ $totalCart }}.00</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Discount:</dt>
                            <dd class="text-right">PHP 0.00</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Total:</dt>
                            <dd class="text-right  h5"><strong>PHP {{ $totalCart }}.00</strong></dd>
                        </dl>
                        <hr>
                        <p class="text-center mb-3">
                            <img src="{{ asset("images/misc/payment_method.jpg") }}">
                        </p>
                        
                </div> <!-- card-body.// -->
            </div>  <!-- card .// -->
        </aside> <!-- col.// -->
    </div>
</div> <!-- container .//  -->
