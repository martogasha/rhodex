<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveUniqueAndMakeColumnNullableOnUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::table('users', function (Blueprint $table) {
                // Drop the unique constraint
                $table->dropUnique(['user_email']);
                $table->dropUnique(['user_phone']);

                // Make the column nullable
                $table->string('user_email')->nullable()->change();
                $table->string('user_phone')->nullable()->change();
                // Or use the appropriate column type, e.g., ->integer(), ->text(), etc.
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
