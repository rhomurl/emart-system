<x-guest-layout>
    <section class="section-content padding-y">

    <!-- ============================ COMPONENT REGISTER   ================================= -->
        <div class="card mx-auto" style="max-width:520px; margin-top:40px;">
        <article class="card-body">

            <header class="mb-4"><h4 class="card-title">Change Password</h4></header>
            <x-jet-validation-errors class="mb-4" />
        
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                
                    <div class="form-group">
                        <label>Email</label>
                        <input id="email" type="email" name="email" :value="old('email', $request->email)" required autofocus class="form-control">
                    </div> 


                    <div class="form-group">
                        <label>New Password</label>
                        <input id="password" type="password" name="password" required class="form-control">
                    </div> 

                    <div class="form-group">
                        <label>Confirm New Password</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" required class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Reset Password  </button>
                    </div> <!-- form-group// -->    
                    
                   
                </form>
            </article><!-- card-body.// -->
        </div> <!-- card .// -->
        <br><br>
    <!-- ============================ COMPONENT REGISTER  END.// ================================= -->
    </section>
</x-guest-layout>
