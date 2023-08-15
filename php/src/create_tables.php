<?php

//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'MYSQL_USER';

//database user password
$pass = 'MYSQL_PASSWORD';

// database name
$mydatabase = 'JC01';
// check the mysql connection status

$conn = new mysqli($host, $user, $pass, $mydatabase);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}


//COURSES
$sql = "CREATE TABLE inquiry (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(255) NOT NULL,
    email varchar(255) NOT NULL,
    email_subject varchar(255) NOT NULL,
    email_body varchar(255) NOT NULL


    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "inquiry created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
