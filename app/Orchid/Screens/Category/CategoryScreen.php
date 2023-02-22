<?php

namespace App\Orchid\Screens\Category;

use App\Http\Requests\CreateCategoryRequest;
use App\Models\Category;
use App\Orchid\Layouts\Category\CategoryTable;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class CategoryScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'categories' => Category::filters()->defaultSort('category_id', 'asc')->get(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Категории';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            ModalToggle::make('Добавить категорию')->modal('createCategory')->method('create')
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            CategoryTable::class,
            Layout::modal('createCategory', Layout::rows([
                Input::make('title')->required()->title('Название категории'),

                Relation::make('category_id')
                ->fromModel(Category::class, 'title')
                ->title('Родительская категория (при пустом поле будет являться родительской)')

            ]))->title('Добавление категории')->applyButton('Создать'),
        ];
    }

    public function create(CreateCategoryRequest $request)
    {
        $data = $request->validated();
        Category::query()->create($data);

        Toast::info('Категория добавлена');
    }
}
