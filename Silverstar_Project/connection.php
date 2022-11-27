<?php
$db_hostname = "localhost";
$db_database = "silverstar_db";
$db_username = "root";
$db_password = "";


$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);

  if($connection){
    echo "Successful Connection Established";
  }
  else{
    echo "Failed";
  }

 