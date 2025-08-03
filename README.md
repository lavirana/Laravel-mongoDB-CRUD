# Laravel MongoDB CRUD

A simple CRUD application built using **Laravel** and **MongoDB**. This project demonstrates basic Create, Read, Update, and Delete operations using MongoDB as the backend database.

---

## 🔧 Tech Stack

- Laravel 10+
- MongoDB
- Laravel MongoDB Driver (`jenssegers/laravel-mongodb`)
- Composer
- PHP 8.x
- XAMPP / MAMP / Valet (Local Development Environment)

---

## 🚀 Features

- Connect Laravel with MongoDB
- Create, Read, Update, Delete operations
- Clean and simple UI (Blade or API-based)
- RESTful API structure (if applicable)
- Error handling and validation

---

## 📦 Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/lavirana/laravel-mongo-crud.git
   cd laravel-mongo-crud

2. **Install dependencies**

    composer install

3. **Set up your .env file**

    cp .env.example .env
    php artisan key:generate

4. **Configure MongoDB in .env**

    DB_CONNECTION=mongodb
    DB_HOST=127.0.0.1
    DB_PORT=27017
    DB_DATABASE=your_database
    DB_USERNAME=
    DB_PASSWORD=

2. **Run the server**

    php artisan serve