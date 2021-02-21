<?php
error_reporting(0);

define('DB_NAME', "sample_db");
define('DB_USER', "root");
define('DB_PASSWORD', "");
define('DB_HOST', "localhost");
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

// Create connection
$CONN = new mysqli(constant('DB_HOST'), constant('DB_USER'), constant('DB_PASSWORD'), constant('DB_NAME'));
// Check connection
if ($CONN->connect_error) {
    die("Connection failed: " . $CONN->connect_error);
    mysqli_set_charset($CONN, constant('DB_CHARSET'));
}

   $rPost =  $_POST['Data'];
   $rGet  =  $_GET['Data'];

   if(isset($rPost) || isset($rGet)){

         $SQL_String = "SELECT * FROM `tb1`";
         if ($result = $CONN->query($SQL_String)) {
            $row     = $result->fetch_assoc();
            echo (json_encode($row));
         } else {
            echo 'Connection problem.';
         }

   }
?>