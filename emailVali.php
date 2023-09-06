<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="./emailVali.php" method="POST">
        <label for="num">Email Validator</label>
        <input type="text" name="Email" id="">
        <input type="submit" value="Check">
    </form>
    <?php
    $email = $_POST ["Email"];  
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
    if (!preg_match ($pattern, $email) ){  
        $ErrMsg = "Email is not valid.";  
                echo $ErrMsg;  
    } else {  
        echo "Your valid email address is: " .$email;  
    }  
    ?>
    
</body>
</html>