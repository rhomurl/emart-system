<x-guest-layout>
    <section class="section-content padding-y">

    <!-- ============================ COMPONENT REGISTER   ================================= -->
        <div class="card mx-auto" style="max-width:520px; margin-top:40px;">
        <article class="card-body">

            <header class="mb-4"><h4 class="card-title">Forgot Password</h4></header>
            @if (session('status'))
                <div class="mb-4 text-success">
                    {{ session('status') }}
                </div>
            @endif
            <x-jet-validation-errors class="mb-4" />
            Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one. 
            <br><br>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                   
                    <div class="form-group">
                        <label>Email</label>
                        <input id="email" class="form-control" type="text" name="email" :value="old('email')" required autofocus>
                    </div> 
                
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Email Password Reset Link  </button>
                    </div> <!-- form-group// -->    
                    
                   
                </form>
            </article><!-- card-body.// -->
        </div> <!-- card .// -->
        <br><br>
    <!-- ============================ COMPONENT REGISTER  END.// ================================= -->
    </section>
</x-guest-layout>
