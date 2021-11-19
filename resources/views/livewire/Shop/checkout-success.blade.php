<section class="text-gray-600 body-font">
    
    <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">

        @if(Session::get('orderid'))
      <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="{{ asset('storage/images/payment_success.gif') }}">
      <div class="text-center lg:w-2/3 w-full">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Your order has been placed!</h1>
        <p class="mb-8 leading-relaxed">Your order number is #{{ Session::get('orderid') }}. Thank you for ordering! You will receive an email once your order has shipped.</p>
        <div class="flex justify-center">
          <a href="{{ route('user.orders') }}" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Go to My Orders</a>
          <a href="{{ route('user_home') }}" class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Go to Home</a>
        </div>
      </div>
      @else
        No order
      @endif
    </div>
    
  </section>
