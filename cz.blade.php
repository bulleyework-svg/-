
@extends('layouts.app')
@section('content')
  <div class="p-5 rounded-xl bg-zinc-900 border border-zinc-800">
    <h2 class="font-semibold mb-4">Коды «Честный знак»</h2>
    <table class="min-w-full text-sm">
      <thead class="text-zinc-400"><tr><th class="text-left p-2">Код</th><th class="text-left p-2">SKU</th><th class="text-left p-2">Item</th><th class="text-left p-2">Привязан</th></tr></thead>
      <tbody>
        @foreach(\App\Models\CzCode::latest()->limit(500)->get() as $c)
          <tr class="border-b border-zinc-800">
            <td class="p-2">{{ $c->code }}</td>
            <td class="p-2">{{ $c->sku }}</td>
            <td class="p-2">{{ $c->item_id }}</td>
            <td class="p-2">{{ $c->attached_at }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
