
<div>
  <div class="flex items-center gap-3 mb-3">
    <input type="text" wire:model.live="q" placeholder="Поиск: SKU, ЧЗ, локация…" class="px-3 py-2 rounded-lg bg-black border border-zinc-800 w-full md:w-96" />
    <a href="/intake" class="px-3 py-2 rounded-full bg-zinc-900 border border-zinc-800">+ Приход</a>
  </div>
  <div class="overflow-x-auto">
    <table class="min-w-full text-sm">
      <thead class="text-zinc-400">
        <tr><th class="text-left p-2">SKU</th><th class="text-left p-2">Размер</th><th class="text-left p-2">Локация</th><th class="text-left p-2">Статус</th><th class="text-left p-2">ЧЗ</th></tr>
      </thead>
      <tbody>
      @foreach($items as $i)
        <tr class="border-b border-zinc-800">
          <td class="p-2">{{ $i->sku }}</td>
          <td class="p-2">{{ $i->size }}</td>
          <td class="p-2">{{ $i->location }}</td>
          <td class="p-2"><span class="px-2 py-1 rounded-full border border-zinc-700">{{ $i->status }}</span></td>
          <td class="p-2 text-zinc-400">{{ $i->cis_code }}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
