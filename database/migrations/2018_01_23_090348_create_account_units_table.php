<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountUnitsTable extends Migration
{
    public function up()
    {
        Schema::create('account_units', function (Blueprint $table) {
            $table->unsignedInteger('account_id');
            $table->unsignedInteger('unit_id');
            $table->timestamps();
            
            $table->primary(['account_id', 'unit_id'],  'pkAccountUnits');

            $table->foreign('account_id')
            ->references('id')->on('accounts')
            ->onDelete('cascade');

            $table->foreign('unit_id')
                ->references('id')->on('units')
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
        Schema::dropIfExists('account_units');
    }
}
