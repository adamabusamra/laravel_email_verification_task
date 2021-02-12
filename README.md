# laravel_email_verification_task
In this project I implement the Laravel email Verification functionality

# Description:
Its a simple Login/Register form, and when the user registers a verification email is sent to him to confirm his email.

# How to use ?
1. Clone GitHub repository **"git clone https://github.com/adamabusamra/laravel_email_verification_task.git"** OR Download the compressed file
2. Run **"composer install"** in the projects directory to download the vendor folder and other important files.
3. Run **"php artisan key:generate"**
3. Create a database
4. Rename(.env.example) to (.env) and change the "DB_DATABASE=[your_database_name]", i've left the mailing configuration to make things easier for you :)
5. Run **"php artisan migrate"**

# My local enviroment details:
- Laravel Framework 5.8.38
- OS: Windows 10
- PHP: PHP 7.4.12, Zend Engine v3.4.0
- Database: MySQL, 10.4.14-MariaDB
