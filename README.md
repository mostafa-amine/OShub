
# OSHub

Open Source Hub is an open source project built with [Laravel](https://laravel.com/) that allows users to share their own open source projects with the community.

## Features

-   Implemented user authentication and authorization features
-   Created database models and relationships to store and manage project data
-   Developed the user interface and implemented front-end features using Laravel Blade templates and Bootstrap
-   Designed and implemented RESTful API using Laravel framework to power web and mobile applications
-   Implemented authentication and authorization using Laravel sanctum for secure access to API endpoints
-   Implemented interactive components using Livewire framework to improve user experience and reduce page load times
-   Used Livewire to create real-time forms and validations without the need for JavaScript

## Requirements

-   PHP 8 or higher
-   Laravel 9 or higher
-   MySQL 5.7 or higher

## Installation

1.  Clone the repository: `git clone https://github.com/mostafa-amine/submit-it.git`
2.  Install dependencies: `composer install`
3.  Create a MySQL database and clone `.env.example` to  `.env` file with the database credentials
4.  Generate an application key: `php artisan key:generate`
5.  Run the migration and seeders: `php artisan migrate --seed`

## Usage

To start the development server, run the following command:

`php artisan serve` 

Then, visit [http://127.0.0.1:8000](http://127.0.0.1:8000/) in your web browser to access the application.

## Contributing

We welcome contributions to Submit-it! Please feel free to submit a pull request with any changes you would like to see in the project.
