<?php

use App\Livewire\PhotoView;
use Livewire\Livewire;

use function Pest\Laravel\get;

test('PhotoView should contains Nav livewire component.', fn () =>
    get('/')->assertSeeLivewire(PhotoView::class)
);

