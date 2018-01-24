<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountUsersTable extends Migration
{
    public function up()
    {
        Schema::create('account_users', function (Blueprint $table) {
            $table->unsignedInteger('account_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();
            
            $table->primary(['account_id', 'user_id'],  'pkAccountUsers');

            $table->foreign('account_id')
            ->references('id')->on('accounts')
            ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_users');
    }
}
