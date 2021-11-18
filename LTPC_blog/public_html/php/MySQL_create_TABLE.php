 <?php

include("../config.php");

// Create connection

$conn = new mysqli($host, $user, $pass, $dbase);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

// -------------------
// SQL - create table
// -------------------

  $sql = "CREATE TABLE $table (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(30) NOT NULL,
    lname VARCHAR(30) NOT NULL,
    telefon VARCHAR(30) NOT NULL,
    epost VARCHAR(30) NOT NULL
  )";

if ($conn->query($sql) === TRUE) {
    echo "Table . $table . created successfully";
    include("MySQL_insert_DATA.php");                               

} else {
    echo "Error creating table: " . $conn->error;
    include("MySQL_insert_DATA.php");                                
}

$conn->close();
?> 
