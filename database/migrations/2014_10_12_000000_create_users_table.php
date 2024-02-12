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
            
            // $table->string('name'); // 変更前
            $table->string('name', 128);    // 変更後
            
            // $table->string('email')->unique(); // 変更前
            $table->string('email', 254)->unique(); // 変更後

            $table->datetime('email_verified_at')->nullable();
            
            // $table->string('password'); // 変更前
            $table->string('password', 255); // 変更後
            
            $table->rememberToken();
            
            $table->dateTime('created_at')->useCurrent();            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();
            
            $table->collation = 'utf8mb4_bin';
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
