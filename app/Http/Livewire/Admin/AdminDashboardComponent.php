<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Carbon\Carbon;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        $orders = Order::orderBy('created_at', 'DESC')->get()->take(10);

        $totalSales = Order::where('status', 'delivered')->count();

        $totalRevenue = Order::where('status', 'delivered')->sum('total');

        $todaySale = Order::where('status', 'delivered')->whereDate('created_at', Carbon::today())->count();

        $todayRevenue = Order::where('status', 'delivered')->whereDate('created_at', Carbon::today())->sum('total');

        //return view('livewire.admin.admin-dashboard-component')->layout('layouts.base');
        return view('livewire.admin.admin-dashboard-component', [

            'orders' => $orders,
            'totalSales' => $totalSales,
            'totalRevenue' => $totalRevenue,
            'todaySale' => $todaySale,
            'todayRevenue' => $todayRevenue,

        ])->layout('layouts.admin');
    }
}
