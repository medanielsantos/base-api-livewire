<div>
    <x-card title="Application Test">
        <div class="flex flex-col space-y-4">
            <div class="flex space-x-2">
                <x-input name="zipcode" label="Zipcode" />
                <x-primary-button wire:click="search" class="mt-4">Search</x-primary-button>
            </div>
            <div>
                <x-input name="address" label="Address" />
                <x-input name="city" label="City" />
            </div>
        </div>




    </x-card>

</div>
