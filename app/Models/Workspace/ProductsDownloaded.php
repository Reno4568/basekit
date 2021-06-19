<?php

namespace App\Models\Workspace;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsDownloaded extends Model
{
    use HasFactory;

    protected $table = 'products_downloadeds';

    protected $fillable = [
        'id_product',
        'id_user'
    ];

    protected $hidden = [

    ];
}