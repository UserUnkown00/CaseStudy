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

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $id = $_POST['id'];
    $nama = $_POST["nama"];
    $ic = $_POST["ic"];
    $matrix = $_POST["matrix"];
    $sem = $_POST["sem"];
    $sesi = $_POST["sesi"];
    $bilik = $_POST["bilik"];
    $telefon = $_POST["telefon"];
    $penasihat = $_POST["penasihat"];

    // SQL query to update student record
    $sql = "UPDATE maklumat_pelajar SET
            nama = '$nama',
            ic = '$ic',
            matrix = '$matrix',
            sem = '$sem',
            sesi = '$sesi',
            bilik = '$bilik',
            telefon = '$telefon',
            penasihat = '$penasihat'
            WHERE id = $id";

    // Execute the update query
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close connection
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
