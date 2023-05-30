<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\UpdateRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Tag $tag, UpdateRequest $updateRequest)
    {
        $data = $updateRequest->validated();
        $tag->update($data);
        return redirect()->route('admin.tags.show', compact('tag'));
    }
}
