<?php
$db_hostname = "localhost";
$db_database = "silverstar_db";
$db_username = "root";
$db_password = "";


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){

  $connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);

  if($connection){
    echo "Successful Connection Established";
  }
  else{
    echo "Failed";
  }

  if($connection->connect_error) die($connection->connect_error);

  /*if (isset($_POST['Date In']) &&
      isset ($_POST['Time In']) &&
      isset ($_POST['DateTime Out']) &&
      isset ($_POST['customer']) &&
      isset ($_POST['chassis']) &&
      isset ($_POST['technician']) &&
      isset ($_POST['jobDescription']) &&
      isset ($_POST['remarks']) &&
      isset ($_POST['finished']))*/

    $jobcardnumber = $_POST['jobcardnumber'];
    $dateIn = $_POST['DateIn'];
    $timein = $_POST['TimeIn'];
    $dateTimeOut = $_POST['DateTimeOut'];
    $customer = $_POST['customer'];
    $chassis = $_POST['chassis'];
    $technician = $_POST['technician'];
    $jobDescription = $_POST['jobDescription'];
    $remarks = $_POST['remarks'];
    $status = $_POST['status'];

  

    $query = "INSERT INTO jobcardstatus VALUES" .
    "('$jobcardnumber' , '$dateIn' , '$timein' , '$dateTimeOut' , '$customer' , '$chassis' , '$technician' ,
      '$jobDescription' , '$remarks' , '$status') ";

    $result = $connection->query($query);
    //$result = mysqli_query($connection, $query);

    if ($result){
      echo "Entry Successful";
    }
    else
    {
      echo " error" ;
    }
  
  /*else{
    echo "the if did not execute";
  }*/

}
?>



