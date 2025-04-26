<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<p align="justify">
## Step by step
    <br>
1. Clone the Repository <br>
   git clone git@github.com:Fortinenta/CatalogAbidinJT.git <br>
<br>
2. Install Dependencies <br>
   composer install <br>
   npm install <br>
   npm run dev <br>
<br>
3. Configure the Environment <br>
   cp .env.example .env <br>

4. Generate an Application Key <br>
   php artisan key:generate <br>
<br>
5. Edit the .env <br>
   APP_NAME="Catalog Abidin JT" <br>
   APP_URL=http://localhost:8000 <br>
   DB_CONNECTION=mysql <br>
   DB_HOST=127.0.0.1 <br>
   DB_PORT=3306 <br>
   DB_DATABASE=catalog_abidinjt <br>
   DB_USERNAME=your_mysql_username <br>
   DB_PASSWORD=your_mysql_password <br>
   FILESYSTEM_DRIVER=public <br>
   SESSION_DRIVER=file <br>
<br>
6. Create the Database <br>
   CREATE DATABASE catalog_abidinjt; <br>
<br>
7. Run Migrations <br>
   php artisan migrate <br>
<br>
8. Seed the Database <br>
   php artisan db:seed <br>
<br>
9. Create an Admin User <br>
    INSERT INTO users (name, email, password, created_at, updated_at) <br>
        VALUES ('Admin', 'admin@abidinjt.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NOW(), NOW()); <br>

10. Create the Storage Link <br>
    php artisan storage:link <br>
<br>
11. Clear Cache and Verify Configuration <br>
    php artisan cache:clear <br>
    php artisan route:clear <br>
    php artisan config:clear <br>
    php artisan view:clear <br>
    composer dump-autoload <br>
<br>
12. Run and Test the Application <br>
    php artisan serve <br>
<br>
    Test the Public Pages: <br>
        Home Page: Visit http://localhost:8000 to see the landing page with featured products. <br>
        Catalog Page: Visit http://localhost:8000/catalog to browse products, filter by name, type, or price. <br>
        Product Detail Page: Click on a product to view its details, including specifications and images (images may be missing until uploaded). <br>
    Test the Admin Panel: <br>
        Login: Visit http://localhost:8000/admin/login and log in with: <br>
        Email: admin@abidinjt.com <br>
        Password: password <br>
</p>
