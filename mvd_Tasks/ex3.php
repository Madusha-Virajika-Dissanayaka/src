<?php 

$title = "Exercise 3: Variable, Strings & Operators";

include "header.php" ?>

<h3>2. Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag</h3>

<h3>3. Apply Bootstrap styles to the form. Make sure to include the Bootstrap CSS link in your head tag.</h3> 

<form method="post" action="process.php">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" >First Name:</label><input type="text" name="fnimi" class="form-control" id="exampleFormControlInput1"  required> <br><br>
        <label for="exampleFormControlInput1" class="form-label" >Last Name:</label><input type="text" name="lnimi" class="form-control" id="exampleFormControlInput1"  required> <br><br>
        <label for="exampleFormControlInput1" class="form-label">Email:</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"><br><br>
        <input type="submit" value="Submit" class="btn btn-light">
        
    </div>    
</form> 



<h3>4. HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done a table in Exercise 1. If you wish, you can use the same table.</h3>
    <?php
    $g1 = 5; 
    $g2 = 4;
    $g3 = 5;
    ?>
    <table class="table table-info table-bordered">

        <tr class="table-danger"><th>S.n.</th><th>Name</th><th>Grade</th></tr>
        <tr>
            <td>1</td>
            <td>John</td>
            <td><?php echo  $g1 ?> </td></tr>
        <tr>
            <td>2</td>
            <td>Alice</td>
            <td><?php echo  $g2 ?></td></tr>
        <tr>
            <td>3</td>
            <td>Bob</td>
            <td><?php echo  $g3 ?></td></tr>
    </table>


<h3>5. String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). Join them together and print the length of the string.</h3>
    <?php
        $str1="Hello";
        $str2="World";

         $joinedtext= $str1.$str2;
        print "Joined text: " . $joinedtext . "<br>";
        print "Length of text: " . strlen($joinedtext);
        
    ?>

<h3>6.Number Addition: Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and an echo statement to output your answer.</h3>


    <?php

        $first_number=298;
        $second_number=234;
        $third_number=46;

        $sum = $first_number + $second_number + $third_number;


        echo "The sum of  $first_number, $second_number, and $third_number is: $sum";

    ?>

<h3>7.Browser Detection: Write a PHP script to detect the browser being used to view your pages. Hint: Use predefined variables: $_SERVER.</h3>

    <?php
        $user_agent = $_SERVER['HTTP_USER_AGENT'];

         function get_browser_name($user_agent) {
            $browser_name = "Unknown";
            
            if (strpos($user_agent, 'MSIE') !== false || strpos($user_agent, 'Trident') !== false) {
                $browser_name = 'Internet Explorer';
            } elseif (strpos($user_agent, 'Firefox') !== false) {
                $browser_name = 'Mozilla Firefox';
            } elseif (strpos($user_agent, 'Chrome') !== false) {
                $browser_name = 'Google Chrome';
            } elseif (strpos($user_agent, 'Safari') !== false) {
                $browser_name = 'Apple Safari';
            } elseif (strpos($user_agent, 'Opera') !== false || strpos($user_agent, 'OPR') !== false) {
                $browser_name = 'Opera';
            }
        
            return $browser_name;
        }
        
        $browser = get_browser_name($user_agent);
        
        echo "You are using: $browser";
    ?>

<h3>8.File Modification Time: Write a PHP script in the footer section of your universal footer to display the last modification time of a file. Hint: Use predefined variable $_SERVER, basename function  to get the filename , filetime function to get the last modified time & date function to print the date and time</h3>





<?php include "footer.php" ?>