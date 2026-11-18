
@extends('layouts.app')

@section('title', 'Portofolio')

@section('content')

<div class="page-heading">
    <span class="page-subtitle">MY PROJECTS & WORKS</span>
    <h1>PORTOFOLIO</h1>
    <p>Kumpulan proyek dan hasil pembelajaran saya di bidang teknologi informasi.</p>
</div>

<section class="portfolio-intro">
    <h3>Hasil Karya dan Proyek</h3>
    <p>
        Berikut merupakan beberapa contoh proyek yang dapat ditampilkan
        untuk menggambarkan proses belajar, kreativitas, dan kemampuan
        saya dalam bidang teknologi informasi.
    </p>
</section>

<section class="content-section">
    <h2>PROYEK SAYA</h2>

    <div class="portfolio-grid">

        <div class="portfolio-card">
            <div class="portfolio-number">01</div>
            <div class="portfolio-content">
                <span class="portfolio-category">WEB DEVELOPMENT</span>
                <h3>Website Digital E-CV</h3>
                <p>
                    Website curriculum vitae digital yang menampilkan
                    profil pribadi, riwayat pendidikan, pengalaman,
                    keahlian, dan portofolio.
                </p>
                <div class="portfolio-tags">
                    <span>Laravel</span>
                    <span>PHP</span>
                    <span>CSS</span>
                </div>
            </div>
        </div>

        <div class="portfolio-card">
            <div class="portfolio-number">02</div>
            <div class="portfolio-content">
                <span class="portfolio-category">WEB DEVELOPMENT</span>
                <h3>Website Informasi Lowongan Kerja</h3>
                <p>
                    Proyek pengembangan website informasi lowongan kerja
                    yang menyediakan informasi pekerjaan bagi pencari kerja
                    dan perusahaan.
                </p>
                <div class="portfolio-tags">
                    <span>Laravel</span>
                    <span>PHP</span>
                    <span>MySQL</span>
                </div>
            </div>
        </div>

        <div class="portfolio-card">
            <div class="portfolio-number">03</div>
            <div class="portfolio-content">
                <span class="portfolio-category">DATABASE</span>
                <h3>Perancangan Basis Data</h3>
                <p>
                    Proyek pembelajaran perancangan basis data yang
                    mencakup pembuatan tabel, relasi, dan pengelolaan
                    data menggunakan MySQL.
                </p>
                <div class="portfolio-tags">
                    <span>MySQL</span>
                    <span>SQL</span>
                    <span>Database</span>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="portfolio-note">
    <h3>Terus Berkarya dan Berkembang</h3>
    <p>
        Saya berkomitmen untuk terus mengembangkan kemampuan dan
        menambah pengalaman melalui berbagai proyek serta pembelajaran
        di bidang teknologi informasi.
    </p>
</section>

@endsection
