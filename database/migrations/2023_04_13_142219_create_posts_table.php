<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('content');
            $table->string('cover_name');
            $table->boolean('is_highlighted');
            $table->foreignIdFor(\App\Models\Category::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\User::class, "created_by");
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
