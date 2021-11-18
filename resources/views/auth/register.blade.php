<x-guest-layout>
    <section class="section-content padding-y">

    <!-- ============================ COMPONENT REGISTER   ================================= -->
        <div class="card mx-auto" style="max-width:520px; margin-top:40px;">
        <article class="card-body">
            <header class="mb-4"><h4 class="card-title">Sign up</h4></header>
            <x-jet-validation-errors class="mb-4" />
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                    <div class="form-row">
                        <div class="col form-group">
                            <label>First name</label>
                            <input id="first_name" class="form-control" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" >
                        </div> <!-- form-group end.// -->
                        <div class="col form-group">
                            <label>Last name</label>
                            <input id="last_name" class="form-control" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" >
                        </div> <!-- form-group end.// -->
                    </div> <!-- form-row end.// -->
                    <div class="form-group">
                        <label>Email</label>
                        <input id="email" class="form-control" type="email" name="email" :value="old('email')" required>
                        <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div> <!-- form-group end.// -->

                    <div class="form-group">
                        <label>Contact Number</label>
                        <input id="contact_number" class="form-control" type="text" name="contact_number" :value="old('contact_number')" required>
                    </div> 
                    
                    <!--<div class="form-group">
                        <label class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" checked="" type="radio" name="gender" value="option1">
                        <span class="custom-control-label"> Male </span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="gender" value="option2">
                        <span class="custom-control-label"> Female </span>
                        </label>
                    </div> --!> <!-- form-group end.// -->

                    
                    <!--<div class="form-row">
                        <div class="form-group col-md-6">
                        <label>City</label>
                        <input type="text" class="form-control">
                        </div> 
                        <div class="form-group col-md-6">
                        <label>Country</label>
                        <select id="inputState" class="form-control">
                            <option> Choose...</option>
                            <option>Uzbekistan</option>
                            <option>Russia</option>
                            <option selected="">United States</option>
                            <option>India</option>
                            <option>Afganistan</option>
                        </select>
                        </div> form-group end.</div> -->
                        <!-- form-row.// -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Create password</label>
                            <input class="form-control" type="password" name="password" required autocomplete="new-password">
                        </div> <!-- form-group end.// --> 
                        <div class="form-group col-md-6">
                            <label>Repeat password</label>
                            <input class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" >
                        </div> <!-- form-group end.// -->  
                    </div>
                    <div class="form-group">
                        <label>Valid ID</label><br>
                        <input id="valid_id" type="file" name="valid_id">
                    </div> 
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Register  </button>
                    </div> <!-- form-group// -->    
                    
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="form-group"> 
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                    </div> <!-- form-group end.// -->         
                    @endif  
                </form>
            </article><!-- card-body.// -->
        </div> <!-- card .// -->
        <p class="text-center mt-4">Have an account? <a href="{{ route('login') }}">Log In</a></p>
        <br><br>
    <!-- ============================ COMPONENT REGISTER  END.// ================================= -->
    </section>
</x-guest-layout>
