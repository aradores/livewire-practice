<?php

use App\Livewire\Nav;
use App\Livewire\PhotoView;
use App\Models\Photo;
use Livewire\Livewire;

use function Pest\Laravel\get;

test(
    'PhotoView should contains Nav livewire component.',
    fn() =>
    $this->get('/')->assertSeeLivewire(Nav::class)
);

test('photoview should fetch photos', function () {
    Photo::factory()->times(2)->create();

    Livewire::test(PhotoView::class)
        ->assertViewHas('photos', function ($posts) {
            return count($posts) == 2;
        });
});
