<?php
class Urun
{
    function urunEkle($baglanti)
    {
        if (isset($_POST["urun_adi"], $_POST["fiyat"], $_POST["resim"], $_POST["yayinevi"])) {
            $urun_adi = $_POST["urun_adi"];
            $fiyat = $_POST["fiyat"];
            $resim = $_POST["resim"];
            $yayinevi = $_POST["yayinevi"];

            $sql = "INSERT INTO urunlar (urun_adi, fiyat, resim, yayinevi) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($baglanti, $sql);
            mysqli_stmt_bind_param($stmt, "siss", $urun_adi, $fiyat, $resim, $yayinevi);
            return mysqli_stmt_execute($stmt);
        }
        return false;
    }

    function urunSil($baglanti)
    {
        if (isset($_POST["urunid"])) {
            $urunid = $_POST["urunid"];
            $delete_query = "DELETE FROM sepet WHERE urun_id=?";
            $stmt = mysqli_prepare($baglanti, $delete_query);
            mysqli_stmt_bind_param($stmt, "i", $urunid);
            mysqli_stmt_execute($stmt);
        }
    }
}

class Kullanici
{
    function kayitOlustur($baglanti)
    {
        if (isset($_POST["kullanici_adi"], $_POST["eposta"], $_POST["sifre"])) {
            $name = $_POST["kullanici_adi"];
            $eposta = $_POST["eposta"];
            $sifre = $_POST["sifre"];

            $ekle = "INSERT INTO kullanicilar (kullanici_adi, eposta, sifre) VALUES (?, ?, ?)";
            $stmt = mysqli_prepare($baglanti, $ekle);
            mysqli_stmt_bind_param($stmt, "sss", $name, $eposta, $sifre);
            return mysqli_stmt_execute($stmt);
        }
        return false;
    }
}
