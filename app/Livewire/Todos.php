<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todos app')]
class Todos extends Component
{
    public $todo = '';
    public $todos = [];

    //Inicio del ciclo de vida (esto es un Hook)
    //Idealmente inicializamos toda la data que mostraremos aquí
    public function mount()
    {
        $this->todos = [
            'Take out trash',
            'Do dishes',
        ];
    }

    //Se ejecuta al momento de actualizar una propiedad del componente
    public function updated($value)
    {
        $this->todo = strtoupper($value);
        $this->validate(); //Investigar
    }

    public function add()
    {
        $this->todos[] = $this->todo;
        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
