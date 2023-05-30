<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Post $post, UpdateRequest $updateRequest)
    {
        $data = $updateRequest->validated();
        $post->update($data);
        return redirect()->route('admin.posts.show', compact('post'));
    }
}
