@section('title', 'Products')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Products
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
                    <p class="font-bold">Success</p>
                    <p>{{ session('message') }}</p>
                </div>
            @endif

            @can('create products')
                <button wire:click="create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Create New Product</button>
                @if($isOpen)
                    @include('livewire.admin.create_product')
                @endif
            @endcan

        
            @if(!$isOpen)
            <div class="mt-4 mb-5">
                <input wire:model="search" type="text" placeholder="Search product" class=" px-2 py-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-100 focus:border-gray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 " autofocus/>
            </div>
            @endif

            <table class="table min-w-full mt-4 dark:text-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">No.</th>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Name</th>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Description</th>
                        <th class="px-7 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Selling Price</th>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Category</th>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Brand</th>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Quantity</th>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @forelse($products as $product)
                   
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">{{ $product->id }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5"><img src="{{ asset('images/items/') }}/{{ $product->image }}" height="50" width="50"/>{{ $product->name }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">{{ Str::limit($product->description, 50) }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">₱{{ $product->selling_price }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">{{ $product->category->name }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">{{ $product->brand->name }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">{{ $product->quantity }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                        
                        @can('edit products')
                            <button wire:click="edit({{ $product->id }})" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Edit</button>
                        @endcan
                        
                        @can('delete products')
                            <button wire:click.prevent="delete({{ $product->id }})" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Delete</button>
                        @endcan
                        
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="8" class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">No product found</td></tr>
                    @endforelse

                    <div class="dark:text-white">
                    @if(!$isOpen)
                        {{ $products->links() }}
                    @endif
                    </div>
                </tbody>
            </table>
        </div>
    </div>
</div>