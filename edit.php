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

    // Fetch student record from the database based on the provided ID
    $sql = "SELECT * FROM maklumat_pelajar WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Set variables from the fetched record for editing
        $nama = $row['nama'];
        $ic = $row['ic'];
        $matrix = $row["matrix"];
        $sem = $row["sem"];
        $sesi = $row["sesi"];
        $bilik = $row["bilik"];
        $telefon = $row["telefon"];
        $penasihat = $row["penasihat"];
        // Repeat for other fields
    } else {
        echo "Student record not found.";
    }
} else {
    echo "ID parameter not provided.";
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Student</title>
</head>
<body>

<h2>Update Student</h2>

<form action="update.php" method="post">
  <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- Hidden field to pass ID to the update.php file -->
  <!-- Display form fields with pre-filled values for editing -->
  Name: <input type="text" name="nama" value="<?php echo isset($nama) ? $nama : ''; ?>"><br>
  No IC: <input type="text" name="ic" value="<?php echo isset($ic) ? $ic : ''; ?>"><br>
  No Matrix: <input type="text" name="matrix" value="<?php echo isset($matrix) ? $matrix : ''; ?>"><br>
  Semester: <input type="text" name="sem" value="<?php echo isset($sem) ? $sem : ''; ?>"><br>
  Sesi: <input type="text" name="sesi" value="<?php echo isset($sesi) ? $sesi : ''; ?>"><br>
  Bilik: <input type="text" name="bilik" value="<?php echo isset($bilik) ? $bilik : ''; ?>"><br>
  No Telefon: <input type="text" name="telefon" value="<?php echo isset($telefon) ? $telefon : ''; ?>"><br>
  Penasihat Akademik: <input type="text" name="penasihat" value="<?php echo isset($penasihat) ? $penasihat : ''; ?>"><br>
  <!-- Repeat for other fields -->
  <input type="submit" value="Update">
</form>

</body>
</html>
