<?php
namespace App\Livewire;

use App\Models\Boat;
use Livewire\Component;

class CreateBoat extends Component
{
    public $name;
    public $longitude;
    public $skipping_included = false;
    public $quick_booking = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'longitude' => 'nullable|numeric|between:-180,1080',
        'skipping_included' => 'boolean',
        'quick_booking' => 'boolean',
    ];


    public function submit()
    {
        $validatedData = $this->validate();
        Boat::create($validatedData);
        session()->flash('message', 'Boat created successfully!');
        $this->reset();
    }

    public function render()
    {
        
        return view('livewire.create-boat');
    }
}
