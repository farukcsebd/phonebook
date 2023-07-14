## Phonebook Project - Installation Instructions
This README file provides step-by-step instructions to help you install and set up this project. Please follow these steps carefully.

Prerequisites
Before you begin, make sure you have the following software installed on your system:

PHP (version 8.1.6 or higher)
Composer
Node.js (version 12 or higher)
NPM (Node Package Manager)

Step 1: Clone the Repository
git clone https://github.com/farukcsebd/phonebook.git

Step 2: Install Dependencies
composer install
npm install
npm run dev

Step 3: Environment Configuration
Copy .env.example file and reename the .env.example file in the project's root directory to .env.

Step 4: Generate Application Key
In the command line, run the following command to generate an application key:

php artisan key:generate
This key is used for secure encryption of user sessions and other sensitive data.

Step 5: Database Migration
To create the required database tables, run the following command:

php artisan migrate

Step 6: Serve the Application
You can use Laravel's built-in development server to run the application locally. In the command line, run the following command:

php artisan serve
This will start the development server, and you can access the application in your browser at http://localhost:8000.

