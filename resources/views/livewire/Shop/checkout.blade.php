
<div class="container" style="max-width:720px;">
  @if($this->checkout_message)
    <div class="alert alert-danger" role="alert">
        {{ $this->checkout_message}}
    </div>
  @endif
  <form wire:submit.prevent="placeOrder">
         
    <h4 class="card-title mb-4">Delivery Address</h4>
  <div class="row">
    

    @foreach ($addresses as $address)
          <div class="col-md-6">
              <article class="box mb-4">
                  <h6>{{ $address->entry_firstname }} {{ $address->entry_lastname }}</h6>
                  <p>{{ $address->entry_street_address }}<br> {{ $address->barangay->name }}, {{ $address->barangay->city->name }}<br>{{ $address->entry_phonenumber }}  </p>
                  <input wire:model="address_book_id" value="{{ $address->id }}" type="radio" name="address">
              </article>
          </div>  <!-- col.// -->
          
      @endforeach
      @error('address_book_id')
        <span class="text-danger">
            {{ $message }}
        </span>
      @enderror

  <main class="col-md-12">
        <h4 class="card-title mb-4">Products</h4>
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
      @foreach ($cartItems as $cartItem)
          <tr>
              <td>
                  <figure class="itemside">
                      <div class="aside">
                          <a href="#">
                          <img src="{{ asset('storage') }}/{{ $cartItem->image }}" class="img-sm">
                          </a>
                      </div>
                      <figcaption class="info">
                          <a href="#" class="title text-dark">{{ $cartItem->name }}</a>
                          <p class="text-muted small">{{--Size: XL, Color: blue, <br>--}}Brand: {{ $cartItem->brand }}</p>
                      </figcaption>
                  </figure>
              </td>
              <td> 
                  <div class="form-inline">
                      {{ $cartItem->qty }}
                  </div>
              </td>
              <td> 
                  <div class="price-wrap"> 
                      <var class="price">₱ {{ $cartItem->selling_price * $cartItem->qty }}</var> 
                      <small class="text-muted">₱ {{ $cartItem->selling_price }}  </small> 
                  </div> <!-- price-wrap .// -->
              </td>
             
          </tr>
      @endforeach

      </tbody>
      </table>

      

  

      
  </div> <!-- card.// -->
  <div class="card mb-4">
    <div class="card-body">
    <h4 class="card-title mb-4">Payment Method</h4>
    <form role="form" style="max-width:380px;">
      @if ($this->payment_mode)
        <label class="js-check box active">
      @else
        <label class="js-check box">
      @endif
        <input wire:model="payment_mode" value="cod" type="radio" name="payment_mode">
        <h6 class="title">Cash on Delivery</h6>
        <p class="text-muted">Payment will be given upon delivery</p>
      </label> <!-- form-group.// -->
    </div> <!-- card-body.// -->
    @error('payment_mode')
      <span class="text-danger">
          {{ $message }}
      </span>
    @enderror
  </div>

  <div class="card mb-4">
    <div class="card-body">
    <h4 class="card-title mb-4">Order Total</h4>
      @if(Session::has('checkout'))
        
      <span class="text-xl">Subtotal:</span><span class="text-xl"> PHP {{ Session::get('checkout')['subtotal'] }}</span><br>
    
      <span class="text-xl">Delivery fee:</span> <span class="text-xl"> PHP {{ Session::get('checkout')['shipping'] }}<br>
    
      <span class="text-xl">Incl. Tax:</span> <span class="text-xl"> PHP {{ Session::get('checkout')['tax'] }}</span><br>
    
      
      
      <span class="font-bold text-xl">Grand Total:</span> <span class="text-xl">₱{{ Session::get('checkout')['total'] }}</span>
      <br><br>
      @endif
    </div> <!-- card-body.// -->
  </div>
  
  
  <button class="btn btn-primary float-md-right"> Place Order <i class="fa fa-chevron-right"></i> </button>
  </main> <!-- col.// -->

  </div>
</div> <!-- container .//  -->


    <br><br> 
    
   