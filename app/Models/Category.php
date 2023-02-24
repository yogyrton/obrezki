<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Category extends Model
{
    use HasFactory;
    use AsSource;
    use Filterable;

    protected $fillable = [
        'title',
        'category_id',
    ];

    protected $allowedSorts = [
        'title',
        'category_id',
    ];

    protected $allowedFilters = [
        'title',
    ];

    public function parent()
    {
        return $this->belongsTo(self::class, 'category_id');
    }

    public function children()
    {
        return $this->hasMany(self::class, 'category_id');
    }
}
