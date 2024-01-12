<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeormMigration extends Model
{
    protected $table = 'typeorm_migration_table';
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected $fillable = [
        'id',
        'timestamp',
        'name',
    ];
}
