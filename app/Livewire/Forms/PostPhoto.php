<?php

namespace App\Livewire\Forms;

use App\Models\Photo;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PostPhoto extends Form
{
    #[Validate('required')]
    public $title;

    #[Validate('sometimes')]
    public $description;

    #[Validate('required')]
    public $image;

    public function store()
    {
        Photo::create([
            'title' => $this->title,
            'description' => $this->description,
            'image' => $this->image,
        ]);
    }
}
