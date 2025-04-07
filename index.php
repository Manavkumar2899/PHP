<?php
    $stdName = "Ali";
    $stdAge = "20";
    $stdEmail = "ali@gmail.com";
    $stdCity = "Karachi";

    //PRINTING METHODS
    //echo
    //print_r()
    //var_dump()

   // echo "<h1>" . "Hello, My name is ". $stdName . " and my age is " . $stdAge . "<h1>";
?>
<!-- <h1><?php echo "Hello, My name is " . $stdName . " and my age is " . $stdAge?></h1>
<h1><?php echo $stdName?></h1>
<h1><?php echo $stdAge?></h1>
<h2><?php echo $stdEmail?></h2>
<h2><?php echo $stdCity?></h2> -->

<?php
$empName = "Huzaifa";
$empAge ="24";
echo "<h1> $empName, $empAge </h1>"; 
echo '<h1> $empName, $empAge </h1>';
echo "<h1>" . $empName, $empAge . "</h1>";

print "<h1>" . $empName . "</h1>";
print '<h1> $stdName, $stdAge </h1>';
?>