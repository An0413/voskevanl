<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sights extends Model
{
    use HasFactory;

    protected $table = 'sights';
    protected $guarded = [];

    public function sights_status(){
        return $this->hasOne(Status::class, 'status_id', 'status');
    }
}
