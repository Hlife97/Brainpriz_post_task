Hi, This project has been created with Laravel 9x framework.

## Setup Project

### You need to download this project your to local machine using this command or you can download zip file.

    git clone https://github.com/Hlife97/ABYSS-TASK-API-.git

### Composer installation

    composer install

### Setup MySql database, create mysql database. After that migrate all migrations.

    php artisan migrate

### You need to create some categories manually, in order to do that you need to run seeder command

    php artisan db:seed --class=CategorySeeder

### Then run this command for image uploads

    php artisan storage:link

### And done you can serve this project

    php artisan serve

Have a nice day!
