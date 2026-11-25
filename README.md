# Dental Appointment System

A full-stack **Dental Clinic Appointment & Management System** built with PHP, MySQL, and Bootstrap 5. Designed for patients, dentists, and clinic administrators to book, schedule, and track dental appointments.

## Features

- **Public Clinic Portal**: Landing page (`index.php`), services overview (`services.php`), about (`about.php`), and contact (`contact.php`).
- **Online Appointment Booking**: Patient booking form (`book.php`) with procedure selection, date/time scheduling, and validation.
- **Role-Based Dashboards** (`pages/admin`, `pages/dentist`, `pages/patient`):
  - **Admin**: Summary metrics, appointment analytics (ApexCharts), calendar schedule (FullCalendar), user & appointment management.
  - **Dentist**: Personal schedule calendar and appointment status tracking.
  - **Patient**: Booking history and upcoming appointment status.
- **Authentication**: Sign in (`signin.php`), sign up (`signup.php`), and role-based session protection (`auth.php`).
- **Responsive & Accessible UI**: Mobile-friendly navigation, keyboard-accessible focus states, and `prefers-reduced-motion` support.

## Tech Stack

- **Backend**: PHP 8+, MySQL / MariaDB (`mysqli`)
- **Frontend**: HTML5, CSS3, Bootstrap 5, JavaScript
- **Libraries**: FullCalendar, ApexCharts, DataTables, PHPMailer

## Local Setup (XAMPP / PHP + MySQL)

1. **Clone the repository** into your web root (e.g. `C:\htdocs\dental-appointment-system` or `xampp/htdocs/dental-appointment-system`):
   ```bash
   git clone https://github.com/03DxD12/Dental_System.git
   ```
2. **Import the database**:
   - Open **phpMyAdmin** (or MySQL CLI).
   - Create a database named `dental_booking_db`.
   - Import `dental_booking_db.sql`.
3. **Configure database connection** (optional if using default XAMPP `root` with no password):
   - `conn.php` defaults to `127.0.0.1`, user `root`, empty password, database `dental_booking_db`.
   - You can also set environment variables `DB_HOST`, `DB_USER`, `DB_PASS`, `DB_NAME`, and `DB_PORT` for production/cloud hosting.
4. **Run the app**:
   - Start Apache and MySQL in XAMPP, then visit `http://localhost/dental-appointment-system/`.

## Hosting Note for Portfolio

Because this application uses **PHP** and **MySQL**, it requires a server with PHP + MySQL support (such as **Railway**, **Render**, **InfinityFree**, or a VPS). GitHub Pages only serves static HTML/CSS/JS files and cannot execute PHP or connect to MySQL.

