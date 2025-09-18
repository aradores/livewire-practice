<?php

use App\Livewire\CreatePhoto;
use App\Models\Photo;
use Livewire\Livewire;

use function Pest\Laravel\assertDatabaseHas;

test('should be able to fill basic fields to create photo view', function () {

    $makePhoto = Photo::factory()->make([
        'title' => 'test 1',
        'description' => 'desc 2',
    ]);

    $action = Livewire::test(CreatePhoto::class)
        ->set('form.title', $makePhoto->title)
        ->set('form.description', $makePhoto->description);

    //assert
    $action->assertSet('form.title', 'test 1')
        ->assertSet('form.description', 'desc 2');
});

test('can save title and description and persist to db', function () {

    $makePhoto = Photo::factory()->make([
        'title' => 'test 1',
        'description' => 'desc 2',
    ]);

    $action = Livewire::test(CreatePhoto::class)
        ->set('form.title', $makePhoto->title)
        ->set('form.description', $makePhoto->description)
        ->set('form.image', 'image')
        ->call('save');

    assertDatabaseHas('photos', [
        'title' => 'test 1',
        'description' => 'desc 2',
    ]);
});

test('photo validates', function () {

    $makePhoto = Photo::factory()->make([
        'title' => 'test 1',
        'description' => 'desc 2',
    ]);

    $action = Livewire::test(CreatePhoto::class)
        ->set('form.title', '')
        ->set('form.description', '')
        ->set('form.image', '')
        ->call('save');

    //asser
    $action->assertHasErrors([
        'form.title',
        'form.image'
    ]);
});
