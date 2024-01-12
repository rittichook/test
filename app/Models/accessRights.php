<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class accessRights extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $table = 'access_rights'; // ชื่อตารางในฐานข้อมูล
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
