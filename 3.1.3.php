<?php
// Get the user input from the form
$user_input = $_POST['list12'];
echo "user input: $user_input<br>";
$year_range1 =$_POST['year_range1'];
echo "Year Range 1: $year_range1<br>";
$Lakhs1=$_POST['number1'];
echo "number :$Lakhs1<br>";
$year_range2 =$_POST['year_range2'];
$Lakhs2=$_POST['number2'];
$year_range3 =$_POST['year_range3'];
$Lakhs3=$_POST['number3'];
$year_range4 =$_POST['year_range4'];
$Lakhs4=$_POST['number4'];
$year_range5 =$_POST['year_range5'];
$Lakhs5=$_POST['number5'];

// Call the Python script with the user input
$output = shell_exec("python 3.1.2.py $user_input $year_range1 $year_range2 $year_range3 $year_range4 $year_range5 $Lakhs1 $Lakhs2 $Lakhs3 $Lakhs4 $Lakhs5 ");

// Display the output
echo "<pre>no of true occurs: $output</pre>";



