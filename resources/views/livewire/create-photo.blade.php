<div>
    <form wire:submit="save">
        <div>
            <label>
                Title
            </label>
            <input type="text" name="title" wire:model="form.title" />
        </div>

        <div>
            <label>
                Description
            </label>
            <input type="text" name="description" wire:model="form.description" />
        </div>
    </form>
</div>
