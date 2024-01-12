<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventRoom extends Model
{
    protected $table = 'event_room';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'room_id',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
        'event_id',
    ];
}
