@section('title')
    Edit Profile
@endsection

<div>
    @if ($this->error_message)
    <div class="alert alert-warning" role="alert">
        {{ $this->error_message }}
    </div>
    @elseif($this->success_message)
    <div class="alert alert-success" role="alert">
        {{ $this->success_message }}
    </div>
    @endif
    
    <div class="card-body">
        <form wire:submit.prevent="editInfo" class="mb-5">
         {{ csrf_field() }}
           <div class="form-row">
               <div class="col form-group">
                   <label>Name</label>
                     <input wire:model="firstname" type="text" class="form-control" required>
                     @error('entry_firstname')
                         <span class="text-danger">
                             {{ $message }}
                         </span>
                     @enderror
               </div> <!-- form-group end.// -->
               <div class="col form-group">
                   <label>Last Name</label>
                     <input wire:model="lastname" type="text" class="form-control" required>
                     @error('entry_lastname')
                         <span class="text-danger">
                             {{ $message }}
                         </span>
                     @enderror
               </div> <!-- form-group end.// -->
           </div> <!-- form-row.// -->

 
           <div class="form-row">
             <div class="col form-group">
                 <label>Email</label>
                   <input wire:model="email" type="email" class="form-control" value="" disabled>
             </div> <!-- form-group end.// -->
         </div> <!-- form-row.// -->
        
           <button class="btn btn-primary btn-block">Save Changes</button>
         </form>
         </div> 
</div>
