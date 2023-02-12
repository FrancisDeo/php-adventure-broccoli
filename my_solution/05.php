<!-- 
    Write a program that takes an array of numbers as input and outputs the sum of the numbers.
 -->
<html>
<head>
    <title>Array Sum</title>
</head>
<body>
    <form method="post">
        Enter numbers separated by a comma: <input type="text" name="input_array">
        <input type="submit" value="Submit">
    </form>
    
    <?php
    if ($_POST) {
        $input = $_POST['input_array'];
        $numbers = explode(',', $input);
        $sum = 0;
        
        foreach ($numbers as $number) {
            $sum += intval($number);
        }
        
        echo "The sum of the numbers is: $sum";
    }
    ?>
</body>
</html>
