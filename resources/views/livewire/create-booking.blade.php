<div class="lg:col-span-4 p-5 bg-white shadow-md grid gap-6 ">
    <h1 class="text-xl">Add booking</h1>

    <div class="grid gap-5">
        <div>
            <label class="input input-bordered flex items-center gap-2">
                <input type="text" class="grow" placeholder="Title" wire:model.defer="title" />
            </label>
            <p class="text-sm text-red-600 mt-2">@error('title') {{ $message }} @enderror</p>
        </div>
        <div>
            <label class="input input-bordered flex items-center gap-2">
                <input type="datetime-local" class="grow" placeholder="Start date" wire:model.defer="start_time" />
            </label>
            <p class="text-sm text-red-600 mt-2">@error('start_time') {{ $message }} @enderror</p>
        </div>
        <div>
            <label class="input input-bordered flex items-center gap-2">
                <input type="datetime-local" class="grow" placeholder="End date" wire:model.defer="end_time" />
            </label>
            <p class="text-sm text-red-600 mt-2">@error('end_time') {{ $message }} @enderror</p>
        </div>
    </div>

    <div>
        <button class="btn btn-primary btn-block" wire:click="save">Save</button>
    </div>
</div>