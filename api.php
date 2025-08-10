
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\{CzCode, Item, Product};

Route::post('/cz/attach', function(Request $r){
    $code = trim($r->input('code',''));
    $sku = trim($r->input('sku',''));
    if(!$code || !$sku){ return response()->json(['message'=>'code и sku обязательны'], 422); }

    $product = Product::firstOrCreate(['sku'=>$sku], ['name'=>$sku]);
    $item = Item::create(['product_id'=>$product->id,'sku'=>$sku,'status'=>'in_stock']);

    if (CzCode::where('code',$code)->exists()) {
        return response()->json(['message'=>'Код уже привязан'], 409);
    }
    CzCode::create(['code'=>$code,'item_id'=>$item->id,'sku'=>$sku,'attached_at'=>now()]);
    $item->cis_code = $code; $item->save();

    return response()->json(['message'=>'Код привязан','item_id'=>$item->id]);
});
