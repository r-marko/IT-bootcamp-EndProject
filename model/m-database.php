<?php
namespace Database;


// Creating database if not exist
class CreateDb {
    protected static $servername = "localhost";
    protected static $username = "root";
    protected static $password = "";



    public static function create_db(){
        $connection = new \PDO("mysql:host=" . self::$servername, self::$username, self::$password);
        $sql = "CREATE DATABASE IF NOT EXISTS moto_shop";
        $connection->exec($sql);
        return $connection;
    }
}

// connecting to the database 'moto_shop'
class DatabaseConnection extends CreateDb {
    protected static $dbname = "moto_shop";
        public static function connect(){
            try{
            $dns = "mysql:host=" . parent::$servername . ";dbname=" . self::$dbname;
            $pdo = new \PDO($dns, parent::$username, parent::$password);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $pdo;
            } catch (PDOException $e) {
                echo "Error connecting to database" . $e->getMessage() . ", in line of code: " . $e->getLine();
            }
        }
}

// creating table and setting products into database from products-array.php
class SetProductsTable {
    public function setTable(){
        $sql = "CREATE TABLE IF NOT EXISTS ec_products(
            id INT(30) PRIMARY KEY AUTO_INCREMENT,
            barcode INT(255) UNIQUE NOT NULL,
            title VARCHAR(255) NOT NULL,
            descript VARCHAR(255) NOT NULL,
            img VARCHAR(255),
            price INT(30) NOT NULL,
            category VARCHAR(255),
            brand VARCHAR(255),
            available BOOLEAN
        )";
    
        $connect = DatabaseConnection::connect()->prepare($sql);
        $connect->execute();
        return $connect;
    }
}

// setting products into database from function allProducts() from products-array.php
class SetProductsIntoDatabase {
    public function insertIntoDb(){
        try {
            include_once "./lib/products-array.php";
            $arr = allProducts();
            $connect = DatabaseConnection::connect();
            foreach ($arr as $indexArray){
                $sqlQuery = "INSERT INTO ec_products(barcode, title, descript, img, price, category, brand, available)" . 
                         "VALUES (" . ":id" . ", " . ":title" . ", " . ":description" . ", " . ":img" . ", " . ":price" . 
                         ", " . ":category" . ", " . ":brand" . ", " . ":available" . ")";
                $stmt = $connect->prepare($sqlQuery);
                $params = [
                    'id' => $indexArray["id"],
                    'title' => $indexArray["title"],
                    'description' => $indexArray['description'],
                    'img' => $indexArray['img'],
                    'price' => $indexArray['price'],
                    'category' => $indexArray['category'],
                    'brand' => $indexArray['brand'],
                    'available' => $indexArray['available']
                ];
                $insert = $stmt->execute($params);
            }
        return $insert;
        } catch (\Throwable $e){
            echo "Database error" . $e->getMessage();
        }
    }
}

//fetching all records from an database table $table_name
class ReturnAllFromTable {
    public static function fetchAllFromDatabaseTable($table_name){
        $connect = DatabaseConnection::connect();
        $sqlQuery = "SELECT * FROM " . $table_name;
        $stmt = $connect->prepare($sqlQuery);
        $db_status = $stmt->execute();
        $dbArray = $stmt->fetchAll();
        return $dbArray;
    }
    public static function fetchAllByPriceAsc($table_name){
        $connect = DatabaseConnection::connect();
        $sqlQuery = "SELECT * FROM " . $table_name . " ORDER BY price ASC";
        $stmt = $connect->prepare($sqlQuery);
        $db_status = $stmt->execute();
        $dbArray = $stmt->fetchAll();
        return $dbArray;
    }
    public static function fetchAllByPriceDsc($table_name){
        $connect = DatabaseConnection::connect();
        $sqlQuery = "SELECT * FROM " . $table_name . " ORDER BY price DESC";
        $stmt = $connect->prepare($sqlQuery);
        $db_status = $stmt->execute();
        $dbArray = $stmt->fetchAll();
        return $dbArray;
    }

}
// NOV DOdatak

class UserConnection {
    public function setTable(){
        $sql = "CREATE TABLE IF NOT EXISTS user_orders(
            id INT(30) PRIMARY KEY AUTO_INCREMENT,
            custommer_name VARCHAR(255) NOT NULL,
            last_name VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            city VARCHAR(255) NOT NULL,
            street VARCHAR(255) NOT NULL,
            phone VARCHAR(50) NOT NULL,
            zip VARCHAR(50),
            comment VARCHAR(255),
            session_array VARCHAR(255)
        )";
    
        $connect = DatabaseConnection::connect()->prepare($sql);
        $connect->execute();
        return $connect;
    }
    
    public function insertIntoDb($arrayFromUserForm){
        try {
            $connect = DatabaseConnection::connect();

            foreach ($arrayFromUserForm as $indexArray){
                $sqlQuery = "INSERT INTO user_orders(custommer_name, last_name, email, city, street, phone, zip, comment, session_array)" . 
                         "VALUES (" . ":custommer_name" . ", " . ":last_name" . ", " . ":email" . ", " . ":city" . ", " . ":street" . 
                         ", " . ":phone" . ", " . ":zip" . ", " . ":comment" . ", " . ":session_array"  . ")";
                $stmt = $connect->prepare($sqlQuery);
                $params = [
                    'custommer_name' => $indexArray["name"],
                    'last_name' => $indexArray["last_name"],
                    'email' => $indexArray['email'],
                    'city' => $indexArray['city'],
                    'street' => $indexArray['street'],
                    'phone' => $indexArray['phone'],
                    'zip' => $indexArray['zip'],
                    'comment' => $indexArray['comment'],
                    'session_array' => $indexArray['session_array']
                ];
                $insert = $stmt->execute($params);
            }
        return $insert;
        } catch (\Throwable $e){
            echo "Database error" . $e->getMessage();
        }
    }
}


?>