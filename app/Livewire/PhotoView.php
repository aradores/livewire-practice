<?php

namespace App\Livewire;

use Livewire\Component;

class PhotoView extends Component
{
    public function render()
    {
        return view('livewire.photo-view', [
            'test' => 'adichan'
        ]);
    }
}
