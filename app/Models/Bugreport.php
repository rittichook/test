<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bugreport extends Model
{
    protected $table = 'helpdesk';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    // protected $fillable = [

    // ];
    protected $guarded = [];
}
