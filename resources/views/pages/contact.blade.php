
@extends('layouts.app')

@section('title', 'Kontak')

@section('content')

<div class="page-heading">
    <span class="page-subtitle">GET IN TOUCH</span>
    <h1>HUBUNGI SAYA</h1>
    <p>Silakan hubungi saya melalui informasi kontak berikut.</p>
</div>

<section class="contact-intro">
    <h3>Mari Terhubung</h3>
    <p>
        Terima kasih telah mengunjungi website Digital E-CV saya.
        Saya terbuka untuk berdiskusi, berbagi informasi, dan
        menjalin hubungan profesional.
    </p>
</section>

<section class="content-section">
    <h2>INFORMASI KONTAK</h2>

    <div class="contact-grid">

        <div class="contact-card">
            <div class="contact-icon">01</div>
            <div>
                <span>Email</span>
                <h3>yusnafalah12@gmail.com</h3>
            </div>
        </div>

        <div class="contact-card">
            <div class="contact-icon">02</div>
            <div>
                <span>WhatsApp</span>
                <h3>087735366251</h3>
            </div>
        </div>

        <div class="contact-card">
            <div class="contact-icon">03</div>
            <div>
                <span>Lokasi</span>
                <h3>Tasikmalaya, Jawa Barat</h3>
            </div>
        </div>

        <div class="contact-card">
            <div class="contact-icon">04</div>
            <div>
                <span>Universitas</span>
                <h3>UBSI - Sistem Informasi</h3>
            </div>
        </div>

    </div>
</section>

<section class="content-section">
    <h2>MEDIA SOSIAL</h2>

    <div class="social-contact">

        <a href="#" class="social-contact-item">
            <span>Instagram</span>
            <strong>Lihat Profil</strong>
        </a>

        <a href="#" class="social-contact-item">
            <span>LinkedIn</span>
            <strong>Lihat Profil</strong>
        </a>

        <a href="#" class="social-contact-item">
            <span>GitHub</span>
            <strong>Lihat Profil</strong>
        </a>

    </div>
</section>

<section class="contact-message">
    <h3>Terima Kasih Telah Berkunjung</h3>
    <p>
        Saya senang dapat berbagi profil, pengalaman, dan hasil karya
        melalui website Digital E-CV ini. Semoga informasi yang
        ditampilkan dapat memberikan gambaran mengenai kemampuan saya.
    </p>
</section>

@endsection
