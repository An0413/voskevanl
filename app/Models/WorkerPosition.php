<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkerPosition extends Model
{
    use HasFactory;
    protected $table = 'worker_positions';
    protected $guarded = [];
}
