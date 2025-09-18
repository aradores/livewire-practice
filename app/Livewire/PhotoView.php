<?php

namespace App\Livewire;

use App\Models\Photo;
use Livewire\Component;

class PhotoView extends Component
{
    public function render()
    {
        return view('livewire.photo-view', [
            'photos' => Photo::query()->get()
        ]);
    }
}
