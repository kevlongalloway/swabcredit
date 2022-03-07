<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('acc_num')->nullable();
            $table->string('rout_num')->nullable();
            $table->string('filing_status')->nullable();
            $table->string('carrier')->nullable();
            $table->string('id_front_filename')->nullable();
            $table->string('id_back_filename')->nullable();
            $table->string('w2_filename')->nullable();
            $table->string('utility_bill_filename')->nullable();
            $table->string('snn_filename')->nullable();
            $table->string('tax_g_filename')->nullable();
            $table->string('tax_k_filename')->nullable();
            $table->string('etc_filename')->nullable();
            $table->boolean('is_admin')->default(0);
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
        Schema::dropIfExists('users');
    }
};
