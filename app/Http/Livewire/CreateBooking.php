<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Booking;

class CreateBooking extends Component
{
    public $title;
    public $start_time;
    public $end_time;


    protected $rules = [

        'title' => 'required|min:6',
        'start_time' => 'required|date_format:"Y-m-d H:i"',
        'end_time' => 'required|date_format:"Y-m-d H:i"|after:start_time',
    ];

    public function save()
    {
        $this->validate();

        // Save to database
        $booking = new Booking();
        $booking->title = $this->title;
        $booking->start_time = $this->start_time;
        $booking->end_time = $this->end_time;
        $booking->save();

        // send event to parent component
        $this->emit('bookingAdded', $booking->id);
    }

    public function render()
    {
        return view('livewire.create-booking');
    }
}
