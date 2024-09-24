<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial scale=1">
        <title></title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin : 20px;
                background-color: white;
            }
            h2 {
                font-family: Times, Georgia, Garamond;
                text-align: left;
            }
            table{
                width: 40%;
                border-collapse: collapse;
                margin: 10px 0;
                
                
            }
            td {
                padding: 1px;
                text-align: left;
                border: 4px double black;
                color: blue;
                padding: 5px;
            }
            th {
                background-color:blue;
                color: white;
                padding: 10px;
                text-align: left;
                border: 4px double black;
            }
        </style>
    </head>
    <body>
        <?php
            $Dosen=[
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'
            ];
        ?>
        <h2>Daftar Dosen</h2>

        <table>
       <tr>
            <th>Nama</th>
            <td><?php echo $Dosen['nama']; ?></td>
       </tr>
       <tr>
            <th>Domisili</th>
            <td><?php echo $Dosen['domisili']; ?></td>
       </tr>
       <tr>
            <th>Jenis Kelamin</th>
            <td><?php echo $Dosen['jenis_kelamin']; ?></td>
       </tr>
    </table>
    </body>
</html>