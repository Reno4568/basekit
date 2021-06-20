<?php

namespace App\Models\Workspace;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscribePackages extends Model
{
    use HasFactory;

    protected $table = 'subscribe_packages';

    protected $fillable = [
        'name',
        'price',
        'month_length',
    ];

    protected $hidden = [

    ];
}