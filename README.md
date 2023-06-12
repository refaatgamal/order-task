laravel 8.75 order-task require php ^7.3|^8.0
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
Installation
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
1-clone project in the running php server for example if using Xampp clone it in htdocs
2-run command composer install
3-create database named order_task and put user and password in .env file
4- run command php artisan migrate
5- run command php artisan serve will serve for example on http://127.0.0.1:8000
6- create global variable called order-task and put its value with serving route and anothe variable called order-task-token and put token obtained from login api
7- test apis
(Note)
  in every api you will find saved examples to see it in case of any drop

Thanks for reading.
