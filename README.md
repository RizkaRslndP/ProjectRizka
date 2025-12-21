#  Campus library test repository project
**Laravel 12 · SQLite (for now) · Multi-Role Workflow**

![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel)
![PostgreSQL](https://img.shields.io/badge/PostgreSQL-15-4169E1?style=for-the-badge&logo=postgresql)
![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=for-the-badge&logo=php)

A simple campus library repository system built using **Laravel** and **SQLite**, **featuring role-based access control** for **managing digital library** collections efficiently.

---

##  Key Features
- Clean Laravel 10+ architecture
- Role-Based Access Control (RBAC)
- SQLite optimized database schema

---

##  Tech Stack

| Layer | Technology |
|------|-----------|
| Backend | Laravel 12 |
| Frontend | Blade + TailwindCSS + alpineJs + Flowbite |
| Database | SQLite (for now) |
| Authentication | Laravel Auth |
| File Storage | Laravel Storage |

---

##  Quick Installation

### Prerequisites
- PHP ≥ 8.4
- Composer
- SQLite ≥ (for now)
- Node.js ≥ 20

### Installation Steps
```bash
# Clone repository
https://github.com/RizkaRslndP/ProjectRizka.git
cd online-store

# Install backend & frontend dependencies
composer install
npm install
npm run build

# Setup environment
cp .env.example .env

# Generate key & migrate database
php artisan key:generate
php artisan migrate --seed

# Storage symlink
php artisan storage:link

# Run development server
php artisan serve

### Langkah Instalasi

```bash
# 1. Clone repository
git clone [online_store(https://github.com/RizkaRslndP/ProjectRizka)]
cd online-store

# 2. Install dependencies
composer install
npm install
npm run build

# 3. Setup environment
cp .env.example .env
# Edit .env file dengan konfigurasi database

# 4. Generate key & migrasi
php artisan key:generate
php artisan migrate --seed

# 5. Setup storage
php artisan storage:link

# 6. Jalankan server
npm run dev
```
## .ENV CONFIG
```
DB_CONNECTION=sqlite

APP_URL=http://localhost:8000
```

