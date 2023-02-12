<!-- 
    Write a program that outputs the first n triangular numbers.
 -->
<html>
<head>
    <title>Triangular Numbers</title>
</head>
<body>
    <form method="post">
        Enter the number of triangular numbers to output: <input type="text" name="input_n">
        <input type="submit" value="Submit">
    </form>
    
    <?php
    if ($_POST) {
        $n = $_POST['input_n'];
        
        for ($i = 1; $i <= $n; $i++) {
            $triangular = $i * ($i + 1) / 2;
            echo "$triangular ";
        }
    }
    ?>
</body>
</html>
