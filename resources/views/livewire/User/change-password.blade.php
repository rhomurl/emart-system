@section('title')
    Change Password
@endsection

<div>
    @if($this->success_message)
    <div class="alert alert-success" role="alert">
        {{ $this->success_message }}
    </div>
    @endif
    
    <div class="card-body">
        <form wire:submit.prevent="changePassword" class="mb-5">
         {{ csrf_field() }}
           <div class="form-row">
               <div class="col form-group">
                   <label>Current Password</label>
                     <input wire:model.defer="current_password" type="password" class="form-control" >
                     @error('current_password')
                         <span class="text-danger">
                             {{ $message }}
                         </span>
                     @enderror
               </div> <!-- form-group end.// -->
            </div>
               <div class="form-row">
                <div class="col form-group">
                    <label>New Password</label>
                      <input wire:model.defer="new_password" type="password" class="form-control">
                      <small class="form-text text-muted">New password must contain at least 8 characters with 1 small letter, capital letter, number and symbol.</small>
                      @error('new_password')
                         <span class="text-danger">
                             {{ $message }}
                         </span>
                     @enderror
                </div> <!-- form-group end.// -->
            </div> <!-- form-row.// -->
          
 
           <div class="form-row">
             <div class="col form-group">
                 <label>Confirm New Password</label>
                   <input wire:model.defer="new_confirm_password" type="password" class="form-control">
                   @error('new_confirm_password')
                         <span class="text-danger">
                             {{ $message }}
                         </span>
                     @enderror
             </div> <!-- form-group end.// -->
         </div> <!-- form-row.// -->
        
           <button class="btn btn-primary btn-block">Change Password</button>
         </form>
         </div> 
</div>
