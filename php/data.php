<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form
        $nama = $_POST['name'];
        $email = $_POST['email'];
        $no_hp = $_POST['phone'];

        // Menyimpan data dalam bentuk array
        $user_data = [
            'name' => $nama,
            'email' => $email,
            'phone' => $no_hp,
        ];

        // Tampilkan inputan
        echo "Data User<br>";
        echo "Nama: " . $user_data['name'] . "<br>";
        echo "Email: " . $user_data['email'] . "<br>";
        echo "Nomor HP: " . $user_data['phone'] . "<br>";
        
    }
?>
