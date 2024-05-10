<!-- listofstudent.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List of Students</title>
  <style>
    table {
      width: 80%;
      margin: 20px auto;
      border-collapse: collapse;
    }
    th, td {
      padding: 10px;
      border: 1px solid #ddd;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }

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
</head>
<body>

<center>
<h2>List of Registered Students</h2>
<input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search for names..">
</center>

<table id="studentTable">
  <thead>
    <tr>
      <th>Name</th>
      <th>No IC</th>
      <th>No Matrix</th>
      <th>Semester</th>
      <th>Sesi</th>
      <th>No Bilik</th>
      <th>No Telefon</th>
      <th>Penasihat Akademik</th>
      <th>Senarai Kelab</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
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

    // Fetch student records from the database
    $sql = "SELECT * FROM maklumat_pelajar";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["nama"] . "</td>";
            echo "<td>" . $row["ic"] . "</td>";
            echo "<td>" . $row["matrix"] . "</td>";
            echo "<td>" . $row["sem"] . "</td>";
            echo "<td>" . $row["sesi"] . "</td>";
            echo "<td>" . $row["bilik"] . "</td>";
            echo "<td>" . $row["telefon"] . "</td>";
            echo "<td>" . $row["penasihat"] . "</td>";
            echo "<td>" . $row["kelab"] . "</td>";
            echo "<td><a href='edit.php?id=" . $row["id"] . "'>Edit</a> | <a href='delete.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure?\")'>Delete</a></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }

    // Close connection
    $conn->close();
    ?>
  </tbody>
</table>

<script>
function searchTable() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("studentTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0]; // Change index based on the column you want to search
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<center>
<button onclick="location.href='home.php'">Home</button>
</center>
</body>
</html>
