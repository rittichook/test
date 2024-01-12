<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'type',
        'title',
        'description',
        'start_date',
        'end_date',
        'time_start',
        'time_end',
        'all_day',
        'is_online',
        'online_url',
        'location',
        'location_url',
        'owner',
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
