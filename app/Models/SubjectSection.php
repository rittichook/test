<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubjectSection extends Model
{
    protected $table = 'subject_sections';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'subject_id',
        'name',
        'description',
        'owner',
        'section_start',
        'section_end',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
        'is_calendar',
    ];
}
