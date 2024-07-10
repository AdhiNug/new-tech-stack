![enter image description here](https://sit.aqi.co.id/img/logo_aqi.jpg)

# New Tech Stack

One Paragraph of project description goes here...

# Table Of Contents

- [New Tech Stack](#new-tech-stack)
- [Table Of Contents](#table-of-contents)
  - [Getting Started](#getting-started)
  - [Development](#development)
    - [Installing](#installing)
    - [User Credential](#user-credential)
    - [Using Vite](#using-vite)

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

## Development

### Installing

A step by step series of examples that tell you how to get a development env running

1.  `$ git clone https://github.com/AdhiNug/new-tech-stack`
2.  `$ composer install`
3.  Create **.env** file as per **.env.example**. #REQUIRED line must be change
4.  `$ php artisan key:generate`
5.  `$ php artisan storage:link` (Command to generate a symbolic link from public / storage to storage / app / public)
6.  `$ php artisan migrate --seed`
7.  Set DocumentRoot to {PROJECT_HOME} / public
8.  Access from Browser

### User Credential

 1. 

### Using Vite

This development with laravel mix to compile asset

1.  `$ npm install`
2.  `$ npm run dev` to developement
3.  `$ npm run build` to minify asset
4.  All asset on /resources/assets/ will compile to /public/assets
5.  Don't change directly asset (css/js) on /public/assets/
