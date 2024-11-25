# Product Management System

This is a simple Laravel-based Product Management System that includes user authentication and product CRUD functionality.

## Features
- User Registration, Login, and Logout
- Product CRUD (Create, Read, Update, Delete) operations
- User Interface using Bootstrap

## Prerequisites
- PHP >= 8.1
- Composer
- Laravel 9.0
- MySQL

## Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/peshaladushyanthika/product_management_system.git
   cd your-repository-name
2. **Install dependencies:**
   composer install
3. **Set up the environment file:**
   Configure your .env file with the database credentials.
4. **Generate application key:**
   php artisan key:generate
5. **Run migrations:**
   php artisan migrate
6. **Start the development server:**
   php artisan serve
   Visit http://localhost:8000 in your browser.

## Usage
- Register a new user or log in with an existing account.
- Manage products (add, edit, delete, view).

## Main Folder Structure
- app/: Contains application logic.
- resources/views/: Blade templates for the user interface.
- routes/: Web routes for the application.
- database/migrations/: Database migrations for creating tables.

## Screenshots
![reg](https://github.com/user-attachments/assets/3794a2ff-8305-4f60-ac9b-c7b3e9f87400)
![list](https://github.com/user-attachments/assets/388ba6f6-d67d-4ac8-9104-f51db4e1cc75)
![add](https://github.com/user-attachments/assets/5100278a-a62f-4e60-8207-6888fc8e87a2)

Happy coding!
