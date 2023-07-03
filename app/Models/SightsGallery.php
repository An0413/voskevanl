<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SightsGallery extends Model
{
    use HasFactory;

    protected $table = 'sights_galleries';
    protected $guarded = [];

    public function gallery_status(){
        return $this->hasOne(Status::class, 'status_id', 'status');
    }
}
