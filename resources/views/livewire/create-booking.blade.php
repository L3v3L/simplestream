<div class="lg:col-span-4 p-5 bg-white shadow-md grid gap-6 "
    x-data="{
    'start_time': @entangle('start_time').defer,
    'end_time': @entangle('end_time').defer,
}"
    x-init="
        flatpickr(document.getElementById('start_time'), {
                    enableTime: true,
                    dateFormat: 'Y-m-d H:i',
                    onChange: function (selectedDates, dateStr, instance) {
                        this.start_time = dateStr;
                    }
                });

        flatpickr(document.getElementById('end_time'), {
            enableTime: true,
            dateFormat: 'Y-m-d H:i',
            onChange: function (selectedDates, dateStr, instance) {
                this.end_time = dateStr;
            }
        });
        ">
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
                <input class="grow" class="flatpickr flatpickr-input active" type="text" placeholder="Select Date.." readonly="readonly" x-model="start_time" id="start_time">
            </label>
            <p class="text-sm text-red-600 mt-2">@error('start_time') {{ $message }} @enderror</p>
        </div>
        <div>
            <label class="input input-bordered flex items-center gap-2">
                <input type="datetime-local" class="grow" placeholder="End date" x-model="end_time" id="end_time" />
            </label>
            <p class="text-sm text-red-600 mt-2">@error('end_time') {{ $message }} @enderror</p>
        </div>
    </div>

    <div>
        <button class="btn btn-primary btn-block" wire:click="save">Save</button>
    </div>
</div>