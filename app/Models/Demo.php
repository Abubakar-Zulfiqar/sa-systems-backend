<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
    use HasFactory;

    protected $table = 'demo';
    protected $primaryKey = 'id';
    protected $fillable = [
        'heading01',
        'list',
        'heading02',
        'description',
        'confirm',
        'heading03',
        'list03',
        'page',
    ];
}
