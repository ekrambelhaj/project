<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mangmentuser extends Model
{
    use HasFactory;
    protected $fillable=['username','function','specialization','phone','type','status'];
}
