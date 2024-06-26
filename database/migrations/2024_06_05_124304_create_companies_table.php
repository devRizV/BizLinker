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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_title')->unique();
            $table->string('company_meta_title');
            $table->string('mobile_no')->unique();
            $table->string('email')->unique();
            $table->string('domain');
            $table->string('url');
            $table->string('company_type')->nullable();
            $table->string('meta_desc')->nullable();
            $table->string('address')->nullable();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
