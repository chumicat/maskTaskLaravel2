<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('name', 100)->comment('求職者姓名');
            $table->string('phoneNumber', 10)->comment('求職者手機');
            $table->string('birthday', 8)->comment('求職者生日');
            $table->string('address', 100)->comment('求職者地址');
            $table->text('resume')->comment('求職者自傳');
            $table->timestamps();
            // php artisan migrate
            // php artisan migrate:status
            // php artisan migrate:rollback

            // php artisan make:seeder resumeSeeder
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resume');
    }
}
