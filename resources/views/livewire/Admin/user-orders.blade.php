@section('title', 'User Orders')

<div class="container grid px-6 mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        @yield('title')
    </h2>

    <div class="w-full overflow-hidden rounded-lg shadow-xs border border-gray-200 dark:border-gray-700">
        <div class="w-full overflow-x-auto">

            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Order ID</th>
                        <th class="px-4 py-3">Account Name</th>
                        <th class="px-4 py-3">Order Total</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @each('livewire.admin.order', $orders, 'order','livewire.admin.empty-table')
                </tbody>
            </table>
           
                {{ $orders->links('vendor.pagination.custom') }}
           </div>
    </div>
</div>