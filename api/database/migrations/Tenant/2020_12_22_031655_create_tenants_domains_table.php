<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants_domains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('tenant_id')->unsigned();
            $table->string('uuid')->unique();
            $table->timestamps();
        });

        Schema::table('tenants_domains', function($table) {
            $table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenants_domains');
    }
}
