<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'gender',
        'tel1',
        'tel2',
        'tel3',
        'address',
        'building',
        'select_box',
        'content'
    ];
}
