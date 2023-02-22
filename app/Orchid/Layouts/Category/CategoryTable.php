<?php

namespace App\Orchid\Layouts\Category;

use App\Models\Category;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CategoryTable extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'categories';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('category_id', 'Родительская категория')->render(function (Category $category){
                return $category->category_id ? $category->parent->title : 'Родительская категория';
            })->sort(),
            TD::make('title', 'Название')->sort()->filter(TD::FILTER_TEXT),
        ];
    }
}
