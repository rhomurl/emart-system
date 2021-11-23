<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\User;
use App\Models\Product;

Use DB;
use Carbon\Carbon;

use Livewire\Component;

class AdminHome extends Component
{
    public function render()
    {
        $userCount = User::get()->count();
        $productCount = Product::get()->count();
        $orderCount = Order::get()->count();
        $orderTotal = Order::get()->sum('total');

        $record = User::select(\DB::raw("COUNT(*) as count"), 
        \DB::raw("MONTHNAME(created_at) as day_name"), 
        \DB::raw("MONTH(created_at) as day"))
        ->where('created_at', '>', Carbon::today()->subMonth(6))
        ->groupBy('day_name','day')
        ->orderBy('day')
        ->get();

        $data1 = [];

        foreach($record as $row) {
            $data1['label'][] = $row->day_name;
            $data1['data'][] = (int) $row->count;
            }

            $data['chart_data'] = json_encode($data1);

            $record = Order::select(\DB::raw("sum(total) as count"), 
            \DB::raw("MONTHNAME(created_at) as day_name"), 
            \DB::raw("MONTH(created_at) as day"))
            ->where('created_at', '>', Carbon::today()->subMonth(6))
            ->groupBy('day_name','day')
            ->orderBy('day')
            ->get();
    
            $data2 = [];
    
            foreach($record as $row) {
                $data2['label2'][] = $row->day_name;
                $data2['data2'][] = (int) $row->count;
                }
    
                $data['chart_data2'] = json_encode($data2);  
            

        return view('livewire.admin.admin-home', $data, compact('userCount', 'productCount', 'orderCount', 'orderTotal',))->layout('layouts.admin');
    }
}
