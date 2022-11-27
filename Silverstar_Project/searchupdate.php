<?php
include_once "dblink.php";
include_once "navigation.php";


 $connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);
  
    if($connection){
      echo "Successful Connection Established";
    }
    else{
      echo "Failed";
    }

    $query = "SELECT * FROM jobcardstatus";

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['search'])){

        $jobCardNumberSearch = $_POST['jobCardNumberSearch'];
        $customerName = $_POST['customerName'];

        echo "Search Term: $customerName , $jobCardNumberSearch";
        if($customerName){
            $query = "SELECT * FROM jobcardstatus WHERE Customer='$customerName' ";
            
        }
        if($jobCardNumberSearch){
            $query = "SELECT * FROM jobcardstatus WHERE 'Job_Card_Number'='$jobCardNumberSearch' ";
        
        }
        
    }


?>
<!-- FORM WHERE SELECTED RECORD IS DISPLAYED-->
<html lang="en">
    <head>
        <link href="css\bootstrap.min.css" rel="stylesheet">
    
        <style type="text/css">
          .formrow {
            padding-top : 20px;
            } 
        


        </style>

    </head>
    
    
    <body>

        <div class="container">
            <form class="row" action="" method="POST">

                <div class="formrow">
                        <label itemid="jobCardNumberSearch">Job Card Number</label>
                        <input class="form-control" type="text" name="jobCardNumberSearch" 
                        id="jobCardNumberSearch" value=""/>
                </div>

                <div class="formrow">
                        <label itemid="customerName">Customer Name</label>
                        <input class="form-control" type="text" name="customerName" 
                        id="customerName" value=""/>
                </div>

                
                <div class="formrow"> 
                    <button name="search" class="btn btn-primary" type="submit">Search</button>
                </div>
                



            </form>
        </div>

        
        
        
        
        
        
        
        

        <script src="js\bootstrap.bundle.min.js" ></script>
    
    </body>
</html>

<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Job Card Number</th>
            <th scope="col">Date In</th>
            <th scope="col">Date and Time Out</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Chassis Number</th>
            <th scope="col">Status </th>
            <th scope="col">View / Edit </th>
        </tr>
        </thead>
        <tbody>
        <?php 
        $result = $connection->query($query);
        $fetchRow = mysqli_fetch_assoc($result);
        if ($result->num_rows > 0): ?>
        <?php while($fetchRow = mysqli_fetch_assoc($result)): ?>
        <tr>
            <th scope="row"><?php echo $fetchRow['Job Card Number'];?></th>
            <td><?php echo $fetchRow['Date In'];?></td>
            <td><?php echo $fetchRow['Date and Time Out'];?></td>
            <td><?php echo $fetchRow['Customer'];?></td>
            <td><?php echo $fetchRow['Chassis Number'];?></td>
            <td><?php echo $fetchRow['Status'];?></td>
            <td><button name="view" class="btn btn-primary" type="submit">view</button>
            <button name="edit" class="btn btn-primary" type="submit">edit</button></td>
        </tr>
        <?php endwhile; ?>
        <?php else: ?>
        <tr>
            <td colspan="3" rowspan="1" headers="">No Data Found</td>
        </tr>
        <?php endif; ?>
        <?php //mysqli_free_result($result); ?>
        </tbody>
    </table>

</div>