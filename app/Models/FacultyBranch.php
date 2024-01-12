<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacultyBranch extends Model
{
    protected $table = 'faculty_branch';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'faculty_id',
        'name',
        'name_e',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
        'code',
    ];
}
