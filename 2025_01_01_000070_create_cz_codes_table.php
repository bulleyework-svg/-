
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('cz_codes', function (Blueprint $t) {
            $t->string('code')->primary();
            $t->unsignedBigInteger('item_id')->nullable();
            $t->string('sku')->nullable()->index();
            $t->timestamp('attached_at')->nullable();
            $t->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('cz_codes'); }
};
