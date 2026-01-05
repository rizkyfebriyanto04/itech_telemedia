@extends('layouts.master')

@section('title', 'Hapus Akun')

@section('content')

<!-- BredCrumb-Section -->
    <div class="bred_crumb">
      <div class="container">
        <!-- shape animation  -->
        <span class="banner_shape1"> <img src="{{asset('landing/images/banner-shape1.png')}}" alt="image" > </span>
        <span class="banner_shape2"> <img src="{{asset('landing/images/banner-shape2.png')}}" alt="image" > </span>
        <span class="banner_shape3"> <img src="{{asset('landing/images/banner-shape3.png')}}" alt="image" > </span>

        <div class="bred_text">
          <h1>Hapus Akun</h1>
          <ul>
            <li><a href="{{ route('home')}}">Home</a></li>
            <li><span>»</span></li>
            <li><a href="">Hapus Akun</a></li>
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
              <h2>Kebijakan Privasi</h2>
            </div>
            <div class="info" style="color: black" style="text-align: justify;">
                <p>
                Sebagai penyedia layanan produk digital, <strong>I-tech Telemedia</strong> sangat menjunjung tinggi privasi customer/member. Hal ini karena informasi pribadi merupakan hal yang sangat krusial dan tidak boleh diketahui oleh pihak manapun.
                </p>

                <p>
                Berikut kami jelaskan mengenai informasi apa saja yang kami terima dan kumpulkan saat Anda mengunjungi situs atau menggunakan Aplikasi I-tech Telemedia, serta bagaimana kami menyimpan dan menjaga informasi tersebut.
                </p>

                <p>
                Kami tegaskan bahwa <strong>I-tech Telemedia tidak akan pernah memberikan informasi pribadi pengguna kepada pihak manapun</strong>.
                </p>

                <h3>Informasi yang Dikumpulkan oleh I-tech Telemedia</h3>

                <p>
                Seperti situs dan aplikasi lainnya pada umumnya, kami mengumpulkan dan menggunakan data yang terdapat pada file log. Informasi tersebut meliputi:
                </p>

                <ul>
                <li>Alamat IP (Internet Protocol)</li>
                <li>ISP (Internet Service Provider)</li>
                <li>Jenis browser yang digunakan</li>
                <li>Perangkat yang digunakan</li>
                <li>Waktu kunjungan</li>
                <li>Halaman yang diakses selama berkunjung di I-tech Telemedia</li>
                </ul>

                <p>
                Apabila Anda login melalui aplikasi, kami juga mengumpulkan informasi yang tersimpan pada Akun I-tech Telemedia Anda, yang kami kategorikan sebagai informasi pribadi.
                </p>

                <h3>Penggunaan Data</h3>

                <p>
                Data yang kami kumpulkan digunakan untuk:
                </p>

                <ul>
                <li>Menyediakan layanan kepada pengguna</li>
                <li>Mempertahankan dan meningkatkan kualitas layanan</li>
                <li>Mengembangkan layanan baru</li>
                <li>Mengukur performa sistem</li>
                <li>Berkomunikasi dengan pengguna</li>
                <li>Melindungi keamanan Akun I-tech Telemedia</li>
                </ul>

                <p>
                Seluruh data yang dikumpulkan tidak akan disebarluaskan dan hanya digunakan secara profesional oleh <strong>I-tech Telemedia</strong>.
                </p>

                <h3>Mengelola, Meninjau, dan Memperbarui Informasi</h3>

                <p>
                Saat login ke aplikasi, Anda dapat meninjau dan memperbarui informasi pribadi yang telah dikumpulkan melalui fitur pengaturan akun di Aplikasi I-tech Telemedia.
                </p>

                <h3>Data yang Disimpan</h3>

                <p>
                Ketika Anda membuat akun (mendaftar) di Aplikasi I-tech Telemedia, kami mengumpulkan dan menyimpan data berikut:
                </p>

                <ul>
                <li>Nama</li>
                <li>Nama Toko</li>
                <li>Nomor HP</li>
                <li>Password atau Kata Sandi</li>
                </ul>

                <p>
                Selain itu, untuk keperluan keamanan dan mitigasi penipuan, kami juga menyimpan informasi tambahan berupa:
                </p>

                <ul>
                <li>NIK E-KTP dan Foto</li>
                <li>Nama Ibu Kandung</li>
                <li>PIN Transaksi</li>
                <li>IP Address</li>
                <li>Model Perangkat (Device)</li>
                <li>Sistem Operasi dan Versi Browser</li>
                <li>Lokasi Geografis (Geolocation)</li>
                </ul>

                <p>
                Setelah terdaftar, pengguna dapat login menggunakan nomor HP dan password, serta OTP yang dikirim ke email terdaftar.
                </p>

                <h3>Data yang Dihapus</h3>

                <p>
                Apabila Anda menghapus atau membatalkan akun, maka data berikut akan dihapus dari sistem kami:
                </p>

                <ul>
                <li>Nama</li>
                <li>Nama Toko</li>
                <li>Nomor HP</li>
                <li>Password atau Kata Sandi</li>
                <li>NIK E-KTP dan Foto</li>
                <li>Nama Ibu Kandung</li>
                <li>PIN Transaksi</li>
                <li>IP Address</li>
                <li>Model Perangkat</li>
                <li>Sistem Operasi dan Versi Browser</li>
                <li>Lokasi Geografis (Geolocation)</li>
                </ul>

                <p>
                Data pribadi akan terhapus otomatis beberapa hari setelah permintaan penghapusan akun disetujui. Riwayat aktivitas akan dihapus sepenuhnya dari sistem dalam waktu maksimal <strong>90 hari</strong>.
                </p>

                <h3>Langkah Menghapus Akun</h3>

                <h4>A. Melalui Aplikasi</h4>

                <ol>
                <li>Buka Aplikasi I-tech Telemedia</li>
                <li>Masuk ke halaman <strong>Hubungi Kami</strong></li>
                <li>Klik tombol <strong>Hapus Akun</strong></li>
                <li>Masukkan Nomor HP akun dan alasan penghapusan</li>
                <li>Selesai, akun akan dihapus otomatis paling lambat 90 hari sejak permintaan</li>
                </ol>

                <h4>B. Menghubungi Admin</h4>

                <ul>
                <li>WhatsApp: <strong>(022) 86067617</strong></li>
                <li>Email: <strong>admin@itechtelemedia.co.id</strong></li>
                </ul>

                <p>
                Akun akan dihapus otomatis paling lambat 90 hari sejak permintaan penghapusan diterima.
                </p>

                <h3>Catatan</h3>

                <ul>
                <li>Kami akan meminta beberapa data untuk memastikan bahwa permintaan penghapusan dilakukan oleh pemilik akun yang sah.</li>
                <li>Disarankan menggunakan nomor WhatsApp dan email yang terdaftar.</li>
                <li>Untuk respon lebih cepat, hubungi melalui WhatsApp dengan pesan: <strong>PERMOHONAN MENGHAPUS AKUN</strong>.</li>
                <li>Customer Service akan melakukan verifikasi data sebelum akun dihapus.</li>
                </ul>


            </div>
        </div>
      </div>
    </section>

@endsection
