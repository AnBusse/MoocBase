<?php
/*
PLEASE NOTE:
The Database connection information listed below has been redacted for security reasons.
*/

  $db_server = 'XYZ_server';
  $db_user = 'XYZ_user';
  $db_pwd = 'XYZ_password';
  $db_name = 'XYZ_db_name';


  $the_connector = new mysqli($db_server, $db_user, $db_pwd, $db_name); //calling the connection 
  
  if ($the_connector->connect_error) {
     die('Connection failed (' . $the_connector->connect_errno . ') ' .  $the_connector->connect_error);
  }
  else {
      // echo "Connection to Database successfully established.";
  }
?>

