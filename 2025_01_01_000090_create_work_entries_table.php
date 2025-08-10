<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('work_entries', function (Blueprint $t) {
            $t->id();
            $t->string('description');
            $t->string('status')->default('pending');
            $t->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('work_entries'); }
};
