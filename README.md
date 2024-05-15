<!-- Please readme First  -->
<!-- current version PHP 7.4.33 / My Sql for debian-linux-gnu (x86_64) using readline 5.2 / Apache/2.4.41 (Ubuntu) / Server version: 10.3.39-MariaDB-0ubuntu0.20.04.2 Ubuntu 20.04 / Time -->


<!-- Steps to create project -->
<!-- Step 1 (use this command to create the project in finvest_emi folder) -->
composer create-project laravel/laravel ./  
        <!-- Initialize git & branching     -->
        git add .
        git commit -m "laravel & git initialize"
        git branch -M main
        git remote add origin https://<!-- --TokenID-- -->@github.com/Nipun-Agarwal1997/finvest_emi_logic.git
        <!-- --TokenID-- (This is basically an token create in setting / developer setting / classic. Used to pull/push code without repidely enter passwod) -->
        git push origin main
        git checkout -b na_15May2024_migration_loans_table <!-- Used to create the new branch for well maintenance in future  -->

<!-- Step 2 (delete not require table from migration ) -->
cd database/migration && rm -rf --file_names--

<!-- Step 3 Configure database crediantial in Dot env In below veriables -->
DB_DATABASE=emi_loans
DB_USERNAME=phpmyadmin
DB_PASSWORD=Root@123

<!-- Step 4 Create migartion table Useing command -->
php artisan make:migration create_loan_details_table
        <!-- Enter the field inside up function schema -->
php artisan migrate 

<!-- Step 5 Create Seeding for loans Details & User Tables -->
php artisan make:seeder LoanDetailsSeeder <!-- create json file in database json folder for low weight Use that in seeding file for basic initialize-->
php artisan make:model LoanDetails <!-- create the model for tables linking Use that in Seeding file -->
php artian make:seeder UserSeeder

php artisan db:seed <!-- used to insert the data in db seeds -->

<!-- Step 6 Creation controller condition view -->
php artisan make:controller admin/UserController <!-- create controller command -->
    <!-- Now,create routes We will create the group routes in web.php -->
    <!-- For routes automatically pick the controller allow app/provider/RouteserviceProvider.php namespace -->
    <!-- Now, is any contant we need to add in projects we will create the global constant file in app and define it. Then include that in web.php -->
    <!-- create admin folder in web view -->

<!-- Step 7 fast Front-end developement via useing collective/html of laravel -->
composer require laravelcollective/html <!-- This will allow the useing of Form tags like Form::open() -->

<!-- write the HTMl file in View -->
<!-- on submit validate useing laravel validation module -->
<!-- And Now Last but not least Auth Attempt -->
