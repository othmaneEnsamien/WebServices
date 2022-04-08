<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PageEcommerce extends Component
{
    public function render()
    {
        return view('livewire.page-ecommerce')->layout('layouts.base');
    }
}
