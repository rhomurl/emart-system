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
                     <input wire:model.defer="current_password" type="password" class="form-control" autocomplete="current-password">
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
                      <input wire:model.defer="new_password" type="password" class="form-control" autocomplete="new-password">
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
                   <input wire:model.defer="new_confirm_password" type="password" class="form-control" autocomplete="new-password">
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
