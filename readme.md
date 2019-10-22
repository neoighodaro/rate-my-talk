# Rate my talk

This is a sample application for demo at the codetalks conference. It is a simple application
that showcases how to use Laravel in building applications.

## Requirements

To run the application you need to be running PHP on your machine. You also need a database engine (MySQL, SQLite etc.).
Finally, you need Composer installed on your machine, to install the packages dependencies including Laravel.

## Installation

-   Clone the repository
-   Run the `composer install` command in the root of the project to install the required dependencies
-   Copy the `.env.example` file to `.env`
-   Run the command `php artisan key:generate` to generate the application key
-   Update the `.env` file with your database credentials
-   Run the `php artisan migrate` command to migrate the database
