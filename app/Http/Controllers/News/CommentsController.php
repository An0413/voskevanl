<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\StoreCommentRequest;
use App\Models\Comments;
use App\Models\Main_info;
use App\Models\News;


class CommentsController extends Controller
{
    public function store(StoreCommentRequest $request, $news_id)
    {

        $data = $request->validated();

        $data['status'] = 2;
        $data['news_id'] = $news_id;

        Comments::create($data);

        return redirect()->back();
    }
}
