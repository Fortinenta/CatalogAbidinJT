<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Step by step
1. Clone the Repository
   git clone git@github.com:Fortinenta/CatalogAbidinJT.git

2. Install Dependencies
   composer install
   npm install
   npm run dev

3. Configure the Environment
   cp .env.example .env

4. Generate an Application Key
   php artisan key:generate

5. Edit the .env
   APP_NAME="Catalog Abidin JT"
   APP_URL=http://localhost:8000
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=catalog_abidinjt
   DB_USERNAME=your_mysql_username
   DB_PASSWORD=your_mysql_password
   FILESYSTEM_DRIVER=public
   SESSION_DRIVER=file

6. Create the Database
   CREATE DATABASE catalog_abidinjt;

7. Run Migrations
   php artisan migrate

8. Seed the Database
   php artisan db:seed

9. Create an Admin User
    INSERT INTO users (name, email, password, created_at, updated_at)
        VALUES ('Admin', 'admin@abidinjt.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NOW(), NOW());

10. Create the Storage Link
    php artisan storage:link

11. Clear Cache and Verify Configuration
    php artisan cache:clear
    php artisan route:clear
    php artisan config:clear
    php artisan view:clear
    composer dump-autoload

12. Run and Test the Application
    php artisan serve

    Test the Public Pages:
        Home Page: Visit http://localhost:8000 to see the landing page with featured products.
        Catalog Page: Visit http://localhost:8000/catalog to browse products, filter by name, type, or price.
        Product Detail Page: Click on a product to view its details, including specifications and images (images may be missing until uploaded).
    Test the Admin Panel:
        Login: Visit http://localhost:8000/admin/login and log in with:
        Email: admin@abidinjt.com
        Password: password
