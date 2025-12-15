<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Undangan Walimatul Khitan Eksklusif - Muhammad Wahid Arsyaka">
    <title>Undangan Walimatul Khitan - M. Wahid Arsyaka</title>

    {{-- FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Cinzel+Decorative:wght@400;700;900&family=Outfit:wght@300;400;500;700&display=swap" rel="stylesheet">

    {{-- LIBRARIES --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    {{-- CUSTOM CSS --}}
    <style>
        :root {
            --emerald-dark: #064E3B;
            --emerald-main: #10B981;
            --gold-rich: #B48E43;
            --gold-light: #FDE68A;
            --font-decor: 'Cinzel Decorative', serif;
            --font-script: 'Alex Brush', cursive;
            --font-body: 'Outfit', sans-serif;
        }

        body {
            font-family: var(--font-body);
            background-color: #F0FDF4; /* Latar belakang luar */
            overflow-x: hidden;
        }

        /* Container Limit (Mobile Look on Desktop) */
        .app-container {
            max-width: 550px;
            margin: 0 auto;
            background: #ffffff;
            min-height: 100vh;
            position: relative;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        /* Typography Utilities */
        .font-decor { font-family: var(--font-decor); }
        .font-script { font-family: var(--font-script); }
        .font-royal { font-family: var(--font-decor); }

        /* Text Shimmer Effect */
        .text-shimmer-gold {
            background: linear-gradient(to right, #B48E43 0%, #FDE68A 50%, #B48E43 100%);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textShine 3s linear infinite;
        }
        @keyframes textShine { to { background-position: 200% center; } }

        /* Animations */
        @keyframes spinSlow { 100% { transform: rotate(360deg); } }
        @keyframes spinReverse { 100% { transform: rotate(-360deg); } }
        @keyframes pulseGold { 0% { transform: scale(1); opacity: 0.8; } 100% { transform: scale(1.5); opacity: 0; } }

        /* Glassmorphism */
        .royal-glass {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        /* Music Button */
        .music-control-btn {
            position: fixed; bottom: 25px; right: 25px; z-index: 9999;
            width: 50px; height: 50px; border-radius: 50%;
            background: #fff; border: 2px solid var(--gold-rich);
            color: var(--emerald-dark); display: flex; align-items: center; justify-content: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2); cursor: pointer; transition: all 0.3s ease;
        }
        .music-spin { animation: spinSlow 4s linear infinite; }

        /* Modal Transitions */
        .modal-overlay {
            transition: opacity 0.3s ease, visibility 0.3s ease;
            opacity: 0; visibility: hidden;
        }
        .modal-overlay.active {
            opacity: 1; visibility: visible;
        }
        .modal-content {
            transform: scale(0.9); transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        .modal-overlay.active .modal-content { transform: scale(1); }

        /* Swiper Fix */
        .swiper { width: 100%; height: 100%; }
        .swiper-slide img { width: 100%; height: 100%; object-fit: cover; border-radius: 25px; }
    </style>
</head>
<body>

    {{-- AUDIO SOURCE --}}
    {{-- Pastikan file ada di folder public/music/blue.mp3 --}}
    <audio id="royal-audio" loop>
        <source src="{{ asset('music/blue.mp3') }}" type="audio/mpeg">
    </audio>

    {{-- MUSIC BUTTON (Floating) --}}
    <div id="music-btn" class="music-control-btn hidden" onclick="toggleMusic()">
        <i class="fa-solid fa-compact-disc text-2xl"></i>
    </div>

    {{-- APP CONTAINER (Limits width for responsiveness) --}}
    <div class="app-container">

        {{-- ================= COVER SCREEN (First View) ================= --}}
        <section id="royal-cover" class="fixed inset-0 z-[100] w-full h-full flex flex-col items-center justify-center bg-[#F0FDF4] max-w-[550px] mx-auto">
            {{-- Background Pattern Cover --}}
            <div class="absolute inset-0 opacity-10" style="background-image: url('https://www.transparenttextures.com/patterns/arabesque.png');"></div>

            <div class="relative z-10 w-full px-6 text-center" data-aos="zoom-in">
                {{-- Ornamen Atas --}}
                <div class="mb-6 flex justify-center opacity-80">
                   <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/Basmala.svg" class="h-16 filter brightness-0 sepia(1) hue-rotate(50deg) saturate(3)">
                </div>

                <h3 class="font-body uppercase tracking-[0.3em] text-[#064E3B] text-xs font-bold mb-4 animate-pulse">
                    Undangan Walimatul Khitan
                </h3>

                {{-- Nama Mempelai Besar --}}
                <h1 class="font-script text-5xl sm:text-6xl text-shimmer-gold mb-8 leading-tight drop-shadow-md p-2">
                    Muhammad Wahid <br> Arsyaka
                </h1>

                {{-- Foto Lingkaran --}}
                <div class="relative w-48 h-48 mx-auto mb-10">
                    <div class="absolute inset-[-10px] border-2 border-dashed border-[#B48E43] rounded-full animate-[spinSlow_20s_linear_infinite]"></div>
                    <div class="w-full h-full rounded-full overflow-hidden border-4 border-white shadow-xl">
                        {{-- Ganti src ini dengan foto anak --}}
                        <img src="{{ asset('/foto.png') }}" onerror="this.src='https://images.unsplash.com/photo-1601928045610-854992569c73?q=80&w=800'" class="w-full h-full object-cover">
                    </div>
                </div>

                {{-- Nama Tamu --}}
                <div class="bg-white/60 backdrop-blur-sm rounded-xl p-4 mb-8 border border-[#B48E43]/30 shadow-sm mx-4">
                    <p class="text-xs text-[#064E3B] mb-2 uppercase tracking-wide">Kepada Yth. Bapak/Ibu/Saudara/i:</p>
                    <h2 class="text-xl font-bold text-gray-800">{{ $guest->name ?? 'Tamu Undangan' }}</h2>
                </div>

                {{-- Tombol Buka --}}
                <button onclick="openInvitation()" class="group relative px-8 py-3 rounded-full bg-gradient-to-r from-[#064E3B] to-[#047857] text-white font-bold shadow-lg flex items-center justify-center gap-3 mx-auto transition transform hover:scale-105">
                    <i class="fa-solid fa-envelope-open text-lg group-hover:animate-bounce"></i>
                    Buka Undangan
                </button>
            </div>
        </section>

        {{-- ================= MAIN CONTENT (Hidden Initially) ================= --}}
        <main id="royal-content" class="hidden w-full pb-10 relative bg-gradient-to-b from-[#F0FDF4] via-white to-[#F0FDF4]">

            {{-- HEADER SECTION --}}
            <section class="relative pt-20 pb-16 px-6 text-center bg-white rounded-b-[60px] shadow-xl z-20 overflow-hidden border-b-4 border-[#B48E43]/20">
                {{-- Ornamen Gantung --}}
                <div class="absolute top-0 left-8 animate-[swing_3s_ease-in-out_infinite] origin-top"><div class="w-[1px] h-20 bg-[#B48E43]"></div><div class="w-4 h-6 bg-[#FEF3C7] border border-[#B48E43] rounded-b-md"></div></div>
                <div class="absolute top-0 right-8 animate-[swing_4s_ease-in-out_infinite] origin-top"><div class="w-[1px] h-28 bg-[#B48E43]"></div><div class="w-5 h-8 bg-[#FEF3C7] border border-[#B48E43] rounded-b-md"></div></div>

                <h2 class="font-decor text-3xl sm:text-4xl font-bold text-[#064E3B] mb-4 leading-snug" data-aos="fade-down">
                    Assalamu’alaikum <br> <span class="font-body text-xl text-[#B48E43]">Wr. Wb.</span>
                </h2>

                <p class="text-gray-600 text-sm leading-relaxed mb-8 px-4" data-aos="fade-up">
                    Dengan memohon Rahmat dan Ridho Allah SWT, kami bermaksud menyelenggarakan syukuran Walimatul Khitan putra kami:
                </p>

                {{-- Foto Profile Main --}}
                <div class="relative w-40 h-40 mx-auto mb-6" data-aos="zoom-in">
                    <div class="absolute inset-0 bg-[#064E3B] rounded-full opacity-10 blur-lg"></div>
                    <img src="{{ asset('/foto.png') }}" onerror="this.src='https://images.unsplash.com/photo-1601928045610-854992569c73?q=80&w=800'" class="w-full h-full object-cover rounded-full border-4 border-white shadow-lg relative z-10">
                </div>

                <h3 class="font-bold text-2xl text-gray-800 mb-1" data-aos="fade-up">M. Wahid Arsyaka</h3>
                <p class="text-[#064E3B] text-xs font-bold uppercase tracking-widest mb-6">Putra Tercinta</p>

                <div class="bg-[#F0FDF4] p-4 rounded-2xl mx-4 border border-[#B48E43]/20" data-aos="fade-up">
                    <p class="text-sm text-gray-600">Cucu dari:</p>
                    <p class="font-bold text-[#064E3B] text-lg">Bpk. Suwito Haryoko & Ibu Ndari</p>
                </div>
            </section>

            {{-- ACARA SECTION --}}
            <section class="py-16 px-6 relative z-10">
                <div class="text-center mb-10" data-aos="fade-down">
                    <h2 class="font-decor text-4xl text-[#064E3B] mb-2">Rangkaian Acara</h2>
                    <div class="h-1 w-20 bg-[#B48E43] mx-auto rounded-full"></div>
                </div>

                <div class="space-y-6">
                    {{-- Card Waktu --}}
                    <div class="bg-white p-6 rounded-[30px] shadow-lg border-l-4 border-[#064E3B] flex items-center gap-4" data-aos="fade-right">
                        <div class="bg-[#D1FAE5] w-14 h-14 rounded-2xl flex items-center justify-center text-[#064E3B] text-2xl shrink-0"><i class="fa-solid fa-calendar-day"></i></div>
                        <div>
                            <h4 class="font-bold text-[#064E3B]">Hari & Tanggal</h4>
                            <p class="text-gray-700">Jum'at, 02 Januari 2026</p>
                        </div>
                    </div>

                    {{-- Card Jam --}}
                    <div class="bg-white p-6 rounded-[30px] shadow-lg border-l-4 border-[#B48E43] flex items-center gap-4" data-aos="fade-left">
                        <div class="bg-[#FEF3C7] w-14 h-14 rounded-2xl flex items-center justify-center text-[#B48E43] text-2xl shrink-0"><i class="fa-solid fa-clock"></i></div>
                        <div>
                            <h4 class="font-bold text-[#064E3B]">Pukul</h4>
                            <p class="text-gray-700">08.00 WIB s.d Selesai</p>
                        </div>
                    </div>

                    {{-- Card Lokasi --}}
                    <div class="bg-gradient-to-br from-[#064E3B] to-[#047857] p-6 rounded-[30px] shadow-lg text-white text-center" data-aos="zoom-in">
                        <i class="fa-solid fa-map-location-dot text-3xl mb-3 text-[#FDE68A]"></i>
                        <h4 class="font-bold text-xl mb-2 text-[#FDE68A]">Lokasi Acara</h4>
                        <p class="text-sm opacity-90 mb-4 leading-relaxed">
                            Kediaman Bpk. Suwito <br>
                            Dusun Suka Indah, Desa Suka Makmur RT 003 RW 004, Kec. Giri Mulya, Bengkulu Utara
                        </p>
                        <a href="https://maps.google.com" target="_blank" class="inline-block bg-[#FDE68A] text-[#064E3B] px-6 py-2 rounded-full font-bold text-sm hover:bg-white transition">Buka Google Maps</a>
                    </div>
                </div>
            </section>

            {{-- COUNTDOWN --}}
            <section class="py-10 px-4">
                <div class="bg-[#064E3B] rounded-[40px] p-8 text-center text-white relative overflow-hidden shadow-2xl" data-aos="flip-up">
                    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/arabesque.png')]"></div>
                    <h2 class="font-decor text-2xl text-[#FDE68A] mb-6 relative z-10">Menuju Hari Bahagia</h2>
                    <div class="flex justify-center gap-2 sm:gap-4 relative z-10">
                        <div class="bg-white/10 p-3 rounded-xl w-16"><span id="days" class="text-2xl font-bold block">00</span><span class="text-[10px]">HARI</span></div>
                        <div class="bg-white/10 p-3 rounded-xl w-16"><span id="hours" class="text-2xl font-bold block">00</span><span class="text-[10px]">JAM</span></div>
                        <div class="bg-white/10 p-3 rounded-xl w-16"><span id="minutes" class="text-2xl font-bold block">00</span><span class="text-[10px]">MENIT</span></div>
                        <div class="bg-white/10 p-3 rounded-xl w-16"><span id="seconds" class="text-2xl font-bold block">00</span><span class="text-[10px]">DETIK</span></div>
                    </div>
                </div>
            </section>

            {{-- GALERI (3 FOTO REQUEST) --}}
            <section class="py-16 px-6 bg-[#F9FAFB]">
                <h2 class="font-decor text-3xl text-[#064E3B] text-center mb-8" data-aos="fade-up">Galeri Kenangan</h2>

                {{-- Swiper Container --}}
                <div class="p-2 bg-white rounded-[35px] shadow-xl border border-gray-100" data-aos="zoom-in">
                    <div class="swiper mySwiper rounded-[30px] overflow-hidden aspect-[4/5] sm:aspect-square">
                        <div class="swiper-wrapper">
                            {{-- FOTO 1 --}}
                            <div class="swiper-slide">
                                <img src="https://images.unsplash.com/photo-1545622081-30919315d862?q=80&w=800" alt="Foto 1">
                            </div>
                            {{-- FOTO 2 --}}
                            <div class="swiper-slide">
                                <img src="https://images.unsplash.com/photo-1511285560982-1351cdeb9821?q=80&w=800" alt="Foto 2">
                            </div>
                            {{-- FOTO 3 --}}
                            <div class="swiper-slide">
                                <img src="https://images.unsplash.com/photo-1515934751635-c81c6bc9a2d8?q=80&w=800" alt="Foto 3">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>

            {{-- GIFT & RSVP --}}
            <section class="py-16 px-6 space-y-6">
                <h2 class="text-center font-decor text-3xl text-[#064E3B] mb-4">Tanda Kasih</h2>

                <div class="bg-white p-6 rounded-[30px] shadow-lg text-center border-t-4 border-[#B48E43]" data-aos="fade-up">
                    <i class="fa-solid fa-gift text-4xl text-[#B48E43] mb-4"></i>
                    <p class="text-sm text-gray-600 mb-6">Tanpa mengurangi rasa hormat, bagi Bapak/Ibu yang ingin memberikan tanda kasih, dapat melalui:</p>
                    <button onclick="toggleModal('gift-modal', true)" class="w-full py-3 bg-[#B48E43] text-white rounded-full font-bold shadow-md hover:bg-[#92400E] transition">
                        <i class="fa-solid fa-envelope-open-text mr-2"></i> Amplop Digital
                    </button>
                </div>

                <div class="bg-white p-6 rounded-[30px] shadow-lg text-center border-t-4 border-[#064E3B]" data-aos="fade-up" data-aos-delay="100">
                    <i class="fa-solid fa-clipboard-check text-4xl text-[#064E3B] mb-4"></i>
                    <p class="text-sm text-gray-600 mb-6">Mohon konfirmasi kehadiran Bapak/Ibu untuk memudahkan kami mempersiapkan acara.</p>
                    <button onclick="toggleModal('rsvp-modal', true)" class="w-full py-3 bg-[#064E3B] text-white rounded-full font-bold shadow-md hover:bg-[#047857] transition">
                        <i class="fa-solid fa-check-circle mr-2"></i> Konfirmasi Kehadiran
                    </button>
                </div>
            </section>

            {{-- FOOTER --}}
            <footer class="bg-[#022c22] text-white text-center py-10 px-6 rounded-t-[50px] mt-10">
                <h2 class="font-script text-3xl text-[#FDE68A] mb-4">M. Wahid Arsyaka</h2>
                <p class="text-xs opacity-60 mb-8">Terima kasih atas doa dan kehadiran Bapak/Ibu/Saudara/i.</p>
                <div class="text-[10px] opacity-40">Created with <i class="fa-solid fa-heart text-red-500"></i> by Om DimasAnwar</div>
            </footer>

        </main>
    </div>

    {{-- ================= MODALS ================= --}}

    {{-- GIFT MODAL --}}
    <div id="gift-modal" class="modal-overlay fixed inset-0 z-[1000] flex items-center justify-center p-4 bg-black/70 backdrop-blur-sm">
        <div class="modal-content bg-white w-full max-w-sm rounded-[30px] p-6 relative">
            <button onclick="toggleModal('gift-modal', false)" class="absolute top-4 right-4 text-gray-400 hover:text-red-500"><i class="fa-solid fa-xmark text-2xl"></i></button>
            <h3 class="font-bold text-xl text-[#B48E43] text-center mb-6">Amplop Digital</h3>

            <div class="space-y-4">
                <div class="border rounded-xl p-4 flex justify-between items-center bg-gray-50">
                    <div>
                        <span class="font-bold text-[#00529C]">BCA</span>
                        <p class="font-mono text-lg font-bold text-gray-800">1234567890</p>
                        <p class="text-xs text-gray-500">a.n Bpk. Suwito</p>
                    </div>
                    <button onclick="copyText('1234567890')" class="text-gray-400 hover:text-[#00529C]"><i class="fa-regular fa-copy text-xl"></i></button>
                </div>
                <div class="border rounded-xl p-4 flex justify-between items-center bg-gray-50">
                    <div>
                        <span class="font-bold text-[#10B981]">GOPAY</span>
                        <p class="font-mono text-lg font-bold text-gray-800">08123456789</p>
                        <p class="text-xs text-gray-500">a.n Ibu Ndari</p>
                    </div>
                    <button onclick="copyText('08123456789')" class="text-gray-400 hover:text-[#10B981]"><i class="fa-regular fa-copy text-xl"></i></button>
                </div>
            </div>
        </div>
    </div>

    {{-- RSVP MODAL --}}
    <div id="rsvp-modal" class="modal-overlay fixed inset-0 z-[1000] flex items-center justify-center p-4 bg-black/70 backdrop-blur-sm">
        <div class="modal-content bg-white w-full max-w-sm rounded-[30px] p-6 relative">
            <button onclick="toggleModal('rsvp-modal', false)" class="absolute top-4 right-4 text-gray-400 hover:text-red-500"><i class="fa-solid fa-xmark text-2xl"></i></button>
            <h3 class="font-bold text-xl text-[#064E3B] text-center mb-6">Konfirmasi Kehadiran</h3>

            <form action="{{ route('invitation.rsvp') }}" method="POST" class="space-y-4">
                @csrf
                <input type="text" name="name_rsvp" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#064E3B]" placeholder="Nama Lengkap" required>
                <select name="status_rsvp" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#064E3B]">
                    <option value="hadir">Hadir</option>
                    <option value="tidak_hadir">Tidak Hadir</option>
                </select>
                <input type="number" name="attendance_count" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-none focus:border-[#064E3B]" placeholder="Jumlah Tamu (ex: 2)" min="1" max="5">
                <button type="submit" class="w-full bg-[#064E3B] text-white font-bold py-3 rounded-xl hover:bg-[#047857] transition">Kirim Konfirmasi</button>
            </form>
        </div>
    </div>

    {{-- JAVASCRIPT --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // 1. INIT LIBRARIES
        AOS.init({ duration: 1000, once: false, mirror: true });

        // 2. SWIPER GALERI (3 Foto)
        new Swiper(".mySwiper", {
            effect: "cards",
            grabCursor: true,
            loop: true, // Agar bisa swipe muter terus
            autoplay: { delay: 3000, disableOnInteraction: false },
            pagination: { el: ".swiper-pagination", dynamicBullets: true },
        });

        // 3. OPEN INVITATION & MUSIC LOGIC
        const cover = document.getElementById('royal-cover');
        const content = document.getElementById('royal-content');
        const audio = document.getElementById('royal-audio');
        const musicBtn = document.getElementById('music-btn');
        let isPlaying = false;

        function openInvitation() {
            // Scroll ke atas
            window.scrollTo(0, 0);

            // Animasi Buka
            cover.style.transition = "transform 1.2s ease-in-out, opacity 1.2s";
            cover.style.transform = "translateY(-100%)";
            cover.style.opacity = "0";

            // Tampilkan Konten
            content.classList.remove('hidden');

            // Mainkan Musik
            audio.play().then(() => {
                isPlaying = true;
                musicBtn.classList.remove('hidden');
                musicBtn.classList.add('music-spin');
            }).catch(e => console.log("Autoplay blocked"));

            // Hapus Cover dari DOM agar ringan
            setTimeout(() => { cover.style.display = 'none'; AOS.refresh(); }, 1200);
        }

        function toggleMusic() {
            if (isPlaying) {
                audio.pause();
                musicBtn.classList.remove('music-spin');
            } else {
                audio.play();
                musicBtn.classList.add('music-spin');
            }
            isPlaying = !isPlaying;
        }

        // 4. MODAL & UTILS
        function toggleModal(id, show) {
            const el = document.getElementById(id);
            if(show) el.classList.add('active');
            else el.classList.remove('active');
        }

        function copyText(text) {
            navigator.clipboard.writeText(text);
            alert('Nomor berhasil disalin!');
        }

        // 5. COUNTDOWN
        const targetDate = new Date("Jan 02, 2026 08:00:00").getTime();
        setInterval(() => {
            const now = new Date().getTime();
            const diff = targetDate - now;
            if (diff > 0) {
                document.getElementById("days").innerText = Math.floor(diff / (1000 * 60 * 60 * 24));
                document.getElementById("hours").innerText = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                document.getElementById("minutes").innerText = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                document.getElementById("seconds").innerText = Math.floor((diff % (1000 * 60)) / 1000);
            }
        }, 1000);
    </script>
</body>
</html>
