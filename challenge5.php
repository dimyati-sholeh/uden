<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php
$siswa = [
    [
        "No" => "No",
        "Nama" => "Nama",
        "Kelas" => "Kelas",
        "Alamat" => "Alamat"
    ],
    [
        "No" => "1",
        "Nama" => "Joni Susanto",
        "Kelas" => "XII TKR 2",
        "Alamat" => "Pemalang" 
    ],
    [
        "No" => "2",
        "Nama" => "Intan Ayu",
        "Kelas" => "XII TB 1",
        "Alamat" => "Brebes"
    ],
    [
        "No" => "3",
        "Nama" => "Salma Karima",
        "Kelas" => "XI RPL 3",
        "Alamat" => "Batang"
    ]
];
?>

<table border="1" cellpadding="10" cellspacing="0" >
    <?php foreach( $siswa as $sw):?>
            <tr>
                <td><?= $sw["No"];?></td>
                <td><?= $sw["Nama"];?></td>
                <td><?= $sw["Kelas"];?></td>
                <td><?= $sw["Alamat"];?></td>
            </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>