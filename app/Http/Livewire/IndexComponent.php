<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class IndexComponent extends Component
{

    public function render()
    {
        return view('livewire.index-component')->layout('layouts.base');
    }
}
