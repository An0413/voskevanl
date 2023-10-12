<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comments extends Model
{
    use HasFactory;

    protected $table = 'comments';


    protected $guarded = false;

    public function com_status(){
        return $this->hasOne(Status::class, 'status_id', 'status');
    }

    public function user_info()
    {
        return $this->hasOne(UserInfo::class, 'user_id', 'user_id');
    }
}
