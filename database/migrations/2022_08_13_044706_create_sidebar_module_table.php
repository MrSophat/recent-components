<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSidebarModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sidebar_module', function (Blueprint $table) {
            $table->increments('id');
            $table->char('name');
            $table->integer('parent_id');
            $table->char('link');
            $table->char('icon');
            $table->integer('sequence');
            $table->integer('code');
            $table->integer('icode');
            $table->integer('type');
            $table->boolean('status')->default('true');
            $table->boolean('is_deleted')->default('false');
            $table->integer('create_by')->default('1');
            $table->dateTime('create_date')->default('now()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sidebar_module');
    }
}
