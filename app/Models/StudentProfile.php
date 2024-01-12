<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Prefix;

class StudentProfile extends Model
{
    use HasFactory;

    protected $table = 'student_profile';

    protected $fillable = [
        'user_id',
        'student_code',
        'user_prefix_id',
        'first_name',
        'last_name',
        'first_name_e',
        'last_name_e',
        'email',
        'phone',
        'faculty_id',
        'branch_id',
        'birthday',
        'avatar',
        // 'users_uuid',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid()->toString();
        });
    }

    public function prefix()
    {
        return $this->belongsTo(Prefix::class, 'user_prefix_id');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

}

