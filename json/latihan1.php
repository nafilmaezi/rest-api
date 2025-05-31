<?php

// $mahasiswa = [
//     [
//         "nama" => "Nafil Maezi",
//         "nim" => "2217020170",
//         "email" => "nafilmaezi2018@gmail.com"
//     ],
//     [
//         "nama" => "Nafil",
//         "nim" => "2217020170",
//         "email" => "nafilmaezi254@gmail.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost; dbname=phpdasar', 'root', 
''); 
$db = $dbh->prepare('SELECT * FROM mahasiswa'); 
$db->execute(); 
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
?>
