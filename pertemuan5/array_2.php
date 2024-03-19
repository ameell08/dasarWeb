<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intitial-scale=1">
        <title></title>
        <style>
            table {
                border-collapse: collapse;
                width: 50%;
                margin: auto;
                background-color: #7FFFD4;
                
            }

            th, td {
                border: 1px solid #00008B;
                text-align: left;
                padding: 8px;
            }

        </style>
    </head>
    <body>
        <?php $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan' ];
    
            ?>
            <table>
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
    </body>
</html>