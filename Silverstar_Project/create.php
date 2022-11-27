<?php
include_once "dblink.php";
include_once "navigation.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"-->
        <link href="css\bootstrap.min.css" rel="stylesheet">
    
        <style type="text/css">
          .formrow {
            padding-top : 20px;
            } 
        


        </style>

    </head>
    
    
    <body>
        <div class="container">
            <form class="row needs-validation"  novalidate action="" method="post" action="dblink.php">
                <div class="container" >
                    <br><br><br>
                    <h2 >Job Card Status</h2>
                    <div class="formrow">
                        <label itemid="jobcardnumber">Job Card Number</label>
                        <input class="form-control" type="text" name="jobcardnumber" id="jobcardnumber" required/>
                        <div class="invalid-feedback">
                            Enter Job Card Number
                        </div>
                    </div>

                    <div class="formrow">
                        <label itemid="dateIn">Date In</label>
                        <input class="form-control" type="date" name="DateIn" id="dateIn" required/>
                        <div class="invalid-feedback">
                            Enter Date In
                        </div>
                    </div>

                    <div class="formrow">
                        <label itemid="timeIn" position="floating">Time In</label>
                        <input class="form-control" type="time" name="TimeIn" id="timeIn" required/>
                        <div class="invalid-feedback">
                            Enter Time In
                        </div>
                    </div>
                    
                    <div class="formrow">
                        <label itemid="dateTimeOut">Date and Time Out</label>
                        <input class="form-control" type="datetime-local" name="DateTimeOut" 
                        id="dateTimeOut" />
                    </div>

                    <div class="formrow">
                        <label itemid="customer">Customer</label>
                        <input class="form-control" type="text" name="customer" id="customer" required/>
                        <div class="invalid-feedback">
                            Customer Name Required
                        </div>
                    </div>

                    <div class="formrow">
                        <label itemid="chassis">Chassis Number</label>
                        <input class="form-control" type="text" name="chassis" id="chassis" 
                        placeholder="W1120740029" required/>
                        <div class="invalid-feedback">
                            Chassis Number Required
                        </div>
                    </div>

                    <div class="formrow">
                        <label itemid="technician">Technician</label>
                        <select class="form-control" list="datalistOptions" name="technician" id="technician" 
                        placeholder="Type to search" required>
                            <option selected>Select Technician</option>
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
                        <textarea class="form-control" id="jobDescription" rows="3" name="jobDescription" required></textarea>
                        <div class="invalid-feedback">
                            Job Description Required
                        </div>
                    
                    </div class="formrow">

                    <div class="formrow">
                        <label itemid="remarks">Remarks</label>
                        <textarea class="form-control" id="remarks" name="remarks" rows="3"></textarea>
                    </div>

                    <div class="formrow">
                        <div class="formrow">
                            <input class="form-check-input" type="radio" value="1" id="jobfinished" name="status">
                            <label class="form-check-label" for="finished">Job Finished</label>
                        </div>
                        <div class="formrow" text-color="danger">
                            <input class="form-check-input" type="radio" value="0" id="notcompleted" name="status">
                            <label class="form-check-label" for="finished">Not Completed</label>
                        </div>

                        <!--label class="form-check-label" for="status">Job finished</label>
                        <select class="form-control" list="datalistOptions" name="status" id="status" 
                        placeholder="Enter Job Status" required>
                            <option selected>Select Job Status</option>
                            <option value="Finished">Finished</option>
                            <option value="Not Complete">Not complete</option>
                        </select-->
                    </div>

                    <br>
                    <br>
                    <button name="submit" class="btn btn-primary" type="submit">Save</button>
                    <br>
                    <br>
                    <br>

                </div>
            
            </form>
        </div>
        
        
        
        
        
        
        
        <!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script-->
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