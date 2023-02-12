<!-- 
    Write a program that takes a string as input and outputs the frequency of each character in the string.
-->
<html>
<head>
    <title>Character Frequency</title>
</head>
<body>
    <form method="post">
        Enter a string: <input type="text" name="input_string">
        <input type="submit" value="Submit">
    </form>
    
    <?php
    if ($_POST) {
        $input = $_POST['input_string'];
        $char_count = array_count_values(str_split($input));
        
        foreach ($char_count as $char => $count) {
            echo "$char: $count<br>";
        }
    }
    ?>
</body>
</html>
