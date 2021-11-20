<div class="col-lg  col-md-6 col-sm-12 col">
    <form wire:submit.prevent="search" class="search-header">
        @csrf
        <div class="input-group w-100">
            <input wire:model="search" type="text" class="form-control" style="width:60%;" placeholder="Search">
            
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </div>
        </div>
    </form> <!-- search-wrap .end// -->
</div> <!-- col.// -->