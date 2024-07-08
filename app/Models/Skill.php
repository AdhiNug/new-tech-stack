<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $casts = [
        'description' => 'string',
        'detail_skill' => 'array',
    ];

    public function getDescriptionAttribute($value)
    {
        return $value ?: 'default description';
    }

    public function getDetailSkillAttribute($value)
    {
        return json_decode($value, true) ?: [];
    }
}
