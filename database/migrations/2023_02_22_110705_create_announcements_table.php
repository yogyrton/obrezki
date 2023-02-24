<?php

use App\Enums\AnnouncementType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->comment('название товара');

            $table->integer('status')->default(AnnouncementType::Moderation)->comment('статус объявления');

            $table->string('slug')->comment('слаг тайтла');

            $table->integer('type_transaction')->comment('тип сделки (куплю/продам)');
            $table->integer('condition')->comment('состояние товара (бу/новый)');

            $table->string('descriptions')->comment('описание');
            $table->decimal('price', 5)->nullable()->comment('цена');
            $table->string('unit')->nullable()->comment('ед.изм');

            //$table->foreignIdFor(User::class)->constrained()->cascadeOnDelete(); // связь с юзером
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('announcements');
    }
};
