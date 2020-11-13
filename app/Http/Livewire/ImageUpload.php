<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

use Illuminate\Support\Str;

class ImageUpload extends Component
{
    use WithFileUploads;

    public $uploaded_image;
    public $filename;

    public function save()
    {
        $this->validate([
            'uploaded_image' => ['image', 'mimes:png,jpg,jpeg'],
        ]);
        $filename =
            time() .
            '-' .
            Str::lower(
                str_replace(
                    ' ',
                    '_',
                    $this->uploaded_image->getClientOriginalName()
                )
            );
        $this->filename = $this->uploaded_image->storeAs(
            'posts',
            $filename,
            'public'
        );
    }

    public function render()
    {
        return view('livewire.image-upload');
    }
}
