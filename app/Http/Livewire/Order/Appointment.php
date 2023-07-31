<?php

namespace App\Http\Livewire\Order;

use App\Models\DailySlot;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Livewire\Component;

class Appointment extends Component
{
    public $timeSlot = [];
    public $day, $name, $phoneNumber, $slot, $age, $note;

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

    public function getTimeSlot($value): void
    {
        $getTimeSlot = DailySlot::withCount([
            'orders' => function ($query) use ($value) {
                $query->where('day', $value);
            }
        ])->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->get();

        $this->timeSlot = $getTimeSlot;
    }

    public function store(): void
    {
        $order = Order::create([
            'daily_slot_id' => $this->slot,
            'day' => $this->day,
            'name' => $this->name,
            'age' => $this->age,
            'phone_number' => $this->phone_number,
            'note' => $this->note,
            'status' => 0
        ]);

        return session()->flash('success', 'Nomor Antrian Anda Adalah: ' . $order->order_id);
    }
}
