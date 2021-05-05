<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string("first_name")->nullable();
            $table->string("last_name")->nullable();
            $table->date("date_of_birth")->nullable();
            $table->string("address")->nullable();
            $table->string("phone", 25)->nullable();
            $table->string("profile_picture_url")->nullable();
            $table->string("extend_profile_type")->nullable();
            $table->unsignedInteger("extend_profile_id")->nullable();

//            $table->unsignedInteger("account_id");
//            $table->foreign("account_id")
//                ->references('id')->on('accounts')
//                ->cascadeOnDelete();

            $table->foreignId("account_id")
                ->constrained("accounts")
                ->cascadeOnDelete();

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
        Schema::dropIfExists('profiles');
    }
}
