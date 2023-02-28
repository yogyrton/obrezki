<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Announcement extends Model
{
    use HasFactory;
    use AsSource;
    use Filterable;

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

    protected $allowedSorts = [
        'title',
        'status',
        'type_transaction',
        'condition',
        'descriptions',
        'price',
    ];

    protected $allowedFilters = [
        'title',
    ];



    /*public function user()
    {
        return $this->belongsTo(User::class);
    }*/
}
