
# TABLOID Inventory (Laravel + Livewire) — GitHub Ready

Это **готовый к пушу** репозиторий. Заливайте на GitHub как есть.
После клонирования на машине выполните стандартные шаги установки Laravel.

## Быстрый старт (PostgreSQL)

```bash
# Установка зависимостей фреймворка
composer install

# Создайте .env из примера и настройте БД
cp .env.example .env

# В .env установите Postgres:
# DB_CONNECTION=pgsql
# DB_HOST=127.0.0.1
# DB_PORT=5432
# DB_DATABASE=tabloid
# DB_USERNAME=tabloid
# DB_PASSWORD=your_password
# SCOUT_DRIVER=collection
# FEATURE_CZ_API=false
# APP_LOCALE=ru

php artisan key:generate
php artisan migrate --seed

# фронтенд
npm install
npm run build

php artisan serve
```

## Что уже внутри
- Livewire компоненты: `ItemsTable`, `IntakeForm`.
- Страницы: Дашборд, Склад, Приход, ЧЗ, Сканер ЧЗ.
- Миграции и сиды (в сидерах — «Таня» и «Стелла» как стартовые записи).
- JS-сканер ЧЗ через `@zxing/browser` + «пикающий» звук (WebAudio).

> В этом репозитории **нет папки vendor** — это норма для GitHub. Зависимости ставятся командой `composer install`.
