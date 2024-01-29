<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tavmeres extends Model
{
    use HasFactory;
    public $table = "tav_meresek";
    public $primaryKey = "t_id";
    public $timestamps = false;
    public $guarded = [];
}
