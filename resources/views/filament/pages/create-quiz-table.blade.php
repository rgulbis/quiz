<x-filament::page>
    {{ $this->form }}

    <div class="mt-6">
        <x-filament::button
            type="button"
            wire:click="createTable"
            wire:loading.attr="disabled"
        >
            Create Table
        </x-filament::button>
    </div>
</x-filament::page>
