<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procurement extends Model
{
    use HasFactory;

    protected $table = 'procurement';
    protected $primaryKey = 'id';
    protected $fillable = [
        'heading',
        'description',
    ];
}