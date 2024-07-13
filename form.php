<?php
if (isset($_POST['contact'])){
    // Menerima inputan dari form dan memasukkantnya ke dalam variabel
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $region = $_POST['region'];
    $messege = $_POST['messege'];
    
    // Membuat array untuk menampung data yang diinputkan
    $dataArray = array(
        'name' => $name,
        'email' => $email,
        'subject' => $subject,
        'region' => $region,
        'message' => $message
    );
    
    function saveFile($data)
    {
        // Menulis data ke dalam file contact.txt
        // Membuka file contact.txt
        $file = fopen('data/contact.txt', 'a+');
    
        // Menggunakan perulangan foreach untuk menulis data ke dalam file
        foreach ($data as $key => $value) {
            fwrite($file, $key . ': ' . $value . "\n");
        }
        // Pemisah antar dat
        fwrite($file, "\n");
        // Menutup file
        fclose($file);
    };
    
    
    if (saveFile($dataArray) !== false) {
        echo "<script>alert('your message has been sent!'); window.location.href = 'index.html';</script>";
    } else {
        echo "<script>window.location.href = 'index.html';</script>";
    }

}

if (isset($_POST['rate'])){
    // Menerima inputan dari form dan memasukkantnya ke dalam variabel
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $e = $_POST['e'];
    
    // Membuat array untuk menampung data yang diinputkan
    $dataArray = array(
        'a' => $a,
        'b' => $b,
        'c' => $c,
        'd' => $d,
        'e' => $e
    );
    
    function saveFile($data)
    {
        // Menulis data ke dalam file contact.txt
        // Membuka file contact.txt
        $file = fopen('data/rate.txt', 'a+');
    
        // Menggunakan perulangan foreach untuk menulis data ke dalam file
        foreach ($data as $key => $value) {
            fwrite($file, $key . ': ' . $value . "\n");
        }
        // Pemisah antar dat
        fwrite($file, "\n");
        // Menutup file
        fclose($file);
    };
    
    
    if (saveFile($dataArray) !== false) {
        echo "<script>alert('your message has been sent!'); window.location.href = 'index.html';</script>";
    } else {
        echo "<script>window.location.href = 'index.html';</script>";
    }

}
