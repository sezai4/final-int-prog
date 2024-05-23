<?php
session_start();

$id = 13;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Proje</title>
    <link rel="stylesheet" href="style/girisyap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="book.ico" rel="icon">
</head>

<body>
    <div class="container">
    <section>
    <?php
include('bağlanti.php');
include("class_project.php");

if (isset($_POST["delete"])) {
    $urunsil = new Urun();
    $urunsil->urunsil($baglanti);
}

$cek = "SELECT * FROM sepet WHERE user_id=$id";
$result = mysqli_query($baglanti, $cek);

$total = 0;

while ($rows = mysqli_fetch_assoc($result)) {
    $id = $rows['urun_id'];

    $cek_urun = "SELECT * FROM urunlar WHERE id=$id";
    $result_urun = mysqli_query($baglanti, $cek_urun);

    while ($row = mysqli_fetch_assoc($result_urun)) {
        echo '
        <div class="card">
            <img src="' . $row["resim"] . '" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">' . $row["urun_adi"] . '</h5>
                <p class="card-text" style="background-color: yellow;"> ' . $row["yayınevi"] . ' </p>
                <p class="card-text">' . $row["fiyat"] . ' TL</p>
                <form action="" method="post">
                    <input type="hidden" name="urunid" value="' . $row["id"] . '">
                    <button type="submit" name="delete" style="background-color:red;">KALDIR</button>
                </form>
            </div>
        </div>
        ';

        $total += $row['fiyat'];
    }
}

echo 'Toplam Tutar: ' . $total . ' TL';
echo '<script>alert("Satın alma işlemi başarıyla gerçekleşti. Toplam Tutar: ' . $total . ' TL")</script>';
?>

<form action="total_price.php" method="post">
    <?php
    $result = mysqli_query($baglanti, $cek);

    while ($rows = mysqli_fetch_assoc($result)) {
        $id = $rows['urun_id'];

        $cek_urun = "SELECT * FROM urunlar WHERE id=$id";
        $result_urun = mysqli_query($baglanti, $cek_urun);

        while ($row = mysqli_fetch_assoc($result_urun)) {
            echo '<input type="hidden" name="product_id[]" value="' . $row["id"] . '">';
        }
    }
    ?>

<button type="button" style="background-color:blue;">SATIN AL</button>
</form>



    </section>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>