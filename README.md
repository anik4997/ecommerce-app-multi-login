# Ecommerce App (Laravel) with SSO Integration

This is the **Ecommerce App** which acts as the Identity Provider (IdP) for SSO login to the Foodpanda App.

---

## Overview

- Handles user login/logout
- Generates JWT token for SSO
- Redirects to Foodpanda App for automatic login
- Maintains its own session independently

---

## Architecture
User
↓
Ecommerce App (Port: 8000)
↓ (JWT Token)
Foodpanda App (Port: 8001)

---

## Technologies

- Laravel 12.52.0
- PHP 8+
- MySQL
- JWT Authentication
- WAMP/XAMPP (Local Development)

---

## Setup Instructions

### Clone Repo

```bash
git clone ecommerce-app-multi-login
```
### Install Dependencies

```bash
composer install
```
### Setup Environment

```bash
cp .env.example .env
php artisan key:generate
```

### Update .env for database:

```bash
DB_DATABASE=ecommerce_db
DB_USERNAME=root
DB_PASSWORD=
SESSION_COOKIE=ecommerce_session
SESSION_DRIVER=file
```
### JWT Installation & Setup:

## Install package:
```bash
composer require tymon/jwt-auth
```
## Publish config:
```bash
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
```
## Generate secret key:
```bash
php artisan jwt:secret
```
## This adds to .env:
```bash
JWT_SECRET=place_generated_secret_here
```

### Run Migrations:

```bash
php artisan serve --port=8000
```
## SSO Login Flow:

- User logs in to Ecommerce.
- JWT token is generated.
- User clicks “Login to Foodpanda”.
- User is automatically logged in to Foodpanda App via /sso-login and redirecting to foodpanda dashboard.

## Testing Flow:

- Login to Ecommerce.
- Click "Login to Foodpanda".
- Auto-login should work
- Logout in Ecommerce but Foodpanda session unaffected

## Test Data:

- Email: test@gmail.com
- Password: Password@123
