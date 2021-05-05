<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_profiles', function (Blueprint $table) {
            $table->id();
            $table->string("profile_picture_url")->nullable();
            $table->string("staff_position")->nullable();
            $table->string("first_name")->nullable();
            $table->string("last_name")->nullable();
            $table->date("date_of_birth")->nullable();
            $table->string("address")->nullable();
            $table->string("phone", 25)->nullable();
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
        Schema::dropIfExists('admin_profiles');
    }
}
