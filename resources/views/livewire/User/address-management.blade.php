
<div class="row">
    @foreach ($addresses as $address)
        <div class="col-md-6">
            <article class="box mb-4">
                <h6>{{ $address->entry_firstname }} {{ $address->entry_lastname }}</h6>
                <p>{{ $address->entry_street_address }}<br> {{ $address->barangay->name }}, {{ $address->barangay->city->name }}<br>{{ $address->entry_phonenumber }}  </p>
                <a wire:click.prevent="edit({{ $address->id }})" href="#" class="btn btn-light"> <i class="fa fa-pen"></i> </a>
                <a wire:click.prevent="delete({{ $address->id }})" href="#" class="btn btn-light"> <i class="text-danger fa fa-trash"></i>  </a>
            </article>
        </div>  <!-- col.// -->
    @endforeach
</div> <!-- row.// -->


@section('title')
    Manage Address    
@endsection
