 <!-- Ürün Ekle -->
 <?php
     include("bağlanti.php");
     include("class_project.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $urunekle = new Urun();
        $urunekle->UrunEkle($baglanti);
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Proje</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="book.ico" rel="icon">
<style>
    .main form{
        background-color: yellow;
    }
</style>
</head>
<body style="background-image:url(Resimler/intt.jpg);">
<div class="main d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <form class="p-5 rounded shadow" style="max-width: 30rem; width: 100%" method="post" action="">

            <h1 class="text-center display-4 pb-5">ÜRÜN EKLE</h1>

            <div class="" role="alert"> </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">urun_adi</label>
                <input type="text" class="form-control" name="urun_adi" required>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">fiyat</label>
                <input type="number" class="form-control" name="fiyat" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">resim</label>
                <input type="text" class="form-control" name="resim" required>

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">yayınevi</label>
                <input type="text" class="form-control" name="yayınevi"  required>

            </div>
            <button type="submit" name="giriş" class="btn btn-outline-danger">
            Ürün Ekle</button>
        </form>
    </div>
   
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
