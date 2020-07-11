
Pre-Installation Checklist
1. PHP  - version-7.4
2. Mysql - 5.7
3. npm  -  version-6.3


Step 1 ########
    Download Project

###API Step start here
Step 2 ########
    create db and configer it in .env file
Step 3 ########
    run cmd
    Go to  api folder
    composer install
    php artisan key:generate

Step 4 ########
    php artisan migrate

    composer dump-autoload

    php artisan db:seed

    php artisan serve

// FrontEnd 

Setp 5 #####
Go to FrontEnd folder

Step 6 ###
Run below command
npm install
npm start