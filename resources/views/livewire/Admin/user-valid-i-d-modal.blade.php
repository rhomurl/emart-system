<x-modal>
    {{ csrf_field() }}
    <x-slot name="title">
        Valid ID
    </x-slot>

    <x-slot name="content">
        <div class="px-4 py-3 mb-8 bg-white rounded-lg">
            <!-- Invalid input -->
            <img src="{{ asset('storage/valid_ids/'. $user_id . '/' . $validid )}}" onerror="this.src='{{ asset('storage/app/public/valid_ids/'. $user_id . '/' . $validid) }}'">
        </div>
    </x-slot>

    <x-slot name="buttons">
        <button wire:click="$emit('closeModal')" class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
            Close
        </button>
        
    </x-slot>
</x-modal>