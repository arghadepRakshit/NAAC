<?php
// Get the user input from the form for criteria 3.1.2

echo"criteria 3.1.2";
$user_input = $_POST['312list'];
$year_range1 = $_POST['312year_range1'];
$Lakhs1 = $_POST['312Lakhs1'];
$year_range2 = $_POST['312year_range2'];
$Lakhs2 = $_POST['312Lakhs2'];
$year_range3 = $_POST['312year_range3'];
$Lakhs3 = $_POST['312Lakhs3'];
$year_range4 = $_POST['312year_range4'];
$Lakhs4 = $_POST['312Lakhs4'];
$year_range5 = $_POST['312year_range5'];
$Lakhs5 = $_POST['312Lakhs5'];

// Call the Python script with the user input for criteria 3.1.2
$output = shell_exec("python full_total_copy.py $user_input $year_range1 $year_range2 $year_range3 $year_range4 $year_range5 $Lakhs1 $Lakhs2 $Lakhs3 $Lakhs4 $Lakhs5");

// Display the output
echo "<pre>no of true occurs: $output</pre>";

// Get the user input from the form for criteria 3.1.3
echo"criteria 3.1.3";
$user_input_313_ = $_POST['313list'];
$year_range1_313_ = $_POST['313year_range1'];
$Lakhs1_313_ = $_POST['313number1'];
$year_range2_313_ = $_POST['313year_range2'];
$Lakhs2_313_ = $_POST['313number2'];
$year_range3_313_ = $_POST['313year_range3'];
$Lakhs3_313_ = $_POST['313number3'];
$year_range4_313_ = $_POST['313year_range4'];
$Lakhs4_313_ = $_POST['313number4'];
$year_range5_313_ = $_POST['313year_range5'];
$Lakhs5_313_ = $_POST['313number5'];

// Call the Python script with the user input for criteria 3.1.3
$output_313_ = shell_exec("python sample11_3.1.3.py $user_input_313_ $year_range1_313_ $year_range2_313_ $year_range3_313_ $year_range4_313_ $year_range5_313_ $Lakhs1_313_ $Lakhs2_313_ $Lakhs3_313_ $Lakhs4_313_ $Lakhs5_313_");

// Display the output for criteria 3.1.3
echo "<pre>no of true occurs: $output_313_</pre>";

echo"criteria 3.2.1";
$user_input_321_ = $_POST['321list'];
$year_range1_321_ = $_POST['321year_range1'];
$Lakhs1_321_ = $_POST['321number1'];
$year_range2_321_ = $_POST['321year_range2'];
$Lakhs2_321_ = $_POST['321number2'];
$year_range3_321_ = $_POST['321year_range3'];
$Lakhs3_321_ = $_POST['321number3'];
$year_range4_321_ = $_POST['321year_range4'];
$Lakhs4_321_ = $_POST['321number4'];
$year_range5_321_ = $_POST['321year_range5'];
$Lakhs5_321_ = $_POST['321number5'];

// Call the Python script with the user input for criteria 3.2.1
$output_321_ = shell_exec("python full_total_copy.py $user_input_321_ $year_range1_321_ $year_range2_321_ $year_range3_321_ $year_range4_321_ $year_range5_321_ $Lakhs1_321_ $Lakhs2_321_ $Lakhs3_321_ $Lakhs4_321_ $Lakhs5_321_");

// Display the output for criteria 3.2.1
echo "<pre>no of true occurs: $output_321_</pre>";

echo"criteria 3.2.2";
$user_input_322_ = $_POST['322list'];
$year_range1_322_ = $_POST['322year_range1'];
$Lakhs1_322_ = $_POST['322number1'];
$year_range2_322_ = $_POST['322year_range2'];
$Lakhs2_322_ = $_POST['322number2'];
$year_range3_322_ = $_POST['322year_range3'];
$Lakhs3_322_ = $_POST['322number3'];
$year_range4_322_ = $_POST['322year_range4'];
$Lakhs4_322_ = $_POST['322number4'];
$year_range5_322_ = $_POST['322year_range5'];
$Lakhs5_322_ = $_POST['322number5'];

// Call the Python script with the user input for criteria 3.2.2
$output_322_ = shell_exec("python 3.1.3.py $user_input_322_ $year_range1_322_ $year_range2_322_ $year_range3_322_ $year_range4_322_ $year_range5_322_ $Lakhs1_322_ $Lakhs2_322_ $Lakhs3_322_ $Lakhs4_322_ $Lakhs5_322_");

// Display the output for criteria 3.2.2
echo "<pre>no of true occurs: $output_322_</pre>";

echo"criteria 3.2.4";
$user_input_324_ = $_POST['324list'];
$year_range1_324_ = $_POST['324year_range1'];
$Lakhs1_324_ = $_POST['324number1'];
$year_range2_324_ = $_POST['324year_range2'];
$Lakhs2_324_ = $_POST['324number2'];
$year_range3_324_ = $_POST['324year_range3'];
$Lakhs3_324_ = $_POST['324number3'];
$year_range4_324_ = $_POST['324year_range4'];
$Lakhs4_324_ = $_POST['324number4'];
$year_range5_324_ = $_POST['324year_range5'];
$Lakhs5_324_ = $_POST['324number5'];

// Call the Python script with the user input for criteria 3.2.4
$output_324_ = shell_exec("python 3.1.3.py $user_input_324_ $year_range1_324_ $year_range2_324_ $year_range3_324_ $year_range4_324_ $year_range5_324_ $Lakhs1_324_ $Lakhs2_324_ $Lakhs3_324_ $Lakhs4_324_ $Lakhs5_324_");

// Display the output for criteria 3.2.4
echo "<pre>no of true occurs: $output_324_</pre>";



echo"criteria 3.3.2";
$user_input_332_ = $_POST['332list'];
$year_range1_332_ = $_POST['332year_range1'];
$Lakhs1_332_ = $_POST['332number1'];
$year_range2_332_ = $_POST['332year_range2'];
$Lakhs2_332_ = $_POST['332number2'];
$year_range3_332_ = $_POST['332year_range3'];
$Lakhs3_332_ = $_POST['332number3'];
$year_range4_332_ = $_POST['332year_range4'];
$Lakhs4_332_ = $_POST['332number4'];
$year_range5_332_ = $_POST['332year_range5'];
$Lakhs5_332_ = $_POST['332number5'];

// Call the Python script with the user input for criteria 3.1.3
$output_332_ = shell_exec("python 3.1.3.py $user_input_332_ $year_range1_332_ $year_range2_332_ $year_range3_332_ $year_range4_332_ $year_range5_332_ $Lakhs1_332_ $Lakhs2_332_ $Lakhs3_332_ $Lakhs4_332_ $Lakhs5_332_");

// Display the output for criteria 3.3.2
echo "<pre>no of true occurs: $output_332_</pre>";



echo"criteria 3.4.3";
$user_input_343_ = $_POST['343list'];
$year_range1_343_ = $_POST['343year_range1'];
$Lakhs1_343_ = $_POST['343number1'];
$year_range2_343_ = $_POST['343year_range2'];
$Lakhs2_343_ = $_POST['343number2'];
$year_range3_343_ = $_POST['343year_range3'];
$Lakhs3_343_ = $_POST['343number3'];
$year_range4_343_ = $_POST['343year_range4'];
$Lakhs4_343_ = $_POST['343number4'];
$year_range5_343_ = $_POST['343year_range5'];
$Lakhs5_343_ = $_POST['343number5'];

// Call the Python script with the user input for criteria 3.4.3
$output_343_ = shell_exec("python 3.4.3.py $user_input_343_ $year_range1_343_ $year_range2_343_ $year_range3_343_ $year_range4_343_ $year_range5_343_ $Lakhs1_343_ $Lakhs2_343_ $Lakhs3_343_ $Lakhs4_343_ $Lakhs5_343_");

// Display the output for criteria 3.4.3
echo "<pre>no of true occurs: $output_343_</pre>";

echo"criteria 3.4.4";
$user_input_344_ = $_POST['344list'];
$year_range1_344_ = $_POST['344year_range1'];
$Lakhs1_344_ = $_POST['344number1'];
$year_range2_344_ = $_POST['344year_range2'];
$Lakhs2_344_ = $_POST['344number2'];
$year_range3_344_ = $_POST['344year_range3'];
$Lakhs3_344_ = $_POST['344number3'];
$year_range4_344_ = $_POST['344year_range4'];
$Lakhs4_344_ = $_POST['344number4'];
$year_range5_344_ = $_POST['344year_range5'];
$Lakhs5_344_ = $_POST['344number5'];

// Call the Python script with the user input for criteria 3.4.4
$output_344_ = shell_exec("python 3.1.3.py $user_input_344_ $year_range1_344_ $year_range2_344_ $year_range3_344_ $year_range4_344_ $year_range5_344_ $Lakhs1_344_ $Lakhs2_344_ $Lakhs3_344_ $Lakhs4_344_ $Lakhs5_344_");

// Display the output for criteria 3.4.4
echo "<pre>no of true occurs: $output_344_</pre>";

echo"criteria 3.5.1";
$user_input_351_ = $_POST['351list'];
$year_range1_351_ = $_POST['351year_range1'];
$Lakhs1_351_ = $_POST['351number1'];
$year_range2_351_ = $_POST['351year_range2'];
$Lakhs2_351_ = $_POST['351number2'];
$year_range3_351_ = $_POST['351year_range3'];
$Lakhs3_351_ = $_POST['351number3'];
$year_range4_351_ = $_POST['351year_range4'];
$Lakhs4_351_ = $_POST['351number4'];
$year_range5_351_ = $_POST['351year_range5'];
$Lakhs5_351_ = $_POST['351number5'];

// Call the Python script with the user input for criteria 3.4.3
$output_351_ = shell_exec("python full_total_copy.py $user_input_351_ $year_range1_351_ $year_range2_351_ $year_range3_351_ $year_range4_351_ $year_range5_351_ $Lakhs1_351_ $Lakhs2_351_ $Lakhs3_351_ $Lakhs4_351_ $Lakhs5_351_");

// Display the output for criteria 3.5.1
echo "<pre>no of true occurs: $output_351_</pre>";

echo"criteria 3.5.2";
$user_input_352_ = $_POST['352list'];
$Lakhs1_352_ = $_POST['352number1'];
$year_range2_352_ = $_POST['352year_range2'];
$Lakhs2_352_ = $_POST['352number2'];
$year_range3_352_ = $_POST['352year_range3'];
$Lakhs3_352_ = $_POST['352number3'];
$year_range4_352_ = $_POST['352year_range4'];
$Lakhs4_352_ = $_POST['352number4'];
$year_range5_352_ = $_POST['352year_range5'];
$Lakhs5_352_ = $_POST['352number5'];

$year_range1_352_ = $_POST['352year_range1'];
// Call the Python script with the user input for criteria 3.5.2
$output_352_ = shell_exec("python full_total_copy.py $user_input_352_ $year_range1_352_ $year_range2_352_ $year_range3_352_ $year_range4_352_ $year_range5_352_ $Lakhs1_352_ $Lakhs2_352_ $Lakhs3_352_ $Lakhs4_352_ $Lakhs5_352_");

// Display the output for criteria 3.5.2
echo "<pre>no of true occurs: $output_352_</pre>";

echo "criteria 3.6.2";

$user_input_362_ = $_POST['362list'];
$Lakhs1_362_ = $_POST['362number1'];
$year_range2_362_ = $_POST['362year_range2'];
$Lakhs2_362_ = $_POST['362number2'];
$year_range3_362_ = $_POST['362year_range3'];
$Lakhs3_362_ = $_POST['362number3'];
$year_range4_362_ = $_POST['362year_range4'];
$Lakhs4_362_ = $_POST['362number4'];
$year_range5_362_ = $_POST['362year_range5'];
$Lakhs5_362_ = $_POST['362number5'];

$year_range1_362_ = $_POST['362year_range1'];

// Call the Python script with the user input for criteria 3.5.2
$command362 = "python 3.1.3.py $user_input_362_ $year_range1_362_ $year_range2_362_ $year_range3_362_ $year_range4_362_ $year_range5_362_ $Lakhs1_362_ $Lakhs2_362_ $Lakhs3_362_ $Lakhs4_362_ $Lakhs5_362_";
$output_362_ = shell_exec($command362);

// Display the output for criteria 3.5.2
echo "<pre>no of true occurs: $output_362_</pre>";

echo "criteria 3.6.3";

$user_input_363_ = $_POST['363list'];
$Lakhs1_363_ = $_POST['363number1'];
$year_range2_363_ = $_POST['363year_range2'];
$Lakhs2_363_ = $_POST['363number2'];
$year_range3_363_ = $_POST['363year_range3'];
$Lakhs3_363_ = $_POST['363number3'];
$year_range4_363_ = $_POST['363year_range4'];
$Lakhs4_363_ = $_POST['363number4'];
$year_range5_363_ = $_POST['363year_range5'];
$Lakhs5_363_ = $_POST['363number5'];

$year_range1_363_ = $_POST['363year_range1'];

// Call the Python script with the user input for criteria 3.6.2
$command363 = "python 3.1.3.py $user_input_363_ $year_range1_363_ $year_range2_363_ $year_range3_363_ $year_range4_363_ $year_range5_363_ $Lakhs1_363_ $Lakhs2_363_ $Lakhs3_363_ $Lakhs4_363_ $Lakhs5_363_";
$output_363_ = shell_exec($command363);

// Display the output for criteria 3.6.2
echo "<pre>no of true occurs: $output_363_</pre>";

echo "criteria 3.6.4";

$user_input_364_ = $_POST['364list'];
$Lakhs1_364_ = $_POST['364number1'];
$year_range2_364_ = $_POST['364year_range2'];
$Lakhs2_364_ = $_POST['364number2'];
$year_range3_364_ = $_POST['364year_range3'];
$Lakhs3_364_ = $_POST['364number3'];
$year_range4_364_ = $_POST['364year_range4'];
$Lakhs4_364_ = $_POST['364number4'];
$year_range5_364_ = $_POST['364year_range5'];
$Lakhs5_364_ = $_POST['364number5'];

$year_range1_364_ = $_POST['364year_range1'];

// Call the Python script with the user input for criteria 3.6.4
$command364 = "python 3.1.3.py $user_input_364_ $year_range1_364_ $year_range2_364_ $year_range3_364_ $year_range4_364_ $year_range5_364_ $Lakhs1_364_ $Lakhs2_364_ $Lakhs3_364_ $Lakhs4_364_ $Lakhs5_364_";
$output_364_ = shell_exec($command364);

// Display the output for criteria 3.6.4
echo "<pre>no of true occurs: $output_364_</pre>";

echo "criteria 3.7.1";

$user_input_371_ = $_POST['371list'];
$Lakhs1_371_ = $_POST['371number1'];
$year_range2_371_ = $_POST['371year_range2'];
$Lakhs2_371_ = $_POST['371number2'];
$year_range3_371_ = $_POST['371year_range3'];
$Lakhs3_371_ = $_POST['371number3'];
$year_range4_371_ = $_POST['371year_range4'];
$Lakhs4_371_ = $_POST['371number4'];
$year_range5_371_ = $_POST['371year_range5'];
$Lakhs5_371_ = $_POST['371number5'];

$year_range1_371_ = $_POST['371year_range1'];

// Call the Python script with the user input for criteria 3.7.1
$command371 = "python 3.1.3.py $user_input_371_ $year_range1_371_ $year_range2_371_ $year_range3_371_ $year_range4_371_ $year_range5_371_ $Lakhs1_371_ $Lakhs2_371_ $Lakhs3_371_ $Lakhs4_371_ $Lakhs5_371_";
$output_371_ = shell_exec($command371);

// Display the output for criteria 3.7.1
echo "<pre>no of true occurs: $output_371_</pre>";

echo "criteria 3.7.2";

$user_input_372_ = $_POST['372list'];
$Lakhs1_372_ = $_POST['372number1'];
$year_range2_372_ = $_POST['372year_range2'];
$Lakhs2_372_ = $_POST['372number2'];
$year_range3_372_ = $_POST['372year_range3'];
$Lakhs3_372_ = $_POST['372number3'];
$year_range4_372_ = $_POST['372year_range4'];
$Lakhs4_372_ = $_POST['372number4'];
$year_range5_372_ = $_POST['372year_range5'];
$Lakhs5_372_ = $_POST['372number5'];

$year_range1_372_ = $_POST['372year_range1'];

// Call the Python script with the user input for criteria 3.7.2
$command372 = "python 3.1.3.py $user_input_372_ $year_range1_372_ $year_range2_372_ $year_range3_372_ $year_range4_372_ $year_range5_372_ $Lakhs1_372_ $Lakhs2_372_ $Lakhs3_372_ $Lakhs4_372_ $Lakhs5_372_";
$output_372_ = shell_exec($command372);

// Display the output for criteria 3.7.2
echo "<pre>no of true occurs: $output_372_</pre>";

?>
