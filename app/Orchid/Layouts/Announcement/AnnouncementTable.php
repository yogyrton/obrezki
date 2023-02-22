<?php

namespace App\Orchid\Layouts\Announcement;

use App\Models\Announcement;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class AnnouncementTable extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'announ';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('title', 'Название')->sort()->filter(TD::FILTER_TEXT),

            TD::make('status', 'Статус объявления')->sort()->render(function (Announcement $announcement) {
                if ($announcement->status === 0) {
                    return 'На модерации';
                } elseif ($announcement->status === 1) {
                    return 'Активно';
                } elseif ($announcement->status === 1) {
                    return 'Неактивно';
                } else {
                    return 'Черновик';
                }
            }),

            TD::make('type_transaction', 'Тип сделки')->sort()->render(function (Announcement $announcement) {
                return $announcement->type_transaction ? 'Продать' : 'Купить';
            }),

            TD::make('condition', 'Состояние товара')->sort()->render(function (Announcement $announcement) {
                return $announcement->condition ? 'Б/У' : 'Новый';
            }),

            TD::make('descriptions', 'Описание')->sort(),
            TD::make('price', 'Цена')->sort(),
            TD::make('unit', 'ед.изм.'),
        ];
    }


}
