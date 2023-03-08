<!DOCTYPE html>
<html>
  
  <head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Excuse Me </title>
  </head>
  <div class="heading">
      <section id="heading">
          <h1><a class="title"href="main.php">ExcusemE</a></h1>
          <p>En ordbok for unskyldninger.</p>
      </section>
  </div>
<p></p>
<hr>
<p>
<body style="background-color: rgb(200, 200, 200) ;">

<body>


<p>
<button onclick="window.location.href = 'main.php';"> tilbake til hjemmesiden </button>
<!--<button onclick="window.location.href = 'index1.php';"> excuses </button> -->
</p>
<p>

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
$sql = "SELECT * FROM excuses.occasion";

$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
//    echo "  " . $row["occText"]. " " . "<br>";
    $id = $row['occID'];
    $name = $row['occText'];
    echo "<a href='ahh.php?id=$id'>$name</a><br>";
  }
} else {
  echo "0 results";
}

?>
<section id=logo>
  <ul>
    <li><p><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img src="ExcusemE_logo.png" height=800px width=auto></a></p></li>
</section>
</body>

</html>