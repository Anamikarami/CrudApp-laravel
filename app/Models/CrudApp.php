<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CrudApp extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'gender',
        'age',
        'occupation',
        'image',
        'date',
        'color',
        'about',
        'check_me'
    ];
}
