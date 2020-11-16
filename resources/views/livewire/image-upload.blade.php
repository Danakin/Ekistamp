<div x-data="{ open: false }">
    <button @click="open = true">Use Image</button>
    {{ $filename }}
    @if ($uploaded_image)
    <p>
        image Preview:
        <img src="{{ $uploaded_image->temporaryUrl() }}" class="max-h-96 max-w-96">
    </p>
    @endif

    <div @click="open = false" :class="{ 'hidden': !open, 'flex': open }"
        class="fixed top-0 bottom-0 left-0 right-0 max-w-full max-h-full bg-gray-500 bg-opacity-50 items-center justify-center">
        <div class="bg-gray-100 p-16" @click.stop>
            @error('uploaded_image') <span class="font-bold text-red-600">{{ $message }}</span> @enderror
            <form wire:submit.prevent="save" class="flex flex-col">
                <label for="uploaded_image">Image</label>
                <input type="file" name="uploaded_image" id="uploaded_image" wire:model="uploaded_image">
                <input type="hidden" id="filename" name="filename" wire:model="filename"
                    :change="filename.value !== '' ? document.getElementById('image').value = filename.value : ''">
                <button type="submit">Save Image</button>
                @if ($uploaded_image)
                <p>
                    image Preview:
                    <img src="{{ $uploaded_image->temporaryUrl() }}" class="max-h-96 max-w-96">
                </p>
                @endif
            </form>
        </div>
    </div>
</div>

<script>

</script>
