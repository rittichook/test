<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Content extends Model
{
    protected $table = 'content';
    protected $primaryKey = 'content_id';
    public $incrementing = false;
    protected $keyType = 'string';

    // protected $fillable = [
    //     'id',
    //     'title',
    //     'thumbnail_image',
    //     'description',
    //     'number_clicks',
    //     'status',
    //     'active',
    //     'category_id',
    //     'published_date',
    //     'created_at',
    //     'created_by',
    //     'updated_at',
    //     'updated_by',
    //     'deleted_at',
    //     'deleted_by',
    // ];
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->content_id = Str::uuid()->toString();
        });
    }
}
