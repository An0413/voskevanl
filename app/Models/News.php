<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'news';


    protected $guarded = false;

    public function user_info()
    {
        return $this->hasOne(UserInfo::class, 'user_id', 'user_id');
    }

    public function news_status(){
        return $this->hasOne(Status::class, 'status_id', 'status');
    }
}
