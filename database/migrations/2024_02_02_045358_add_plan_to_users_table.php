<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->integer('plan_id')->nullable();
            $table->integer('subscribed')->nullable()->default(0);
            $table->string('stripe_plan')->nullable();
            $table->string('stripe_session')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->integer('plan_id');
            $table->integer('subscribed');
            $table->string('stripe_plan');
            $table->string('stripe_session');
        });
    }
};
