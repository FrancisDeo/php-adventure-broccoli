<!-- 
    Write a program that takes an array of numbers as input and outputs the median of the numbers.
 -->
<html>
<head>
    <title>Median of Numbers</title>
</head>
<body>
    <form method="post">
        Enter numbers separated by spaces: <input type="text" name="input_numbers">
        <input type="submit" value="Submit">
    </form>
    
    <?php
    if ($_POST) {
        $input = $_POST['input_numbers'];
        $numbers = explode(' ', $input);
        sort($numbers);
        $count = count($numbers);
        $median = 0;
        
        if ($count % 2 == 0) {
            $median = ($numbers[$count / 2 - 1] + $numbers[$count / 2]) / 2;
        } else {
            $median = $numbers[($count - 1) / 2];
        }
        
        echo "The median of the numbers is: $median";
    }
    ?>
</body>
</html>
