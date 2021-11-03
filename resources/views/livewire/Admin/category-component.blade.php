@section('title', 'Categories')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Categories
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            
            @if (session()->has('message'))

            <div id="hideDiv" class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-500">
                <span class="text-xl inline-block mr-5 align-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>
                <span class="inline-block align-middle mr-8">
                  <b class="capitalize">Success! </b>{{ session('message') }}
                </span>
                <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none">
                  <span>×</span>
              
                </button>
              </div>

            @endif

            @can('create categories')
                <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Create New Category</button>
                @if($isOpen)
                    @include('livewire.admin.create_category')
                @endif
            @endcan

            @if(!$isOpen)
            <div class="mt-4 mb-5">
                <input wire:model="search" type="text" placeholder="Search category" class=" px-2 py-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-100 focus:border-gray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 " autofocus/>
            </div>
            @endif

            <table class="table-fixed w-full mt-4">
                <thead>
                    <tr>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider w-20">No.</th>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Name</th>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @forelse($categories as $category)
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">{{ $category->id }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">{{ $category->name }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                        @can('edit categories')
                            <button wire:click="edit({{ $category->id }})" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Edit</button>
                        @endcan
                        
                        @can('delete categories')
                        <button wire:click.prevent="confirmDelete({{ $category->id }})" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Delete</button>
                        @endcan
                    
                        </td>
                    </tr>
                    @empty
                        <tr><td colspan="3" class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">No categories found</td></tr>
                    @endforelse

                    @if(!$isOpen)
                        {{ $categories->links() }}
                    @endif

                </tbody>
            </table>
        </div>
    </div>
</div>
