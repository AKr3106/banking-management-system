# Banking Management System

A lightweight, full-stack web application for managing bank customer records. This project demonstrates basic CRUD operations using PHP and MySQL with a responsive UI built on Bootstrap.

## 🚀 Features
* **Create Account:** Add new customers with their name, phone number, and initial balance.
* **Search Records:** Retrieve specific customer details instantly using their unique ID.
* **Modify Data:** Update existing customer information including contact details and balances.
* **Delete Records:** Remove customer accounts from the system database.
* **Responsive Design:** Fully responsive navigation and forms using Bootstrap 5.

## 🛠️ Tech Stack
* **Frontend:** HTML5, CSS3, Bootstrap 5
* **Backend:** PHP
* **Database:** MySQL (MariaDB)
* **Server Environment:** XAMPP / WAMP

## 📋 Prerequisites
Before running this project, ensure you have the following installed:
* [XAMPP](https://www.apachefriends.org/index.html) or any local server environment with PHP and MySQL support.

## ⚙️ Installation & Setup

1.  **Clone the Repository**
    ```bash
    git clone [https://github.com/AKr3106/banking-management-system.git](https://github.com/AKr3106/banking-management-system.git)
    ```

2.  **Setup the Database**
    * Open XAMPP and start **Apache** and **MySQL**.
    * Go to `http://localhost/phpmyadmin/`.
    * Create a new database named `bank`.
    * Import the `bank.sql` file provided in this repository into the `bank` database.

3.  **Configure Connection**
    * Open `connect.php` and verify the database credentials:
    ```php
    define('LOCALHOST','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME','bank');
    ```

4.  **Run the Project**
    * Move the project folder to your XAMPP directory: `C:/xampp/htdocs/`.
    * Open your browser and navigate to `(http://localhost/banking-management-system/create.php)`.

## 📁 Project Structure
* `create.php` - Form to add new customers.
* `searching.php` - Interface to find customers by ID.
* `modify.php` - Edit existing customer details.
* `delete.php` - Remove records from the database.
* `connect.php` - Database connection configuration.
* `style.css` - Custom styling for the application.
* `bank.sql` - Database schema and sample data.

