<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Development extends Model
{
    use HasFactory;

    protected $table = 'development';
    protected $primaryKey = 'id';
    protected $fillable = [
        'heading',
        'description',
        'link01',
        'link02',
        'link03',
        'link04',
        'link05',
        'link06',
    ];
}