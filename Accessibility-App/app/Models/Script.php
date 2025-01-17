<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Script extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
    ];

    public function contents()
    {
        return $this->hasMany(Content::class);
    }
}
