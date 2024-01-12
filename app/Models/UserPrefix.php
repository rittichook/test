<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPrefix extends Model
{
    protected $table = 'user_prefix';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'name',
        'name_e',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];
}
