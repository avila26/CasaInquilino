<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dueño extends Model
{
    use HasFactory;

    protected $table='dueños';
    public $timestamps=false;
}
