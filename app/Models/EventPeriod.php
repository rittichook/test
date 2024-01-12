<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventPeriod extends Model
{
    protected $table = 'event_period';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'event_id',
        'day_of_week',
        'date_of_month',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];
}
