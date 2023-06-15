<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buildings extends Model
{
    use HasFactory;

    protected $table = 'buildings';


    protected $guarded = false;

    public function buildings_status(){
        return $this->hasOne(Status::class, 'status_id', 'status');
    }
}
