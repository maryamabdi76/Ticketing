# 🌟 Ticket Booking System

A **Laravel-powered** web application for booking tickets for **cinemas, concerts, and theaters**, with an **admin panel** for managing bookings and events.

## 📚 Features

✅ User-friendly **ticket booking system**  
✅ Supports **movies, concerts, and theaters**  
✅ **Admin panel** for managing bookings and events**  
✅ Secure **payment integration** (Shetabit Payment)  
✅ **Seat selection & invoice generation**  
✅ **User profile management** (favorites, booking history, wallet)  
✅ **Responsive UI** for a smooth experience**  
✅ **Reports & analytics dashboard**

---

## 🚀 Installation Guide

### **1️⃣ Prerequisites**

Make sure you have the following installed:

-   **PHP 7.4+** (with OpenSSL, cURL, and required extensions)
-   **Composer** (`composer -V`)
-   **Node.js & NPM** (`node -v && npm -v`)
-   **MySQL or PostgreSQL** (for database)
-   **Laravel CLI** (`composer global require laravel/installer`)

---

### **2️⃣ Clone the Repository**

```sh
git clone https://github.com/maryamabdi76/Ticketing.git
cd Ticketing
```

---

### **3️⃣ Install Dependencies**

```sh
composer install
npm install && npm run dev  # For frontend assets
```

---

### **4️⃣ Configure Environment**

1. Copy the `.env.example` file:
    ```sh
    cp .env.example .env
    ```
2. Generate the **application key**:
    ```sh
    php artisan key:generate
    ```
3. Configure **database settings** in `.env`:
    ```ini
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=ticketing
    DB_USERNAME=root
    DB_PASSWORD=your_password
    ```

---

### **5️⃣ Run Migrations & Seed Database**

```sh
php artisan migrate --seed
```

_(Seeds admin users and sample event data)_

---

### **6️⃣ Start the Development Server**

```sh
php artisan serve
```

Visit: **[http://127.0.0.1:8000](http://127.0.0.1:8000)** 🎉

---

## 📂 Project Structure

```
📺 Ticketing
┣ 📂 app            # Core Laravel app (Models, Controllers)
┣ 📂 bootstrap      # Laravel bootstrap files
┣ 📂 config         # Configuration settings
┣ 📂 database       # Migrations & seeders
┣ 📂 public         # Frontend assets
┣ 📂 resources      # Blade views, JS, CSS
┣ 📂 routes         # Web & API routes
┣ 📂 storage        # Logs, cache, file uploads
┣ 📂 tests          # Unit & Feature tests
┣ 📂 vendor         # Composer dependencies
┣ 📄 .env.example   # Environment settings
┣ 📄 composer.json  # PHP dependencies
┣ 📄 package.json   # JavaScript dependencies
┣ 📄 README.md      # This file
┗ 📄 server.php     # Laravel server entry
```

---

## 🔒 Admin Panel Access

-   **URL**: [http://127.0.0.1:8000/admin](http://127.0.0.1:8000/admin)
-   **Default Admin Credentials**:
    -   **Email**: `admin@example.com`
    -   **Password**: `password`

_(Change credentials in `.env` or via `php artisan tinker`)_

---

## 💳 Payment Integration

The project uses **Shetabit Payment** for secure transactions.

**Configuration** (update `.env`):

```ini
PAYMENT_GATEWAY=shaparak
PAYMENT_MERCHANT_ID=your_merchant_id
```

---

## 🚀 Deployment

### **1️⃣ Setup Production Server**

```sh
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan migrate --force
php artisan queue:work --daemon
```

### **2️⃣ Set Proper File Permissions**

```sh
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data .
```

### **3️⃣ Set Up Supervisor for Queues**

_(For background processing)_

```sh
sudo nano /etc/supervisor/conf.d/ticketing-worker.conf
```

```ini
[program:ticketing-worker]
process_name=%(program_name)s_%(process_num)02d
command=php /path-to-your-project/artisan queue:work --tries=3
autostart=true
autorestart=true
numprocs=1
redirect_stderr=true
stdout_logfile=/path-to-your-project/storage/logs/worker.log
```

Restart Supervisor:

```sh
sudo supervisorctl reread
sudo supervisorctl update
sudo supervisorctl start ticketing-worker:*
```

---

## 🤖 Contribution Guide

Want to contribute? Follow these steps:

1. **Fork the repository**
2. **Create a new branch** (`git checkout -b feature-branch`)
3. **Commit changes** (`git commit -m "Your message"`)
4. **Push to the branch** (`git push origin feature-branch`)
5. **Create a Pull Request**

---

## 🛠 Troubleshooting

### **🔹 Permissions Issues**

```sh
chmod -R 777 storage bootstrap/cache
```

### **🔹 Composer Issues**

```sh
composer dump-autoload
composer install --no-cache
```

### **🔹 Database Errors**

```sh
php artisan migrate:fresh --seed
```

---

## 📚 About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects. Laravel is accessible, powerful, and provides tools required for large, robust applications.

---

## 📚 License

The Laravel framework is open-sourced software licensed under the **MIT License**.

---

## 📱 Contact

For support or inquiries:

-   **GitHub Issues**: [Open an issue](https://github.com/maryamabdi76/Ticketing/issues)

---

### **🎉 Happy Ticket Booking!**
