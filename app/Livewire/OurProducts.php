<?php

namespace App\Livewire;

use Livewire\Component;

class OurProducts extends Component
{
    public function render()
    {
        return view('livewire.our-products')->extends('layout.landingpage')->section('content');
    }
}
