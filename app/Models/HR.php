<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HR extends Model
{
    use HasFactory;

    protected $table = 'hr';
    protected $primaryKey = 'id';
    protected $fillable = [
        'heading',
        'description',
    ];
}
