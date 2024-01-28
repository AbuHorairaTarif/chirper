# Chirper 
It is a open source project, that I have done from Laravel Bootcamp. It is a mini social app where user can CREATE, READ, UPDATE and DELETE post and all users can see the post from other users.
## Installation

1. Open terminal, and write the following code:
```
git clone https://github.com/AbuHorairaTarif/chirper.git
```
2. Now go to directory project,
```
cd chirper
```
3. Now on terminal, run this command:
```
composer install
```
or,

```
composer update
```

4. Open `.env.example` file and change it to `.env` and update database file.
5. Create database from phpMyAdmin
6. Run this command to create migration table on your database
```
php artisan migrate
```
7. To generate key for this project: 
```
php artisan key:generate
```

8. Set up storage, for your local machine:

```
 php artisan storage:link
```
9. To run project, type the following command:
```
php artisan serve
```
10.  Go to: <a href="http://127.0.0.1:8000/">http://127.0.0.1:8000/</a>

## Contribute

Feel free to contribute on this project
