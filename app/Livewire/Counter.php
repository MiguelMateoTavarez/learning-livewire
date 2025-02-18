<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Counter app')]
class Counter extends Component
{
    public $count = 1;

    public function increment($by)
    {
        $this->count += $by;
    }

    public function decrement($by)
    {
        ($this->count > 0) && --$this->count;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
