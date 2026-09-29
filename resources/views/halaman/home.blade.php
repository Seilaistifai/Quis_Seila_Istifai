@extends('layouts.app')

@section('title', 'Halaman Utama')

@section('content')

    <section class="hero">

        <div class="hero-text">
            <span class="label">Selamat Datang di</span>

            <h1>Politeknik Negeri Malang PSDKU Pamekasan</h1>

            <p>
                Selamat datang di portal informasi kampus.
                Website ini menyediakan berbagai informasi
                mengenai lingkungan pendidikan, kegiatan mahasiswa,
                serta fasilitas yang tersedia di kampus.
            </p>

            <a href="/tentang" class="btn">
                Lihat Profil Kampus
            </a>
        </div>

    </section>

    <section class="informasi">

        <span class="label">PROGRAM STUDI</span>

        <h2>Program Studi</h2>

        <p class="subjudul">
            Politeknik Negeri Malang PSDKU Pamekasan menyediakan berbagai
            program studi yang mendukung kebutuhan dunia
            pendidikan dan industri.
        </p>

        <div class="card-container">

            <div class="card">
                <div class="icon">01</div>

                <h3>D-III Manajemen Informatika</h3>

                <p>
                    Program studi yang mempelajari teknologi
                    informasi, pengembangan aplikasi, sistem
                    informasi, serta pengelolaan data.
                </p>
            </div>


            <div class="card">
                <div class="icon">02</div>

                <h3>D-IV Akuntansi Manajemen</h3>

                <p>
                    Program studi yang mempelajari akuntansi,
                    pengelolaan keuangan, perpajakan, serta
                    penerapan akuntansi dalam dunia bisnis.
                </p>
            </div>


            <div class="card">
                <div class="icon">03</div>

                <h3>D-IV Teknik Otomotif Elektronik</h3>

                <p>
                    Program studi yang mempelajari teknologi
                    otomotif, sistem elektronik kendaraan,
                    perawatan, dan perkembangan teknologi kendaraan.
                </p>
            </div>

        </div>

    </section>

@endsection
