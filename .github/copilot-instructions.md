## Purpose

This file gives concise, repository-specific guidance so an AI coding agent can be productive immediately.

## Big picture (what this app is)

- Laravel 12 application (see `composer.json` -> `laravel/framework` ^12) running on PHP 8.2.
- Purpose: a small local civic reporting app (see `README.md`).
- Minimal MVC: routes are defined in `routes/web.php`, views are in `resources/views`, controllers in `app/Http/Controllers`, models in `app/Models`.

## Key files and what they show

- `composer.json` — project dependencies and composer scripts. Important scripts: `setup`, `dev`, `test`.
- `package.json` — Vite and Tailwind setup. Scripts: `dev` (vite), `build` (vite build).
- `phpunit.xml` — test environment uses in-memory sqlite and sync queue. Tests run under `testing` env.
- `routes/web.php` — simple route-to-view mapping (root -> `welcome`, `/dashboard` -> `dashboard`).
- `app/Models/User.php` — Eloquent model examples: `fillable`, `hidden`, and `casts()` method returning types (note: `password` is cast to `hashed`).
- `resources/views` — Blade templates (e.g., `welcome.blade.php`, `dashboard.blade.php` which is currently empty/placeholder).

## How to run / developer workflows (exact commands used by contributors)

- Full setup (recommended for CI / fresh dev machine):

```powershell
composer run-script setup
```

- Local development (concurrently runs server, queue, logs, vite dev as defined in `composer.json`):

```powershell
composer run-script dev
```

- Build frontend assets:

```powershell
npm run build
```

- Run tests (uses config from `phpunit.xml` — in-memory sqlite, sync queue):

```powershell
composer run-script test
```

Notes: composer `setup` does `composer install`, copies `.env.example` -> `.env` if missing, runs migrations, and runs `npm install` + `npm run build`. The repo expects `.env` to be present or created by setup scripts.

## Project-specific conventions and patterns

- Tests: project includes Pest + PHPUnit (see `composer.json` dev deps). When running tests locally or in CI the DB uses `sqlite` in-memory as set in `phpunit.xml`.
- Frontend: uses Vite + Tailwind. `resources/js/bootstrap.js` and `resources/css/app.css` are the expected places for JS and CSS entry points.
- The `User` model uses a `casts()` method returning an array (rather than a `protected $casts` property) — follow that style when adding model casts.
- Service providers: `App\Providers\AppServiceProvider.php` exists and is intentionally minimal; prefer adding bindings in dedicated providers when feature grows.
- Blade views are under `resources/views`. `dashboard.blade.php` is currently empty — a safe place for small UI edits.

## Integration & external dependencies

- Laravel core packages via composer. Key dev tools: Pest, Pint, Sail (docker), and Vite for frontend.
- Background jobs: the development `dev` composer script kicks off `php artisan queue:listen` and `php artisan pail` — keep this in mind when adding queued jobs (local dev expects queue workers).

## Examples of common tasks (copy-ready)

- Add a route and view:

```php
// routes/web.php
Route::get('/reports', [\App\Http\Controllers\ReportController::class, 'index']);
```

- Add a simple controller (artisan can scaffold):

```powershell
php artisan make:controller ReportController --resource
```

## What to avoid / gotchas

- Don't assume a persistent DB in tests — `phpunit.xml` sets sqlite in-memory. For feature tests that rely on files or state, update test setup accordingly.
- Do not alter `composer.json` scripts names unless you update CI; CI and local developers rely on those scripts.

## Where to look first when debugging

- Routing & controllers: `routes/web.php`, `app/Http/Controllers/`
- Model/data logic: `app/Models/` and `database/factories/`
- Migrations & seeders: `database/migrations/`, `database/seeders/`
- Frontend issues: `resources/js`, `resources/css`, `vite.config.js`, and `package.json` scripts.

## Contact / next steps

If a section above is missing details you'd like (CI commands, env vars needed for third-party services, or intended deployment), tell me which area and I will expand with exact CI pipeline commands and env requirements.
