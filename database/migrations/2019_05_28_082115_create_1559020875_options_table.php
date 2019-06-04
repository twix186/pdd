<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1559020875OptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('options')) {
            Schema::create('options', function (Blueprint $table) {
                $table->increments('id');
                $table->string('text');
                $table->int('is_correct');
                $table->integer('question_id')->unsigned();
                $table->foreign('question_id')->references('id')->on('questions');
                
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('options');
    }
}
