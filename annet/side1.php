<?php

// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'excuses');

// Check for errors
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}


// Prepare the SQL query
if(isset($_GET["id"])){

  $id = $_GET["id"];

  $sql = "SELECT excuse.excuseText, excuse.usedLastDate FROM excuse

          JOIN occasion ON excuse.occID = occasion.occId

          WHERE occasion.occId = ?";

  $stmt = $pdo->prepare($sql);
  $stmt->execute([$id]);

  $data = $stmt->fetchAll();
}

// Bind the parameters
//mysqli_stmt_bind_param($stmt, 'ii', $_GET['exID'], $_GET['occID']);


// Execute the query
//mysqli_stmt_execute($stmt);

// Fetch the results
//$result = mysqli_stmt_get_result($stmt);
//$row = mysqli_fetch_assoc($result);

// Generate the HTML
$html = "<p>Excuse: " . $row['excuseText'] . "</p>";
$html .= "<p>Last used: " . $row['usedLastDate'] . "</p>";

// Return the HTML to the client
echo $html;

// Close the connection
mysqli_close($db);

?>
