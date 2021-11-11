<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class AllPosts extends Component
{
    use WithPagination;

    protected $listeners = ['savePost' => 'refreshAllPosts'];

    public function refreshAllPosts() {
        $post = Post::orderBy('created_at','desc')->paginate(5);
        return view('livewire.all-posts', [ 'posts' => $post]);
    }

    public function render()
    {
        $post = Post::orderBy('created_at','desc')->paginate(5);

        return view('livewire.all-posts', [ 'posts' => $post]);
    }
}
