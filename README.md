# 🗳️ Código de Candida Hive

Plataforma web desarrollada con **Laravel 12 + Filament** para la gestión y visualización de información electoral, incluyendo **candidatos**, **partidos políticos** y **usuarios administradores**.

---

## 🚀 Tecnologías usadas
- Laravel 12
- Filament (panel de administración)
- MySQL (entorno local)
- PHP 8.3
- Composer
- Node.js (opcional)
- Git y GitHub

---

## 📦 Requisitos
Antes de iniciar, asegúrese de tener instalado:

- PHP >= 8.2
- Composer
- MySQL
- Node.js (opcional, para assets)
- Git

---

## ⚙️ Instalación del proyecto

1. Clonar el repositorio:
``bash
git clone https://github.com/EmilioReyess001/candida-CodeHive.git
## cd candida-CodeHive
Instalar dependencias de PHP:

composer install
Copiar el archivo de entorno:

cp .env.example .env

Generar la clave de la aplicación:

php artisan key:generate


Configurar la base de datos en el archivo .env:

DB_DATABASE=candida
DB_USERNAME=root
DB_PASSWORD=

Ejecutar migraciones:

php artisan migrate


(Opcional) Instalar dependencias frontend:

npm install
npm run dev


Levantar el servidor:

php artisan serve

Acceso al panel de administración

El panel de administración está construido con Filament y se accede desde:

http://localhost:8000/admin


El usuario administrador debe ser creado manualmente o mediante un seeder.

🧪 Entorno de desarrollo

Entorno local recomendado (Laragon / XAMPP)

Base de datos local MySQL

Cada desarrollador debe usar su propio archivo .env

