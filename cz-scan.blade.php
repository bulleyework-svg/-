
@extends('layouts.app')
@section('content')
  <div class="p-5 rounded-xl bg-zinc-900 border border-zinc-800">
    <h2 class="font-semibold mb-4">Сканер «Честный знак» (камера)</h2>
    <div class="grid md:grid-cols-2 gap-4">
      <div>
        <video id="preview" autoplay playsinline class="w-full rounded-lg border border-zinc-800"></video>
        <div class="text-sm text-zinc-400 mt-2">Наведите камеру на DataMatrix-код (ЧЗ).</div>
      </div>
      <div>
        <form id="czForm" class="grid gap-3">
          <input id="cz" class="px-3 py-2 rounded-lg bg-black border border-zinc-800" placeholder="Код ЧЗ (распознается автоматически)" />
          <input id="sku" class="px-3 py-2 rounded-lg bg-black border border-zinc-800" placeholder="SKU/артикул" />
          <button class="px-4 py-2 rounded-full bg-zinc-800 border border-zinc-700" type="submit">Привязать код</button>
          <div id="msg" class="text-sm"></div>
        </form>
      </div>
    </div>
    <audio id="beep"><source src="/beep.mp3" type="audio/mpeg"></audio>
  </div>
  <script type="module" src="/resources/js/cz-scan.js"></script>
@endsection
