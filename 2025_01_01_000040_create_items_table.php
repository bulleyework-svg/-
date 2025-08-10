
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('items', function (Blueprint $t) {
            $t->id();
            $t->foreignId('product_id')->constrained();
            $t->unsignedBigInteger('variant_id')->nullable();
            $t->string('sku')->index();
            $t->string('size')->nullable();
            $t->string('status')->default('in_stock');
            $t->string('location')->nullable();
            $t->string('cis_code')->nullable()->unique();
            $t->string('vendor')->nullable();
            $t->text('comment')->nullable();
            $t->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('items'); }
};
