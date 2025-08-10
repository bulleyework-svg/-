<div>
  <div class="flex items-center gap-3 mb-4">
    <input type="text" wire:model.live="description" placeholder="Описание задачи" class="px-3 py-2 rounded-lg bg-black border border-zinc-800 w-full md:w-96" />
    <button wire:click="add" class="px-3 py-2 rounded-full bg-zinc-900 border border-zinc-800">Добавить</button>
  </div>
  <ul class="space-y-2">
    @foreach($entries as $e)
    <li class="flex items-center justify-between px-3 py-2 rounded-lg bg-zinc-900 border border-zinc-800">
      <span class="@if($e->status==='done') line-through text-zinc-400 @endif">{{ $e->description }}</span>
      <button wire:click="toggle({{ $e->id }})" class="text-sm px-2 py-1 rounded-full border border-zinc-700">{{ $e->status==='done' ? '↺' : '✓' }}</button>
    </li>
    @endforeach
  </ul>
</div>
