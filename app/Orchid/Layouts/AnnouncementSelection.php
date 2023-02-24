<?php

namespace App\Orchid\Layouts;

use App\Orchid\Filters\AnnouncementFilter;
use Orchid\Filters\Filter;
use Orchid\Screen\Layouts\Selection;

class AnnouncementSelection extends Selection
{
    /**
     * @return Filter[]
     */
    public function filters(): iterable
    {
        return [
            AnnouncementFilter::class,
        ];
    }
}
