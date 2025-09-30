<?php
$data = [
    "nama" => "Reza",
    "umur" => 21,
    "hobi" => ["membaca", "berenang", "coding"]
];

$jsonData = json_encode($data);

echo "Hasil JSON Encode: <br>";
echo $jsonData;
?>
