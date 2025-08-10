
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // стартовая локация
        DB::table('products')->upsert([
            ['sku'=>'DEMO-SKU','name'=>'Демо модель','url'=>null,'meta'=>json_encode([])]
        ], ['sku'], ['name','url','meta']);

        // стартовые производства (vendors как простые справочные записи в products/meta пока; отдельная таблица добавится позже)
        DB::table('products')->upsert([
            ['sku'=>'VENDOR-TANYA','name'=>'Производство: Таня','url'=>null,'meta'=>json_encode(['type'=>'vendor'])],
            ['sku'=>'VENDOR-STELLA','name'=>'Производство: Стелла','url'=>null,'meta'=>json_encode(['type'=>'vendor'])],
        ], ['sku'], ['name','url','meta']);
    }
}
