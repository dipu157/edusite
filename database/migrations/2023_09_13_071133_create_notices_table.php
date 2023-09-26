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
        Schema::create('notices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('institute_id')->unsigned();
            $table->foreign('institute_id')->references('id')->on('institute_infos')->onDelete('RESTRICT');
            $table->string('title',50);
            $table->string('attachment',150)->nullable();
            $table->string('short_description',240)->nullable();
            $table->string('description',600)->nullable();
            $table->date('notice_date')->default(Carbon\Carbon::now()->format('Y-m-d'));
            $table->date('expiry_date')->nullable();
            $table->char('type',1)->default('D')->comment('D=>Display E=>Email');
            $table->char('confidentiality',1)->default('P')->comment('P=>Public C=>Confidential');
            $table->char('receiver',1)->default('A')->comment('A=>all; P=>Person D=>Department');
            $table->boolean('status')->default(1);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('RESTRICT');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notices');
    }
};
