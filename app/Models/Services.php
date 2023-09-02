<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $fillable = [
        'page',
        'heading',
        'description',
        'title01',
        'description01',
        'title02',
        'description02',
        'title03',
        'description03',
        'title04',
        'description04',
        'title05',
        'description05',
        'title06',
        'description06',
    ];
}
