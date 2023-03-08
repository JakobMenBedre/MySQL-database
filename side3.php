<html>
<head>
</head>
<body>
<button onclick="window.location.href = 'main.php';"> tilbake til hjemmesiden </button>
<p></p>


<?php
    header('Content-Type: text/html; charset=utf-8');
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "excuses";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset("utf8");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT excuseText, usedLastDate FROM excuse WHERE occID = 3 ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Excuse: " . $row["excuseText"]. " - Last used: " . $row["usedLastDate"] . "<br>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
?>

</body>