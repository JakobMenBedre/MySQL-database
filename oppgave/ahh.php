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
    <div class="heading">
        <section id="heading">
            <h1><a class="title href="main.php">ExcusemE</a></h1>
            <p>En ordbok for unskyldninger.</p>
        </section>
    </div>
    
</head>
<p></p>
<hr>
<p>
<body style="background-color: rgb(200, 200, 200) ;">

<body>

<button onclick="window.location.href = 'index2.php';"> tilbake </button>
    <p>
    <?php

    $host = "localhost";

    $user = "root";

    $password = "";

    $dbname = "excuses";


    $conn = mysqli_connect($host, $user, $password, $dbname);
    // Check connection
    $conn->set_charset("utf8");
    if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_GET["id"])){
      $id = $_GET["id"];
     $sql = "SELECT excuse.excuseText, excuse.usedLastDate FROM excuse
             JOIN occasion ON excuse.occID = occasion.occId
             WHERE occasion.occId = $id";

      $result = mysqli_query($conn, $sql);
     if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            echo "<br>" . $row["excuseText"]. "    |     sist brukt   : " . $row["usedLastDate"]. "";
    }  
      } else {
         echo "0 results";
     }
      mysqli_close($conn);
      }else{
          echo "Missing parameter";
      }
?>
</p>
<p></p>
<!--<section id=klokke>
    <?php
        //date_default_timezone_set("Europe/Amsterdam");
        //echo "klokka er " . date("h:i");
        //$LastUsed = date("h:i");

        //$date = new DateTime();
        //$currentTime = $date->getTimestamp();
    ?>
</section>-->                                               <!--gjemmer min egen klokke kode her fordi at den andre er kulere, men jeg har min fortsatt her for å kunne vise den fram-->
<p> </p>
<section id=klokke>
    <button id="save-time-button">ta i bruk</button>
</section>


<script src="clock.js" type="text/javascript"></script>

<div id="clock">
  <h1 id="date-time"></h1>
</div>



<?php
session_start();
$currentTime = time();
$_SESSION['currentTime'] = $currentTime;
?>
<p id=$_SESSION></p>
<p>
</p>

<section id=logo>
  <ul>
    <li><p><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img src="ExcusemE_logo.png" height=800px width=auto></a></p></li>
</section>

</body>
</html>
