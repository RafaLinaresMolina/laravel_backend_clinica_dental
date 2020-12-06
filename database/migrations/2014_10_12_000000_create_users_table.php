<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('roleId')->default(1);
            $table->string('lastName');
            $table->string('email')->unique();
            $table->boolean('covidPassed')->default(false);
            $table->string('address');
            $table->timestamp('createdAt')->useCurrent = true;
            $table->string('password');
            $table->integer('status')->default(1);
            $table->string('token')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
