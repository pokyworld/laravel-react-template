<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_addresses', function (Blueprint $table) {
            $table->unsignedInteger('account_id');
            $table->unsignedInteger('address_id');
            $table->timestamps();
            
            $table->primary(['account_id', 'address_id'],  'pkAccountAddresses');

            $table->foreign('account_id')
                ->references('id')->on('accounts')
                ->onDelete('cascade');
            
            $table->foreign('address_id')
                ->references('id')->on('addresses')
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
        Schema::dropIfExists('account_addresses');
    }
}
