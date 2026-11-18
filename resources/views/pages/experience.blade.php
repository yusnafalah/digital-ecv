
@extends('layouts.app')

@section('title', 'Pengalaman')

@section('content')

<div class="page-heading">
    <span class="page-subtitle">EXPERIENCE & ACTIVITIES</span>
    <h1>PENGALAMAN</h1>
    <p>Pengalaman, aktivitas, dan proyek yang mendukung pengembangan diri.</p>
</div>

<section class="experience-intro">
    <h3>Pengalaman dan Pengembangan Diri</h3>
    <p>
        Sebagai mahasiswa Sistem Informasi, saya terus berusaha
        mengembangkan kemampuan, menambah wawasan, dan memperoleh
        pengalaman melalui kegiatan pembelajaran maupun proyek.
    </p>
</section>

<section class="content-section">
    <h2>PENGALAMAN KERJA</h2>

    <div class="experience-empty">
        <div class="experience-icon">01</div>
        <div>
            <h3>Pengalaman Kerja</h3>
            <p>
                Belum ada pengalaman kerja formal yang dicantumkan.
                Bagian ini dapat diperbarui ketika memiliki pengalaman
                kerja atau magang.
            </p>
        </div>
    </div>
</section>

<section class="content-section">
    <h2>PENGALAMAN PROYEK</h2>

    <div class="experience-grid">

        <div class="experience-card">
            <span class="experience-category">PROJECT 01</span>
            <h3>Pengembangan Website</h3>
            <p>
                Pengalaman mengembangkan website sebagai bagian dari
                proses pembelajaran dan penerapan keterampilan
                di bidang Sistem Informasi.
            </p>
            <div class="experience-tags">
                <span>Laravel</span>
                <span>PHP</span>
                <span>Web Development</span>
            </div>
        </div>

        <div class="experience-card">
            <span class="experience-category">PROJECT 02</span>
            <h3>Pengelolaan Basis Data</h3>
            <p>
                Mempelajari perancangan basis data, pembuatan tabel,
                relasi antarentitas, serta pengolahan data menggunakan
                MySQL.
            </p>
            <div class="experience-tags">
                <span>MySQL</span>
                <span>Database</span>
                <span>SQL</span>
            </div>
        </div>

    </div>
</section>

<section class="content-section">
    <h2>PENGEMBANGAN DIRI</h2>

    <div class="development-list">
        <div class="development-item">
            <span>01</span>
            <div>
                <h3>Pembelajaran Mandiri</h3>
                <p>
                    Meningkatkan pengetahuan dan keterampilan melalui
                    proses belajar secara mandiri.
                </p>
            </div>
        </div>

        <div class="development-item">
            <span>02</span>
            <div>
                <h3>Praktik dan Eksplorasi Teknologi</h3>
                <p>
                    Mencoba berbagai teknologi untuk memperluas
                    pemahaman di bidang teknologi informasi.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
