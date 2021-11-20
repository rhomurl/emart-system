@section('title')
    Add Address    
@endsection
<div>
    <div class="card mb-4">
        @if ($this->error_message)
        <div class="alert alert-warning" role="alert">
            {{ $this->error_message }}
        </div>
        @endif
        <div class="col md-3 p-3">
            <a href="{{ route('user.address') }}" class="btn btn-primary float-md-left"><i class="fa fa-chevron-left"></i> Back to My Address </a>
        </div>
        <div class="card-body">
       <form wire:submit.prevent="storeAddress" class="mb-5">
        {{ csrf_field() }}
          <div class="form-row">
              <div class="col form-group">
                  <label>Name</label>
                    <input wire:model="entry_firstname" name="entry_firstname" type="text" class="form-control" value="" required>
                    @error('entry_firstname')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
              </div> <!-- form-group end.// -->
              <div class="col form-group">
                  <label>Last Name</label>
                    <input wire:model="entry_lastname" name="entry_lastname" type="text" class="form-control" value="" required>
                    @error('entry_lastname')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
              </div> <!-- form-group end.// -->
          </div> <!-- form-row.// -->

          <div class="form-row">
            <div class="col form-group">
                <label>Company</label>
                  <input wire:model="entry_company" name="entry_company" type="text" class="form-control" value="">
                  @error('entry_company')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
            </div> <!-- form-group end.// -->
        </div> <!-- form-row.// -->

          <div class="form-row">
            <div class="col form-group">
                <label>Street Address</label>
                  <input wire:model="entry_street_address" name="entry_street_address" type="text" class="form-control" value="" required>
                  @error('entry_street_address')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
            </div> <!-- form-group end.// -->
        </div> <!-- form-row.// -->
          
          <div class="form-row">
              
            <div class="form-group col-md-6">
                <label>City</label>
                <select wire:model="city" name="city" class="form-control" required>
                    <option value="">-- choose city --</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label>Barangay</label>
                <select wire:model="barangay" name="barangay" class="form-control" required>
                    @if ($barangays->count() == 0)
                        <option value="">-- choose city first --</option>
                    @endif
                    @foreach ($barangays as $barangay)
                        <option value="{{ $barangay->id }}">{{ $barangay->name }}</option>
                    @endforeach
                </select>
            </div>
          </div> <!-- form-row.// -->
  
          <div class="form-row">
              <div class="form-group col-md-6">
                <label>Phone</label>
                <input wire:model="entry_phonenumber" name="entry_phonenumber" type="text" class="form-control" placeholder="+639152390900" required>
                @error('entry_phonenumber')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
              </div> <!-- form-group end.// -->
          </div> <!-- form-row.// -->
  
          <button class="btn btn-primary btn-block">Save Address</button>
        </form>
        </div> <!-- card-body.// -->
      </div>
</div>
