<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\StoreCommentRequest;
use App\Models\Comments;


class CommentsController extends Controller
{
    public function store(StoreCommentRequest $request)
    {
        dd(1);
        $data = $request->validated();

        $data['status'] = 2;
        $data['news_id'] = $news_id;

        Comments::create($data);

        return json_encode(['ok' => 'Շնորհակալություն']);
    }
}
