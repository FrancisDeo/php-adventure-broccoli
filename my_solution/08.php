<!-- 
    Write a program that takes a string as input and outputs the number of words in the string.
 -->
<html>
<head>
    <title>Word Count</title>
</head>
<body>
    <form method="post">
        Enter a string: <input type="text" name="input_string">
        <input type="submit" value="Submit">
    </form>
    
    <?php
    if ($_POST) {
        $input = $_POST['input_string'];
        $words = explode(' ', $input);
        $word_count = count($words);
        
        echo "The number of words in the string is: $word_count";
    }
    ?>
</body>
</html>
