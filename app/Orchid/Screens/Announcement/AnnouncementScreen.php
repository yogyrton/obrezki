<?php

namespace App\Orchid\Screens\Announcement;

use App\Models\Announcement;
use App\Orchid\Layouts\Announcement\AnnouncementTable;
use Orchid\Screen\Screen;

class AnnouncementScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'announ' => Announcement::filters()->defaultSort('created_at', 'desc')->paginate(20),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Объявления';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            AnnouncementTable::class
        ];
    }
}
