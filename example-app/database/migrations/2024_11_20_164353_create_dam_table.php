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
        Schema::create('dams', function (Blueprint $table) {
            $table->id();//iD is alredy an autoincrement
            $table->string('description',length:100)->default('No Description');
            $table->boolean('has_professor')->default(false);
            $table->integer('year');
            $table->dateTime('created_at')->useCurrent();
            $table->decimal('avg_mark')->default(0);
            $table->char('name',length:20);
            $table->enum('course', ['1','2'])->nullable($value = true);
            $table->dateTime('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dams');
    }
};
