<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();

            $table->string('slug')->unique();
            $table->integer('parent_id')->default(0);
            $table->integer('level');
            $table->string('title');
            $table->string('main_image')->nullable();
            $table->string('secondary_image')->nullable();
            $table->integer('position')->nullable();
            $table->tinyInteger('main')->default(0);
            $table->tinyInteger('featured')->default(0);
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->default('')->nullable();
            $table->longText('meta_keyword')->default('')->nullable();
            $table->string('meta_robots')->nullable();
            $table->tinyInteger('active')->default(0);
            $table->string('author')->nullable();

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
        Schema::dropIfExists('categorias');
    }
}
