<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Culturem extends Model
{
    use HasFactory;

    protected $table = 'culture_members';


    protected $guarded = false;
}
