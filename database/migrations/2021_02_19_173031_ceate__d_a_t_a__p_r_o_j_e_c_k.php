<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CeateDATAPROJECK extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('DATA', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('text_header');
            $table->text('text');
            $table->string('id_teacher');
            $table->string('save_move');
            $table->string('wiuo');
            $table->string('like_po');
            $table->string('cament');
            $table->string('url_pikcher');
            $table->string('url_movese');
            $table->string('Pole');
            $table->string('name_Post');
            $table->string('meta');
            $table->string('namber_movis');
            $table->string('namber_sm');
            $table->string('save_clayent');
            $table->string('ok');
            $table->string('url');
            $table->string('Groop');
            $table->string('family_teacher');
            $table->string('vaseyat');
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
        //
    }
}
