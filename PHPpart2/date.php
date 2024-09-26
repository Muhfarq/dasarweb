<html>
    <head>
        <body>
            <h3>Date</h3>
            <?php 
            echo "Today is " . $date = date("Y/m/d") . "<br>";
            echo "Today is " . $date = date("Y.m.d") . "<br>";
            echo "Today is " . $date = date("Y-m-d") . "<br>";
            echo "Today is " . $date = date("l") . "<br>";
            ?>
            <h3>Time</h3>
            <?php
            date_default_timezone_set("asia/jakarta");
            echo date("h:i:sa");
            ?>
        </body>
    </head>
</html>