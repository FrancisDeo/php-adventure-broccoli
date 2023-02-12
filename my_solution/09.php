<!-- 
    Write a program that takes a string as input and outputs the string with all vowels removed.
 -->
<html>
<head>
    <title>Remove Vowels</title>
</head>
<body>
    <form method="post">
        Enter a string: <input type="text" name="input_string">
        <input type="submit" value="Submit">
    </form>
    
    <?php
    if ($_POST) {
        $input = $_POST['input_string'];
        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        $output = str_replace($vowels, '', $input);
        
        echo "The string with vowels removed is: $output";
    }
    ?>
</body>
</html>
