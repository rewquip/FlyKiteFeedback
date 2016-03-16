<html>
<body>
<?php
  try {
    $hostname = "http://darrenlim2012.database.windows.net";
    $port = 1433;
    $dbname = "FlyKiteFeedback";
    $username = "darren.lim.2012";
    $pw = "Password1";
    $dbh = new PDO ("dblib:host=$hostname:$port;dbname=$dbname","$username","$pw");
  } catch (PDOException $e) {
    echo "Failed to get DB handle: " . $e->getMessage() . "\n";
    exit;
  }
  
  echo "My first PHP script!";
?>

</body>
</html>