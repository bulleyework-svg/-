<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\WorkEntry;

class WorkTracker extends Component
{
    public string $description = '';

    public function add(): void
    {
        if(!$this->description){ $this->addError('description','Описание обязательно'); return; }
        WorkEntry::create(['description'=>$this->description,'status'=>'pending']);
        $this->description = '';
    }

    public function toggle(int $id): void
    {
        if($entry = WorkEntry::find($id)){
            $entry->status = $entry->status === 'done' ? 'pending' : 'done';
            $entry->save();
        }
    }

    public function render()
    {
        $entries = WorkEntry::latest()->get();
        return view('livewire.work-tracker', compact('entries'));
    }
}
