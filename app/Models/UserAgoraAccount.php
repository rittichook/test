<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAgoraAccount extends Model
{
    protected $table = 'user_agora_accounts';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    // protected $fillable = [
    //     'id',
    //     'password',
    //     'display_name',
    //     'status',
    //     'created_at',
    //     'created_by',
    //     'updated_at',
    //     'updated_by',
    //     'deleted_at',
    //     'deleted_by',
    //     'username',
    // ];
    protected $guarded = [];

}
