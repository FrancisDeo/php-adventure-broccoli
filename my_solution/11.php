<!-- 
    Write a program that takes an array of numbers as input and outputs the average of the numbers.
-->
<html>
<head>
    <title>Average of Numbers</title>
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
        $sum = array_sum($numbers);
        $count = count($numbers);
        $average = $sum / $count;
        
        echo "The average of the numbers is: $average";
    }
    ?>
</body>
</html>
