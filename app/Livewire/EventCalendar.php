<?php

namespace App\Livewire;

use Livewire\Component;

class EventCalendar extends Component
{
    public $icons;

    public function render()
    {
        $this->icons = Calendar::all();
        return view('livewire.event-calendar');
    }

    public function createIcon()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        Calendar::create($this->icons);

        session()->flash('message', 'Event Created Successfully.');

        $this->resetInputFields();

        $this->emit('eventAdded');
    }
}
