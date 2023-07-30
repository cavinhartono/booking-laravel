<?php

namespace App\Http\Livewire\Order;

use Carbon\Carbon;
use Livewire\Component;

class Appointment extends Component
{
    public function render()
    {
        $days = [
            [
                'day' => Carbon::now()->addDays(1)->format('Y-m-d'),
                'label' => Carbon::now()->addDays(1)->format('l, d F Y')
            ],
            [
                'day' => Carbon::now()->addDays(2)->format('Y-m-d'),
                'label' => Carbon::now()->addDays(2)->format('l, d F Y')
            ]
        ];
        return view('livewire.order.appointment', compact(['days']));
    }
}
