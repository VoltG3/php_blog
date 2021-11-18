 <?php

include("../config.php");

// Create connection

$conn = new mysqli($host, $user, $pass, $dbase);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

// -------------------------
// SELECT - data from table
// -------------------------

$sql = "SELECT id, title, subtitle, author, DATE_orig, DATE_edit, ENM_status, ENM_public, content FROM $table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<br>";
  while($row = $result->fetch_assoc()) {
      echo "id:         " . $row["id"]. "   " .
           "Title:      " . $row["title"]. "   " .
           "Subtitle:   " . $row["subtitle"]. "   " .
           "Author:     " . $row["author"]. "   " .
           "DATE_orig:  " . $row["DATE_orig"]. "   " .
           "DATE_edit:  " . $row["DATE_edit"]. "   " .
           "ENM_status: " . $row["ENM_status"]. "   " .
           "ENM_public: " . $row["ENM_publis"]. "   " .
           "Content:    " . $row["content"]. '<br>' ;
  }

} else {
    echo "0 results";
}

$conn->close();                         
?>