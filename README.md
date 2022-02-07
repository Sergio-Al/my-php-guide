# A guide to PHP
This repo shows a lot of info about php and with examples ready to test with a DB
OOP in PHP too

## Guide to run Activity of Chapter 7
> we are working on MySQL v8
- create a database
```
CREATE DATABASE my_contacts;
```
- create a users table and a contacts table
```
CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(254) NOT NULL,
    password VARCHAR(254) NOT NULL,
    signup_time DATETIME CURRENT_TIMESTAMP NOT NULL
);

CREATE TABLE contacts (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(254) NOT NULL,
    phone VARCHAR(254),
    email VARCHAR(254) NOT NULL,
    address VARCHAR(254),
    user_id INT NOT NULL,
    CONSTRAINT fk_user_id
    FOREIGN KEY (user_id) 
    REFERENCES users(id) 
        ON DELETE CASCADE 
        ON UPDATE CASCADE
);
```
- configure your MySQL connection on `Chapter-7/activity/src/components/Database.php`, set your configuration in the `__construct` function
```
private function __construct()
    {
        $dsn = "mysql:host=<YOUR HOST>;port=<YOUR PORT>;dbname=my_contacts;charset=utf8mb4";
        $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        $this->pdo = new PDO($dsn, "<YOUR DATABASE USERNAME>", "<YOUR DATABASE PASSWORD>", $options);
    }
```
- now you can run a local server `>php -S localhost:8080` inside `Chapter-7/activity/web`.

---

## Chapter 9 Rules
You need to install the packages using composer
```
composer install
```
If you change your custom namespaces in `composer.json` you need to **regenerate** the `vendor/autload.php` file.
- You can delete the `autoload.php` file and run `composer install`.
- If the last step does not work delete all the `vendor` folder and run `composer install`.
