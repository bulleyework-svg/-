
@extends('layouts.app')
@section('content')
  <div class="grid grid-cols-1 md:grid-cols-4 gap-3">
    <div class="p-5 rounded-xl bg-zinc-900 border border-zinc-800">
      <div class="text-sm text-zinc-400">Единиц всего</div>
      <div class="text-2xl font-semibold">{{ \App\Models\Item::count() }}</div>
    </div>
    <div class="p-5 rounded-xl bg-zinc-900 border border-zinc-800">
      <div class="text-sm text-zinc-400">В продаже</div>
      <div class="text-2xl font-semibold">{{ \App\Models\Item::where('status','!=','returned')->count() }}</div>
    </div>
    <div class="p-5 rounded-xl bg-zinc-900 border border-zinc-800">
      <div class="text-sm text-zinc-400">Возвраты 30д</div>
      <div class="text-2xl font-semibold">{{ \App\Models\ReturnEntry::where('created_at','>=',now()->subDays(30))->count() }}</div>
    </div>
    <div class="p-5 rounded-xl bg-zinc-900 border border-zinc-800">
      <div class="text-sm text-zinc-400">Коды ЧЗ</div>
      <div class="text-2xl font-semibold">{{ \App\Models\CzCode::count() }}</div>
    </div>
  </div>
@endsection
