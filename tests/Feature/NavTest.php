<?php

use App\Livewire\Nav;
use App\Livewire\PhotoView;
use Livewire\Livewire;

test ('Navigation should contains Livewire Practice',
    fn () => Livewire::test(Nav::class)
        ->assertSee("Livewire Practice")
        // assert that background is color white
        ->assertSeeHtml("bg-white")
        ->assertStatus(200)
);

