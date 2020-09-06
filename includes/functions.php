<?php
function OpenDBConn(){
    $host = "localhost";
    $username = "root";
    $password = "mysql";
    $database = "dbtoets_php";

    try {
        $conn = new PDO("mysql: host=$host;dbname=$database;", "$username", "$password");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "DB Connection Made";
        return $conn;
    } catch (PDOException $e) {
        die("Something went wrong with the database.");
        $e->getMessage();
    }
}
function cleaner($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}
function birthdaysByName() {
    $conn = OpenDBConn();
    $stmt = $conn->prepare("SELECT * FROM birthdays ORDER BY date ");
    $stmt->execute();
    $result = $stmt->fetchall();
    $conn = null;
    return $result;
}