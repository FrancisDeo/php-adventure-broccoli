<!-- 
    Write a program that takes an array of strings as input and outputs the longest string in the array.
 -->
<html>
<head>
    <title>Longest String</title>
</head>
<body>
    <form method="post">
        Enter strings separated by a comma: <input type="text" name="input_array">
        <input type="submit" value="Submit">
    </form>
    
    <?php
    if ($_POST) {
        $input = $_POST['input_array'];
        $strings = explode(',', $input);
        $longest = '';
        
        foreach ($strings as $string) {
            if (strlen($string) > strlen($longest)) {
                $longest = $string;
            }
        }
        
        echo "The longest string is: $longest";
    }
    ?>
</body>
</html>
