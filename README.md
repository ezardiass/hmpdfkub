## Readme

## About
A website for Himpunan Mahasiswa Pendidikan Kedokteran Fakultas Kedokteran Universitas Brawijaya. The technology stack is using laravel, bootstrap and MySQL.

## Rule
1. Use only english for naming variable or a function
2. The file that could be changed is in resources/pages or resources/admin
3. All CSS files and image files is put into public folder
4. The name of CSS files is following with the name of the files
5. When link to css or image files use {{asset(folder_name/file_name)}} this is placeholder for /public
6. Commit is only for one goal, and use the format like "[your_name] your_message"

## How to commit
1. Do your task
2. When done add your task to staged changes
```bash
git add .
```
3. Commit your task
```bash
git commit -am "[your_name] your_message"
```

## How to Use
A. First Use
1. Clone this repository
```bash
git clone https://github.com/Akbarsn/hmpdfkub.git
```
2. Install dependecy
```bash
composer install
npm i
```
3. Make an .env file by copying .env.example
4. Generate key 
```bash
php artisan key:generate
```
5. Create database and set it environment in .env file
6. Run the migration
```bash
php artisan migrate
```
7. Run the application
```bash
php artisan serve
```
B. When there is change in origin master
When there is conflict just ask for it
Pull the repo again
```bash
git pull https://github.com/Akbarsn/hmpdfkub.git
```

## How to use
1. Pull this repo
```bash
git pull https://github.com/Akbarsn/hmpdfkub.git
```
2. When there is conflict, accept incoming changes
3. Make an .env file by copying .env.example
4. Generate key 
```bash
php artisan key:generate
```
5. Create database and set it environment in .env file
6. Run the migration
```bash
php artisan migrate:fresh --seed
```
7. Run the application
```bash
php artisan serve
```
8. Test it



