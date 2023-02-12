<!-- 
    Write a program that takes a number as input and outputs the sum of its digits.
 -->
<html>
<head>
    <title>Digit Sum</title>
</head>
<body>
    <form method="post">
        Enter a number: <input type="text" name="input_number">
        <input type="submit" value="Submit">
    </form>
    
    <?php
    if ($_POST) {
        $input = $_POST['input_number'];
        $sum = 0;
        
        for ($i = 0; $i < strlen($input); $i++) {
            $sum += intval($input[$i]);
        }
        
        echo "The sum of the digits is: $sum";
    }
    ?>
</body>
</html>
