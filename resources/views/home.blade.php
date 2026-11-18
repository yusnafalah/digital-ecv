
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Digital E-CV | Portfolio Saya</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>

    <!-- NAVBAR -->
    <header class="header">
        <nav class="navbar container">

            <a href="#home" class="logo">
                My<span>Portfolio.</span>
            </a>

            <ul class="nav-menu" id="nav-menu">
                <li><a href="#home" class="active">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#education">Pendidikan</a></li>
                <li><a href="#skills">Keahlian</a></li>
                <li><a href="#experience">Pengalaman</a></li>
                <li><a href="#portfolio">Portofolio</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>

            <button class="menu-toggle" id="menu-toggle" aria-label="Buka menu">
                ☰
            </button>

        </nav>
    </header>

    <!-- HERO SECTION -->
    <section class="hero" id="home">

        <div class="container hero-content">

            <div class="hero-text">

                <span class="greeting">HALO, SELAMAT DATANG!</span>

                <h1>
                    Saya <span class="highlight">Nama Kamu</span>
                </h1>

                <h2>Mahasiswa & Calon Web Developer</h2>

                <p>
                    Selamat datang di website Digital E-CV saya.
                    Saya adalah seorang mahasiswa yang memiliki
                    ketertarikan dalam bidang teknologi, pengembangan
                    website, dan desain digital.
                </p>

                <div class="hero-buttons">
                    <a href="#portfolio" class="btn btn-primary">
                        Lihat Portofolio
                    </a>

                    <a href="#contact" class="btn btn-outline">
                        Hubungi Saya
                    </a>
                </div>

                <div class="social-text">
                    <span>Digital Curriculum Vitae</span>
                    <span class="line"></span>
                    <span>Personal Portfolio</span>
                </div>

            </div>

            <div class="hero-image">

                <div class="image-decoration"></div>

                <div class="profile-placeholder">
                    <span>FOTO</span>
                    <strong>PROFIL</strong>
                </div>

                <div class="experience-badge">
                    <strong>E-CV</strong>
                    <span>My Profile</span>
                </div>

            </div>

        </div>

    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <p>&copy; 2026 Digital E-CV. All Rights Reserved.</p>
    </footer>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
