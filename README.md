# 🚀 Laravel + Docker Base

Estrutura base para projetos Laravel rodando com Docker Compose.

## 🧱 Serviços incluídos

-   PHP 8.2 (FPM)
-   Nginx
-   MySQL 8.0
-   Composer

## ⚙️ Como usar

```bash
git clone https://github.com/seuusuario/docker-laravel-base.git novo-projeto
cd novo-projeto
cp .env.example .env
docker compose up -d
docker compose exec app composer install
php artisan key:generate
```
