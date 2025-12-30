@extends('layouts.master')

@section('title', 'Privacy Policy')

@section('content')

<!-- BredCrumb-Section -->
    <div class="bred_crumb">
      <div class="container">
        <!-- shape animation  -->
        <span class="banner_shape1"> <img src="{{asset('landing/images/banner-shape1.png')}}" alt="image" > </span>
        <span class="banner_shape2"> <img src="{{asset('landing/images/banner-shape2.png')}}" alt="image" > </span>
        <span class="banner_shape3"> <img src="{{asset('landing/images/banner-shape3.png')}}" alt="image" > </span>

        <div class="bred_text">
          <h1>Privacy Policy</h1>
          <ul>
            <li><a href="{{ route('home')}}">Home</a></li>
            <li><span>»</span></li>
            <li><a href="">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Blog Details Block -->
    <section class="blog_detail_section">
      <div class="container">
        <div class="blog_inner_pannel">
            {{-- <div class="review">
              <span>Review</span>
              <span>45 min ago</span>
            </div> --}}
            <div class="section_title" style="text-align: left">
              <h2>Privacy Policy</h2>
            </div>
            <div class="info" style="color: black" style="text-align: justify;">
                <p style="color: black">
                CV.itech telemedia menjalar bersama membangun aplikasi i-tech telemedia sebagai aplikasi Komersial. Layanan ini disediakan oleh CV.itech telemedia dan dimaksudkan untuk digunakan apa adanya.<br><br>

                Layanan ini disediakan untuk para pengguna, mitra, pemasok, merchant dan penyedia layanan. Menggunakan aplikasi i-tech telemedia berarti anda setuju dengan kebijakan privasi.<br><br>

                <b>Ruang Lingkup Kebijakan Privasi</b><br>
                Kebijakan Privasi ini (“Kebijakan”) menjelaskan bagaimana i-tech telemedia mengumpulkan, menggunakan dan memproses Data Pribadi Anda melalui penggunaan Aplikasi, produk-produk, fitur-fitur dan layanan lainnya secara umum (“Layanan”).<br><br>

                Kebijakan ini berlaku untuk para pengguna, mitra, pemasok, merchant dan penyedia layanan (secara kolektif disebut “Anda” atau “Pengguna”).<br><br>

                <b>Definisi Data Pribadi</b><br>
                “Data Pribadi” adalah segala informasi yang dapat digunakan untuk mengidentifikasi Anda atau dari mana Anda dapat diidentifikasi. Ini termasuk namun tidak terbatas pada nama anda, kewarganegaraan, jenis kelamin, pekerjaan, nomor telepon, IMEI, alamat rumah, daftar Kontak, GPS, alamat email, gambar anda, nomor identifikasi yang dikeluarkan pemerintah, tanggal lahir, status perkawinan, agama, dan rincian bank informasi tentang Anda.<br><br>

                <b>Layanan Pihak Ketiga</b><br>
                i-tech telemedia menggunakan layanan pihak ketiga yang dapat mengumpulkan informasi yang digunakan untuk mengidentifikasi Anda.<br><br>

                <b>Daftar Penyedia Layanan Pihak Ketiga</b><br>
                Google Play Services<br>
                Firebase Analytics<br>
                Firebase Crashlytics<br>
                Facebook<br>
                Aviana Digital Service<br>
                Kaspro<br>
                KreditPro<br>
                Linkaja<br>
                Hayumarket<br><br>

                <b>Layanan Aviana Digital Service</b><br>
                Main Service<br>
                eWallet Kaspro<br>
                Loan<br>
                Indra<br>
                Insurance<br>
                Train Booking<br>
                Flight Booking<br>
                Market Place<br>
                Advance.ai<br>
                iRMAPay<br>
                cdn Aviana<br>
                Transaksi Hayumarket<br><br>

                <b>Pengumpulan Data Pribadi</b><br>
                Penyediaan Data Pribadi Anda bersifat sukarela. Namun, jika Anda tidak memberikan Data Pribadi Anda, i-tech telemedia tidak dapat memproses Data Pribadi Anda untuk Tujuan dan Tujuan Tambahan.<br><br>

                <b>Sumber Perolehan Data Pribadi</b><br>
                Anda dapat memberikan Data Pribadi Anda kepada kami ketika Anda atau berasal dari:<br>
                - Mengisi formulir pendaftaran atau registrasi<br>
                - Sumber yang tersedia untuk umum<br>
                - Interaksi di media sosial<br>
                - Mitra jasa keuangan atau asuransi<br>
                - Kontak darurat<br>
                - Acara atau kegiatan<br>
                - Fitur biometrik<br>
                - Survei demografis<br><br>

                <b>Data Pribadi Individu Lain</b><br>
                Dalam beberapa situasi, Anda dapat memberikan Data Pribadi orang lain dan Anda menjamin telah memperoleh persetujuan mereka.<br><br>

                <b>Tujuan Penggunaan Data Pribadi</b><br>
                i-tech telemedia dapat menggunakan dan memproses Data Pribadi Anda untuk keperluan verifikasi, transaksi, pembayaran, logistik, dan layanan keuangan.<br><br>

                <b>Tujuan untuk Mitra</b><br>
                - Pemenuhan perjanjian<br>
                - Penyediaan layanan<br>
                - Pembayaran<br>
                - Pengembangan produk<br><br>

                <b>Tujuan untuk Pemasok (Vendor)</b><br>
                - Pengadaan layanan<br>
                - Pembayaran<br>
                - Evaluasi kualitas dan keamanan<br><br>

                <b>Penggunaan Umum</b><br>
                - Menanggapi pertanyaan<br>
                - Administrasi internal<br>
                - Kepatuhan hukum<br><br>

                <b>Pemeliharaan Data Pribadi</b><br>
                Kami dapat menyimpan Data Pribadi meskipun hubungan kerja telah berakhir sesuai ketentuan hukum.<br><br>

                <b>Pengungkapan kepada Pihak Ketiga</b><br>
                Data Pribadi Anda dapat diungkapkan kepada mitra, penyedia layanan, konsultan, auditor, dan pihak berwenang.<br><br>

                <b>Cookies</b><br>
                i-tech telemedia dan mitra dapat menggunakan cookies dan teknologi serupa untuk meningkatkan layanan dan periklanan.<br><br>

                <b>Tautan ke Website Pihak Ketiga</b><br>
                Kami tidak bertanggung jawab atas kebijakan privasi pihak ketiga.<br><br>

                <b>Informasi Anak di Bawah Umur</b><br>
                Anak di bawah 18 tahun harus mendapatkan persetujuan orang tua atau wali.<br><br>

                <b>Tujuan Hukum</b><br>
                Data Pribadi dapat digunakan untuk mematuhi kewajiban hukum dan menyelesaikan sengketa.<br><br>

                <b>Dukungan Pelanggan</b><br>
                Data Pribadi digunakan untuk membantu dan meningkatkan layanan dukungan pelanggan.<br><br>

                <b>Pengakuan dan Persetujuan</b><br>
                Dengan menggunakan layanan i-tech telemedia, Anda menyetujui Kebijakan Privasi ini.<br><br>

                <b>Pemutakhiran Kebijakan</b><br>
                Kebijakan ini dapat diperbarui sewaktu-waktu.<br><br>

                <b>Kontak</b><br>
                Jika Anda memiliki pertanyaan, silakan hubungi:<br>
                i-tech telemedia<br>
                Email: admin@itechtelemedia.co.id
                </p>

            </div>
        </div>
      </div>
    </section>

@endsection
