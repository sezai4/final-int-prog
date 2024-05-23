<?php
session_start();
$username = @$_SESSION['username'];
$id = @$_SESSION['id'];
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <div class="container-fluid text-bg-info p-3">
            <a class="navbar-brand" href="#">PHP Proje</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">ANASAYFA</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="nav-link active dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page" href="index.php">KATEGORİ</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Polisiye</a></li>
                                <li><a class="dropdown-item" href="#">Tarih</a></li>
                                <li><a class="dropdown-item" href="roman.php">Roman</a></li>
                                <li><a class="dropdown-item" href="#">Edebiyat</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Başka bir şey</a></li>
                            </ul>
                        </div>
                    <li class="nav-item">
                        <a class="nav-link" href="iletişimi.php">İLETİŞİM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">HAKKINDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="urunekle.php">ÜRÜN EKLE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="girişyap.php">GİRİŞ YAP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kaydet.php">KAYIT OL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="çikiş.php">ÇIKIŞ YAP</a> <!-- Bu satır eklenmiştir -->
                    </li>
                </ul>
                <h1 class="me-4"><?php echo mb_strimwidth($username, 0, 1); ?></h1>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="" aria-label="ara">
                    <button class="btn btn-outline-success" type="submit">ara</button>
                </form>
                <a href="sepet.php">
                    <img src="baseline_shopping_cart_black_24dp.png" height="30px" width="30px" alt="Shopping Cart">
                </a>

            </div>
        </div>
    </nav>
    <div class="container">
        <aside>
            <div class="flex-shrink-0 p-3 mx-2" style="width: 280px;">
                <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
                    <svg class="bi pe-none me-2" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <span class="fs-5 fw-semibold">YAYINEVLERİ</span>
                </a>
                <ul class="list-unstyled ps-0" style="overflow-y: auto;height:10rem;">
                    <li class="mb-1">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="ara..." aria-label="ara">
                        </form>
                        <div class="collapse show text-center" id="home-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">İletişim Yayınevi</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">KAPI YAYINLARI</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Ötüken Kitap</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Dergah Yayınları</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Bkmkitap</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Can Yayınları</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Yapı Kredi Yayınları</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="flex-shrink-0 p-3 mx-2" style="width: 280px;">
                <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
                    <svg class="bi pe-none me-2" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <span class="fs-5 fw-semibold">YAZARLAR</span>
                </a>
                <ul class="list-unstyled ps-0" style="overflow-y:auto;height:10rem;">
                    <li class="mb-1">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2 " type="search" placeholder="ara..." aria-label="ara">
                        </form>
                        <div class="collapse show text-center" id="home-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">mustafa kutlu</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">cengiz aytmatov</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">iskender pala</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">tarık buğra</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">orhan kemal</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">ahmet ümit</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Fyodor Dostoyevski</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">sabahattin ali</a></li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Johann Wolfgang Von Goethe</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- Ürünler -->
        <section>
            <?php
            include("bağlanti.php");

            if (isset($_POST["submit"])) {
                if (isset($_SESSION["id"])) {

                    $urunid = $_POST["urunid"];
                    $query = "INSERT INTO sepet (user_id,urun_id) VALUE ('$id','$urunid')";
                    $result = mysqli_query($baglanti, $query);
                } else {
                    echo  '<p id="uyari">Önce giriş yapmalısın </p>';
                }
            }
            include("bağlanti.php");

            $cek = "  SELECT * FROM urunlar";
            $result = mysqli_query($baglanti, $cek);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
        <div class="card" >
            <img src="' . $row["resim"] . '" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">' . $row["urun_adi"] . '</h5>
                <p class="card-text" style="background-color: yellow;"> ' . $row["yayınevi"] . ' </p>
                <p class="card-text">' . $row["fiyat"] . ' TL</p>
                
                <form action="" method="post">
                     <input type="hidden" name="urunid" value="' . $row["id"] . '">
                     <button type="submit" name="submit" style="background-color: blue; color: white;">SEPET EKLE</button>
                </form>
            </div>
        </div>
        ';
            } ?>
        </section>
    </div>

    </div>

    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3 footer-nav">
            <li class="nav-item"><a href="index.php" class="nav-link px-2 text-body-secondary">anasayfa</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">hakkında</a></li>
            <li class="nav-item"><a href="iletişimi.php" class="nav-link px-2 text-body-secondary">iletişim</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">ürün</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">mağaza</a></li>
        </ul>
        <p class="text-center text-body-secondary">© 2023 şirket, Inc</p>
        <div class="nav justify-content-center border-bottom pb-3 mb-3 footer-nav">
            <ul class="social-icons">
                <style>
                    .footer-nav {
                        text-align: center;
                    }

                    .social-icons {
                        list-style: none;
                        padding: 0;
                        margin: 0;
                    }

                    .social-icons li {
                        display: inline-block;
                        margin-right: 10px;
                        /* Aralıkları ayarlayabilirsiniz */
                    }

                    .social-icons li:last-child {
                        margin-right: 0;
                        /* Son öğenin aralığını sıfırlar */
                    }
                </style>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>

    </footer>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>