<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Everyday extends Model
{
    use HasFactory;

    protected $table = 'everyday';
    protected $guarded = [];

    public function gallery_status(){
        return $this->hasOne(Status::class, 'status_id', 'status');
    }


}
