## Warehouse

##### Description
Warehouse is a web application built in Laravel that helps to keep track of the inventory of a real-time warehouse. It has complete CRUD over the data, a search engine with necessary filters, and an authentication layer.

## Local Environment Setup

##### Dependencies:
- Composer version 1.9.1 
- PHP 7.2.24
- MySql 8+
- Laravel 6.7.0
- Vagrant 2.2.6
- npm 6.13.4

##### Clone the repository from GitHub

```bash
git clone https://github.com/rubikovakocka/warehouse
cd warehouse
```

##### Copy .env.example to .env and update necessary variables

`.env` file contains all configurable data that needs to be configured.
 
`cp .env.example .env`

##### Install dependencies
Before the application can be used, there are going to be some dependencies, which can be pulled in with composer command:
`composer install`
Frontend dependencies:
`npm install && npm run dev`

##### Generate key 
`php artisan key:generate`

##### Run migrations
`php artisan run migration`

##### Run seeders
`php artisan db:seed`

##### Author
- Aleksandar Galic
