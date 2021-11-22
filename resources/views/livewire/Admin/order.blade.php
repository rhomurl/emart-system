<tr class="text-gray-700 dark:text-gray-400">
    <td class="px-4 py-3">
        <div class="flex items-center text-sm">
            <!-- Avatar with inset shadow -->
            <div>
                <p class="font-semibold">Order #{{ $order->id }}</p>
                
            </div>
        </div>
    </td>
    
    <td class="px-4 py-3">
        <div class="flex items-center text-sm">
            <!-- Avatar with inset shadow -->
            <div>
                <p class="font-semibold"> {{ $order->user->firstname  }} {{ $order->user->lastname  }}</p>
            </div>
        </div>
    </td>

    <td class="px-4 py-3">
        <p class="font-semibold">₱ {{ $order->total }}</p>
    </td>

    <td class="px-4 py-3">
        <p class="font-semibold">{{ $order->status }}</p>
    </td>

    <td class="px-4 py-3">
        <a href="{{ route('admin.order.details', $order->id ) }}" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">View Order</a>
    </td>
</tr>