<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $casts = [
        'id' => 'uuid',
    ];

    protected $table = 'faculty_branch';

    protected $fillable = [
        'faculty_id',
        'name',
        'name_e',
        'status',
        'code',
    ];

    public function faculity()
    {
        return $this->belongsTo(Faculity::class, 'faculty_id');
    }
}

