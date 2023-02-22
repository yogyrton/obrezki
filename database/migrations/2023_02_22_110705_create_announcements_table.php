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
            $table->string('title', 100);   // название товара

            $table->integer('status')->default(AnnouncementType::Moderation);  // статус объявления

            $table->string('slug');    // слаг тайтла

            $table->integer('type_transaction'); // тип сделки (куплю/продам)
            $table->integer('condition');    // состояние товара (бу/новый)

            $table->string('descriptions');    // описание
            $table->double('price')->nullable();    // цена
            $table->string('unit')->nullable();    // ед.изм

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
