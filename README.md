## Introduction

This is a simple laravel project for ordering food. The website allows users to order food in advamce before going to the restaurant.

## Installation
--> Prerequisites

PHP >= 8.0
Composer
MySQL database
Node.js & npm

## Steps

1. Install dependencies:
composer install
npm install

2. Create a copy of the .env file:
cp .env.example .env

3. Configure the .env file with your database and other settings.

4. Run migrations:
php artisan migrate

5. Install front-end dependencies and compile assets:
npm run dev

6. Start the local development server:
php artisan serve

Access the application at http://localhost:8000.

## Features

User authentication
CRUD operations for placing order and for when order is served
Role-based access control
