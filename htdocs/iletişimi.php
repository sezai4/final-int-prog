<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Proje</title>
    <link rel="stylesheet" href="iletişimi.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="book.ico" rel="icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body style="background-image:url(Resimler/kitap.jpg);">


    <?php

    class ContactFormHandler
    {
        public function submitForm($data)
        {
            include("bağlanti.php");
            // Veritabanına ekleme sorgusu
            $sql = "INSERT INTO form_verileri (firstname, lastname, company, email, message) 
                VALUES (?, ?, ?, ?, ?)";

            // Hazırlanan ifadeyi kullanarak sorguyu hazırla
            $stmt = $baglanti->prepare($sql);

            // Veri türlerini belirt
            $stmt->bind_param("sssss", $data["firstname"], $data["lastname"], $data["company"], $data["email"], $data["message"]);

            // Sorguyu çalıştır
            if ($stmt->execute()) {
                return "Form verileri başarıyla kaydedildi.";
            } else {
                return "Form verileri kaydedilirken bir hata oluştu: " . $baglanti->error;
            }

            // Bağlantıyı kapat
            $baglanti->close();
        }
    }

    // Form verilerini al
    if (isset($_POST["send-button"])) {
        $data = array(
            "firstname" => $_POST["firstname"],
            "lastname" => $_POST["lastname"],
            "company" => $_POST["company"],
            "email" => $_POST["email"],
            "message" => $_POST["message"]
        );

        // Form işleyiciyi oluştur
        $formHandler = new ContactFormHandler();

        // Form verilerini MySQL'e kaydet
        $response = $formHandler->submitForm($data);

        echo $response; // Response from MySQL operation
    }
    ?>



<div id="w-node-_11f33f88-abb1-554a-685e-583a7358a4ef-24bdc9c7" class="div-block-143">
    <div id="talk-to-an-expert-contact-form" class="contact-form---main">
        <div id="nes-drupal-form" class="contact-form-container---title">
            <div class="nes-__-contact-form-__-container-__-contact-title">
                <span>Bizimle İletişime Geçin</span>
            </div>
        </div>
        <div class="contact-form-container---form">
            <div id="contact-form" class="contact-form w-form">
                <form id="bootstrap-webform" data-name="Drupal 7 NES Form" action="" method="post" class="contact-form-wrapper">
                    <div class="contact-form---fields-container">
                        <div class="nes-__-contact-form-__-field-container---two-fields">
                            <div class="nes-__-contact-form-__-field-row">
                                <label for="firstname" class="contact-form---field-label">Adı <span class="nes-__-contact-form-__-field-required">*</span></label>
                                <input class="form-field---narrow w-input" maxlength="256" name="firstname" data-name="firstname" placeholder="Adı" type="text" id="field-firstname" required="">
                            </div>
                            <div class="nes-__-contact-form-__-field-row">
                                <label for="lastname" class="contact-form---field-label">Soy isim <span class="nes-__-contact-form-__-field-required">*</span></label>
                                <input class="form-field---narrow w-input" maxlength="256" name="lastname" data-name="lastname" placeholder="Soy isim" type="text" id="field-lastname" required="">
                            </div>
                        </div>
                        <div class="nes-__-contact-form-__-field-container---two-fields">
                            <div class="nes-__-contact-form-__-field-row">
                                <label for="company" class="contact-form---field-label">Firma Adı <span class="nes-__-contact-form-__-field-required">*</span></label>
                                <input class="form-field---narrow w-input" maxlength="256" name="company" data-name="company" placeholder="Firma Adı" type="text" id="field-company" required="">
                            </div>
                            <div class="nes-__-contact-form-__-field-row">
                                <label for="email" class="contact-form---field-label">E-postası <span class="nes-__-contact-form-__-field-required">*</span></label>
                                <input class="form-field---narrow w-input" maxlength="256" name="email" data-name="email" placeholder="E-postası" type="email" id="field-email" required="">
                            </div>
                        </div>
                        <div class="contact-form---field-group">
                            <label for="message" class="contact-form---field-label">Bilmemizi istediğiniz başka bir şey var mı?</label>
                            <textarea id="field-message" name="message" maxlength="5000" data-name="message" placeholder="Ek Bilgiler" class="form-field---narrow nes-__-contact-form-__-field-text-area w-input"></textarea>
                        </div>
                    </div>
                    <p class="contact-form---privacy-notice">"Gönder"e tıklayarak Gizlilik Politikamızı aldığımı onaylıyorum <a href="/privacy-policy" class="nes-__-contact-form-__-privacy-link"></a></p>
                    <input type="submit" data-wait="Please wait..." id="general-contact-form-submit-button" class="nes-contact-__-main-button w-button" value="Göndermek" name="send-button">
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
                                }

                                .social-icons li:last-child {
                                    margin-right: 0;
                                }
                            </style>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </form>
                <div class="success-message w-form-done" tabindex="-1" role="region" aria-label="Drupal 7 NES Formu başarısı">
                    <div>Teşekkür ederim! Gönderiminiz alındı!</div>
                </div>
                <div class="error-message w-form-fail" tabindex="-1" role="region" aria-label="Drupal 7 NES Formu hatası">
                    <div>Hata! Formu gönderirken bir şeyler ters gitti.</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>