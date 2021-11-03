<x-guest-layout>
    <section class="section-content padding-y" style="min-height:20vh">
    <div class="card mx-auto" style="max-width:520px; margin-top:40px;">
    <!-- ============================ COMPONENT LOGIN   ================================= -->
        
        <div class="card-body">
        <h4 class="card-title mb-4">Sign in</h4>
        <x-jet-validation-errors class="mb-4" />
        <form method="POST" action="{{ route('login') }}">
                @csrf

            <div class="form-group">
                <input id="email" name="email" class="form-control" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus >
            </div> <!-- form-group// -->
            
            <div class="form-group">
                <input input id="password" name="password" class="form-control" placeholder="Password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password">
            </div> <!-- form-group// -->
            
            <div class="form-group">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="float-right">{{ __('Forgot your password?') }}</a> 
                @endif
                <label class="float-left custom-control custom-checkbox"> <input type="checkbox" id="remember_me" name="remember" class="custom-control-input" checked=""> <div class="custom-control-label"> Remember </div> </label>
            </div> <!-- form-group form-check .// -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Login  </button>
            </div> <!-- form-group// -->    
        </form>
        </div> <!-- card-body.// -->
        <!-- card .// -->

    <!-- ============================ COMPONENT LOGIN  END.// ================================= -->
    </div>
    <p class="text-center mt-4">Don't have account? <a href="{{ route('register')}}">Sign up</a></p>
    <br>
    </section>
</x-guest-layout>
