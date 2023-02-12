<!-- 
    Write a program that generates a random password of a specified length. The password should include upper and lowercase letters, numbers, and special characters.
-->
<html>
<head>
    <title>Random Password Generator</title>
</head>
<body>
    <form method="post">
        Enter password length: <input type="text" name="password_length">
        <input type="submit" value="Generate">
    </form>
    
    <?php
    if ($_POST) {
        $password_length = $_POST['password_length'];
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+";
        $password = substr(str_shuffle($chars), 0, $password_length);
        
        echo "Your random password is: $password";
    }
    ?>
</body>
</html>
