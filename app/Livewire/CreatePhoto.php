<?php

namespace App\Livewire;

use App\Livewire\Forms\PostPhoto;
use App\Models\Photo;
use Livewire\Component;

class CreatePhoto extends Component
{
    public PostPhoto $form;

    public function save()
    {
        $this->validate();
        $this->form->store();
        return $this->redirect('/');
    }


    public function render()
    {
        return view('livewire.create-photo');
    }
}
