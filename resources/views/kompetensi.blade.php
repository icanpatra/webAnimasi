<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kompetensi Jurusan Animasi</title>

  <!-- FONT CABIN SKETCH -->
  <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@400;700&display=swap" rel="stylesheet">

  <!-- TAILWIND CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- TAILWIND CONFIG -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            cabinSketch: ['"Cabin Sketch"', 'cursive']
          }
        }
      }
    }
  </script>

  <!-- Floating Button Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const backToTopButton = document.getElementById('back-to-top');
      
      window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
          backToTopButton.classList.remove('opacity-0', 'invisible');
          backToTopButton.classList.add('opacity-100', 'visible');
        } else {
          backToTopButton.classList.remove('opacity-100', 'visible');
          backToTopButton.classList.add('opacity-0', 'invisible');
        }
      });
      
      backToTopButton.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });
    });
  </script>
</head>

<body class="bg-[#0F1E2C] text-white font-sans">

  <!-- Floating Back to Top Button -->
  <button id="back-to-top" 
          class="fixed bottom-8 right-8 bg-[#1E90FF] hover:bg-[#0C7BDC] text-white p-3 rounded-full shadow-lg transition-all duration-300 opacity-0 invisible z-50">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
    </svg>
  </button>

  <header class="relative h-[500px]">
    <!-- Background wrapper -->
    <div class="absolute inset-0 -z-10">
      <!-- Background Image -->
      <img src="{{ asset('storage/backgroundkompetensi.png') }}" alt="Background"
           class="w-full h-full object-cover pointer-events-none" />

      <!-- Gradient Biru dari bawah -->
      <div class="absolute bottom-0 w-full h-[500px] bg-gradient-to-t from-[#0F1E2C] to-[rgba(15,30,44,0)] pointer-events-none"></div>

    </div>

    <!-- Navigasi -->
    <nav class="flex items-center justify-between px-6 py-3 relative z-20">
      <!-- Kiri: Logo dan Teks -->
      <div class="flex items-center space-x-3">
        <img src="{{ asset('storage/logo.png') }}" class="w-8 h-8" alt="Logo">
        <span class="text-black text-xl font-bold">KOMPETENSI</span>
      </div>

      <!-- Kanan: Menu Navigasi -->
      <div class="space-x-6 hidden md:flex">
        <a href="{{ route('home') }}#tentangSection"
           class="text-black hover:text-orange-400 transition-colors">Tentang</a>

        <a href="{{ route('home') }}#prestasiSection"
           class="text-black hover:text-orange-400 transition-colors">Prestasi</a>

        <a href="{{ route('home') }}#beritaSection"
           class="text-black hover:text-orange-400 transition-colors">Berita</a>

        <a href="{{ route('kompetensi') }}"
           class="text-[#1E90FF] font-semibold hover:text-white transition">Kompetensi</a>
      </div>
    </nav>

    <!-- Judul Utama -->
    <div class="absolute inset-0 flex flex-col justify-center items-center text-center z-10">
       <h1 class="text-4xl md:text-7xl font-cabinSketch font-bold text-white">
        Kompetensi<br>Jurusan Animasi
     </h1>

      <a href="#kompetensiStart" class="mt-4 px-5 py-2 bg-[#0C1E28] text-white rounded font-bold hover:bg-[#93DEFF] transition">
        Mulai
      </a>
    
    </div>
  </header>

  <!-- Rest of your content sections remain unchanged -->
  <section id="kompetensiStart" class="bg-[#0F1E2C] text-white py-16 px-6 md:px-20">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center md:items-start md:space-x-10">
      
      <!-- Kiri: Judul & Deskripsi -->
      <div class="md:w-1/2">
        <h2 class="text-3xl font-bold mb-4">Desain Karakter</h2>
        <p class="text-lg leading-relaxed text-gray-200">
          Pada desain karakter: Siswa belajar menciptakan tokoh dengan ciri khas visual yang unik dan menarik. Keterampilan ini mencakup penggambaran bentuk, ekspresi wajah, kostum, serta warna yang mencerminkan kepribadian dan latar belakang karakter. Desain karakter digunakan dalam berbagai media seperti animasi, komik, video game, dan film.
          <br><br>
          Dalam proses pembuatannya, siswa akan mempelajari prinsip dasar anatomi, proporsi tubuh, serta bagaimana menyampaikan emosi dan cerita melalui tampilan visual. Selain itu, mereka juga akan memahami bagaimana sebuah karakter harus sesuai dengan konsep cerita dan dapat dikenali dengan mudah oleh penonton.
        </p>
      </div>

      <!-- Kanan: Gambar -->
      <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center">
        <img src="{{ asset('storage/desainkarakter.png') }}"
             alt="Desain Karakter"
             class="w-full max-w-sm aspect-[4/5] object-cover rounded-xl shadow-lg" />
      </div>
    </div>
  </section>

  <section class="bg-[#0F1E2C] text-white py-16 px-6 md:px-20">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center md:items-start md:space-x-10">
      
      <!-- Kiri: Gambar -->
      <div class="md:w-1/2 flex justify-center mb-8 md:mb-0">
        <img src="{{ asset('storage/animasi2d3d.png') }}"
             alt="Animasi 2D dan 3D"
             class="w-full max-w-sm aspect-[4/5] object-cover rounded-xl shadow-lg" />
      </div>

      <!-- Kanan: Judul & Deskripsi -->
      <div class="md:w-1/2">
        <h2 class="text-3xl font-bold mb-4">Animasi 2D dan 3D</h2>
        <p class="text-lg leading-relaxed text-gray-200">
          Pada animasi 2D: Siswa belajar membuat gambar bergerak menggunakan teknik animasi dua dimensi. Keterampilan ini meliputi pembuatan karakter, latar belakang, dan elemen-elemen lain yang digambar secara manual atau digital. Animasi 2D digunakan dalam produksi kartun, film pendek, iklan, dan video edukasi.
          <br><br>
          Pada animasi 3D: Siswa dilatih membuat animasi menggunakan model tiga dimensi untuk menciptakan gerakan yang lebih realistis dan mendalam. Kompetensi ini sering digunakan dalam pembuatan film animasi, video game, dan efek visual di industri perfilman. Siswa juga akan mempelajari dasar-dasar pemodelan, rigging, dan rendering untuk menghidupkan karakter dan objek 3D.
        </p>
      </div>
    </div>
  </section>

    <section class="bg-[#0F1E2C] text-white py-16 px-6 md:px-20">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center md:items-start md:space-x-10">
      
      <!-- Kiri: Judul & Deskripsi -->
      <div class="md:w-1/2">
        <h2 class="text-3xl font-bold mb-4">Storyboard</h2>
        <p class="text-lg leading-relaxed text-gray-200">
          Pada storyboard: Siswa belajar membuat rangkaian sketsa atau ilustrasi yang menggambarkan urutan adegan dalam sebuah cerita. Keterampilan ini mencakup penyusunan alur cerita, komposisi visual, serta penentuan sudut pandang kamera. Storyboard digunakan dalam produksi film, animasi, iklan, dan video untuk merencanakan setiap adegan sebelum proses produksi dimulai.
          <br><br>
          Dalam pembuatan storyboard, siswa akan mempelajari teknik penggambaran yang efektif, penggunaan simbol dan anotasi untuk menjelaskan pergerakan atau efek visual, serta bagaimana menyusun cerita secara visual agar lebih mudah dipahami oleh tim produksi. Dengan storyboard, ide-ide kreatif dapat dituangkan secara sistematis sebelum diwujudkan dalam bentuk video atau animasi.
        </p>
      </div>

      <!-- Kanan: Gambar -->
      <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center">
        <img src="{{ asset('storage/storyboard.png') }}"
             alt="Desain Karakter"
             class="w-full max-w-sm aspect-[4/5] object-cover rounded-xl shadow-lg" />
      </div>
    </div>
  </section>

  <section class="bg-[#0F1E2C] text-white py-16 px-6 md:px-20">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center md:items-start md:space-x-10">
      
      <!-- Kiri: Gambar -->
      <div class="md:w-1/2 flex justify-center mb-8 md:mb-0">
        <img src="{{ asset('storage/keyframe.png') }}"
             alt="Animasi 2D dan 3D"
             class="w-full max-w-sm aspect-[4/5] object-cover rounded-xl shadow-lg" />
      </div>

      <!-- Kanan: Judul & Deskripsi -->
      <div class="md:w-1/2">
        <h2 class="text-3xl font-bold mb-4">Keyframe dan Inbetween</h2>
        <p class="text-lg leading-relaxed text-gray-200">
          Pada keyframe: Siswa belajar menentukan gambar utama dalam animasi yang menunjukkan perubahan penting dalam gerakan. Keyframe digunakan untuk menandai posisi awal, tengah, dan akhir dari suatu pergerakan, sehingga menjadi dasar dalam pembuatan animasi.
          <br><br>
          Pada inbetween: Siswa belajar membuat gambar perantara di antara keyframe untuk menciptakan gerakan yang lebih halus dan alami dalam animasi. Inbetween berfungsi sebagai pengisi transisi antara dua keyframe utama, sehingga pergerakan karakter atau objek tampak lebih mulus dan tidak kaku.
        </p>
      </div>
    </div>
  </section>

    <section class="bg-[#0F1E2C] text-white py-16 px-6 md:px-20">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center md:items-start md:space-x-10">
      
      <!-- Kiri: Judul & Deskripsi -->
      <div class="md:w-1/2">
        <h2 class="text-3xl font-bold mb-4">Videografi</h2>
        <p class="text-lg leading-relaxed text-gray-200">
          Siswa mempelajari cara merekam gambar bergerak menggunakan kamera untuk menghasilkan video yang komunikatif dan menarik. Keterampilan dalam videografi mencakup penguasaan teknik pengambilan gambar, pencahayaan, framing, serta pengaturan fokus dan eksposur. Videografi digunakan dalam berbagai produksi seperti film, dokumenter, konten media sosial, dan proyek sekolah.
          <br><br>
          Selama proses pembelajaran, siswa akan dikenalkan dengan peralatan kamera, teknik pengambilan gambar statis dan dinamis, serta prinsip dasar sinematografi. Mereka juga belajar membuat shot list, memahami pergerakan kamera, dan pentingnya kontinuitas gambar dalam sebuah adegan. Dengan menguasai videografi, siswa dapat menyampaikan pesan atau cerita secara visual dengan cara yang efektif dan profesional.
        </p>
      </div>

      <!-- Kanan: Gambar -->
      <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center">
        <img src="{{ asset('storage/videografi.png') }}"
             alt="Desain Karakter"
             class="w-full max-w-sm aspect-[4/5] object-cover rounded-xl shadow-lg" />
      </div>
    </div>
  </section>

  <section class="bg-[#0F1E2C] text-white py-16 px-6 md:px-20">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center md:items-start md:space-x-10">
      
      <!-- Kiri: Gambar -->
      <div class="md:w-1/2 flex justify-center mb-8 md:mb-0">
        <img src="{{ asset('storage/dubbingjpg.jpg') }}"
             alt="Animasi 2D dan 3D"
             class="w-full max-w-sm aspect-[4/5] object-cover rounded-xl shadow-lg" />
      </div>

      <!-- Kanan: Judul & Deskripsi -->
      <div class="md:w-1/2">
        <h2 class="text-3xl font-bold mb-4">Dubbing</h2>
        <p class="text-lg leading-relaxed text-gray-200">
          Siswa belajar mengisi suara karakter atau narator dalam video, film, atau animasi melalui proses yang disebut dubbing. Keterampilan ini mencakup sinkronisasi suara dengan gerakan bibir karakter, intonasi yang sesuai dengan emosi, serta pengucapan yang jelas dan natural. Dubbing sering digunakan untuk menggantikan suara asli dalam bahasa lain (alih bahasa) atau untuk memperbaiki kualitas suara dalam pascaproduksi.
          <br><br>
          Dalam proses dubbing, siswa akan mempelajari teknik vokal, penggunaan mikrofon dengan benar, serta perangkat lunak pengedit suara. Mereka juga belajar mengenali tempo dialog dan ritme bicara agar hasil dubbing terasa menyatu dengan gambar. Dengan menguasai dubbing, siswa dapat meningkatkan kualitas narasi dan emosi dalam sebuah karya audiovisual.
        </p>
      </div>
    </div>
  </section>

  <section class="bg-[#0F1E2C] text-white py-16 px-6 md:px-20">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center md:items-start md:space-x-10">
      
      <!-- Kiri: Judul & Deskripsi -->
      <div class="md:w-1/2">
        <h2 class="text-3xl font-bold mb-4">Compositing</h2>
        <p class="text-lg leading-relaxed text-gray-200">
          Siswa belajar menggabungkan berbagai elemen visual seperti latar belakang, karakter, efek cahaya, dan partikel ke dalam satu tampilan yang utuh dan menarik. Keterampilan ini mencakup teknik layering, masking, color correction, serta penyesuaian pencahayaan untuk menciptakan visual yang harmonis dan sinematik.
          <br><br>
          Dalam proses compositing, siswa akan mempelajari cara menggunakan perangkat lunak khusus untuk menyusun gambar-gambar terpisah menjadi satu kesatuan adegan. Mereka juga akan mempelajari bagaimana menambahkan efek visual seperti cahaya, asap, atau gerakan kamera secara digital. Dengan compositing, setiap bagian dari animasi atau video dapat disatukan secara profesional sebelum dipublikasikan.
        </p>
      </div>

      <!-- Kanan: Gambar -->
      <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center">
        <img src="{{ asset('storage/composting.png') }}"
             alt="Desain Karakter"
             class="w-full max-w-sm aspect-[4/5] object-cover rounded-xl shadow-lg" />
      </div>
    </div>
  </section>

  <section class="bg-[#0F1E2C] text-white py-16 px-6 md:px-20">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center md:items-start md:space-x-10">
      
      <!-- Kiri: Gambar -->
      <div class="md:w-1/2 flex justify-center mb-8 md:mb-0">
        <img src="{{ asset('storage/digital.jpg') }}"
             alt="Animasi 2D dan 3D"
             class="w-full max-w-sm aspect-[4/5] object-cover rounded-xl shadow-lg" />
      </div>

      <!-- Kanan: Judul & Deskripsi -->
      <div class="md:w-1/2">
        <h2 class="text-3xl font-bold mb-4">Digital Processing</h2>
        <p class="text-lg leading-relaxed text-gray-200">
          Siswa belajar memproses dan menyempurnakan konten digital berupa gambar, video, dan suara agar memiliki kualitas yang optimal. Keterampilan ini mencakup pengaturan resolusi, pengurangan noise, koreksi warna, dan konversi format file digital.
          <br><br>
          Dalam digital processing, siswa akan mempelajari penggunaan perangkat lunak untuk meningkatkan kualitas teknis dan estetika dari hasil produksi. Mereka juga akan memahami cara menyesuaikan konten digital agar siap digunakan dalam berbagai platform media. Dengan penguasaan teknik ini, karya yang dihasilkan akan tampak lebih bersih, tajam, dan profesional.
        </p>
      </div>
    </div>
  </section>

  <section class="bg-[#0F1E2C] text-white py-16 px-6 md:px-20">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center md:items-start md:space-x-10">
      
      <!-- Kiri: Judul & Deskripsi -->
      <div class="md:w-1/2">
        <h2 class="text-3xl font-bold mb-4">Editing</h2>
        <p class="text-lg leading-relaxed text-gray-200">
          Siswa belajar menyusun, memotong, dan menyempurnakan urutan gambar serta suara untuk menciptakan alur cerita yang runtut dan menarik. Keterampilan ini mencakup pemilihan adegan yang tepat, penambahan transisi, penyelarasan audio dengan visual, serta penyesuaian warna. 
          <br><br>
          Dalam proses editing, siswa akan mempelajari penggunaan perangkat lunak pengedit video dan audio untuk menghasilkan tampilan akhir yang halus dan profesional. Mereka juga akan memahami pentingnya ritme penyuntingan dalam membangun suasana dan emosi dalam cerita. Melalui editing, seluruh komponen produksi disatukan menjadi satu karya yang siap ditayangkan.
        </p>
      </div>

      <!-- Kanan: Gambar -->
      <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center">
        <img src="{{ asset('storage/editing.png') }}"
             alt="Desain Karakter"
             class="w-full max-w-sm aspect-[4/5] object-cover rounded-xl shadow-lg" />
      </div>
    </div>
  </section>

  <section class="bg-[#0F1E2C] text-white py-16 px-6 md:px-20">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center md:items-start md:space-x-10">
      
      <!-- Kiri: Gambar -->
      <div class="md:w-1/2 flex justify-center mb-8 md:mb-0">
        <img src="{{ asset('storage/produksifilm.jpg') }}"
             alt="Animasi 2D dan 3D"
             class="w-full max-w-sm aspect-[4/5] object-cover rounded-xl shadow-lg" />
      </div>

      <!-- Kanan: Judul & Deskripsi -->
      <div class="md:w-1/2">
        <h2 class="text-3xl font-bold mb-4">Produksi Film Animasi</h2>
        <p class="text-lg leading-relaxed text-gray-200">
          Siswa belajar mengelola seluruh proses pembuatan film animasi, mulai dari perencanaan hingga penyelesaian akhir. Keterampilan ini mencakup tahapan pra-produksi, produksi, dan pasca-produksi yang saling terhubung.
          <br><br>
          Selama pembelajaran, siswa akan mempelajari bagaimana merancang konsep cerita, membuat storyboard, menggambar animasi, merekam suara, hingga menyunting hasil akhir. Proses ini juga mencakup pembagian tugas dalam tim produksi serta penjadwalan kerja. Dengan memahami produksi film animasi secara menyeluruh, siswa mampu menciptakan karya yang kompleks dengan alur kerja profesional.
        </p>
      </div>
    </div>
  </section>

  <section class="bg-[#0F1E2C] text-white py-16 px-6 md:px-20">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center md:items-start md:space-x-10">
      
      <!-- Kiri: Judul & Deskripsi -->
      <div class="md:w-1/2">
        <h2 class="text-3xl font-bold mb-4">Naskah Cerita</h2>
        <p class="text-lg leading-relaxed text-gray-200">
          Siswa belajar menyusun teks cerita yang menjadi dasar dari seluruh produksi film atau animasi. Keterampilan ini mencakup pembuatan alur cerita, penulisan dialog antar tokoh, dan perincian latar serta adegan. Naskah berfungsi sebagai panduan utama bagi semua proses produksi visual dan suara.
          <br><br>
          Dalam penulisan naskah, siswa akan mempelajari struktur tiga babak (pembukaan, konflik, dan penyelesaian), pengembangan karakter, serta pemilihan kata dan gaya bahasa yang sesuai dengan genre cerita. Dengan naskah yang baik, seluruh tim produksi dapat memahami jalan cerita secara menyeluruh dan menghasilkan karya yang utuh dan bermakna.
        </p>
      </div>

      <!-- Kanan: Gambar -->
      <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center">
        <img src="{{ asset('storage/naskahcerita.png') }}"
             alt="Desain Karakter"
             class="w-full max-w-sm aspect-[4/5] object-cover rounded-xl shadow-lg" />
      </div>
    </div>
  </section>

</body>
</html>