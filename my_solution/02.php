<!-- 
    Write a program that takes a string as input and outputs whether it is a palindrome.
-->
<html>
<head>
    <title>Palindrome Check</title>
</head>
<body>
    <form method="post">
        Enter a string: <input type="text" name="input_string">
        <input type="submit" value="Submit">
    </form>
    
    <?php
    if ($_POST) {
        $input = $_POST['input_string'];
        $reverse = strrev($input);
        
        if ($input == $reverse) {
            echo "The string is a palindrome.";
        } else {
            echo "The string is not a palindrome.";
        }
    }
    ?>
</body>
</html>
