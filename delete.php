<!-- delete.php -->

<?php
// Database connection parameters
$servername = "localhost"; // Change this if your database is on a different server
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "StudentInfo"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the ID parameter is set in the URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete student record from the database based on the provided ID
    $sql = "DELETE FROM maklumat_pelajar WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "ID parameter not provided.";
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <style media="screen">
    button {
      transition: all .5s ease;
      color: #fff;
      border: 3px solid white;
      font-family:'Montserrat', sans-serif;
      text-transform: uppercase;
      text-align: center;
      line-height: 1;
      font-size: 17px;
      background-color : transparent;
      padding: 10px;
      outline: none;
      border-radius: 4px;
      background: black;
      margin-top: 30%;
  }
  button:hover {
      color: #001F3F;
      background-color: #fff;
  }
    </style>
    <center>
    <button onclick="location.href='home.php'">Home</button>
  </center>
  </body>
</html>
