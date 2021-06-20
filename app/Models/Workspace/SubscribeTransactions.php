<?php

namespace App\Models\Workspace;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscribeTransactions extends Model
{
    use HasFactory;

    protected $table = 'subscribe_transactions';

    protected $fillable = [
        'id_package',
        'id_user',
        'total_price',
        'status',
        'type',
        'expired_at',
    ];

    protected $hidden = [

    ];
}