<?php
include_once "view.php";
include_once "dblink.php";
include_once "navigation.php";

$id = $_GET['viewid'];
echo $id;


 $connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);
  
    if($connection){
      echo "Successful Connection Established";
    }
    else{
      echo "Failed";
    }

    $query = "SELECT * FROM jobcardstatus WHERE `Job Card Number`='$_SESSION'";
    $result = $connection->query($query);
    $fetchRow = mysqli_fetch_assoc($result);
    //echo $result;
    echo $fetchRow['Status'];


?>

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
            <form class="row needs-validation"  novalidate action="" method="post" action="update.php">
                <div class="container" >
                    <br><br><br>
                    <h2 >Job Card Status</h2>
                    <div class="formrow">
                        <label itemid="jobcardnumber">Job Card Number</label>
                        <input class="form-control" type="text" name="jobcardnumber" id="jobcardnumber" value="<?php echo $fetchRow['Job Card Number']?>" required/>
                        <div class="invalid-feedback">
                            Enter Job Card Number
                        </div>
                    </div>

                    <div class="formrow">
                        <label itemid="dateIn">Date In</label>
                        <input class="form-control" type="date" name="DateIn" id="dateIn" value="<?php echo $fetchRow['Date In']?>" required/>
                        <div class="invalid-feedback">
                            Enter Date In
                        </div>
                    </div>

                    <div class="formrow">
                        <label itemid="timeIn" position="floating">Time In</label>
                        <input class="form-control" type="time" name="TimeIn" id="timeIn" value="<?php echo $fetchRow['Time In']?>" required/>
                        <div class="invalid-feedback">
                            Enter Time In
                        </div>
                    </div>
                    
                    <div class="formrow">
                        <label itemid="dateTimeOut">Date and Time Out</label>
                        <input class="form-control" type="datetime-local" name="DateTimeOut" 
                        id="dateTimeOut" value="<?php echo $fetchRow['Date and Time Out']?>"/>
                    </div>

                    <div class="formrow">
                        <label itemid="customer">Customer</label>
                        <input class="form-control" type="text" name="customer" id="customer" value="<?php echo $fetchRow['Customer']?>" required/>
                        <div class="invalid-feedback">
                            Customer Name Required
                        </div>
                    </div>

                    <div class="formrow">
                        <label itemid="chassis">Chassis Number</label>
                        <input class="form-control" type="text" name="chassis" id="chassis" 
                        placeholder="W1120740029" value="<?php echo $fetchRow['Chassis Number']?>" required/>
                        <div class="invalid-feedback">
                            Chassis Number Required
                        </div>
                    </div>

                    <div class="formrow">
                        <label itemid="technician">Technician</label>
                        <select class="form-control" list="datalistOptions" name="technician" id="technician" 
                        placeholder="" required>
                            <option selected><?php echo $fetchRow['Technician']?></option>
                                <option value="Zviko">Zviko</option>
                                <option value="Prosper">Prosper</option>
                                <option value="Takudzwa">Takudzwa</option>
                                <option value="Allen">Allen</option>
                        </select>
                        <div class="invalid-feedback">
                            Assigned Technician Required
                        </div>
                    </div>

                    <div class="formrow">
                        <label itemid="jobDescription">Job Description</label>
                        <textarea class="form-control" id="jobDescription" rows="3" name="jobDescription" required><?php echo $fetchRow['Job Description']?></textarea>
                        <div class="invalid-feedback">
                            Job Description Required
                        </div>
                    
                    </div class="formrow">

                    <div class="formrow">
                        <label itemid="remarks">Remarks</label>
                        <textarea class="form-control" id="remarks" name="remarks" rows="3" ><?php echo $fetchRow['Remarks']?></textarea>
                    </div>

                    <div class="formrow">
                        
                        <? if ($fetchRow['Status'] == 1){ $check1 = "checked" && $check2 = "";}
                        else{$check2 = "checked" && $check1 = "";} ?>
                            <div class="formrow">
                                <input class="form-check-input" type="radio" value="1" id="jobfinished" name="status" $check1>
                                <label class="form-check-label" for="finished">Job Finished</label>
                            </div>
                  
                            <div class="formrow" text-color="danger">
                                <input class="form-check-input" type="radio" value="0" id="notcompleted" name="status" $check2>
                                <label class="form-check-label" for="finished">Not Completed</label>
                            </div>
                        
                    </div>

                    <br>
                    <br>
                    <button name="update" class="btn btn-primary" type="submit">Update</button>
                    <br>
                    <br>
                    <br>

                </div>
            
            </form>
        </div>
        
        
        
        
        
        
        

        <script src="js\bootstrap.bundle.min.js" ></script>
        
        <script>
            var forms = document.querySelectorAll(".needs-validation");

            Array.prototype.slice.call( forms ).forEach( function( form )
            {
                form.addEventListener("submit", function(event)
                {
                    if (!form.checkValidity())
                    {   
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add( "was-validated" );
                }, false );
            });
        </script>
    
    </body>
</html>
