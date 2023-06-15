<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Church extends Model
{
    use HasFactory;

    protected $table = 'churches';
    protected $guarded = [];

    public function church_status(){
        return $this->hasOne(Status::class, 'status_id', 'status');
    }
}
