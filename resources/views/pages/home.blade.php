
@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<div class="page-heading">
    <span class="page-subtitle">CURRICULUM VITAE DIGITAL</span>
    <h1>MUHAMMAD YUSNA FALAH</h1>
    <p>Mahasiswa | Personal Profile</p>
</div>

<section class="content-section">

    <h2>TENTANG SAYA</h2>

    <p>
        Saya merupakan seorang mahasiswa yang memiliki
        ketertarikan dalam bidang teknologi informasi.
        Saya senang mempelajari hal baru, mengembangkan
        kemampuan, dan membuat proyek digital.
    </p>

</section>

<section class="content-section">

    <h2>PENDIDIKAN TERAKHIR</h2>

    <div class="timeline-item">
        <div>
            <strong>Universitas Bina Sarana Informatika</strong>
            <p>Program Studi Sistem Informasi</p>
        </div>

        <span>2024 - Sekarang</span>
    </div>

</section>

<section class="content-section">

    <h2>KEAHLIAN</h2>

    <div class="skill-tags">
        <span>HTML</span>
        <span>CSS</span>
        <span>PHP</span>
        <span>Laravel</span>
        <span>MySQL</span>
    </div>

</section>

<section class="content-section">

    <h2>PORTOFOLIO TERBARU</h2>

    <p>
        Kunjungi halaman portofolio untuk melihat
        proyek dan hasil karya saya.
    </p>

    <a href="{{ route('portfolio') }}" class="action-button">
        Lihat Portofolio →
    </a>

</section>

@endsection
