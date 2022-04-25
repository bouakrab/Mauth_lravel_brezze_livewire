<form>
    <div>
        <x-label for="exampleFormControlx-input2">Tarif ero</x-label>
        <x-input class="mt-1 w-full" type="text" id="exampleFormControlx-input2" wire:model="tar_ero" />
        @error('tar_ero')
        <span class="text-rose-700">{{ $message }}</span>
        @enderror
    </div>
    <x-button wire:click.prevent="update()"  class="btn btn-primary">Update</x-button>
    <x-button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</x-button>
</form>



