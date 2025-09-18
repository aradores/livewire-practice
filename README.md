# Livewire practice


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


## Styling

- added tailwindcss using `npm install tailwindcss @tailwindcss/vite`













