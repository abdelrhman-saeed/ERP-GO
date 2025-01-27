# ECHOES-ERP

ECHOES-ERP is a comprehensive ERP system built with Laravel, designed to streamline business operations and improve efficiency. This guide will help you install and set up the project on your local machine.

---

## Prerequisites

Before you begin, ensure you have the following installed:

- **PHP >= 8.1** (with required extensions: BCMath, Ctype, Fileinfo, JSON, Mbstring, OpenSSL, PDO, Tokenizer, XML)
- **Composer** (dependency manager for PHP)
- **MySQL >= 5.7** or **MariaDB >= 10.2**
- **Git** (to clone the repository)

---

## Installation Steps

1. **Clone the Repository**

   ```bash
   git clone https://github.com/your-username/echoes-erp.git
   cd echoes-erp
   ```

2. **Install Dependencies**

   Run the following command to install PHP dependencies:

   ```bash
   composer install
   ```

3. **Environment Configuration**

   Copy the example environment file and configure it:

   ```bash
   cp .env.example .env
   ```

   Update the `.env` file with your database credentials and other settings:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_user
   DB_PASSWORD=your_database_password
   ```

4. **Generate Application Key**

   ```bash
   php artisan key:generate
   ```

5. **Set Up the Database**

   Run the migrations and seeders to set up the database:

   ```bash
   php artisan migrate --seed
   ```

6. **Set Up the Project Packages**

   ```bash
   php artisan package:seed package_name
   or
   php artisan package:seed
   ```

7. **Start the Development Server**

   Use Laravel's built-in development server to run the application:

   ```bash
   php artisan serve
   ```

   By default, the application will be accessible at [http://127.0.0.1:8000](http://127.0.0.1:8000).

---

## Troubleshooting

- If you encounter permission issues, ensure the `storage` and `bootstrap/cache` directories are writable:

  ```bash
  chmod -R 775 storage bootstrap/cache
  ```

- If dependencies fail to install, double-check your PHP version and extensions.

---

## License

ECHOES-ERP is licensed under [MIT License](LICENSE).
