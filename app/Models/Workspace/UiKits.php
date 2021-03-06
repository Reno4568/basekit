<?php

namespace App\Models\Workspace;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UiKits extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = 'ui_kits';
    public $timestamps = true;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'id_category',
        'thumbnail',
        'url_file',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // one to many
    public function category()
    {
        return $this->belongsTo('App\Models\MasterData\Category', 'id_category', 'id');
    }
}
