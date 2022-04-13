-- Admintable
CREATE TABLE adminlogin(id INT ,UserName varchar(50)UNIQUE,Email varchar(20) UNIQUE ,PASSWORD varchar(20) NOT NULL);




-- *****************
CREATE TABLE `tblstudent` (
  `ID` int(10) NOT NULL,
  `StudentName` varchar(200) DEFAULT NULL,
  `StudentEmail` varchar(200) DEFAULT NULL,
  `StudentPermanentAddress` mediumtext DEFAULT NULL,
  `StudentTemporaryAddress` mediumtext DEFAULT NULL,
  `StudentClass` varchar(100) DEFAULT NULL,
  `StudentContactNumber` bigint(10) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Gender` ENUM('Male','Female') DEFAULT NULL,
 
 
  `FatherName` mediumtext DEFAULT NULL,
  `MotherName` mediumtext DEFAULT NULL,
  `ContactNumber` bigint(10) DEFAULT NULL,
  `PrentsAddress` mediumtext DEFAULT NULL,
    
  `UserName` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `DateofAdmission` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




-- ********************************
CREATE TABLE Notice ( Id int,
                    Notice_Title text ,Notice text ,
                    Notice_Post_Date timestamp NULL DEFAULT current_timestamp()
                    );

CREATE TABLE tblpublicnotice ( Id int,
                    Notice_title text ,Message text ,
                    Creat_Date timestamp NULL DEFAULT current_timestamp()
                    );
