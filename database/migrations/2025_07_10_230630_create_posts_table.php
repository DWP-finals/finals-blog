<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content')->nullable();
            //$table->binary('image_data')->nullable();
            //$table->string('image_path')->nullable()->comments('image path or URL'); I remove these two because for some reason I really cannot make a longblob in with these statements. so I have to use raw statements.
            $table->timestamp('published_date')->nullable();
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
            $table->timestamps();
        });

        DB::statement('ALTER TABLE posts ADD image_data LONGBLOB NULL COMMENT "image data"');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
