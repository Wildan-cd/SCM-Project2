<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Septa Classic Motor</title>
    <link rel="stylesheet" href="css/tentang.css">
    <link rel="shortcut icon" href="images/logo.png" type="images/logo.png">
</head>

<body>
    @include('components.navbar')
    <section class="about-top" id="about_us">
        <h1>About Us</h1>
    </section>

    <section class="tentang-section" id="tentang_kami">
        <div class="tentang-container">
            <h2>Tentang Septa Classic Motor</h2>
            <p>Bengkel spesialis yang menyediakan beragam suku cadang (sparepart) dan komponen variasi untuk sepeda
                motor, dengan penekanan khusus pada unit-unit Honda klasik seperti CB, GL Series, Megapro, dan Tiger.
                Setiap produk yang kami tawarkan dipilih secara cermat untuk memastikan kualitas, ketahanan, serta
                kesesuaian dengan karakter motor klasik pelanggan kami. <br><br> Selain penyediaan komponen, kami juga
                menawarkan layanan profesional untuk berbagai jenis proyek sepeda motor, meliputi proses restorasi guna
                mengembalikan tampilan dan performa kendaraan ke kondisi optimalnya, maupun modifikasi yang disesuaikan
                dengan selera serta kebutuhan estetika dan fungsional pemilik kendaraan. <br><br> Dengan dukungan tenaga
                ahli berpengalaman dan komitmen terhadap kualitas, Septa Classic Motor hadir sebagai mitra terpercaya
                bagi para pecinta motor klasik yang menginginkan hasil pengerjaan yang presisi, rapi, dan bernilai
                tinggi.</p>
        </div>
    </section>

    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-info">
                <h2>Kontak Kami</h2>
                <p>Untuk lebih detail terkait produk ataupun lainnya, anda bisa menghubungi atau mengunjungi kami di
                    toko offline.</p>

                <div class="contact-item">
                    <img src="images/location.png" alt="Location" class="contact-icon">
                    <div>
                        <strong>VISIT US</strong><br>
                        Jl. Bukit Berbunga No.115, Sidomulyo, Kec. Batu, Kota Batu, Jawa Timur 65317
                    </div>
                </div>

                <div class="contact-item">
                    <img src="images/phone.png" alt="Phone" class="contact-icon">
                    <div>
                        <strong>CALL US</strong><br>
                        082234322320
                    </div>
                </div>

                <div class="contact-item">
                    <img src="images/email.png" alt="Email" class="contact-icon">
                    <div>
                        <strong>EMAIL US</strong><br>
                        kwbmotorclassic@gmail.com
                    </div>
                </div>

                <hr>

                <div class="social">
                    <h3>FOLLOW US</h3>
                    <div class="icons">
                        <a href="https://www.instagram.com/septaclassicmotor/" target="_blank"><img src="images/instagram.png"
                                alt="Instagram"></a>
                        <a href="https://www.tiktok.com/@septaclassic" target="_blank"><img src="images/tiktok.png" alt="TikTok"></a>
                        <a href="https://web.facebook.com/septaclassicmotor" target="_blank"><img src="images/facebook.png"
                                alt="Facebook"></a>
                        <a href="https://wa.me/6282234322320" target="_blank"><img src="images/whatsapp.png" alt="Whatsapp"></a>
                    </div>
                </div>
            </div>

            <div class="contact-extra">
                <h3>Marketplace</h3>
                <div class="marketplace-icons">
                    <a href="https://shopee.co.id/kwbmotorclassic" target="_blank" rel="noopener">
                        <img src="images/shopee.png" alt="Shopee">
                    </a>
                    
                    <a href="https://www.tokopedia.com/septa-classic-motor" target="_blank" rel="noopener">
                        <img src="images/tokopedia.png" alt="Tokopedia">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="location-section">
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.330167629764!2d112.52869387478268!3d-7.830597492178756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6271e74012a5b%3A0x2b6b08a5479c89b!2sJl.%20Bukit%20Berbunga%20No.115%2C%20Sidomulyo%2C%20Kec.%20Batu%2C%20Kota%20Batu%2C%20Jawa%20Timur%2065317!5e0!3m2!1sid!2sid!4v1681234567890!5m2!1sid!2sid"
                width="100" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

    @include('components.footer')

    <script src="js/script2.js"></script>
</body>

</html>