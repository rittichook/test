<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalendarUsers extends Model
{
    protected $table = 'calendar_users';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'calendar_id',
        'user_id',
    ];
}
