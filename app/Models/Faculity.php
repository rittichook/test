<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Faculity extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $casts = [
        'id' => 'uuid',
    ];
    protected $table = 'faculty';

    protected $fillable = [
        'name',
        'name_e',
        'status',
    ];

    public function departments()
    {
        return $this->hasMany(Department::class, 'faculty_id');
    }
}
