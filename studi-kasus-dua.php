<?php

$data = [
    [
        "nama" => "Billy",
        "alamat" => "Kotaraja",
        "jk"  => "L"
    ], 
    [
        "nama" => "Axl",
        "alamat" => "Sentani",
        "jk"  => "L"
    ],
    [
        "nama" => "Efati",
        "alamat" => "Sentani",
        "jk"  => "P"
    ],
    [
        "nama" => "Grace",
        "alamat" => "Sentani",
        "jk"  => "P"
    ],
];

foreach($data as $peserta)
{
    echo $peserta['nama'] . "<br>";
    echo $peserta['alamat'] . "<br>";

    if($peserta['jk'] === 'P'){
        $jk = 'Perempuan';
    }else{
        $jk = 'Laki-Laki';
    }
    
    echo $jk . "<br>";
    echo "<br> <br>";
}