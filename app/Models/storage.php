<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class storage extends Model
{

    protected $table = 'storage';
    protected $primaryKey = 'bookid';
    protected $fillable = ['category','title','stock'];
}
