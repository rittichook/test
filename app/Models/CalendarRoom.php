<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalendarRoom extends Model
{
    protected $table = 'calendar_room';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'calendar_id',
        'room_id',
    ];
}
