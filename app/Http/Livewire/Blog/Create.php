<?php

namespace App\Http\Livewire\Blog;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{

    use WithFileUploads;
    public $photo, $title, $text;


    public function render()
    {

        return view('livewire.blog.create');
    }
    public function kaydet()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
            'title' => 'required',
            'text' => 'required'
        ]);

        $path =  $this->photo->store('public/blogs');
        $blog = new Blog();
        $blog->title = $this->title;
        $blog->text = $this->text;
        $blog->photo = $path;
        $blog->user_id = Auth::id();
        $blog->save();
        $this->clear();
        $this->emit('blogGuncelle');
    }
    public function clear()
    {

        $this->photo = '';
        $this->title = '';
        $this->text = '';
    }
}
