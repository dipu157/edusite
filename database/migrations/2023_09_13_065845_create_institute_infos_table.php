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
        Schema::create('institute_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name',240);
            $table->string('address',200);
            $table->string('email',190)->unique()->nullable();
            $table->string('city',200);
            $table->string('state',200)->nullable();
            $table->string('post_code',200)->nullable();;
            $table->string('country',100);
            $table->string('phone_no',200)->nullable();
            $table->string('website',190)->nullable();
            $table->string('logo',150)->nullable();
            $table->string('locale',20)->default('en-US')->comments('English, Bangla');
            $table->boolean('status')->default(true);
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institute_infos');
    }
};
