<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UIKit extends Model
{
    use HasFactory;

    protected $table = 'uikit';

    protected $fillable = [
        'name',
        'id_category',
        'thumbnail',
        'url_file',
    ];

    protected $hidden = [

    ];
}