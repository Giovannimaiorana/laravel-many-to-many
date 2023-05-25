<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->unsignedBigInteger('type_id')->nullable()->after('id');
            $table->foreign('type_id')->references('id')->on('projects')->onDelete('SET NULL');
        });
    }


    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->$table->dropForeign('projects_type_id_foreign');
            $table->dropColumn('type_id');
        });
    }
};
