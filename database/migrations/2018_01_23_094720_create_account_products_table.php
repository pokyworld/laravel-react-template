<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_products', function (Blueprint $table) {
            $table->unsignedInteger('account_id');
            $table->unsignedInteger('product_id');
            $table->timestamps();
            
            $table->primary(['account_id', 'product_id'],  'pkAccountProducts');

            $table->foreign('account_id')
            ->references('id')->on('accounts')
            ->onDelete('cascade');

            $table->foreign('product_id')
                ->references('id')->on('products')
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
        Schema::dropIfExists('account_products');
    }
}
