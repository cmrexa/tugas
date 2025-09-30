<?php
$jsonString = '{"nama":"Reza","umur":20,"hobi":["musik","gaming","futsal"]}';

$obj = json_decode($jsonString);
$arr = json_decode($jsonString, true);

echo "<br><br>=== Decode ke Object ===<br>";
echo "Nama: " . $obj->nama . "<br>";
echo "Umur: " . $obj->umur . "<br>";
echo "Hobi pertama: " . $obj->hobi[0] . "<br>";

echo "<br>=== Decode ke Array ===<br>";
echo "Nama: " . $arr['nama'] . "<br>";
echo "Umur: " . $arr['umur'] . "<br>";
echo "Hobi kedua: " . $arr['hobi'][1] . "<br>";
?>
