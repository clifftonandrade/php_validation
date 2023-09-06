<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Validate</title>
</head>
<body>
    <form action="./ValidateNum.php" method="POST">
        <label for="num">Number Validator</label>
        <input type="text" name="Mobile_no" id="">
        <input type="submit" value="click">
    </form>
    <?php
    $mobileno = $_POST ["Mobile_no"];  
    if (!preg_match ("/^[0-9]*$/", $mobileno) ){  
        $ErrMsg = "Only numeric value is allowed.";  
        echo $ErrMsg;  
    } else {  
        echo $mobileno;  
    }  
    ?>
    
    
</body>
</html>