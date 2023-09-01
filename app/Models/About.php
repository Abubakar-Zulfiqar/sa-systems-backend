<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'about';
    protected $primaryKey = 'id';
    protected $fillable = [
        'heading',
        'title01',
        'description01',
        'title02',
        'description02',
        'title03',
        'description03',
    ];
}
