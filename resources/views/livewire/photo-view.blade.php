<div x-data="{
    open: false
}">

    <livewire:nav />

    <div class="mt-4 max-w-2xl mx-auto bg-red-500">
    </div>

    <button @click="open = true">Expand</button>

    <span class="text-red-500" x-show="open">
        Content...
    </span>
    {{ $test }}
</div>
