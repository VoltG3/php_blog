 <?php

include("../config.php");

// Create connection

$conn = new mysqli($host, $user, $pass, $dbase);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

// ------------------
// SQL - insert Data
// ------------------

$LoremIpsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer cursus lobortis eros, eu tempor urna iaculis at. Donec eget imperdiet magna. Nam ac neque rhoncus, maximus quam non, varius nulla. Vestibulum quis pretium turpis. In dapibus non ante at malesuada. Donec nec urna et lectus aliquet fermentum sed ac ex. Mauris dictum arcu at nulla sollicitudin interdum. Suspendisse vel euismod dui. Maecenas vel justo sed eros condimentum accumsan eget non eros. Fusce egestas, elit ultrices ultrices sodales, nibh arcu elementum nisl, ac sagittis nisi sem nec mi. Nunc imperdiet condimentum augue, et euismod augue semper vitae. Nullam eget ante eu ex pulvinar aliquam id nec sapien. Vestibulum sem augue, euismod at velit sit amet, efficitur porttitor erat.";

$sql = "INSERT INTO $table ( id, title, subtitle, author, DATE_orig, DATE_edit, ENM_status, ENM_public, content )
VALUES ( id, 'Lorem ipsum dolor', 'Donec eget', 'Ola Bool', NOW(), NOW(), 'Y', 'Y', '$LoremIpsum' )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    include("MySQL_select_DATA.php");   

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
