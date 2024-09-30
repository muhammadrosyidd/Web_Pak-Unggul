<html>
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content="width = device-width, initial-scale = 1">
        <title></title>
        <style>
            table {
                width : 50%;
                margin : 20%;
                border-collapse: collapse;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                background-color: white;
            }

            th, td {
                padding : 10px;
                border : 1px solid #ddd;
                text-align: center;
            }

            th {
                background-color: blanchedalmond;
                color: black;
                text-align: center ;
            }

            tr :hover{
                background-color: #f1f1f1;
            }
        </style>
    </head>
    <body>
        <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'
            ];

        echo "Nama : {$Dosen ['nama']} <br>";
        echo "Domisili : {$Dosen ['domisili']} <br>";
        echo "Jenis kelamin : {$Dosen ['jenis_kelamin']} <br>";
        ?>

        <table>
            <tr>
                <th colspan="2">Data</th>
            </tr>

            <tr>
                <td>Nama</td>
                <td><?php echo $Dosen['nama']; ?></td>
            </tr>
            
            <tr>
                <td>Domisili</td>
                <td><?php echo $Dosen['domisili']; ?></td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo $Dosen['jenis_kelamin']; ?></td>
            </tr>
        </table>
    </body>
</html>