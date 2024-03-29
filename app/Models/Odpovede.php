<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odpovede extends Model
{
    use HasFactory;
    protected $fillable = [
        'meno',
        'email',
        'comment_id',
        'odpoved',
    ];

}
