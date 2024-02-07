<?php 

$title = "Control flow and loops";

include "header.php" ?>

<h3>2. If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting, use form to get user input).</h3><br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name" required><br><br>
    Age: <input type="number" name="age" required><br><br>
    <input type="submit" name="submit" value="Check Eligibility">
</form>


<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name and age inputs
    $name = $_POST["name"];
    $age = $_POST["age"];

   
        // Check voting eligibility
        if ($age >= 18) {
            echo "Hello, $name. You are eligible for voting.";
        } else {
            echo "Hello, $name. You are not eligible for voting.";
        }
    }

?>

<h3>3. Switch Case: Write a PHP script that gets the current month and prints one of the following responses, depending on whether it's August or not:

It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays
Hint: You can use date(F) function to get the current month name. Check Date function from the php manual page.</h3>


<?php
// Get the current month
$current_month = date("F");

// Switch statement
switch ($current_month) {
    case "August":
        echo "It's August, so it's still holiday.";
        break;
    default:
        echo "Not August, this is $current_month so I don't have any holidays";
        break;
}
?>

<h3>4. For Loop: Write a PHP script that will print the multiplication table of a number (n, use form to get user input).</h3>

    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Multiplication Table</button>
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the number entered by the user
        $number = $_POST["number"];

        // Check if the input is a integer
        if ($number) {
            echo "<table border='1'>";
            // Loop to generate the multiplication table
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr><td>$number x $i</td><td>=</td><td>" . ($number * $i) . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Please enter a number.</p>";
        }
    }
    ?>


<h3>5. While Loop: Write a PHP script that will print all the numbers from 1 to n. (use form to get user input)</h3>


    <form method="post">
        Enter a number from 1 to n: <input type="number" name="number" required>
        <button type="submit">Print Numbers</button>
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        if ($number > 0) {
            $i = 1;
            while ($i <= $number) {
                echo "$i<br>";
                $i++;
            }
        } else {
            echo "<p>Please enter anumber from 1 to n.</p>";
        }
    }
    ?>


<h3>6. Foreach Loop: Write a PHP script that will print all the elements of an array. $myarray=("HTML", "CSS", "PHP", "JavaScript").</h3>

<?php
    $myarray=array("HTML", "CSS", "PHP", "JavaScript");
    echo "<p>Elements of the array:</p>";
    foreach ($myarray as $element) {
        echo $element . "<br>";
    }
    ?>






<?php include "footer.php" ?>