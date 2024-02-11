<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('review_responses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class,'user_id');
            $table->string('name');
            $table->integer('stars');
            $table->string('avatar');
            $table->text('review');
            $table->text('response');
            $table->timestamp('date_review')->nullable();
            $table->timestamp('date_response')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review_responses');
    }
};
