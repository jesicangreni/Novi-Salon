<?php
try {
    // Menghubungkan ke database
    $connect = new PDO("mysql:host=localhost;dbname=testing", "root", "Boston");
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; // Untuk memastikan koneksi berhasil (bisa dihapus nanti)
} catch (PDOException $e) {
    // Menangani kesalahan koneksi
    die("Connection failed: " . $e->getMessage()); // Menghentikan eksekusi jika gagal
}

try {
    // Memeriksa apakah ada data rating yang dikirim
    if (isset($_POST["user_name"]) && isset($_POST["user_review"]) && isset($_POST["rating_data"])) {
        // Mengambil data dari POST
        $data = array(
            ':user_name'    => $_POST["user_name"],
            ':user_rating'  => $_POST["rating_data"],
            ':user_review'  => $_POST["user_review"],
            ':datetime'     => time() // Menggunakan timestamp
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

        echo "Your Review & Rating Successfully Submitted";
    }

    // Memeriksa apakah ada permintaan untuk mengambil data rating
    if (isset($_POST["action"]) && $_POST["action"] == "fetch_reviews") {
        $average_rating = 0;
        $total_review = 0;
        $five_star_review = 0;
        $four_star_review = 0;
        $three_star_review = 0;
        $two_star_review = 0;
        $one_star_review = 0;
        $total_user_rating = 0;
        $review_content = array();

        // Query untuk mengambil semua data ulasan dari tabel
        $query = "
        SELECT * FROM reviews 
        ORDER BY created_at DESC
        ";

        $result = $connect->query($query, PDO::FETCH_ASSOC);

        foreach ($result as $row) {
            $review_content[] = array(
                'user_name'    => $row["user_name"],
                'user_review'  => $row["user_review"],
                'rating'       => $row["user_rating"],
                'datetime'     => date('l jS, F Y h:i:s A', $row["created_at"]) // Ganti datetime dengan created_at
            );

            // Menghitung jumlah rating bintang
            switch ($row["user_rating"]) {
                case '5':
                    $five_star_review++;
                    break;
                case '4':
                    $four_star_review++;
                    break;
                case '3':
                    $three_star_review++;
                    break;
                case '2':
                    $two_star_review++;
                    break;
                case '1':
                    $one_star_review++;
                    break;
            }

            $total_review++;
            $total_user_rating += $row["user_rating"];
        }

        // Menghitung rating rata-rata
        if ($total_review > 0) {
            $average_rating = $total_user_rating / $total_review;
        }

        // Membuat array output untuk mengembalikan data ke JavaScript
        $output = array(
            'average_rating'    => number_format($average_rating, 1),
            'total_review'      => $total_review,
            'five_star_review'  => $five_star_review,
            'four_star_review'  => $four_star_review,
            'three_star_review' => $three_star_review,
            'two_star_review'   => $two_star_review,
            'one_star_review'   => $one_star_review,
            'review_data'       => $review_content
        );

        // Mengembalikan data dalam format JSON
        echo json_encode($output);
    }
} catch (PDOException $e) {
    // Menangani kesalahan database
    echo "Database error: " . $e->getMessage();
}
?>
a