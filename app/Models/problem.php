<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class problem extends Model
{
    use HasFactory;
    protected $fillable = [
        'carnum',
        'problem',
        'user_id',
        'path',
        'status'
    ];
    public function zayavki()
    {
        return $this->belongsTo(User::class);
    }
}
