<?php

namespace App\Http\Controllers\Everyday;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\StoreCommentRequest;
use App\Models\Comments;
use App\Models\EverydayComments;
use App\Models\Main_info;
use App\Models\News;


class CommentController extends Controller
{
    public function store(StoreCommentRequest $request, $news_id)
    {

        $data = $request->validated();

        $data['status'] = 1;
        $data['news_id'] = $news_id;

        EverydayComments::create($data);

        return redirect()->back();
    }
}
