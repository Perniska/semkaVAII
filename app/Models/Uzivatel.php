<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Uzivatel extends  Model
{
    use HasFactory ;


    protected $table = 'uzivatels';

    protected $fillable = [
        'meno',
        'email',
        'heslo',

    ];
    protected $hidden = [
        'heslo',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'heslo' => 'hashed',
    ];


}
