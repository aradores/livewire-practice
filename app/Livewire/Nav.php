<?php

namespace App\Livewire;

use Livewire\Component;

class Nav extends Component
{
    const TITLE = "Livewire Practice";

    public function render()
    {
        return view('livewire.nav', [
            'title' => self::TITLE
        ]);
    }
}
