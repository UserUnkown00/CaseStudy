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

// Function to sanitize user input
function sanitize_input($data) {
    // Remove whitespace and special characters from the input data
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and store form data
    $nama = sanitize_input($_POST["nama"]);
    $ic = sanitize_input($_POST["ic"]);
    $matrix = sanitize_input($_POST["matrix"]);
    $sem = sanitize_input($_POST["sem"]);
    $sesi = sanitize_input($_POST["sesi"]);
    $bilik = sanitize_input($_POST["bilik"]);
    $telefon = sanitize_input($_POST["telefon"]);
    $penasihat = sanitize_input($_POST["penasihat"]);
    $kelab = implode(", ", $_POST["kelab"]); // Convert array to comma-separated string

    // SQL query to insert data into the table
    $sql = "INSERT INTO maklumat_pelajar (nama, ic, matrix, sem, sesi, bilik, telefon, penasihat, kelab) VALUES ('$nama', '$ic', '$matrix', '$sem', '$sesi', '$bilik', '$telefon', '$penasihat', '$kelab')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        echo "<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
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
