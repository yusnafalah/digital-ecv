
@extends('layouts.app')

@section('title', 'Pendidikan')

@section('content')

<div class="page-heading">
    <span class="page-subtitle">EDUCATION BACKGROUND</span>
    <h1>RIWAYAT PENDIDIKAN</h1>
    <p>Perjalanan pendidikan dan proses pembelajaran saya.</p>
</div>

<section class="education-intro">
    <h3>Latar Belakang Pendidikan</h3>
    <p>
        Berikut merupakan riwayat pendidikan yang telah saya tempuh
        sebagai bagian dari perjalanan dalam memperoleh ilmu
        pengetahuan, pengalaman, dan mengembangkan kemampuan diri.
    </p>
</section>

<section class="content-section">
    <h2>RIWAYAT PENDIDIKAN</h2>

    <div class="education-timeline">

        <div class="education-item">
            <div class="education-marker"></div>
            <div class="education-card">
                <span class="education-year">Sekolah Dasar</span>
                <h3>SD</h3>
                <h4>SDN 1 Sukaratu</h4>
                <p>
                    Menempuh pendidikan dasar sebagai tahap awal
                    dalam memperoleh ilmu pengetahuan dan membangun
                    kemampuan diri.
                </p>
            </div>
        </div>

        <div class="education-item">
            <div class="education-marker"></div>
            <div class="education-card">
                <span class="education-year">Sekolah Menengah Pertama</span>
                <h3>SMP</h3>
                <h4>SMPN 1 Sukaratu</h4>
                <p>
                    Mengembangkan pengetahuan akademik, kedisiplinan,
                    dan kemampuan bersosialisasi.
                </p>
            </div>
        </div>

        <div class="education-item">
            <div class="education-marker"></div>
            <div class="education-card">
                <span class="education-year">Sekolah Menengah Atas</span>
                <h3>SMA</h3>
                <h4>SMAN 6 Tasikmalaya</h4>
                <p>
                    Memperdalam pengetahuan dan mempersiapkan diri
                    untuk melanjutkan pendidikan ke jenjang perguruan tinggi.
                </p>
            </div>
        </div>

        <div class="education-item">
            <div class="education-marker"></div>
            <div class="education-card">
                <span class="education-year">2024 - Sekarang</span>
                <h3>PERGURUAN TINGGI</h3>
                <h4>Universitas Bina Sarana Informatika (UBSI)</h4>
                <p>
                    Program Studi: Sistem Informasi.
                    <br>
                    Tahun Masuk: 2024.
                </p>
                <span class="education-status">
                    Sedang Menempuh Pendidikan
                </span>
            </div>
        </div>

    </div>
</section>

<section class="content-section">
    <h2>FOKUS PENDIDIKAN</h2>

    <div class="education-focus">

        <div class="focus-card">
            <span>01</span>
            <h3>Pengetahuan Akademik</h3>
            <p>
                Meningkatkan pemahaman melalui pembelajaran akademik.
            </p>
        </div>

        <div class="focus-card">
            <span>02</span>
            <h3>Pengembangan Skill</h3>
            <p>
                Mengembangkan keterampilan melalui praktik dan proyek.
            </p>
        </div>

        <div class="focus-card">
            <span>03</span>
            <h3>Pengalaman</h3>
            <p>
                Memperoleh pengalaman baru untuk menunjang
                pengembangan diri.
            </p>
        </div>

    </div>
</section>

@endsection
