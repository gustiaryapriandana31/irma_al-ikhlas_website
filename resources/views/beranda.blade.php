@extends('layouts.main')

@section('container')
  <div class="container-fluid jumbotron">
      <h1 class="text-white position-absolute">AHLAN WA SAHLAN</h1>
      <h2 class="text-white position-absolute">Website Irma Al-Ikhlas</h2>
      <p class="text-white position-absolute">Ikatan Remaja Masjid Al-Ikhlas 
          Desa Meranjat II, Kecamatan Indralaya Selatan, Kabupaten Ogan Ilir</p>
      <img src="img/masjid-al-ikhlas.png" alt="Masjid Al-Ikhlas" class="banner-img position-absolute">
      <hr class="position-absolute">
      <a href="#" class="kunjungi btn btn-light position-absolute rounded-5" >Kunjungi</a>
  </div>

  <div class="container-fluid sejarah position-relative">
      <div class="circle-left position-absolute top-0">
        <h1 class="text-white">DESKRIPSI IRMA AL-IKHLAS</h1>
        <p class="text-white">Ikatan Remaja Masjid Al-Ikhlas merupakan organisasi kepemudaan Islami yang berada di bawah naungan Dewan Kemakmuran Masjid Al-Ikhlas</p>
      </div>
      <div class="circle-right position-absolute">
        <h1 class="text-white">SEJARAH SINGKAT</h1>
        <p class="text-white">Organisasi ini diaktifkan pada tahun 2020 seiring dengan kepengurusan baru Dewan Kemakmuran Masjid Al-Ikhlas periode 2020-2022. Saat ini IRMA Al-Ikhlas sudah memasuki tahun ketiga dalam kepengurusannya </p>
      </div>
  </div>

  
  <div class="container-fluid department bg-white">
    <h1 class="judul">BIDANG-BIDANG</h1>
    <hr class="line">
    <div class="cards">
      <div class="card">
        <img src="img/logo-dakpen.png" class="mb-4 mt-4 m-auto" alt="logo dakpen" width="150" height="140">
        <h5>DAKWAH & PENDIDIKAN</h5>
        <p>Dakwah dan Pendidikan Islam merupakan bidang yang berperan sebagai media dakwah dan pembelajaran ilmu-ilmu agama</p>
        <div class="detail-bidang">
          <a href="/bidang/dakpen" class="btn text-white m-auto">Detail Bidang</a>
        </div>
      </div>
      <div class="card">
        <img src="img/logo-humas.png" class="mb-4 mt-4 m-auto" alt="logo dakpen" width="150" height="140">
        <h5>HUBUNGAN MASYARAKAT</h5>
        <p>Hubungan Masyarakat merupakan bidang yang berperan menjalin hubungan baik dengan masyarakat agar terciptanya kerjasama dan silaturahim</p>
        <div class="detail-bidang">
          <a href="/bidang/humas" class="btn text-white m-auto">Detail Bidang</a>
        </div>
      </div>
      <div class="card">
        <img src="img/logo-phbi.png" class="mb-4 mt-4 m-auto" alt="logo dakpen" width="150" height="140">
        <h5>PERINGATAN HARI BESAR ISLAM</h5>
        <p>PHBI Merupakan bidang yang bertanggung jawab sebagai pelaksana setiap kegiatan peringatan hari-hari besar Islam</p>
        <div class="detail-bidang">
          <a href="/bidang/phbi" class="btn text-white m-auto">Detail Bidang</a>
        </div>
      </div>
    </div>
  </div> 

  <div class="container-fluid proker bg-white">
    <h1 class="judul" id="program-kerja">PROGRAM KERJA</h1>
    <hr class="line">
    <div class="navigasi-proker mt-4">
      <div class="row grid gap-3">
        <div class="col-md-2 offset-md-2 rounded-5 link-pro">
          <a href="#program-kerja" class="btn button">MAJELIS TA'LIM</a>
        </div>
        <div class="col-md-2 rounded-5 link-pro">
          <a href="#program-kerja" class="btn button">TADARUSAN</a>
        </div>
        <div class="col-md-2 rounded-5 link-pro">
          <a href="#program-kerja" class="btn button">KAJIAN FIQIH</a>
        </div>
        <div class="col-md-2 rounded-5 link-pro">
          <a href="#program-kerja" class="btn button">PHBI</a>
        </div>
      </div>
    </div>
    <div id="konten">
      <div class="konten-proker">
        <img src="img/image-ta'lim.jpeg" alt="Gambar Majelis Ta'lim" class="image-konten">
        <div class="desc-konten">
          <h1 class="text-white mb-4">MAJELIS TA'LIM</h1>
          <p class="text-white text-justify">Kegiatan ini merupakan pembacaan kitab-kitab Hadist Nabi Muhammad SAW yang dilakukan setelah sholat Isya’ di Masjid Al-Ikhlas. Hadist-hadist yang disampaikan berkenaan dengan Iman, Sholat, Amar Ma’ruf Nahi Munkar, Silaturahmi, Puasa, dan lain sebagainya. Selain itu, sesekali diselingi dengan membaca kisah-kisah Nabi Muhammad beserta para sahabat terdahulu untuk dipetik pelajarannya dan diteladani dalam kehidupan sehari-hari.</p>  
          <a href="#content" class="btn btn-light rounded-5 lihat-galeri">Lihat Galeri >></a>
        </div> 
      </div>
      <div class="konten-proker d-none">
        <img src="img/image-tadarusan.jpg" alt="Gambar Tadarusan Al-Qur'an" class="image-konten">
        <div class="desc-konten">
          <h1 class="text-white mb-4">TADARUSAN AL-QUR'AN</h1>
          <p class="text-white text-justify">Kegiatan ini dilakukan rutin setiap hari minggu malam senin secara rutin. Kegiatan ini berupa membaca Al-Qur'an secara bergantian dan saling menyimak satu sama lain sembari membenarkan bacaan yang kurang tepat, ataupun adanya jali. Tadarusan juga diiringi dengan belajar Tajwid dan Makhrijul Huruf hingga Maqom tilawah dan dipandu oleh Bapak Agus Mulyadi, Ketua Bidang Peribadatan DKM Al-Ikhlas.</p>  
          <a href="#content" class="btn btn-light rounded-5 lihat-galeri">Lihat Galeri >></a>
        </div> 
      </div>
      <div class="konten-proker d-none">
        <img src="img/image-kajian.jpg" alt="Gambar Kajian Fiqih" class="image-konten">
        <div class="desc-konten">
          <h1 class="text-white mb-4">KAJIAN FIQIH</h1>
          <p class="text-white text-justify">Kegiatan ini berupa pembekalan materi fiqih dan tauhid Islam yang bersumber dari buku fiqih dan diajarkan atau disampaikan langsung oleh Ustadz Ramlan Rozali, S.Sos,I selaku Ketua Dewan Kemakmuran Masjid Al-Ikhlas. Adapun materi fiqih yang diajarkan mulai dari Rukun Islam, Rukun Islam, Tata Cara Thaharah sampai kepada bab-bab yang lain. Materi Tauhid seperti mengenal sifat-sifat Allah dan Rasul juga menjadi materi penting yang juga diajarkan.</p>  
          <a href="#content" class="btn btn-light rounded-5 lihat-galeri">Lihat Galeri >></a>
        </div> 
      </div>
      <div class="konten-proker d-none">
        <img src="img/image-phbi.jpg" alt="Gambar Peringatan Hari Besar Islam" class="image-konten">
        <div class="desc-konten">
          <h1 class="text-white mb-4 fs-2">PERINGATAN HARI BESAR ISLAM</h1>
          <p class="text-white text-justify">Peringatan Hari Besar Islam ini dilakukan mulai dari Peringatan Tahun Baru Islam/Hijriyah, Maulid Nabi Muhammad SAW, Isra' Mi'raj Nabi Muhammad SAW, Nuzulul Qu'ran, dan 2 Hari Raya, yakni 'Idul Fitri dan 'Idul Adha. Kegiatan biasanya berbentuk ceramah agama di seputar peringatan, dan sesekali melaksanakan kegiatan lomba keagamaan yang ditujukan bagi anak-anak di Desa Meranjat. Kegiatan ini diharapkan dapat meningkatkan nilai-nilai Islami.</p>  
          <a href="#content" class="btn btn-light rounded-5 lihat-galeri mt-2">Lihat Galeri >></a>
        </div> 
      </div>
    </div>
  </div>

  <div class="container-fluid faq bg-white pt-5">
    <h1 class="text-center">PERTANYAAN SEPUTAR IRMA</h1>
      <div class="box-faq">
        <div class="question" onclick="toggleAnswer(event)">Alasan mengapa Irma Al-Ikhlas dibentuk</div>
        <div class="answer text-bg-primary">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore dolorum eveniet accusantium dolorem voluptate inventore praesentium consequuntur maxime, aliquid facere accusamus omnis id corrupti vitae recusandae aut laborum aspernatur necessitatibus, veniam dignissimos quisquam amet quaerat neque. Tenetur nesciunt iusto delectus amet aliquid incidunt consequatur fugit id rem? Corporis, consequatur eum.</div>
      </div>
      <div class="box-faq">
        <div class="question" onclick="toggleAnswer(event)">Kegiatan apa yang aktif dilaksanakan</div>
        <div class="answer">You can start by navigating to the desired page and exploring the features.</div>
      </div>
      <div class="box-faq">
        <div class="question" onclick="toggleAnswer(event)">Siapakah Ketua Irma sekarang</div>
        <div class="answer">Yes, you can change your password by going to the account settings page.</div>
      </div>
  </div>

  <footer class="container-fluid text-white pt-5">
    <div class="row">
      <div class="col-md-4 offset-md-1 col-xs-12 me-4">
        <h3>Tentang Kami</h3>
        <img src="img/footer-logo.png" alt="Gambar Logo Footer" class="mt-4">
        <p>IRMA Al-Ikhlas merupakan organisasi keagamaan yang berdiri di bawah naungan Dewan Kemakmuran Masjid Al-Ikhlas Meranjat II. IRMA Al-Ikhlas bertanggung jawab dalam melaksanakan kegiatan keagamaan untuk kalangan pemuda-pemudi di desa Meranjat II.</p>
      </div>
      <div class="col-md-3">
        <h3 class="mt-5">Hubungi Kami</h3>
        <p class="fs-6 mt-3">Masjid Al-Ikhlas, Meranjat II Dusun I</p>
        <div class="footer-logo mt-5">
          <a href="#" target="_blank"><i class="fab fa-facebook text-white fs-2 me-4"></i></a>
          <a href="https://instagram.com/irma_alikhlas2" target="_blank"><i class="fab fa-instagram text-white fs-2 me-4"></i></a>
          <a href="#"><i class="fas fa-globe text-white fs-2 "></i></a>
        </div>
      </div>
      <div class="col-md-3">
        <h5 class="lh-base">Ada pertanyaan? Bisa hubungi kami
        dengan kontak ini</h5>
        <h4 class="mt-5">WhatsApp</h4>
        <p class="mt-3 mb-1">0822 8196 3857(IKHWAN)</p>
        <p class="mt-0">0822 8196 3857(AKHWAT)</p>
      </div>
    </div>
    <hr>
    <p class="copyright">Copyright &copy;2023 | IRMA AL-IKHLAS MERANJAT II</p>
  </footer> 
@endsection

  