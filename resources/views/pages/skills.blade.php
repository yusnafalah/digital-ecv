
@extends('layouts.app')

@section('title', 'Keahlian')

@section('content')

<div class="page-heading">
    <span class="page-subtitle">SKILLS & COMPETENCIES</span>
    <h1>KEAHLIAN</h1>
    <p>Kemampuan dan keterampilan yang terus saya kembangkan.</p>
</div>

<section class="skills-intro">
    <h3>Kemampuan Saya</h3>
    <p>
        Sebagai mahasiswa Sistem Informasi, saya terus mempelajari
        dan mengembangkan kemampuan di bidang teknologi informasi,
        pengembangan website, pengelolaan basis data, serta kemampuan
        pendukung lainnya.
    </p>
</section>

<section class="content-section">
    <h2>KEAHLIAN TEKNIS</h2>

    <div class="skills-grid">

        <div class="skill-card">
            <div class="skill-card-header">
                <h3>HTML</h3>
                <span>Web Development</span>
            </div>
            <p>Memahami struktur dasar halaman website.</p>
        </div>

        <div class="skill-card">
            <div class="skill-card-header">
                <h3>CSS</h3>
                <span>Web Development</span>
            </div>
            <p>Mengatur tampilan, warna, tata letak, dan responsivitas website.</p>
        </div>

        <div class="skill-card">
            <div class="skill-card-header">
                <h3>PHP</h3>
                <span>Programming</span>
            </div>
            <p>Mempelajari pemrograman backend untuk pengembangan website.</p>
        </div>

        <div class="skill-card">
            <div class="skill-card-header">
                <h3>Laravel</h3>
                <span>Framework</span>
            </div>
            <p>Mempelajari pengembangan aplikasi web menggunakan Laravel.</p>
        </div>

        <div class="skill-card">
            <div class="skill-card-header">
                <h3>MySQL</h3>
                <span>Database</span>
            </div>
            <p>Memahami pembuatan tabel, relasi, dan pengelolaan basis data.</p>
        </div>

        <div class="skill-card">
            <div class="skill-card-header">
                <h3>Microsoft Office</h3>
                <span>Productivity</span>
            </div>
            <p>Menggunakan aplikasi perkantoran untuk kebutuhan dokumen dan presentasi.</p>
        </div>

    </div>
</section>

<section class="content-section">
    <h2>KEAHLIAN NON-TEKNIS</h2>

    <div class="soft-skills-grid">
        <div class="soft-skill-item">
            <span>01</span>
            <h3>Komunikasi</h3>
            <p>Menyampaikan informasi dengan jelas.</p>
        </div>

        <div class="soft-skill-item">
            <span>02</span>
            <h3>Kerja Sama Tim</h3>
            <p>Mampu bekerja sama dalam menyelesaikan tugas.</p>
        </div>

        <div class="soft-skill-item">
            <span>03</span>
            <h3>Manajemen Waktu</h3>
            <p>Mengatur waktu untuk menyelesaikan pekerjaan.</p>
        </div>

        <div class="soft-skill-item">
            <span>04</span>
            <h3>Problem Solving</h3>
            <p>Berusaha mencari solusi dari suatu permasalahan.</p>
        </div>
    </div>
</section>

<section class="skills-note">
    <h3>Pengembangan Kemampuan</h3>
    <p>
        Saya memiliki semangat untuk terus belajar, mencoba hal baru,
        dan meningkatkan kemampuan agar dapat mengikuti perkembangan
        teknologi informasi.
    </p>
</section>

@endsection
