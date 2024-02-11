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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class,'user_id');
            $table->string('business_name')->nullable();
            $table->string('business_website')->nullable();
            $table->string('business_address')->nullable();
            $table->string('business_phone')->nullable();
            $table->string('business_email')->nullable();
            $table->string('business_industry')->nullable();
            $table->string('basic_product')->nullable();
            $table->boolean('five_star')->default(false);
            $table->boolean('four_star')->default(false);
            $table->boolean('three_star')->default(false);
            $table->boolean('two_star')->default(false);
            $table->boolean('one_star')->default(false);

            $table->boolean('email_response')->default(false);
            $table->boolean('email_news')->default(false);
            $table->boolean('same_language')->default(true);
            $table->integer('language_choise')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
