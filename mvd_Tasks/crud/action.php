<?php

// what to do with data


if (isset($_POST["submit"])) {
     $fname = $_POST["fname"];   // use name given in form on html 
     $lname = $_POST["lname"];
     $city =  $_POST["city"];
     $groupid =  $_POST["groupid"];


// connect to the database server
 include "connection.php";



 // write sql statment to insert data
$sql = "insert into studentsinfo(first_name, last_name, city, groupId)
        values('$fname', '$lname', '$city', '$groupid')";


if($conn->query($sql)=== True){
    echo "Your data was recorded";
} 

else {
    echo "Error:" .$sql . "<br>" .$conn->error;
}
 
// close the database connection

$conn->close();

}

?>