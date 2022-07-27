<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContainerModel extends Model
{
    use HasFactory;
    protected $table = "container";
    protected $fillable = ['nome'];
}
