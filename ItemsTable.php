
<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Item;

class ItemsTable extends Component
{
    public string $q = '';

    public function render()
    {
        $items = Item::query()
            ->when($this->q, fn($q) =>
                $q->where(function($w){
                    $w->where('sku','like','%'.$this->q.'%')
                      ->orWhere('size','like','%'.$this->q.'%')
                      ->orWhere('status','like','%'.$this->q.'%')
                      ->orWhere('location','like','%'.$this->q.'%')
                      ->orWhere('cis_code','like','%'.$this->q.'%');
                })
            )
            ->latest()
            ->limit(500)
            ->get();

        return view('livewire.items-table', compact('items'));
    }
}
