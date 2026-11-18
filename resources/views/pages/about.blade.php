
@extends('layouts.app')

@section('title', 'Tentang Saya')

@section('content')

<!-- PAGE HEADER -->
<div class="page-heading">
    <span class="page-subtitle">PERSONAL PROFILE</span>
    <h1>TENTANG SAYA</h1>
    <p>Mengenal lebih dekat identitas dan profil pribadi saya.</p>
</div>

<!-- PROFILE CONTENT -->
<section class="about-profile">

    <div class="about-photo">
        <img src="{{ asset('images/profile.jpg') }}"
             alt="Foto Profil Muhammad Yusna Falah"
             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">

        <div class="photo-fallback">FOTO PROFIL</div>
    </div>

    <div class="about-description">

        <span class="about-label">HALO, PERKENALKAN</span>

        <h2>Muhammad Yusna Falah</h2>

        <h3>Mahasiswa Sistem Informasi</h3>

        <p>
            Saya merupakan seorang mahasiswa yang sedang menempuh
            pendidikan di bidang Sistem Informasi. Saya memiliki
            ketertarikan terhadap perkembangan teknologi informasi,
            khususnya dalam bidang pengembangan website dan teknologi
            digital.
        </p>

        <p>
            Saya senang mempelajari hal-hal baru, mencoba pengalaman
            yang berbeda, serta mengembangkan kemampuan melalui
            berbagai kegiatan dan proyek.
        </p>

        <p>
            Melalui website Digital E-CV ini, saya ingin memperkenalkan
            identitas, riwayat pendidikan, keterampilan, pengalaman,
            serta hasil karya yang telah saya buat.
        </p>

    </div>

</section>


<!-- BIODATA -->
<section class="content-section about-biodata">

    <h2>BIODATA DIRI</h2>

    <div class="biodata-grid">

        <div class="biodata-item">
            <span>Nama Lengkap</span>
            <strong>Muhammad Yusna Falah</strong>
        </div>

        <div class="biodata-item">
            <span>Tempat, Tanggal Lahir</span>
            <strong>Tasikmalaya, 28 Juni 2005</strong>
        </div>

        <div class="biodata-item">
            <span>Jenis Kelamin</span>
            <strong>Laki-laki</strong>
        </div>

        <div class="biodata-item">
            <span>Kewarganegaraan</span>
            <strong>Indonesia</strong>
        </div>

        <div class="biodata-item">
            <span>Status</span>
            <strong>Mahasiswa</strong>
        </div>

        <div class="biodata-item">
            <span>Jurusan</span>
            <strong>Sistem Informasi</strong>
        </div>

    </div>

</section>


<!-- MINAT -->
<section class="content-section">

    <h2>MINAT DAN TUJUAN</h2>

    <div class="interest-list">

        <div class="interest-item">
            <span>01</span>
            <div>
                <strong>Web Development</strong>
                <p>Mempelajari pembuatan dan pengembangan website.</p>
            </div>
        </div>

        <div class="interest-item">
            <span>02</span>
            <div>
                <strong>Teknologi Informasi</strong>
                <p>Mengikuti perkembangan teknologi digital.</p>
            </div>
        </div>

        <div class="interest-item">
            <span>03</span>
            <div>
                <strong>Pengembangan Diri</strong>
                <p>Meningkatkan kemampuan dan pengalaman.</p>
            </div>
        </div>

    </div>

</section>

@endsection
