<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'gallery';
    protected $guarded = [];

    public function gallery_status(){
        return $this->hasOne(Status::class, 'status_id', 'status');
    }


}
