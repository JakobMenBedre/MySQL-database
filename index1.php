


<html>

  <head>
  <meta charset="utf-8">


  <title>My Website</title>

</head>

<body>

  <h1>kulkul</h1>
<p>
<button onclick="window.location.href = 'main.php';"> tilbake </button>
<button onclick="window.location.href = 'index2.php';"> occasions </button>

</p>
<p>


  <?php
  $timestamp = time();
  $formattedDate = date("d-m-Y H:i:s", $timestamp);
  echo "The current date and time is: " . $formattedDate;
  echo "<br>"

  ?>

<?php

header('Content-Type: text/html; charset=utf-8');

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "excuses";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM excuses.excuse";

$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "" . $row["excuseText"]. " - last used: " . $row["usedLastDate"]. " " . "<br>";
  }
} else {
  echo "0 results";
}

?>
</body>

</html>