<html>
    <head>
        <link rel="stylesheet" href="css/array3.css">
    </head>
    <body>
        <h2>Multidimensional array</h2>
    <table>
        <button>
        <tr>
            <th>Judul Film</th>
            <th>Tahun</th>
            <th>Ratting</th>
        </tr>
        <?php
        $movie = array(
            array("Spider-Man", 2017, 9.8),
            array("Avengers", 2018, 9),
            array("Iron Man", 2019, 8),
            array("Captain America", 2020, 7)
        );
        echo "<tr>";
            echo "<td>" . $movie[0][0] ."</td>";
            echo "<td>" . $movie[0][1] ."</td>";
            echo "<td>" . $movie[0][2] ."</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>" . $movie[1][0] ."</td>";
            echo "<td>" . $movie[1][1] ."</td>";
            echo "<td>" . $movie[1][2] ."</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>" . $movie[2][0] ."</td>";
            echo "<td>" . $movie[2][1] ."</td>";
            echo "<td>" . $movie[2][2] ."</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>" . $movie[3][0] ."</td>";
            echo "<td>" . $movie[3][1] ."</td>";
            echo "<td>" . $movie[3][2] ."</td>";
        echo "</tr>";
        ?>
    </table>
    </body>
</html>