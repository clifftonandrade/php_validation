<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacii</title>
</head>
<body>
    <form action="./index1.php" method="POST">
        <label for="range">Range:</label>
        <input type="Number" name="range" id="">
        <input type="submit" value="Calculate">
    </form>
    <?php
    function fibo($range){
        $num1 = 0;
        $num2 = 1;
        $num3 = 0;
        echo $num1." ".$num2." ";
        for($count = 2; $count <= $range; $count++){
            $num3 = $num1 + $num2;
            $num1 = $num2;
            $num2 = $num3;
            echo $num3." ";
        }
    }
    $range = (int)$_POST['range'];
    fibo($range);

    ?>
    
</body>
</html>