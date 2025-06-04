<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Keahlian Animasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100..900;1,100..900&family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>.no-scrollbar {
    -ms-overflow-style: none;
    scrollbar-width: none;
    }
    .no-scrollbar::-webkit-scrollbar {
    display: none;
    }
    </style>
</head>

<body>

        <!-- Floating Back to Top Button -->
        <button id="back-to-top" class="fixed bottom-8 right-8 bg-[#1E90FF] hover:bg-[#0C7BDC] text-white p-3 rounded-full shadow-lg transition-all duration-300 opacity-0 invisible z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
            </svg>
        </button>

    <header class="fixed top-0 left-0 w-full z-50 bg-transparent font-publicSans">
        <nav class="flex items-center justify-between px-6 py-3">
          <!-- Kiri: Logo dan Teks -->
          <div class="flex items-center space-x-3">
            <img src="{{ asset('storage/logo.png')}}" class="w-8 h-8" alt="Logo">
            <span class="text-black text-xl font-bold">ANIMASI</span>
          </div>
      
          <!-- Kanan: Menu Navigasi -->
          <div class="space-x-6 hidden md:flex">
            <button class="scroll-btn text-black transition-colors duration-100"
            data-target="tentangSection"
            data-active-text="text-orange-500">Tentang</button>
            
            <button class="scroll-btn text-black transition-colors duration-100"
            data-target="prestasiSection"
            data-active-text="text-orange-500">Prestasi</button>
    
            <button class="scroll-btn text-black transition-colors duration-100"
            data-target="beritaSection"
            data-active-text="text-white">Berita</button>
    
            <a href="{{ route('kompetensi') }}" 
            class="text-black transition">
            Kompetensi
            </a>
          </div>
        </nav>
    </header>
      
    <section id="animasi">
        <div class="relative h-screen w-full overflow-hidden font-publicSans">
            <!-- Background Image -->
            <img 
                src="{{ asset('storage/Background.png') }}" 
                class="absolute inset-0 w-full h-full object-cover" 
                alt="Banner"
            >
        
            <!-- Left Character in Bottom-Left -->
            <img 
                src="{{ asset('storage/anime1.png') }}" 
                class="absolute bottom-0 -left-20 h-[600px] object-contain z-10" 
                alt="Left Character"
            >
        
            <!-- Overlay Content -->
            <div class="absolute inset-0 flex justify-end items-center px-10 md:px-20 text-black z-10">
                <div class="text-left max-w-md">
                    <!-- Description -->
                    <p class="text-xl md:text-2xl mb-10 leading-relaxed font-bold">
                        Jurusan <a class="text-amber-500">Animasi</a> lebih fokus dalam<br>
                        mempelajari teori dan teknik dalam<br>
                        membuat <a class="text-amber-500">animasi</a> 2D, 3D
                    </p>
        
                    <!-- Button -->
                    <button 
                        class="scroll-btn px-8 py-1 bg-amber-600 hover:bg-amber-400 rounded-md text-lg font-semibold transition-colors text-black duration-100"
                        data-target="prestasiSection"
                        data-active-text="text-orange-500">
                        Mulai
                    </button>
                </div>
            </div>
        </div>
    </section>
    
   <!-- Prestasi -->
<section id="prestasi" class="relative h-screen w-full overflow-hidden font-publicSans">
    <div id="prestasiSection" class="relative h-screen w-full overflow-hidden font-publicSans">
        <!-- Background Image -->
        <img src="{{ asset('storage/Background Prestasi.png') }}" class="absolute inset-0 w-full h-full object-cover" alt="Banner">

        <!-- Content Prestasi -->
        <section class="relative w-full h-screen overflow-hidden flex items-center justify-center">
            <div id="cardSlider" class="flex overflow-x-auto no-scrollbar snap-x snap-mandatory space-x-4 h-[70%] items-center px-4 w-full max-w-6xl mx-auto">
                @foreach ($prestasi as $item)
                <div class="card-item flex-shrink-0 w-[400px] rounded-xl shadow-xl snap-start mx-2 relative"
                     onclick="showPrestasiModal(
                        '{{ asset('storage/' . $item['picture']) }}',
                        '{{ addslashes($item['title']) }}',
                        `{{ addslashes($item['description']) }}`
                     )"
                     style="cursor: pointer;">
                    <div class="relative aspect-square overflow-hidden rounded-xl">
                        <img src="{{ asset('storage/' . $item['picture']) }}" 
                             class="w-full h-full object-cover" 
                             alt="{{ $item['title'] }}" 
                             loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-6">
                            <div class="text-white">
                                <h3 class="text-2xl font-bold mb-3">{{ $item['title'] }}</h3>
                                <p class="text-base">{{ Str::limit($item['description'], 150) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <!-- Modal Prestasi -->
        <div id="prestasiModal" class="fixed inset-0 z-50 hidden justify-center items-center backdrop-blur-sm">
            <div id="prestasiModalContent"
                 class="w-[80%] h-[80%] rounded-xl overflow-hidden bg-opacity-0 relative flex transform transition-all duration-300 ease-in-out scale-95 opacity-0">
                <!-- Tombol Close -->
                <button onclick="closePrestasiModal()"
                        class="absolute top-4 right-4 text-white z-50 hover:bg-black/20 rounded-full p-2">
                    ✕
                </button>

                <!-- Gambar kiri -->
                <div class="w-1/2 h-full">
                    <img id="prestasiModalImg"
                         src=""
                         alt="Gambar Prestasi"
                         class="w-full h-full object-cover">
                </div>

                <!-- Teks kanan -->
                <div class="w-1/2 h-full p-6 overflow-y-auto text-white backdrop-blur-md bg-black/30">
                    <h3 id="prestasiModalLabel" class="text-2xl font-bold mb-4"></h3>
                    <p id="prestasiModalDesc" class="text-base leading-relaxed"></p>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Berita -->
    <section id="berita">
            <div id="beritaSection" class="relative h-screen w-full overflow-hidden font-publicSans">
                    <!-- Background Image -->
                    <img src="{{ asset('storage/Background Berita.png') }}" class="absolute inset-0 w-full h-full object-cover" alt="Banner">
                    <img 
                        src="{{ asset('storage/anime2.png') }}" 
                        class="absolute bottom-0 -right-[200px] h-[600px] object-contain z-10" 
                        alt="Left Character">
            
                    <!-- Content Berita -->
                    <section class="absolute left-40 top-1/2 transform -translate-y-1/2 z-10 py-10 pl-10">
                        <div id="beritaCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                            <div class="carousel-inner rounded-xl shadow-xl w-[450px]">
                                @foreach ($berita as $index => $item)
                                <div class="carousel-item @if ($index == 0) active @endif"
                                onclick="showBeritaModal(
                                    '{{ asset('storage/' . $item->picture) }}',
                                    '{{ addslashes($item->title) }}',
                                    `{{ addslashes($item->description) }}`
                                )"
                                style="cursor: pointer;">                                  
                                        <div class="relative aspect-square overflow-hidden rounded-xl">
                                            <img src="{{ asset('storage/' . $item->picture) }}"
                                                class="w-full h-full object-cover"
                                                alt="{{ $item->title }}">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-6">
                                                <div class="text-white">
                                                    <h3 class="text-2xl font-bold mb-3">{{ $item->title }}</h3>
                                                    <p class="text-base transition-all duration-300">
                                                        {{ Str::limit($item->description, 150) }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                    
                            <!-- Tombol Navigasi (warna hitam) -->
                            <button class="carousel-control-prev left-[-5rem] top-1/2 -translate-y-1/2 absolute" type="button" data-bs-target="#beritaCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon bg-black rounded-full p-3" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                    
                            <button class="carousel-control-next right-[-5rem] top-1/2 -translate-y-1/2 absolute" type="button" data-bs-target="#beritaCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon bg-black rounded-full p-3" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </section>
                </div>
                
                <!-- Modal Berita -->
            <div id="beritaModal" class="fixed inset-0 z-50 hidden justify-center items-center backdrop-blur-sm">
            <div id="beritaModalContent"
                class="w-[80%] h-[80%] rounded-xl overflow-hidden bg-opacity-0 relative flex transform transition-all duration-300 ease-in-out scale-95 opacity-0">
                <!-- Tombol Close -->
                <button onclick="closeBeritaModal()"
                        class="absolute top-4 right-4 text-white z-50 hover:bg-black/20 rounded-full p-2">
                    ✕
                </button>

                <!-- Gambar kiri -->
                <div class="w-1/2 h-full">
                    <img id="beritaModalImg"
                        src=""
                        alt="Gambar Berita"
                        class="w-full h-full object-cover">
                </div>

                <!-- Teks kanan -->
                <div class="w-1/2 h-full p-6 overflow-y-auto text-white backdrop-blur-md bg-black/30">
                    <h3 id="beritaModalLabel" class="text-2xl font-bold mb-4"></h3>
                    <p id="beritaModalDesc" class="text-base leading-relaxed"></p>
                </div>
            </div>
        </div>

    </section>

    <!-- tentang -->
    <section id="tentang">
        <div id="tentangSection" class="relative h-screen w-full overflow-hidden font-publicSans"> 
            <div class="relative h-screen w-full overflow-hidden font-publicSans">
                <img 
                    src="{{ asset('storage/gambar_orang.png') }}" 
                    class="absolute bottom-0 right-0 h-[600px] object-contain z-10" 
                >
            </div>
            <div class="absolute inset-0 flex justify-start items-center md:px-20 text-black">
                <div class="text-left max-w-3xl pr-4">
                    <!-- Description -->
                    <p class="mb-10 leading-relaxed">
                    Web jurusan Animasi adalah sebuah platform digital yang dirancang khusus untuk mendukung kegiatan belajar mengajar di jurusan Animasi pada tingkat SMK. Web ini berfungsi sebagai pusat informasi dan komunikasi, yang menyediakan akses mudah bagi siswa, guru, dan pihak terkait untuk mendapatkan materi pembelajaran, informasi jurusan, serta berbagai kegiatan dan prestasi yang berkaitan dengan dunia animasi.</p> 
                    <p>Selain itu, web ini juga menjadi wadah untuk menampilkan karya-karya siswa, seperti animasi pendek, ilustrasi digital, storyboard, dan project kolaboratif lainnya. Dengan adanya platform ini, diharapkan dapat meningkatkan semangat belajar, kreativitas, dan kolaborasi antar siswa, sekaligus memperkenalkan potensi dan kualitas lulusan jurusan Animasi kepada masyarakat luas dan dunia industri.</p>
                </div>
            </div>        
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-orange-600 text-black px-6 py-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Logo + Alamat -->
            <div class="flex items-start space-x-4">
                <img src="{{ asset('images/logo-SMKN1.png') }}" alt="Logo SMKN 1 Bengkulu" class="h-24" />
                <div>
                    <p class="font-bold">SMK Negeri 1 Bengkulu</p>
                    <p>Jalan Jati No 41,<br>
                       Kelurahan Padang Jati,<br>
                       Kecamatan Ratu Samban,<br>
                       Kota Bengkulu<br>
                       38222
                    </p>
                </div>
            </div>
    
            <!-- Ikon Sosial Media -->
            <div class="flex justify-center items-start space-x-6">
                <a href="https://www.instagram.com/smkn1kotabengkulu">
                    <!-- Instagram -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7z" />
                        <circle cx="12" cy="12" r="3.2" />
                        <circle cx="17" cy="7" r="1" />
                    </svg>
                </a>
                <a href="https://twitter.com/smkn1kotabkl">
                    <!-- Twitter -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53A4.48 4.48 0 0 0 12 8v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/>
                    </svg>
                </a>
                <a href="https://web.facebook.com/Smkn1KotaBengkulu/">
                    <!-- Facebook -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                    </svg>
                </a>
                <a href="https://www.youtube.com/channel/UCydN3u2tCciDrJKo06ug-oQ">
                    <!-- YouTube -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"/>
                        <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"/>
                    </svg>
                </a>
            </div>
    
            <!-- Kontak & Developer -->
            <div class="flex flex-col justify-between">
                <div>
                    <p class="font-bold">Hubungi kami :</p>
                    <div class="flex items-center space-x-2 mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M22 16.92V21a2 2 0 0 1-2.18 2A19.86 19.86 0 0 1 3 5.18 2 2 0 0 1 5 3h4.09a1 1 0 0 1 1 .75l1.07 4.28a1 1 0 0 1-.29 1L9.91 11.1a16 16 0 0 0 6 6l2.07-2.07a1 1 0 0 1 1-.29l4.28 1.07a1 1 0 0 1 .75 1z"/>
                        </svg>
                        <span>Kaprog jurusan Animasi<br>Edison M.Pd</span>
                    </div>
                </div>
                <div class="mt-6">
                    <p class="font-bold">Develop by team :</p>
                    <p class="ml-1">NexDev</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Script Section -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
    // Scroll button functionality
    document.querySelectorAll('.scroll-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = btn.getAttribute('data-target');
            const targetEl = document.getElementById(targetId);
            if (targetEl) {
                targetEl.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

    // Active section detection for header text change
    document.addEventListener('DOMContentLoaded', function() {
        const navText = document.querySelector('.flex.items-center.space-x-3 span.text-black.text-xl.font-bold');
        const sections = {
            animasi: 'ANIMASI',
            tentang: 'TENTANG',
            prestasi: 'PRESTASI',
            berita: 'BERITA'
        };

        const sectionObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const sectionId = entry.target.id;
                        if (sections[sectionId]) {
                            navText.textContent = sections[sectionId];
                            
                            // Update active nav button
                            document.querySelectorAll('.scroll-btn').forEach(btn => {
                                const target = btn.getAttribute('data-target');
                                if (target && target.toLowerCase().includes(sectionId)) {
                                    const activeClass = btn.getAttribute('data-active-text');
                                    btn.classList.remove('text-black');
                                    btn.classList.add(activeClass);
                                } else {
                                    const activeClass = btn.getAttribute('data-active-text');
                                    btn.classList.remove(activeClass, 'text-white', 'text-orange-500');
                                    btn.classList.add('text-black');
                                }
                            });
                        }
                    }
                });
            },
            {
                threshold: 0.5,
                rootMargin: '0px 0px -50% 0px'
            }
        );

        // Observe all relevant sections
        Object.keys(sections).forEach(sectionId => {
            const section = document.getElementById(sectionId);
            if (section) {
                sectionObserver.observe(section);
            }
        });
    });

    // Tailwind config
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    publicSans: ['"Public Sans"', 'sans-serif'],
                }
            }
        }
    }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>

        // Scroll animation
        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-in');
            
            const fadeInOnScroll = function() {
                fadeElements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    
                    if (elementTop < windowHeight - 100) {
                        element.classList.add('visible');
                    }
                });
            };
            
            fadeInOnScroll();
            window.addEventListener('scroll', fadeInOnScroll);
        });

        // Carousel controls
        const carousel = document.getElementById('beritaCarousel');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const scrollAmount = 320;

        if (prevBtn && nextBtn) {
            prevBtn.addEventListener('click', () => {
                carousel.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            });

            nextBtn.addEventListener('click', () => {
                carousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            });
        }

    const container = document.getElementById('cardSlider');

    function scaleCardsFromLeft() {
        const cards = container.querySelectorAll('.card-item');
        const containerLeft = container.getBoundingClientRect().left;

        cards.forEach(card => {
            const cardRect = card.getBoundingClientRect();
            const distance = Math.max(cardRect.left - containerLeft, 0);
            const maxDistance = 700; // jarak maksimal sebelum scale terkecil

            const ratio = Math.min(distance / maxDistance, 1);
            const scale = 1 - ratio * 0.3; // dari 1 ke 0.7
            card.style.transform = `scale(${scale})`;
            card.style.transition = 'transform 0.3s ease-out';
        });
    }

    container.addEventListener('scroll', () => {
        window.requestAnimationFrame(scaleCardsFromLeft);
    });

    window.addEventListener('load', scaleCardsFromLeft);
    window.addEventListener('resize', scaleCardsFromLeft);

    
    // Variabel untuk menyimpan posisi scroll sebelum modal dibuka
    let scrollPosition = 0;
let scrollLocked = false;

function disablePageScroll() {
    if (scrollLocked) return;
    
    scrollPosition = window.pageYOffset;
    document.documentElement.style.overflow = 'hidden';
    document.body.style.overflow = 'hidden';
    document.body.style.position = 'fixed';
    document.body.style.top = `-${scrollPosition}px`;
    document.body.style.width = '100%';
    scrollLocked = true;
    
    // Tambahkan event listener untuk memastikan
    window.addEventListener('scroll', preventScroll, { passive: false });
    document.addEventListener('wheel', preventScroll, { passive: false });
    document.addEventListener('touchmove', preventScroll, { passive: false });
    document.addEventListener('keydown', preventKeyboardScroll);
}

function enablePageScroll() {
    if (!scrollLocked) return;
    
    document.documentElement.style.overflow = '';
    document.body.style.overflow = '';
    document.body.style.position = '';
    document.body.style.top = '';
    document.body.style.width = '';
    window.scrollTo(0, scrollPosition);
    scrollLocked = false;
    
    // Hapus event listener
    window.removeEventListener('scroll', preventScroll);
    document.removeEventListener('wheel', preventScroll);
    document.removeEventListener('touchmove', preventScroll);
    document.removeEventListener('keydown', preventKeyboardScroll);
}


        function showBeritaModal(imgSrc, title, description) {
        const modal = document.getElementById('beritaModal');
        const modalContent = document.getElementById('beritaModalContent');

        document.getElementById('beritaModalImg').src = imgSrc;
        document.getElementById('beritaModalLabel').innerText = title;
        document.getElementById('beritaModalDesc').innerText = description;

        // Tampilkan modal dan mulai animasi
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.classList.add('overflow-hidden');

        // Delay agar animasi dapat berjalan
        setTimeout(() => {
            modalContent.classList.remove('scale-95', 'opacity-0');
            modalContent.classList.add('scale-100', 'opacity-100');
        }, 10); // sedikit delay untuk triggering transition
    }

    function closeBeritaModal() {
        const modal = document.getElementById('beritaModal');
        const modalContent = document.getElementById('beritaModalContent');

        // Animasi keluar
        modalContent.classList.remove('scale-100', 'opacity-100');
        modalContent.classList.add('scale-95', 'opacity-0');

        // Tunggu animasi selesai lalu sembunyikan
        setTimeout(() => {
            modal.classList.remove('flex');
            modal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }, 300); // waktu sesuai `duration-300`
    }

   // Data prestasi dari PHP
    const prestasiData = {!! json_encode($prestasi->toArray()) !!};
    let currentIndex = 0;
    let isLoading = false;

    // Fungsi untuk memuat kartu baru
    async function loadCards(numCards = 3) {
        if (isLoading || !prestasiData.length) return;
        
        isLoading = true;
        const container = document.getElementById('cardSlider');
        
        // Buat document fragment untuk optimasi performa
        const fragment = document.createDocumentFragment();
        
        for (let i = 0; i < numCards; i++) {
            const item = prestasiData[currentIndex % prestasiData.length];
            currentIndex++;
            
            const card = document.createElement('div');
            card.className = 'card-item flex-shrink-0 w-[400px] rounded-xl shadow-xl snap-start mx-2';
            card.innerHTML = `
                <div class="relative aspect-square overflow-hidden rounded-xl">
                    <img src="{{ asset('storage/') }}/${item.picture}" 
                         class="w-full h-full object-cover" 
                         alt="${item.title}" 
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-6">
                        <div class="text-white">
                            <h3 class="text-2xl font-bold mb-3">${item.title}</h3>
                            <p class="text-base">${item.description.substring(0, 150)}</p>
                        </div>
                    </div>
                </div>
            `;
            fragment.appendChild(card);
        }
        
        container.appendChild(fragment);
        isLoading = false;
    }

    // Deteksi scroll horizontal yang dioptimasi
    const cardSlider = document.getElementById('cardSlider');
    let lastScrollTime = 0;

    cardSlider.addEventListener('scroll', () => {
        const now = Date.now();
        
        // Throttle event scroll (max 1x per 200ms)
        if (now - lastScrollTime < 200) return;
        lastScrollTime = now;
        
        const { scrollLeft, scrollWidth, clientWidth } = cardSlider;
        const scrollThreshold = scrollWidth - clientWidth - 300; // Mulai load 300px sebelum akhir
        
        if (scrollLeft >= scrollThreshold) {
            loadCards();
        }
    });

    // Preload beberapa card awal
    window.addEventListener('load', () => {
        loadCards(3);
    });

    // Floating Button Script
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



    function showPrestasiModal(imgSrc, title, description) {
        const modal = document.getElementById('prestasiModal');
        const modalContent = document.getElementById('prestasiModalContent');

        document.getElementById('prestasiModalImg').src = imgSrc;
        document.getElementById('beritaModalLabel').innerText = title;
        document.getElementById('prestasiModalDesc').innerText = description;

        // Tampilkan modal dan mulai animasi
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.classList.add('overflow-hidden');

        // Delay agar animasi dapat berjalan
        setTimeout(() => {
            modalContent.classList.remove('scale-95', 'opacity-0');
            modalContent.classList.add('scale-100', 'opacity-100');
        }, 10); // sedikit delay untuk triggering transition
    }

    function closePrestasiModal() {
        const modal = document.getElementById('prestasiModal');
        const modalContent = document.getElementById('prestasiModalContent');

        // Animasi keluar
        modalContent.classList.remove('scale-100', 'opacity-100');
        modalContent.classList.add('scale-95', 'opacity-0');

        // Tunggu animasi selesai lalu sembunyikan
        setTimeout(() => {
            modal.classList.remove('flex');
            modal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }, 300); // waktu sesuai `duration-300`
    }
    </script>
</body>
</html>