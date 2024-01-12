<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionPeriod extends Model
{
    protected $table = 'section_periods';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'section_subject_id',
        'is_online',
        'online_url',
        'room_id',
        'day_of_week',
        'time_start',
        'time_end',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
        'date_of_month',
    ];
}
