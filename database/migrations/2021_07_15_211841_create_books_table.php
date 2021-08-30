<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('specialist_id')
                ->constrained('specialists')
                ->onUpdate('cascade');
            $table->foreignId('user_id')->nullable()
                ->constrained('users')
                ->onUpdate('cascade');
            $table->foreignId('schedule_id')
                ->constrained('schedules')
                ->onUpdate('cascade');
            $table->dateTime('datetime');
            $table->string('name')->nullable();
            $table->string('second_name')->nullable();
            $table->string('surname')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('description');
            $table->integer('age')->nullable();
            $table->boolean('is_over')->default(false);
            $table->timestamps();
            $table->unique(['specialist_id','datetime']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
