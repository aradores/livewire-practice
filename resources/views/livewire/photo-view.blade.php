<div x-data="{
    open: false
}">

    <livewire:nav />

    <div class="mt-4 max-w-2xl mx-auto space-y-4">
        @foreach ($photos as $photo)
            <div class="border-b border-b-gray-400/20 pb-6">
            <img src="{{ $photo->image }}" />
                <h2 wire:bigger-text class="py-2 text-lg">
                    {{ $photo->title }}
                </h2>
                <p class="text-sm text-slate-500">
                    {{ $photo->description }}
                </p>
            </div>
        @endforeach

    </div>


    <div class="mt-8 max-w-4xl mx-auto">
        {{ $photos->links() }}
    </div>

    <button @click="open = true">Expand</button>

    <span class="text-red-500" x-show="open">
        Content...
    </span>
</div>
