# Railway Ticket Booking System

A simple **Railway Ticket Booking System** built using **Core PHP (with basic OOP concepts)** and **MySQL**

Users can register, login, search trains, book tickets, and view their bookings.

---

## Features

- User registration & login  
- Search trains by source & destination  
- Book tickets with seat availability check  
- View user’s past bookings  
- Admin panel (optional) to manage trains & bookings  

---

## Tech Stack

- **PHP 5.x** (Core PHP, OOP basics)  
- **MySQL** (Database)  
- **HTML / CSS**

## Quick Start
1. Clone the repository:
```bash
git clone https://github.com/amitne7/railway-booking-system;
cd railway-booking-system;
```
2. Create a new database:
```sql
CREATE DATABASE railway;
```
3. Import db.sql into your MySQL server:
```bash
mysql -u root -p railway < db.sql
```
4. Edit config.php with your database credentials:
```php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "railway";
```

---
## How to run
1. Install XAMPP or WAMP.
2. Place the project folder in htdocs/ (for XAMPP).
3. Import the database (db.sql).
4. Start Apache and MySQL.
5. Open in browser:
```bash
http://localhost/railway-booking-system/
```