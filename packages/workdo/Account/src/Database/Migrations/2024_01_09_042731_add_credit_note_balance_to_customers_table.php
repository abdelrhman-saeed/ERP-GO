<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accounting_pkg_customers', function (Blueprint $table) {
            if (!Schema::hasColumn('accounting_pkg_customers', 'credit_note_balance')) {
                $table->string('credit_note_balance')->after('balance')->default('0.00');
            }
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accounting_pkg_customers', function (Blueprint $table) {

        });
    }
};
