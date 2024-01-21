
# Chat application with Laravel 10 + Ably Broadcaster + Echo + Vue.Js

We will build a chat application using Ably Broadcaster + Echo using Vite based on Laravel 10


## Requirements

- PHP Version >= 8.1
- Node.js Version >= 14.x.x

  
## Features

- Laravel Vite  + Vue.js Usage
- Public chat rooms for a guest user.
- Laravel built-in user authentication (registration + login).
- Private chat rooms with presence for authenticated users.
- Typing indicator for private rooms.
- Join multiple rooms simultaneously.

  
## Setup

```bash
git clone https://github.com/osmanceyhan/laravel-ably-chat-app.git
```
- Create the .env file in the project root. Copy contents from .env.example into .env.
- Edit the ABLY_KEY parameter in your .env file.

```bash
ABLY_KEY=ROOT_API_KEY_COPIED_FROM_ABLY_WEB_DASHBOARD
```
- Install dependencies.

```bash
composer install
npm install
```
- Generate application encryption key.
```bash
php artisan key:generate
```
- Run all of db migrations.
```bash
php artisan migrate
```
- Start laravel project

```bash 
php artisan serve
```
- Start UI Server
```bash
npm run dev
```
  


  
## Kullanılan Teknolojiler

**Frontend:** Vue.js

**Backend:** Laravel v10.x

  
## Destek

For support, email me@osmanceyhan.com or contact us on linkedin; https://www.linkedin.com/in/osman-ceyhan-80111a10a/
  