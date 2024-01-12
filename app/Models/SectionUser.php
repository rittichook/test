<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionUser extends Model
{
    protected $table = 'section_users';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'section_id',
        'user_id',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];
}
