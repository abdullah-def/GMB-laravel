<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Plan;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_subsciptions', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(User::class,'user_id')->uniqid();
            $table->foreignIdFor(plan::class);
            $table->string('email');
            $table->string('plan');
            $table->integer('responses');
            $table->integer('rules')->default(0);
            $table->boolean('auto_automation')->default(false);
            $table->date('ended_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_subsciptions');
    }
};
