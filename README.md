<p align="center"><strong>Palmatahat Website</strong></p>

**Descripción**
- Sitio web informativo y comercial para sombreros Panamá (Palmatahat).
- Incluye páginas de bienvenida, catálogo (`shop`), contacto, y secciones sobre origen, historia y proceso.
- Autenticación básica habilitada con `Auth::routes()` y un panel `home` para usuarios registrados.

**Tecnologías**
- Framework: `Laravel ^12` (PHP `^8.2`).
- Frontend: Vite, Tailwind CSS (`^4`), Bootstrap, Axios.
- UI de autenticación: `laravel/ui`.
- Gestor de archivos: `alexusmai/laravel-file-manager`.

**Estructura clave**
- Rutas: `routes/web.php` (controladas por `WelcomeController`).
- Vistas: `resources/views/` con páginas como `welcome`, `shop`, `contact`, `about`, `faq`, `montecristi`, entre otras.
- Activos públicos: `public/css`, `public/js`, `public/img`.
- Configuración: `config/app.php` (locale por defecto `fr`), `config/database.php`, `config/file-manager.php`.

**Rutas principales**
- `/` → `welcome`
- `/shop` → `shop`
- `/contact` → `contact`
- `/about` → `about`
- Submenús informativos:
  - `/montecristi`, `/histoire`, `/bandes`, `/processus`, `/faq`, `/origine`, `/comment-commander`, `/art-porter-preserver`, `/histoire-palmatahat`, `/bandes-chapeaux`
- Autenticación: `Auth::routes()` y `/home`

**Requisitos**
- PHP `>= 8.2`, Composer.
- Node.js y npm (para Vite y Tailwind).
- MySQL/MariaDB (XAMPP o equivalente).

**Instalación y puesta en marcha**
- Clonar/copiar el proyecto en `htdocs` (XAMPP) o en cualquier carpeta.
- Crear `.env` (se copia desde `.env.example` automáticamente por Composer en instalación):
  - Ajustar `APP_URL` (por ejemplo `http://localhost` o el VirtualHost).
  - Generar `APP_KEY` si no existe: `php artisan key:generate`.
  - Configurar base de datos: `DB_HOST=127.0.0.1`, `DB_DATABASE=laravel`, `DB_USERNAME=root`, `DB_PASSWORD=` (vacío en XAMPP por defecto).
- Instalar dependencias:
  - Backend: `composer install`
  - Frontend: `npm install`
- Migraciones:
  - `php artisan migrate` (se ejecuta automáticamente en `post-create-project-cmd` si aplica).
- Desarrollo local (opciones):
  - Opción A (todo en paralelo): `composer run dev`
  - Opción B (separado): `php artisan serve` y `npm run dev`
  - Con XAMPP/Apache: servir `public/` como DocumentRoot o acceder a `http://localhost/palmatahat_website/public`

**Internacionalización**
- `config/app.php` define `locale` y `fallback_locale` como `fr` por defecto.
- Archivos de idioma en `resources/lang/fr`.

**Pruebas**
- Ejecutar tests: `composer run test` o `php artisan test`.

**Scripts útiles (Composer)**
- `dev`: levanta servidor (`php artisan serve`), cola, logs y Vite con `concurrently`.
- `test`: limpia configuración y ejecuta suite de pruebas.

**Licencia**
- MIT (ver `LICENSE`).
