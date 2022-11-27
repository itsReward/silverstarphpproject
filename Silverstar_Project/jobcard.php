<?php
include_once "header.php"; 
include_once "navigation.php";
?> 
<style type="text/css">
    .form-select-sm{
        border: none;
    }

</style>

<form action="" method="post">
    <div class="container">
        <div class="row">
        
            <div class="col-sm-3 sticky-top">
                <div class="form-row">
                    <h4>Customer Details</h4>
                    <label for="customerName">Customer Name: </label>
                    <input type="text" name="customerName" id="customerName" 
                    class="form-control" required />

                    <label for="">Address: </label>
                    <input type="text" name="address" id="address" 
                    class="form-control" required />

                    <label for="">CellPhone: </label>
                    <input type="text" name="cellphone" id="cellphone" 
                    class="form-control" required />
                </div>
                <br>
                <div class="form-row">
                    <h4>Vehicle Details</h4>
                    <label for="modelnumber">Model Number: </label>
                    <input type="text" name="modelnumber" id="modelnumber" 
                    class="form-control" required />

                    <label for="vehiclemake">Make of Vehicle: </label>
                    <input type="text" name="vehiclemake" id="vehiclemake" 
                    class="form-control" required />

                    <label for="carcolor">Color: </label>
                    <input type="text" name="carcolor" id="carcolor"
                    class="form-control"  />

                    <label for="licensedisk">License Disk: </label>
                    <input type="text" name="licencedisk" id="licencedisk" 
                    class="form-control"  />

                    <label for="controlnumber">Control Number: </label>
                    <input type="text" name="controlnumber" id="controlnumber"
                    class="form-control" required />

                    <label for="regnumber">Reg Number: </label>
                    <input type="text" name="regnumber" id="regnumber"
                    class="form-control" required />

                    <label for="enginenumber">Engine Number: </label>
                    <input type="text" name="enginenumber" id="enginenumber"
                    class="form-control" required />

                    <label for="chassisnumber">Chasis Number: </label>
                    <input type="text" name="chassisnumber" id="chassisnumber"
                    class="form-control" required />
                </div>
                <br>
                
            </div>
            
           
            <div class="col-sm">
    
                <div class="row">
                    
                    
                        <div class="col-sm">
                            <div class="row">
                                <div class="r">
                                    <div class="checklist">
                                        <h6><b>TOOLS</b></h6>
                                        <div class="row">
                                            <div class="col">
                                                <label for="wheelspanner">Wheel Spanner</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="wheelspanner" 
                                                id="wheelspaner">
                                                    <option selected></option>
                                                    <option value="Ok" color="danger">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="jack">Jack</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="jack" 
                                                id="jack">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="triangle">Triangle</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="triangle" 
                                                id="triangle">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="firstaidkid">First Aid Kit</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="firstaidkit" 
                                                id="firstaidkit">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="spanners">Spanners</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="spanners" 
                                                id="spanners">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="fireextinguisher">Fire Extinguisher</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="fireextinguisher" 
                                                id="fireextinguisher">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    <div>
                                </div>
                                <br>
                                <div class="r">
                                    <div class="checklist">
                                        <h6><b>WHEELS AND TIRES</b></h6>
                                        <div class="row">
                                            <div class="col">
                                                <label for="wheelstuds">Wheel Studs</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="wheelstuds" 
                                                id="wheelstuds">
                                                    <option selected></option>
                                                    <option value="Ok" color="danger">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="jack">Spare Wheel</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="jack" 
                                                id="jack">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="locknuts">Lock Nuts</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="locknuts" 
                                                id="locknuts">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="hubcab">Hub Cab</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="hubcab" 
                                                id="hubcab">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="rightfrontwheel">Right Front</label>
                                            </div>
                                            <div class="col">
                                                <input class="form-control small" type="text" name="rightfrontwheel" 
                                                id="rightfrontwheel"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="leftfrontwheel">Left Front</label>
                                            </div>
                                            <div class="col">
                                                <input class="form-control form-control-sm" type="text" name="leftfrontwheel" 
                                                id="leftfrontwheel"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="rightrearwheel">Right Rear</label>
                                            </div>
                                            <div class="col">
                                                <input class="form-control form-control-sm" type="text" name="rightrearwheel" 
                                                id="rightrearwheel"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="leftrearwheel">Left Rear</label>
                                            </div>
                                            <div class="col">
                                                <input class="form-control form-control-sm" type="text" name="leftrearwheel" 
                                                id="leftrearwheel"/>
                                            </div>
                                        </div>
                                        
                                    <div>
                                </div>
                                <br>
                                <div class="r">
                                    <div class="checklist">
                                        <h6><b>AUDIO EQUIPMENT</b></h6>
                                        <div class="row">
                                            <div class="col">
                                                <label for="radio">Radio/Tape</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="radio" 
                                                id="radio">
                                                    <option selected></option>
                                                    <option value="Ok" color="danger">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="radiomake">Make</label>
                                            </div>
                                            <div class="col">
                                                <input class="form-control small" type="text" name="radiomake" 
                                                id="radiomake"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="cd">C.D</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="cd" 
                                                id="cd">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="cdshuttle">C.D Shuttle</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="cdshuttle" 
                                                id="cdshuttle">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="modulator">Modulator</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="modulator" 
                                                id="modulator">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="usb">USB</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="usb" 
                                                id="usb">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    <div>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm">
                            <div class="row">
                                <div class="r">
                                    <div class="checklist">
                                        <h6><b>LIGHTS</b></h6>
                                        <div class="row">
                                            <div class="col">
                                                <label for="rightfrontlight">Right Front</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="rightfrontlight" 
                                                id="rightfrontlight">
                                                    <option selected></option>
                                                    <option value="Ok" color="danger">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="leftfrontlight">Left Front</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="leftfrontlight" 
                                                id="leftfrontlight">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="rightrearlight">Right Rear</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="rightrearlight" 
                                                id="rightrearlight">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="leftrearlight">Left Rear</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="leftrearlight" 
                                                id="leftrearlight">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="boot">Boot</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="boot" 
                                                id="boot">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="bonnet">bonnet</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="bonnet" 
                                                id="bonnet">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="interiorlights">Interior Lights</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="interiorlights" 
                                                id="interiorlights">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="foglights">Fog Lights</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="foglights" 
                                                id="foglights">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    <div>
                                </div>
                                <br>
                                <div class="r">
                                    <div class="checklist">
                                        <h6><b>ADDITIONALS</b></h6>
                                        <div class="row">
                                            <div class="col">
                                                <label for="boothandle">Boot Handle</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="boothandle" 
                                                id="boothandle">
                                                    <option selected></option>
                                                    <option value="Ok" color="danger">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="bootmat">Boot Mat</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="bootmat" 
                                                id="bootmat">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="sunroof">Sun Roof</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="sunroof" 
                                                id="sunroof">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="enginecovers">Engine Covers</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="enginecovers" 
                                                id="enginecovers">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="airducts">Air Ducts</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="airducts" 
                                                id="airducts">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <label><b>ROLLLER BLINDS</b></label>
                                        <div class="row">
                                            <div class="col">
                                                <label for="rearwindscreenblinds">  Rear Windscreen</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="rearwindscreenblinds" 
                                                id="rearwindscreenblinds">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="bootblinds">Boot</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="bootblinds" 
                                                id="bootblinds">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="enginecover">Engine Cover</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="enginecover" 
                                                id="enginecover">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="bonnetliner">Bonnet Liner</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="bonnetliner" 
                                                id="bonnetliner">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <label>DOOR TRIMS</label>
                                        <div class="row">
                                            <div class="col">
                                                <label for="rightfronttrims">---Right Front</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="rightfronttrims" 
                                                id="rightfronttrims">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="leftreartrim">---Left Rear</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="leftreartrim" 
                                                id="leftreartrim">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="rightreartrim">---Right Rear</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="rightreartrim" 
                                                id="rightreartrim">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="leftreartrim">---Left Rear</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="leftreartrim" 
                                                id="leftreartrim">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <label>SUNVISOR</label>
                                        <div class="row">
                                            <div class="col">
                                                <label for="rightfrontvisor">---Right Front</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="rightfrontvisor" 
                                                id="rightfrontvisor">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="leftfrontvisor">---Left Front</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="leftfrontvisor" 
                                                id="leftfrontvisor">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="glovecompartment">Glove Compartment</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="glovecompartment" 
                                                id="glovecompartment">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="overmats">Overmats</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="overmats" 
                                                id="overmats">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="mudflaps">Mudflaps</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="mudflaps" 
                                                id="mudflaps">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>

                                        
                                        
                                    <div>
                                </div>
                                <br>
                                <div class="r">
                                    <div class="checklist">
                                        <h6><b>GLASS</b></h6>
                                        <div class="row">
                                            <div class="col">
                                                <label for="windscreenglass">Windscreen</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="windscreenglass" 
                                                id="windscreenglass">
                                                    <option selected></option>
                                                    <option value="Ok" color="danger">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="rearwindscreenglass">Rearscreen</label>
                                            </div>
                                            <div class="col">
                                                <input class="form-control small" type="text" name="rearwindscreenglass" 
                                                id="rearwindscreenglass"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="rightfrontglass">Right Front</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="rightfrontglass" 
                                                id="rightfrontglass">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="leftfrontglass">Left Front</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="leftfrontglass" 
                                                id="leftfrontglass">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="rightrearglass">Right Rear</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="rightrearglass" 
                                                id="rightrearglass">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="leftrearglass">Left Rear</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="leftrearglass" 
                                                id="leftrearglass">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="interiormirror">Interior Mirror</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="interiormirror" 
                                                id="interiormirror">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="rightdoormirror">Right Door Mirror</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="rightdoormirror" 
                                                id="rightdoormirror">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="leftdoormirror">Left Door Mirror</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="leftdoormirror" 
                                                id="leftdoormirror">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="wipers">Wipers</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="wipers" 
                                                id="wipers">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <h6><b>INTERIOR</b></h6>
                                        <div class="row">
                                            <div class="col">
                                                <label for="centrallocking">Central Locking</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="centrallocking" 
                                                id="centrallocking">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="dashboard">Dashboard</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="dashboard" 
                                                id="dashboard">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="instrumentcluster">Instrument Cluster</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="instrumentcluster" 
                                                id="instrumentcluster">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="windowwinders">Window Winders</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="windowwinders" 
                                                id="windowwinders">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="cigarrettelighter">Cigarrette Lighter</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="cigarrettelighter" 
                                                id="cigarrettelighter">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="mats">Mats</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="mats" 
                                                id="mats">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="ownersmannual">Owner's Manual</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="ownersmannual" 
                                                id="ownersmannual">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <h6><b>STAR</b></h6>
                                        <div class="row">
                                            <div class="col">
                                                <label for="bootstar">Boot Star</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="bootstar" 
                                                id="bootstar">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="bonnetstar">Bonnet Star</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="bonnetstar" 
                                                id="bonnetstar">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="grillstar">Grill Star</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="grillstar" 
                                                id="grillstar">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="batterycover">Battery Cover</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-select-sm" list="datalistOptions" name="batterycover" 
                                                id="batterycover">
                                                    <option selected></option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Missing">Missing</option>
                                                    <option value="Faulty">Faulty</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="batterycover">Battery Cover</label>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="batterycover" id="batterycover" />
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        
                                    <div>
                                </div>
                            </div>

                        </div>

                    
                </div>
            </div>

            <div class="col-sm">
                <div class="row">
                    <label for="sareport" class="form-label">Service Advisor Report</label>
                    <textarea class="form-control" id="sareport" rows="3"></textarea>
                </div>
                <br>
                <div class="row">
                    <label for="treport" class="form-label">Technician Report</label>
                    <textarea class="form-control" id="treport" rows="3"></textarea>
                </div>
                <br>
                <div class="row">
                    <label for="sparesreport" class="form-label">Spares Report</label>
                    <textarea class="form-control" id="sparesreport" rows="3"></textarea>
                </div>
                <br>
                <br>
                <br>
            </div>
            
            
        </div>
        
    </div>
    <br><br>
    <button name="submit" class="btn btn-primary" type="submit">Save</button>
</form>