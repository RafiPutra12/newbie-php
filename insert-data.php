<?php 
    include "koneksi.php";

    $sql = "INSERT INTO user
    (
        id,
        nama,
        role,
        availability,
        age, 
        location,
        school_experience,
        email
    ) VALUE 
    (
        '1',
        'Jack Price',
        'Back-end engineer',
        'none',
        '15',
        'Malang',
        '9',
        'hellaJack96@gmail.com'
    )";

    if($koneksi->query($sql) == TRUE){
        echo "Insert data telah berhasil";
    } else {
        echo "Insert data gagal";
    }
?>