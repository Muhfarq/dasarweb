<?php
session_start();
?>

<html>
    <body>
        <?php
        $_SESSION["favcolor"] = "Black";
        $_SESSION["favanimal"] = "Cat";
        echo "Session variables are set.";
        ?>
    </body>
</html>