<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'status',
        'slug',
        'type_transaction',
        'condition',
        'descriptions',
        'price',
        'unit',
    ];

    /*public function user()
    {
        return $this->belongsTo(User::class);
    }*/
}
