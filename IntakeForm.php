
<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\{Item,Product,CzCode};

class IntakeForm extends Component
{
    public $vendor,$model,$sku,$size,$qty=1,$location,$comment,$cz;

    public function submit()
    {
        $qty = max(1,(int)$this->qty);
        if(!$this->sku){ $this->addError('sku','SKU обязателен'); return; }
        $p = Product::firstOrCreate(['sku'=>$this->sku],['name'=>$this->model ?? $this->sku]);

        for($i=0;$i<$qty;$i++){
            $item = Item::create([
                'product_id'=>$p->id,
                'sku'=>$this->sku,
                'size'=>$this->size,
                'status'=>'in_stock',
                'location'=>$this->location,
                'vendor'=>$this->vendor,
                'comment'=>$this->comment,
            ]);
            if($this->cz){
                $code = $qty>1 ? $this->cz.'#'.($i+1) : $this->cz;
                CzCode::create(['code'=>$code,'item_id'=>$item->id,'sku'=>$this->sku,'attached_at' => now()]);
                $item->cis_code=$code; $item->save();
            }
        }
        $this->reset(['vendor','model','sku','size','qty','location','comment','cz']);
        session()->flash('ok','Приход добавлен');
    }

    public function render(){ return view('livewire.intake-form'); }
}
