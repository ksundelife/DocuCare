<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('specialist_id')
                ->constrained('specialists')
                ->onUpdate('cascade');
            $table->foreignId('user_id')->nullable()
                ->constrained('users')
                ->onUpdate('cascade');
            $table->foreignId('book_id')->unique()
                ->constrained('books')
                ->onUpdate('cascade');
            $table->enum('value',[0,1,2,3,4,5]);
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->text('body_text');
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
        Schema::dropIfExists('feedback');
    }
}
