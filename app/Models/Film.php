<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'director_id'
    ];
    public function director()
    {
        return $this->belongsTo(Director::class);
    }
}
