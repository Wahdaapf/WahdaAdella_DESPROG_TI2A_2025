<!DOCTYPE html>
<html>
<head>
    <title>Form Validasi</title>
</head>
<body>
    <h2>Form Input Aman</h2>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Input:</label>
        <input type="text" name="input" id="input"><br><br>
        
        <label for="email">Email:</label>
        <input type="text" name="email" id="email"><br><br>
        
        <input type="submit" value="Submit">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        
        // Memeriksa apakah input adalah email yang valid
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Lanjutkan dengan pengolahan email yang aman
            echo "Email valid: " . htmlspecialchars($email);
        } else {
            // Tangani input yang tidak valid
            echo "Email tidak valid!";
        }
    }
    ?>
</body>
</html>