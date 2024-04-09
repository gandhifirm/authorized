<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserInfo extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'user_infos';

    protected $fillable = [
        'user_id',
        'full_name',
        'front_degree',
        'back_degree',
        'phone_number',
        'slug',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'full_name'
            ]
        ];
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function user_info() {
        return $this->belongsTo(UserInfo::class);
    }
}