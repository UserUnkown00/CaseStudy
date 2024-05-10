<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Student Form</title>
</head>
<body>
  <style media="screen">
  body {
font-family: Arial, sans-serif;
margin: 0;
padding: 0;
background-color: gray;
}

.container {
width: 80%;
margin: 0 auto;
padding: 2rem;
border: 1px solid #ccc;
border-radius: 4px;
background-color: #f9f9f9;
}

h1, h2 {
margin: 0 0 0.5rem 0;
background-color: black;
color: white;
}

input[type="text"],
input[type="date"],
input[type="checkbox"] {
display: block;
width: 100%;
margin-bottom: 1rem;
padding: 0.25rem;
border: 1px solid #ccc;
border-radius: 4px;
}

input[type="checkbox"] {
margin-right: 0.5rem;
}

.approval {
display: flex;
justify-content: space-between;
align-items: center;
margin-top: 1rem;
}

.approval input[type="text"] {
width: 70%;
}

.club-container {
      display: flex;
      justify-content: space-between;
      margin-bottom: 1rem;

    }

    .club-table {

      width: 48%; /* Adjust width as needed */
    }

  </style>
  <div class="container">
      <center>
    <h1>MAKLUMAT PELAJAR<h1>
    </center>
    <form action="save.php" method="post">
      <label for="name">Name:</label>
      <input type="text" id="nama" name="nama">

      <label for="ic">No IC:</label>
      <input type="text" id="ic" name="ic">

      <label for="matrix">No Matrix:</label>
      <input type="text" id="matrix" name="matrix">

      <label for="semester">Semester:</label>
      <input type="text" id="sem" name="sem">

      <label for="session">Sesi:</label>
      <input type="text" id="sesi" name="sesi">

      <label for="room">No Bilik:</label>
      <input type="text" id="bilik" name="bilik">

      <label for="phone">No Telefon:</label>
      <input type="text" id="telefon" name="telefon">

      <label for="academicAdvisor">Penasihat Akademik:</label>
      <input type="text" id="penasihat" name="penasihat">


      <label for="kelab">Senarai Kelab Kokurikulum : </label>
      <div class="club-container">
        <div class="club-table">
      <table>
        <tr>
          <td>
           <label for="sukan1">Kelab Sukan Dan Rekreasi</label>
         </td>
         <td>
           <input type="checkbox" name="kelab[]" id="sukan1" value="Kelab Sukan Dan Rekreasi">
         </td>
        </tr>
        <tr>
          <td>
            <label for="sukan2">Kelab Bowling</label>
          </td>
          <td>
            <input type="checkbox" name="kelab[]" value="Kelab Bowling" >
          </td>
        </tr>
        <tr>
          <td>
            <label for="sukan3">Kelab Bola Sepak</label>
          </td>
          <td>
            <input type="checkbox" name="kelab[]" value="Kelab Bola Sepak" >
          </td>
        </tr>
        <tr>
          <td>
            <label for="sukan4">Kelab Badminton</label>
          </td>
          <td>
            <input type="checkbox" name="kelab[]" value="Kelab Badminton" >
          </td>
        </tr>
        <tr>
          <td>
            <label for="sukan5">Kelab Petanque</label>
          </td>
          <td>
            <input type="checkbox" name="kelab[]" value="Kelab Petanque" >
          </td>
        </tr>
        <tr>
          <td>
            <label for="sukan6">Kelab Robotik</label>
          </td>
          <td>
            <input type="checkbox" name="kelab[]" value="Kelab Robotik" >
          </td>
        </tr>
      </table>
    </div>
    <div class="club-table">
      <table>
        <tr>
          <td>
            <label for="sukan7">Kelab Bahasa</label>
          </td>
          <td>
            <input type="checkbox" name="kelab[]" value="Kelab Bahasa" >
          </td>
        </tr>
        <tr>
          <td>
            <label for="sukan8">Kelab Kebudayaan</label>
          </td>
          <td>
            <input type="checkbox" name="kelab[]" value="Kelab Kebudayaan" >
          </td>
        </tr>
        <tr>
          <td>
            <label for="sukan9">Kelab Komputer</label>
          </td>
          <td>
            <input type="checkbox" name="kelab[]" value="Kelab Komputer" >
          </td>
        </tr>
        <tr>
          <td>
            <label for="sukan10">Kelab Muzik</label>
          </td>
          <td>
            <input type="checkbox" name="kelab[]" value="Kelab Muzik" >
          </td>
        </tr>
        <tr>
          <td>
            <label for="sukan11">Kelab Fotografi</label>
          </td>
          <td>
            <input type="checkbox" name="kelab[]" value="Kelab Fotografi" >
          </td>
        </tr>
        <tr>
          <td>
            <label for="sukan12">Kelab Keceriaan</label>
          </td>
          <td>
            <input type="checkbox" name="kelab[]" value="Kelab Keceriaan" >
          </td>
        </tr>
      </table>
    </div>
    </div>

      <center>
      <input type="submit" value="Submit">
    </center>
   </form>
 </div>
</body>
</html>
