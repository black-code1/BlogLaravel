<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogFilterRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use JetBrains\PhpStorm\NoReturn;


class BlogController extends Controller
{

    #[NoReturn] public function index(BlogFilterRequest $request): View
    {
        dd($request->validated());
        return view('blog.index', [
            'posts' => Post::paginate(1)
        ]);
    }

    public function show(string $slug, string $id): RedirectResponse|View
    {
        $post = Post::findOrFail($id);
        if ($post->slug !== $slug) {
            return to_route('blog.show', ['slug' => $post->slug, 'id' => $post->id]);
        }

        return view('blog.show', [
            'post' => $post
        ]);
    }
}
