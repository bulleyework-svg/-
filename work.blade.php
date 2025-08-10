@extends('layouts.app')
@section('content')
<div class="text-center">
  <h2 class="text-3xl font-bold mb-6 tracking-widest">TABLOID WORK</h2>
  <p class="text-zinc-400 mb-12">Простая страница для внутренней работы бренда.</p>
  <div class="grid gap-6 md:grid-cols-3">
    <div class="p-4 bg-zinc-900 border border-zinc-800 rounded-lg">
      <h3 class="font-semibold mb-1">Коллекция SS25</h3>
      <p class="text-sm text-zinc-400">Собрать референсы и ткани</p>
    </div>
    <div class="p-4 bg-zinc-900 border border-zinc-800 rounded-lg">
      <h3 class="font-semibold mb-1">Съёмка лукбука</h3>
      <p class="text-sm text-zinc-400">Подготовить команду и локации</p>
    </div>
    <div class="p-4 bg-zinc-900 border border-zinc-800 rounded-lg">
      <h3 class="font-semibold mb-1">Запуск магазина</h3>
      <p class="text-sm text-zinc-400">Тестируем новую коллекцию в продаже</p>
    </div>
  </div>
</div>
@endsection
