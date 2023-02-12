<!-- 
    Write a program that takes a character as input and outputs whether it is a vowel or a consonant.
-->
<html>
<head>
    <title>Vowel or Consonant</title>
</head>
<body>
    <form method="post">
        Enter a character: <input type="text" name="input_char">
        <input type="submit" value="Submit">
    </form>
    
    <?php
    if ($_POST) {
        $input = $_POST['input_char'];
        
        if (strlen($input) > 1) {
            echo "Please enter only one character.";
        } else {
            $vowels = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
            
            if (in_array($input, $vowels)) {
                echo "The character is a vowel.";
            } else {
                echo "The character is a consonant.";
            }
        }
    }
    ?>
</body>
</html>
