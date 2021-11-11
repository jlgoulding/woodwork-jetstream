<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Livewire\Component;

class NewPost extends Component
{

    public $title,$slug,$content, $category;

    protected $rules = [
        'category' => 'required',
//        'email' => 'required|email',
    ];

    public function savePost(Request $request){

        $this->validate();

        $post = Post::firstOrCreate([
                'title'=> $this->title,
                'slug' => $this->slug,
                'content' => $this->content,
                'user_id' => $request->user()->id,
                'category' => $this->category
        ]);
        $post->save();
        $this->emit('savePost');
        $this->reset();
    }

    public function render()
    {
        $categories = Category::all();


        return view('livewire.new-post',['categories'=> $categories]);
    }
}
