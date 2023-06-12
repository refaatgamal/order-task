## Laravel 8.75 Order-Task

This project requires PHP ^7.3|^8.0.

### Installation

1. Clone the project in the running PHP server. For example, if using XAMPP, clone it in `htdocs`.
    ```
    git clone https://github.com/username/order-task.git
    ```
2. Run the command `composer install`.
    ```
    composer install
    ```
3. Create a database named `order_task` and put the user and password in `.env` file.
    ```
    DB_DATABASE=order_task
    DB_USERNAME=yourusername
    DB_PASSWORD=yourpassword
    ```
4. Run the command `php artisan migrate`.
    ```
    php artisan migrate
    ```
5. Run the command `php artisan serve` to serve the project. For example, it will be served on `http://127.0.0.1:8000`.
    ```
    php artisan serve
    ```
6. Create a global variable called `order-task` and put its value with serving route. Also, create another variable called `order-task-token` and put the token obtained from the login API.
7. Test the APIs. Note that in every API, you will find saved examples to see it in case of any drop.

Thank you for reading.
