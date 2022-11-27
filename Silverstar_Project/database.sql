CREATE SCHEMA `silverstar` ;
CREATE TABLE `Service` (
  `Session ID` INT NOT NULL,
  `Job Number` INT NOT NULL,
  `Order Number` INT NOT NULL ,
  `Service Type` VARCHAR,
  `Date In` DATE NOT NULL DEFAULT (GETDATE()),
  `Date Out`DATE ,
  `Time of Arrival` TIME NOT NULL DEFAULT (GETTIME()),
  `Time of Completion` TIME ,
  `Service Advisor` VARCHAR,
  Technician VARCHAR NOT NULL,
  `Service Advisor` VARCHAR,
  `Chasis Number` VARCHAR,
	PRIMARY KEY (`Session ID`)
	FOREIGN KEY ('Chasis Number') REFERENCES 'Vehicle Information'('Chasis Number')
	FOREIGN KEY (Technician) REFERENCES Employees('Employee ID')
	FOREIGN KEY ('Service Advisor') REFERENCES Employees('Employee ID')


);



CREATE TABLE 'Vehicle Information' (
  `Chasis Number` VARCHAR NOT NULL,
  `Engine Number` INT,
  `Reg Number` VARCHAR,
  `Licence Disk` VARCHAR,
  `Control Number` INT,
  `Model  Number` VARCHAR,
  `Make of Vehicle` VARCHAR,
  `Color` VARCHAR,
  PRIMARY KEY (`Chasis Number`)
);



CREATE TABLE `Repairs` (
  `Session ID` INT NOT NULL,
  `Job Number` INT NOT NULL,
  `Order Number` INT NOT NULL,
  `Date In` DATE NOT NULL DEFAULT (GETDATE()),
  `Date Out` DATE
  `Time of arrival` TIME NOT NULL DEFAULT (GETTIME()),
  `Time of completion` TIME,
  `Service Advisor` VARCHAR,
  `Chasis Number` VARCHAR,
  Technician VARCHAR,
  `Service Advisor` VARCHAR,
	PRIMARY KEY (`Session ID`)
	FOREIGN KEY (Technician) REFERENCES Employees('Employee ID')
	FOREIGN KEY ('Service Advisor') REFERENCES Employees('Employee ID')
);



CREATE TABLE `Employees` (
  `Employee ID` VARCHAR NOT NULL,
  `EmployeeID` VARCHAR NOT NULL,
  `Employee Name` VARCHAR,
  `Address ` VARCHAR,
  `Cellphone` INT,
  `Job Title` VARCHAR,
  PRIMARY KEY (`Employee ID`),
  FOREIGN KEY (`Employee ID`) REFERENCES `Repairs`(`Technician`),
  FOREIGN KEY (`EmployeeID`) REFERENCES `Repairs`(`Service Advisor`),
  KEY `Key` (`Employee Name`, `Address `, `Cellphone`, `Job Title`)
);



CREATE TABLE `Service Report` (
  `Chasis Number` VARCHAR NOT NULL,
  `Session ID` INT NOT NULL,
  `Report Service Advisor` VARCHAR,
  `Report Technician` VARCHAR,
  `Parts Ordered` VARCHAR,
  `Brakes` VARCHAR,
  `Lightf` VARCHAR,
  `Wipers` VARCHAR,
  `Continuos Belt  and Pulleys` VARCHAR,
  `Hooters` VARCHAR,
  `Battery` VARCHAR,
  `Air-Con Dust Filter` VARCHAR,
  `Rear Diff` VARCHAR,
  `Gearbox Oil` VARCHAR,
  `Power Steering Fluid` VARCHAR,
  `Coolant` VARCHAR,
  `Tyre Pressure` VARCHAR,
  `Clock` VARCHAR,
  PRIMARY KEY ('Chasis Number', 'Session ID')
);



CREATE TABLE `Vehicle Condition` (
  `Chasis Number` VARCHAR NOT NULL,
  `Session ID` INT NOT NULL,
  `SessionID` INT NOT NULL,
  `Date in ` DATE NOT NULL DEFAULT (GETDATE()),
  `Fuel level` VARCHAR,
  `Speed In` INT NOT NULL,
  `Speed Out` INT NOT NULL,
  `Keys` VARCHAR,
  `Rings` VARCHAR,
  `Wheel Spanner` VARCHAR,
  `Jack` VARCHAR,
  `Triangle` VARCHAR,
  `First Aid Kit` VARCHAR,
  `Spanners` VARCHAR,
  `Fire Extinguisher` VARCHAR,
  `Window Switch` VARCHAR,
  `Wheel Studs` VARCHAR,
  `Spare Wheel` VARCHAR,
  `Right Front Wheel Size` VARCHAR,
  `Left Front Wheel Size` VARCHAR,
  `Right Rear Wheel Size` VARCHAR,
  `Left Rear Wheel Size` VARCHAR,
  `Lock Nuts` VARCHAR,
  `Hub Cap` VARCHAR,
  `Radio / Tape` VARCHAR,
  `Make` VARCHAR,
  `CD` VARCHAR,
  `CD Shuttle` VARCHAR,
  `Right Front Light Lenses` VARCHAR,
  `Left Front Light Lenses` VARCHAR,
  `Right Rear Light Lenses` VARCHAR,
  `Left Rear Light Lenses` VARCHAR,
  `Boot` VARCHAR,
  `Bonnet` VARCHAR,
  `Interior Lights` VARCHAR,
  `Fog Lights` VARCHAR,
  `Boot Handle` VARCHAR,
  `Boot Mat` VARCHAR,
  `Sun Roof` VARCHAR,
  `Engine Covers` VARCHAR,
  `Vehicle Smoking` VARCHAR,
  `Air Ducts` VARCHAR,
  `Rear Windscreen Blinds` VARCHAR,
  `Boot Blinds` VARCHAR,
  `Bonnet Liner` VARCHAR,
  `Right Front Door Trims` VARCHAR,
  `Left Front Door Trims` VARCHAR,
  `Right Rear Door Trims` VARCHAR,
  `Left Rear Door Trims` VARCHAR,
  `Right Front Sunvisor` VARCHAR,
  `Left Front Sunvisor` VARCHAR,
  `Glove Compartment` VARCHAR,
  `Overmats` VARCHAR,
  `Mudflaps` VARCHAR,
  `Windscreen Glass` VARCHAR,
  `Rearscreen Glass` VARCHAR,
  `Right Front Glass` VARCHAR,
  `Left Front Glass` VARCHAR,
  `Right Rear Glass` VARCHAR,
  `Left Rear Glass` VARCHAR,
  `Interior Mirror` VARCHAR,
  `Left Door Mirror` VARCHAR,
  `Right Door Mirror` VARCHAR,
  `Left Door Mirror` VARCHAR,
  `Central Locking` VARCHAR,
  `Hoodlining` VARCHAR,
  `Dashboard` VARCHAR,
  `Instrument Cluster` VARCHAR,
  `Window winders` VARCHAR,
  `Cigarrette Lighter` VARCHAR,
  `Mats` VARCHAR,
  `Licence Disc` VARCHAR,
  `Tow Hitch` VARCHAR,
  `Radio Licence Disc` VARCHAR,
  `Boot Start` VARCHAR,
  `Bonnet Star` VARCHAR,
  `Grill Star` VARCHAR,
  PRIMARY KEY ('Chasis Number')
  FOREIGN KEY ('Session ID') REFERENCES Service('Session ID')
  FOREIGN KEY ('SessionID') REFERENCES Repairs('Session ID')
);



CREATE TABLE `Customer Details` (
  `Customer ID` VARCHAR,
  `Name` VARCHAR,
  `Surname` VARCHAR,
  `Address` VARCHAR,
  `Cellphone` INT,
  `Visits` INT,
  `Chasis Number` VARCHAR NOT NULL,
  PRIMARY KEY (`Customer ID`)
);



CREATE TABLE `Repair Report` (
  `Chasis Number` VARCHAR NOT NULL,
  `Session ID` INT NOT NULL,
  `Report Service Advisor` VARCHAR,
  `Report Technician` VARCHAR,
  `Parts Ordered` VARCHAR
  PRIMARY KEY ('Session ID', 'Chasis Number')

);

