
<div class="p-5 rounded-xl bg-zinc-900 border border-zinc-800">
  @if (session('ok'))
    <div class="mb-3 text-green-400">{{ session('ok') }}</div>
  @endif
  <form wire:submit.prevent="submit" class="grid md:grid-cols-2 gap-3">
    <input wire:model="vendor" class="px-3 py-2 rounded-lg bg-black border border-zinc-800" placeholder="Производство" />
    <input wire:model="model" class="px-3 py-2 rounded-lg bg-black border border-zinc-800" placeholder="Модель" />
    <input wire:model="sku" class="px-3 py-2 rounded-lg bg-black border border-zinc-800" placeholder="SKU/артикул" />
    <input wire:model="size" class="px-3 py-2 rounded-lg bg-black border border-zinc-800" placeholder="Размер" />
    <input type="number" min="1" wire:model="qty" class="px-3 py-2 rounded-lg bg-black border border-zinc-800" placeholder="Кол-во" />
    <input wire:model="location" class="px-3 py-2 rounded-lg bg-black border border-zinc-800" placeholder="Локация" />
    <textarea wire:model="comment" class="px-3 py-2 rounded-lg bg-black border border-zinc-800 md:col-span-2" placeholder="Комментарий"></textarea>
    <div class="md:col-span-2 flex gap-2 items-center">
      <input wire:model="cz" class="px-3 py-2 rounded-lg bg-black border border-zinc-800 flex-1" placeholder="Код ЧЗ (опц.)" />
      <button class="px-4 py-2 rounded-full bg-zinc-800 border border-zinc-700">Добавить</button>
    </div>
  </form>
</div>
