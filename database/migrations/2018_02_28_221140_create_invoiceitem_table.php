<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceitemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Invoice_Items', function (Blueprint $table) {

            $table->increments('id');
            $table->string('description');
            $table->integer('qty');
            $table->double('unit_price');
            $table->double('discount')->nullable();
            $table->double('vat_amount');
            $table->double('vat');
            $table->double('amount_excl_vat');
            $table->integer('invoice_id')->unsigned()->nullable();

            $table->foreign('invoice_id')->references('id')->on('invoices');

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
        Schema::dropIfExists('InvoiceItem');
    }
}
