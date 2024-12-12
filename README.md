# ![Laravel Logo](https://laravel.com/img/logomark.min.svg) Laravel

## JobFinder - Job Portal Laravel Vue Script

"JobFinder" is a job portal web application built using the Laravel PHP framework for the backend and the Vue.js JavaScript framework for the frontend. This open-source project is designed to help job seekers find suitable employment opportunities and employers post job listings efficiently. Below is some information you might include when creating a GitHub repository for the JobFinder project:

---

### Key Features:
1. **User Registration and Authentication**:  
   Users can create accounts, log in, and manage their profiles securely.

2. **Job Listings**:  
   Employers can post detailed job listings, including job descriptions, requirements, location, and more.

3. **Advanced Search**:  
   Job seekers can filter job listings based on various criteria such as location, industry, experience level, and more.

4. **Application Management**:  
   Job seekers can submit applications for job listings and track their application status.

5. **Messaging System**:  
   A built-in messaging system facilitates communication between job seekers and employers.

6. **Resume Upload**:  
   Job seekers can upload and manage their resumes, making it easy for employers to review qualifications.

7. **Admin Panel**:  
   An admin panel provides administrators with the ability to manage users, job listings, and oversee the platform's operations.

8. **Responsive Design**:  
   The application is designed to be responsive, ensuring a seamless experience on both desktop and mobile devices.

9. **Notifications**:  
   Users receive email notifications for job application updates, messages, and more.

---

### Technologies Used:
- **Backend**: Laravel PHP framework  
- **Frontend**: Vue.js JavaScript framework  
- **Database**: MySQL or any supported database system  
- **Other Technologies**: HTML, CSS, JavaScript, AJAX, REST API  

---

### Installation

**Composer and PHP need to be installed if not already available.**

**If you receive an error during installation:**  
Run `composer update` instead of `composer install`, and also run `php artisan`.

#### 1. Clone the Repository
```bash
git clone https://github.com/rafsan3051/JobLink
```
---
### 2. Set the Basic Config
1. Create a database in your local environment.

2. Update the `.env` file with the following configuration:

```dotenv
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=root
DB_PASSWORD=
```
---
Make sure the `.env` file contains the correct database settings to establish a connection.
---
Run the following commands to clear cache and reset the configuration:

```bash
php artisan config:cache
php artisan config:clear
php artisan cache:clear
```
---
### 3. Install Dependencies

Run the following commands to install the necessary dependencies:

```bash
composer install
npm install
npm run dev
```
---
### 4. Migrate and Seed the Database

Run the following commands to migrate and seed the database:

```bash
php artisan migrate:fresh
php artisan db:seed
```
---
### 5. Serve the Application

Run the following command to serve the application:

```bash
php artisan serve
```
---