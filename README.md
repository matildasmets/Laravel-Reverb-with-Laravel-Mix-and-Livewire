# Laravel Reverb with Laravel Mix and Livewire

This is a basic example application demonstrating the use of Laravel Reverb with Vite and Livewire.

## Installation

Follow these steps to set up the application:

1. Install PHP and Node.js dependencies:
   ```bash
   composer install
   npm install
   ```
2. Install Reverb if it isn't already set up:
   ```bash
   php artisan install:broadcasting
   ```
3. Set up your `.env` file with the following Reverb-related variables:
   ```dotenv
   REVERB_APP_ID=XXX
   REVERB_APP_KEY=XXX
   REVERB_APP_SECRET=XXX
   REVERB_HOST="localhost"
   REVERB_PORT=8080
   REVERB_SCHEME=http
   ```
4. Run the database migrations:
   ```bash
   php artisan migrate
   ```

## Running the Application

Start the application using the following commands:

1. Serve the Laravel application:
   ```bash
   php artisan serve
   ```
2. Build and watch your frontend assets with Laravel Mix:
   ```bash
   npm run watch
   ```
3. Start the Reverb server:
   ```bash
   php artisan reverb:start
   ```
