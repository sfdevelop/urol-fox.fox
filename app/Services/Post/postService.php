<?php

namespace App\Services\Post;

use App\Model\Post;

class postService
{
    public function indexPost(){

        $paginator = Post::withTranslation()
            ->with('media')
            ->translated('en')
            ->oldest('sort')
            ->latest('id')
            ->paginate(15);

        return $paginator;
    }

    public function storePost($request){

        $data = $request->all();
        $item = new Post($data);
        $item->save();

        return $item;
    }

    public function editPost($id){

        $item = Post::FindorFail($id);
        $item->update();

        return $item;
    }
}
