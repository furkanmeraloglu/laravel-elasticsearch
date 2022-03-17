<?php

use App\Models\Comment;
use App\Models\Tag;
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
        Schema::create('comment_tag', function (Blueprint $table) {
            $table->foreignIdFor(Comment::class);
            $table->foreignIdFor(Tag::class);
            $table->unique(['comment_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_tag');
    }
};
