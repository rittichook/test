<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calendars extends Model
{
    protected $table = 'calendars';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'type',
        'code',
        'title',
        'description',
        'event_id',
        'section_id',
        'is_online',
        'online_url',
        'location',
        'location_url',
        'owner',
        'start_date',
        'end_date',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];
}
