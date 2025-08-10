
<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tabloid • Склад</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
  @livewireStyles
</head>
<body class="bg-zinc-950 text-zinc-100">
  <div class="max-w-7xl mx-auto px-4 py-6">
    <header class="flex items-center justify-between mb-6">
      <h1 class="text-xl font-semibold">TABLOID • Учет склада</h1>
      <nav class="flex gap-2 text-sm">
        <a href="/" class="px-3 py-1 rounded-full bg-zinc-900 border border-zinc-800">Дашборд</a>
        <a href="/items" class="px-3 py-1 rounded-full bg-zinc-900 border border-zinc-800">Склад</a>
        <a href="/intake" class="px-3 py-1 rounded-full bg-zinc-900 border border-zinc-800">Приход</a>
        <a href="/returns" class="px-3 py-1 rounded-full bg-zinc-900 border border-zinc-800">Возвраты</a>
        <a href="/cz" class="px-3 py-1 rounded-full bg-zinc-900 border border-zinc-800">ЧЗ</a>
        <a href="/cz/scan" class="px-3 py-1 rounded-full bg-zinc-900 border border-zinc-800">Сканер</a>
      </nav>
    </header>
    <main>
      {{ $slot ?? '' }}
      @yield('content')
    </main>
  </div>
  @livewireScripts
</body>
</html>
