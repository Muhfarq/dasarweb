<html>
    <head>
        <title>Form Input PHP</title>
    </head>
    <body>
        <h2>Form Input</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <label for="input">Input: </label>
            <input type="text" name="input" id="input" required><br><br>
            
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" required><br><br>
            
            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
        // Cek jika form telah disubmit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Menangani input teks
            $input = $_POST['input'];
            $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8'); // Sanitasi input
            echo "<h3>Hasil input yang aman:</h3>";
            echo "<p>" . $input . "</p>";

            // Menangani input email
            $email = $_POST['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // Jika email valid
                echo "<h3>Email yang valid:</h3>";
                echo "<p>" . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</p>"; // Sanitasi email
            } else {
                // Jika email tidak valid
                echo "<h3>Email tidak valid:</h3>";
                echo "<p>Silakan masukkan alamat email yang benar.</p>";
            }
        }
        ?>
    </body>
</html>
