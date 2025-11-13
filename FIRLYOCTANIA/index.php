<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jelajah Korea Selatan - Travel Agency</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="main-header">
        <div class="container">
            <h1 class="logo">Jelajah Korea Selatan</h1>
            <nav class="main-nav">
                <ul>
                    <li><a href="#beranda">Beranda</a></li>
                    <li><a href="#tentang">Tentang Kami</a></li>
                    <li><a href="#destinasi">Destinasi</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="beranda" class="hero-section">
        <div class="hero-content">
            <h2>Waktunya Berpetualang!</h2>
            <p>Rencanakan perjalanan impian Anda bersama kami. Destinasi eksotis menanti Anda.</p>
            <a href="#destinasi" class="cta-button">Lihat Destinasi Wisata</a>
        </div>
    </section>

    <section id="tentang" class="section about-section">
        <div class="container">
            <h2>Tentang Kami</h2>
            <p><strong>Jelajah Korea Selatan</strong> adalah agen perjalanan terpercaya yang telah melayani ribuan wisatawan
                sejak tahun 2010. Kami berkomitmen untuk memberikan pengalaman liburan yang tak terlupakan, aman, dan
                nyaman.</p>
            <p>Moto kami: <strong>"Perjalanan Terbaik, Harga Terbaik."</strong></p>
        </div>
    </section>

    <section id="destinasi" class="section services-section">
        <div class="container">
            <h2>Destinasi Unggulan</h2>
            <div class="service-cards">
                <div class="card">
                    <img src="hanbok.jpg" alt="Gyeongbokgung Palace" class="card-image">
                    <h3>Gyeongbokgung Palace</h3>
                    <p>terkenal dengan arsitektur tradisionalnya yang megah. Istana ini memiliki bangunan-bangunan bersejarah, kolam, dan taman yang indah, 
                        dan sering menjadi lokasi populer untuk berfoto dengan pakaian tradisional Korea (hanbok).</p>
                </div>
                <div class="card">
                    <img src="sungaihan.jpg" alt="Han River Park" class="card-image">
                    <h3>Han River Park</h3>
                    <p>lanskap sungai yang lebar dengan beberapa taman di tepiannya, jembatan-jembatan ikonik, 
                        serta berbagai aktivitas rekreasi seperti bersepeda dan jogging.</p>
                </div>
                <div class="card">
                    <img src="kuliner.jpg" alt="Kuliner Korea" class="card-image">
                    <h3>Kuliner Korea</h3>
                    <p>Nikmati kuliner Korea Selatan, jangan lewatkan selama Anda liburan di Korea Selatan.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="kontak" class="section cta-contact-section">
        <div class="container">
            <h2>Hubungi Kami</h2>
            <p>Dapatkan penawaran eksklusif hari ini!</p>
            <form action="#" method="POST" class="contact-form">
                <input type="text" name="nama" placeholder="Nama Anda" required>
                <input type="email" name="email" placeholder="Email Anda" required>
                <textarea name="pesan" rows="4" placeholder="Tanyakan paket wisata yang Anda minati..."
                    required></textarea>
                <button type="submit" class="cta-button">Kirim Pesan</button>
            </form>
        </div>
    </section>

    <footer class="main-footer">
        <div class="container">
            <p>&copy; 2025 Jelajah Korea Selatan Travel Agency. Hak Cipta Dilindungi.</p>
        </div>
    </footer>

</body>

</html>