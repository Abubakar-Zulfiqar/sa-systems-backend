<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plot extends Model
{
    use HasFactory;

    protected $table = 'plot';
    protected $primaryKey = 'id';
    protected $fillable = [
        'heading',
        'description',
    ];
}
