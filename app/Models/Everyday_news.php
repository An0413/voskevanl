<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Everyday_news extends Model
{
    use HasFactory;

    protected $table = 'everyday_news';
    protected $guarded = [];

    public function gallery_status(){
        return $this->hasOne(Status::class, 'status_id', 'status');
    }

    public function news_status(){
        return $this->hasOne(Status::class, 'status_id', 'status');
    }



}
