<x-guest-layout>
    <section class="section-content padding-y" style="min-height:20vh">
    <div class="card mx-auto" style="max-width:520px; margin-top:80px;">
    <!-- ============================ COMPONENT LOGIN   ================================= -->
        
        <div class="card-body">
            <h4 class="card-title mb-4">Verify Email</h4>
            <div class="mb-4 text-gray-600">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>
    
            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-green-600">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif
    
            <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
    
                    <div>
                        <button class="btn btn-primary" type="submit">
                            {{ __('Resend Verification Email') }}
                        </button>
                    </div>
                </form>
    
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
    
                    <button type="submit" class="underline text-gray-600 hover:text-gray-900">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div> <!-- card-body.// -->
        <!-- card .// -->

    <!-- ============================ COMPONENT LOGIN  END.// ================================= -->
    </div>
    <br>
    </section>
</x-guest-layout>
