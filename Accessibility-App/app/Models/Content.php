<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'script_id',
        'image'
    ];

    public function script()
    {
        return $this->belongsTo(Script::class);
    }
}
