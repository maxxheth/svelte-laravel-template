<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hello extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'start_date',
        'description'
    ];
}
