<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Booking;

class Bookings extends Component
{
    public function render()
    {
        return view('livewire.bookings', [
            'bookings' => Booking::paginate(10),
        ]);
    }
}
