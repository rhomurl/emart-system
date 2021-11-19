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
        <p class="font-semibold">PHP {{ $order->total }}</p>
    </td>
</tr>