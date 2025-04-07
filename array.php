<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
    $students = ["ali", "aqsa", "ahmed", "asad", 21];
    echo $students[1];
    echo "<br>";
    print_r($students);
    echo "<br>";
    var_dump($students);
    ?>
    <ul>
        <li><?php echo $students[2]?></li>
        <li><?php echo $students[3]?></li>
    </ul>

    <h1>For Loop</h1>
    <ul>
        <?php
            for($i=0; $i<count($students); $i++){
        ?>
            <li><?php echo $students[$i] ?></li>
        <?php
            }
        ?>
    </ul>
    <br>
    <br>

    <h1>Foreach Loop</h1>
    <ul>
        <?php
        foreach($students as $key => $value){
        ?>
            <li><?php echo $key . " : " . $value  ?></li>
        <?php
            }
        ?>
    </ul>
</body>
</html>