<?php
try {
    // Menghubungkan ke database
    $connect = new PDO("mysql:host=localhost;dbname=testing", "root", "Boston");
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Menangani kesalahan koneksi
    die("Connection failed: " . $e->getMessage()); // Menghentikan eksekusi jika gagal
}

// Memeriksa apakah data ulasan telah dikirim melalui POST
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["user_name"]) && isset($_POST["user_review"]) && isset($_POST["rating_data"])) {
    // Mengambil data dari POST
    $data = array(
        ':user_name'    => $_POST["user_name"],
        ':user_rating'  => $_POST["rating_data"],
        ':user_review'  => $_POST["user_review"],
    );

    // Query untuk memasukkan data ulasan ke dalam tabel
    $query = "
    INSERT INTO reviews 
    (user_name, user_rating, user_review, created_at, updated_at) 
    VALUES (:user_name, :user_rating, :user_review, NOW(), NOW())
    ";

    // Menyiapkan dan menjalankan query
    $statement = $connect->prepare($query);
    $statement->execute($data);

    // Mengembalikan pesan sukses
    echo "Your Review & Rating Successfully Submitted";
} else {
    // Mengembalikan pesan jika ada field yang kosong
    echo "All fields are required!";
}
?>
