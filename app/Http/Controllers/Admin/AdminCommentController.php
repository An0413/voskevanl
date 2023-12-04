<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreRequest;
use App\Http\Requests\Admin\UpdateRequest;
use App\Http\Requests\Main\UpdateWorkerRequest;
use App\Models\Comments;
use App\Models\Images;
use App\Models\Itok;
use App\Models\Main_info;
use App\Models\News;
use App\Models\Status;
use App\Models\Worker;
use App\Models\WorkerPosition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function Sodium\compare;
use App\Helper;


class AdminCommentsController extends Controller
{
    public function index($news_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $comments = Comments::where('news_id', $news_id)->orderBy('id', 'desc')->get();
        $user_id = auth()->user()->getAuthIdentifier();
        $news = News::where('user_id', $user_id)->orderBy('id', 'desc')->get();
        $admin_info = Helper::getAdmin();

        return view('admin.news.comments', compact('user_id', 'news','admin_info', 'comments'));
    }

    public function delete($news_id)
    {
        if (!Auth::user()){
            return redirect('admin/login');
        }
        $comments = Comments::where('id', $news_id)->first();
        DB::table('comments')
            ->where('id', $news_id)
            ->update(['status' => 0]);

        return redirect()->route('news_list', $comments->news_id);
    }


}
