<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    use HasFactory;

    protected $table = 'mobile';
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
