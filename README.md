# Livewire practice

## Installation
`./vendor/bin/sail up && ./vendor/bin/sail artisan migrate:fresh --seed`

--- 


1. created fresh laravel app without livewire template

2. installed livewire manually and published configs using thes commands

- `composer require livewire/livewire`
- `php artisan livewire:publish --config`
- `added basic livewire directives. (This is important, this is where livewire initialize)` alpinejs should be included in @livewireScripts

## Components

- to create components we use artisan command `php artisan make:livewire <name>`
- in this example I created a simple component called `ShowPhoto`
- after creating, it produces 2 files, in my initial understanding, the class is for the logic, and view is for the frontend or something that client see.
- It's also possible to use Livewire in Route instead of plain controller. In this case, I will use a component called `PhotoView`. It is also needed to create a layout first. using `php artisan livewire:layout`, if we use this livewire:layout, we don't need to define directives like @livewireScripts cause it injects automatically.

--- 

# Livewire component creation

- to create component, we use artisan command `livewire:make`
- this will generate 2 files. Class and View

# Livewire directives

- livewire directives are custom livewire functions we can use in blade. First directive that I learned was 
`@livewireStyles` , `@livewireScripts`, and `wire:click`. After digging more, I learned about `wire:model` directive to bind the input field with `Form` fields eg. (`public $title`). There is also `wire:submit`. There are bunch of directives, but I haven't tried them all. I created a custom directives in app.js called `bigger-text` and attach it to `photo->title h2 tag` in `photo-view.blade.php` by writing `wire:bigger-text`

# Data fetching

- To fetch data, i simply added an array argument after defining the view name just like how it works on regular component. I added pagination so it fetches by chunk.


# Livewire component testing

- I did some basic feature tests using Pest framework. Livewire\Livewire already has static function called `test` to help with testing in livewire. I tested Nav component and Photo component.



