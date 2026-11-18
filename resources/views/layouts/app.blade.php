
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') | Digital E-CV</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>

<div class="cv-wrapper">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="sidebar-profile">

            <div class="profile-photo">
                <img src="{{ asset('images/profile.jpeg') }}"
                     alt="Foto Profil"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">

                <div class="profile-fallback">
                    FOTO
                </div>
            </div>

            <h3>MUHAMMAD YUSNA FALAH</h3>
            <p>Mahasiswa</p>

        </div>

        <!-- DATA DIRI -->
        <div class="sidebar-section">

            <h4>DATA DIRI</h4>

            <div class="sidebar-info">
                <strong>Tempat / Tanggal Lahir</strong>
                <span>Tasikmalaya, 28 Juni 2005</span>
            </div>

            <div class="sidebar-info">
                <strong>Jenis Kelamin</strong>
                <span>Laki-Laki</span>
            </div>

            <div class="sidebar-info">
                <strong>Status</strong>
                <span>Belum Menikah</span>
            </div>

            <div class="sidebar-info">
                <strong>Kewarganegaraan</strong>
                <span>Indonesia</span>
            </div>

        </div>

        <!-- KONTAK -->
        <div class="sidebar-section">

            <h4>KONTAK</h4>

            <div class="contact-item">
                <span>☎</span>
                <span>Nomor WhatsApp</span>
            </div>

            <div class="contact-item">
                <span>✉</span>
                <span>Email</span>
            </div>

            <div class="contact-item">
                <span>⌖</span>
                <span>Alamat Domisili</span>
            </div>

        </div>

        <!-- SOSIAL MEDIA -->
        <div class="sidebar-section">

            <h4>SOSIAL MEDIA</h4>

            <div class="contact-item">
                <span>◎</span>
                <span>Instagram</span>
            </div>

            <div class="contact-item">
                <span>in</span>
                <span>LinkedIn</span>
            </div>

        </div>

        <div class="sidebar-footer">
            DIGITAL E-CV
        </div>

    </aside>


    <!-- MAIN CONTENT -->
    <main class="main-content">

        <!-- NAVIGASI -->
        <nav class="top-nav">

            <button class="menu-toggle" id="menu-toggle">
                ☰
            </button>

            <div class="nav-links">

                <a href="{{ route('home') }}"
                   class="{{ request()->routeIs('home') ? 'active' : '' }}">
                    Beranda
                </a>

                <a href="{{ route('about') }}"
                   class="{{ request()->routeIs('about') ? 'active' : '' }}">
                    Tentang Saya
                </a>

                <a href="{{ route('education') }}"
                   class="{{ request()->routeIs('education') ? 'active' : '' }}">
                    Pendidikan
                </a>

                <a href="{{ route('experience') }}"
                   class="{{ request()->routeIs('experience') ? 'active' : '' }}">
                    Pengalaman
                </a>

                <a href="{{ route('skills') }}"
                   class="{{ request()->routeIs('skills') ? 'active' : '' }}">
                    Keahlian
                </a>

                <a href="{{ route('portfolio') }}"
                   class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">
                    Portofolio
                </a>

                <a href="{{ route('contact') }}"
                   class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                    Kontak
                </a>

            </div>

        </nav>


        <!-- ISI HALAMAN BERUBAH SESUAI MENU -->
        <div class="page-content">

            @yield('content')

        </div>


        <!-- FOOTER -->
        <footer class="main-footer">
            <p>&copy; 2026 Muhammad Yusna Falah. Digital E-CV.</p>
        </footer>

    </main>

</div>

<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
