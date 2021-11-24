@section('title')
    Manage Address    
@endsection

@if ($message = Session::get('error_msg'))
    @if($addresses->count() < 5)  
    <div class="alert alert-warning" role="alert">
        {{ $message }}
    </div>
    @endif
@endif

@if ($message = Session::get('message'))
    @if($addresses->count() < 5)  
    <div class="alert alert-success" role="alert">
        {{ $message }}
    </div>
    @endif
@endif

<div class="row">
    @forelse ($addresses as $address)
        <div class="col-md-6">
            <article class="box mb-4">
                <h6>{{ $address->entry_firstname }} {{ $address->entry_lastname }}</h6>
                <p>{{ $address->entry_street_address }}<br> {{ $address->barangay->name }}, {{ $address->barangay->city->name }}, {{ $address->barangay->city->zip }}<br>{{ $address->entry_phonenumber }}  </p>
                <a wire:click.prevent="edit({{ $address->id }})" href="#" class="btn btn-light"> <i class="fa fa-pen"></i> </a>
                <a wire:click.prevent="delete({{ $address->id }})" href="#" class="btn btn-light"> <i class="text-danger fa fa-trash"></i>  </a>
            </article>
        </div>  <!-- col.// -->
    @empty
        <div class="col-md-6">
            No address found. Add one?
        </div>
    @endforelse
</div> <!-- row.// -->

@if($addresses->count() < 5)  
    <a href="{{ route('user.address.create')}}" class="btn btn-light mb-3"> <i class="fa fa-plus"></i> Add new address </a>
@endif
