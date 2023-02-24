<?php

namespace App\Orchid\Filters;

use App\Enums\AnnouncementType;
use App\Enums\ConditionType;
use App\Enums\TransactionType;
use Illuminate\Database\Eloquent\Builder;
use Orchid\Filters\Filter;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Select;

class AnnouncementFilter extends Filter
{
    /**
     * The displayable name of the filter.
     *
     * @return string
     */
    public function name(): string
    {
        return 'Фильтр';
    }

    /**
     * The array of matched parameters.
     *
     * @return array|null
     */
    public function parameters(): ?array
    {
        return [
            'status',
            'type_transaction',
            'condition',
        ];
    }

    /**
     * Apply to a given Eloquent query builder.
     *
     * @param Builder $builder
     *
     * @return Builder
     */
    public function run(Builder $builder): Builder
    {
        $status = $this->request->get('status');
        $type_transaction = $this->request->get('type_transaction');
        $condition = $this->request->get('condition');

        if (isset($status)) {
            $builder->where('status', $status);
        }

        if (isset($type_transaction)) {
            $builder->where('type_transaction', $type_transaction);
        }

        if (isset($condition)) {
            $builder->where('condition', $condition);
        }

        return $builder;
    }

    /**
     * Get the display fields.
     *
     * @return Field[]
     */
    public function display(): iterable
    {
        return [
            Select::make('status')
                ->options([
                    AnnouncementType::Moderation => 'На модерации',
                    AnnouncementType::Active => 'Активно',
                    AnnouncementType::NotActive => 'Неактивно',
                    AnnouncementType::Draft => 'Черновик',
                ])
                ->empty()
                ->value($this->request->get('status'))
                ->title('Статус'),

            Select::make('type_transaction')
                ->options([
                    TransactionType::Buy => 'Купить',
                    TransactionType::Sell => 'Продать',
                ])
                ->empty()
                ->value($this->request->get('type_transaction'))
                ->title('Тип сделки'),

            Select::make('condition')
                ->options([
                    ConditionType::New => 'Новый',
                    ConditionType::Used => 'Б/У',
                ])
                ->empty()
                ->value($this->request->get('condition'))
                ->title('Состояние товара')
        ];
    }
}
