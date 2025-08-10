
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('return_entries', function (Blueprint $t) {
            $t->id();
            $t->unsignedBigInteger('item_id')->nullable();
            $t->string('sku')->index();
            $t->string('cis_code')->nullable();
            $t->string('reason')->nullable();
            $t->string('location')->nullable();
            $t->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('return_entries'); }
};
