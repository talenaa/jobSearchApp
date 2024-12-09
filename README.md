# JOB SEARCH APP LARAVEL

>[!IMPORTANT]
>To learn how to install and also to know how I did this project, it's very important that you read every part of this readme. Thank you for your patience and have a good read.
***

## :bulb: Project description

***

## Requirements to achieve in this project:

- We must display on the screen all our applied offers with their status (Blade).
  
- There must be a status position that is "In Progress" or "Completed".

- We must view all our offers applied by Endpoints.

- We must be able to delete, insert, modify and view all the entrys through Endpoints.

- We have to be able to watch the show on Endpoints.

- We have to be able to see the show (Blade).

- Date management 1 creation, 2 last modification.

- 70% minimum test coverage.
***

## :eye_speech_bubble: Project overview

Take a look at how my project turned out.

***
(screenshot here)

***

## Project Diagrams (BBDD)

![image](https://github.com/user-attachments/assets/b4eef6c7-3c8e-4cf5-8f21-576eb7b26f49)

The diagram I did for my database in **DrawSQL**.

As you can see both of the tables are interlinked, this one, with a **one to many** relantionship.
***

## Installation requirements

Before you start to read how to install the project you'll need these requirements:
>[!NOTE]
>If you can't install xampp, look for any other local server that supports **MySQL** and **PHP**
***

1. XAMPP

2. Install Composer

3. Install NPM in Node.js

4. Xdebug (for the tests coverage)

5. Postman
***

## :scroll: Installation

1. Clone this repository:
```
 https://github.com/talenaa/jobSearchApp.git
```

2. Install **Composer** and **NPM**
```
composer install
```
```
npm install
```

3. Create a .env file copying everything inside the existing file .env.example and modify the following lines:
* DB_CONNECTION=mysql
* DB_DATABASE=jobSearch

4. Create a database in **MySQL**

5. Now go to the VSC terminal and put the following command
```
php artisan migrate:fresh --seed
```
This command will generate all the tables.

6. Open another terminal in **VSC** and put the following command
```
npm run dev
```

7. Open another terminal and run the server with this command
```
php artisan serve
```
You'll see an url that is going to take you to a website.

>[!IMPORTANT]
>Be sure that your running npm and the server in **DIFFERENT** terminals, **DON'T** close these two terminals and **DON'T** use other commands in these two terminals. 
***

## Project documentation

<p align="center">My endpoints</p> 

(screenshots below)

***

## :white_check_mark: Tests

> [!IMPORTANT]
> It's important to test the project so we can check if it works correctly and to do that use this command in the **VSC** terminal:

```
php artisan test
```
This is what you should see after doing the tests.

![Screenshot 2024-12-09 200840](https://github.com/user-attachments/assets/eb7875c3-91db-45ad-aa56-dc08e64532b4)

These are all my tests passed. I tested the web, the API CRUD and the feedback CRUD

To see the coverage you can use this command at the **VSC** terminal
```
php artisan test --coverage-html=coverage-report
```
This will add a folder called "coverage-report", go to the folder, go to the index.html, and then open with live server. After that you should see this page:
![image](https://github.com/user-attachments/assets/cb11c466-8c93-45ee-b3d1-5485161b84af)
***

## Contact and information

>[!NOTE]
>Please understand that i'm still learning, not everything will look or be perfect. Thank you for the attention.

If you want to contact me here's my gmail: talenabarbosa7@gmail.com
***

## Languages and tools I used in this project

(badges go here)
***

## Thanks for reading!

Thanks for reading this readme!

Have a good day! :3
***
