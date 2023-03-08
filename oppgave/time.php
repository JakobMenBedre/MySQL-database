<html>
<head>
</head>
<body>

<?php
session_start();
$currentTime = time();
$_SESSION['currentTime'] = $currentTime;
?>
</body>
</html>