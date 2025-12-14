{{-- ROYAL COVER SCREEN SECTION --}}
{{-- Menggunakan z-index 100 agar selalu di atas konten utama --}}
<section id="royal-cover" class="fixed inset-0 z-[100] w-full h-full flex flex-col items-center justify-center overflow-hidden bg-[#F0FDF4]">

    {{-- STYLE KHUSUS COVER (Scoped) --}}
    <style>
        /* Background Khusus Cover: Gradien Emerald + Pattern */
        #royal-cover::before {
            content: ''; position: absolute; inset: 0; z-index: -2;
            background: radial-gradient(circle at center, var(--bg-base) 0%, #d1fae5 100%);
        }
        /* Ornamen Mandala Berputar di Latar Belakang */
        .cover-mandala {
            position: absolute; top: 50%; left: 50%;
            width: 150vw; height: 150vw; /* Sangat besar agar memenuhi layar */
            transform: translate(-50%, -50%); z-index: -1;
            opacity: 0.05; /* Sangat halus */
            animation: mandalaSpin 60s linear infinite;
            /* Menggunakan background image SVG data URI untuk performa */
            background-image: url("data:image/svg+xml,%3Csvg width='200' height='200' viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23047857' stroke-width='1'%3E%3Cpath d='M100 0v200M0 100h200'/%3E%3Ccircle cx='100' cy='100' r='90'/%3E%3Ccircle cx='100' cy='100' r='70'/%3E%3Cpath d='M100 10l30 30-30 30-30-30z'/%3E%3Cpath d='M100 190l30-30-30-30-30 30z'/%3E%3Cpath d='M10 100l30 30 30-30-30-30z'/%3E%3Cpath d='M190 100l-30 30-30-30 30-30z'/%3E%3C/g%3E%3C/svg%3E");
        }
        @keyframes mandalaSpin { 100% { transform: translate(-50%, -50%) rotate(360deg); } }

        /* Bingkai Foto yang Kompleks dengan 3 Lapisan Animasi */
        .photo-frame-complex {
            position: relative; width: 180px; height: 180px; margin: 0 auto 2rem;
            display: flex; align-items: center; justify-content: center;
        }
        /* Lapisan 1: Cincin Emas Berputar Lambat */
        .photo-frame-complex::before {
            content: ''; position: absolute; inset: -10px; border-radius: 50%;
            border: 2px dashed var(--gold-rich); opacity: 0.6;
            animation: spinSlow 20s linear infinite;
        }
        /* Lapisan 2: Cincin Emerald Berputar Cepat Berlawanan */
        .photo-frame-complex::after {
            content: ''; position: absolute; inset: -5px; border-radius: 50%;
            border: 2px dotted var(--emerald-main); opacity: 0.8;
            animation: spinFastReverse 10s linear infinite;
        }
        /* Lapisan 3: Wadah Foto Utama dengan Shadow */
        .photo-container-inner {
            width: 100%; height: 100%; rounded-full overflow-hidden;
            border: 4px solid var(--bg-base); /* Border putih pemisah */
            box-shadow: 0 10px 30px rgba(4, 120, 87, 0.4);
            position: relative; z-index: 2;
        }
        @keyframes spinSlow { 100% { transform: rotate(360deg); } }
        @keyframes spinFastReverse { 100% { transform: rotate(-360deg); } }

        /* Tombol Buka dengan Efek Shimmer Mengalir */
        .btn-open-shimmer {
            position: relative; overflow: hidden;
            background: linear-gradient(135deg, var(--emerald-dark), var(--emerald-main));
            transition: all 0.5s ease;
        }
        .btn-open-shimmer::after {
            content: ''; position: absolute; top: -50%; left: -50%;
            width: 200%; height: 200%;
            background: linear-gradient(to right, transparent, rgba(255,255,255,0.4), transparent);
            transform: rotate(45deg);
            animation: shimmerFlow 3s infinite cubic-bezier(0.4, 0, 0.2, 1);
        }
        @keyframes shimmerFlow {
            0% { transform: translateX(-100%) rotate(45deg); }
            100% { transform: translateX(100%) rotate(45deg); }
        }
        .btn-open-shimmer:hover { transform: translateY(-5px) scale(1.05); box-shadow: 0 15px 30px rgba(4, 120, 87, 0.5); }
    </style>

    {{-- Background Ornaments --}}
    <div class="cover-mandala"></div>

    {{-- MAIN CARD CONTAINER (Glassmorphism + Border Shimmer) --}}
    {{-- Menggunakan AOS zoom-in untuk efek muncul yang dramatis --}}
    <div class="relative z-10 p-[3px] rounded-[50px] w-[90%] max-w-md mx-auto" data-aos="zoom-in" data-aos-duration="1500">
        {{-- Lapisan Border Shimmer Emas --}}
        <div class="absolute inset-0 bg-gradient-to-br from-yellow-200 via-yellow-500 to-yellow-200 rounded-[50px] animate-spin-slow opacity-70" style="z-index: -1; filter: blur(2px);"></div>

        {{-- Konten Kartu --}}
        <div class="royal-glass rounded-[48px] p-10 text-center backdrop-blur-xl">

            {{-- Ornamen Kaligrafi Atas --}}
            {{-- Menggunakan SVG inline agar tajam dan bisa diwarnai --}}
            <svg class="w-24 h-auto mx-auto mb-6 drop-shadow-sm" viewBox="0 0 276 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M138 0C145.167 11.6667 161.5 36.5 173 43.5C184.5 50.5 215.5 51.5 225 55C215 58.5 184 60 173 66.5C162 73 145.167 97.8333 138 109.5C130.833 97.8333 114 73 103 66.5C92 60 61 58.5 51 55C60.5 51.5 91.5 50.5 103 43.5C114.5 36.5 130.833 11.6667 138 0Z" fill="#B48E43"/>
                <path d="M138 123C130.833 111.333 114.5 86.5 103 79.5C91.5 72.5 60.5 71.5 51 68C61 64.5 92 63 103 56.5C114 50 130.833 25.1667 138 13.5C145.167 25.1667 162 50 173 56.5C184 63 215 64.5 225 68C215.5 71.5 184.5 72.5 173 79.5C161.5 86.5 145.167 111.333 138 123Z" stroke="#047857" stroke-width="2"/>
            </svg>

            {{-- Judul Acara --}}
            <h3 class="font-body uppercase tracking-[0.4em] text-emerald-800 text-xs font-bold mb-4 animate-pulse">
                Undangan Walimatul Khitan
            </h3>

            {{-- Nama Mempelai (Script Mewah + Efek Shimmer) --}}
            <h1 class="font-script text-6xl sm:text-5xl text-shimmer-gold mb-6 leading-tight drop-shadow-md" data-aos="fade-up" data-aos-delay="300">
                Muhammad Wahid Arsyaka
            </h1>

            {{-- Garis Pemisah Dekoratif --}}
            <div class="flex items-center justify-center gap-3 mb-8 opacity-80" data-aos="zoom-in" data-aos-delay="500">
                <div class="h-[2px] w-16 bg-gradient-to-r from-transparent to-emerald-600"></div>
                <i class="fa-solid fa-star-of-life text-gold-rich text-sm fa-spin-slow" style="animation-duration: 10s;"></i>
                <div class="h-[2px] w-16 bg-gradient-to-l from-transparent to-emerald-600"></div>
            </div>

            {{-- Bingkai Foto Kompleks --}}
            <div class="photo-frame-complex" data-aos="zoom-in" data-aos-delay="700">
                <div class="photo-container-inner group overflow-hidden rounded-full">
                    {{-- Placeholder Unsplash (Ganti dengan asset('image/foto.png') nanti) --}}
                    <img src="/foto.png"
                         class="w-full h-full object-cover transition duration-1000 group-hover:scale-110 filter brightness-105"
                         alt="Mempelai Khitan">
                </div>
            </div>

            {{-- Box Nama Tamu (Dynamic) --}}
            <div class="bg-emerald-50/80 rounded-2xl p-5 mb-10 border-2 border-emerald-100/50 backdrop-blur-sm shadow-inner" data-aos="fade-up" data-aos-delay="900">
                <p class="text-xs font-body text-emerald-600 mb-2 tracking-wider uppercase">Kepada Yth. Bapak/Ibu/Saudara/i:</p>
                {{-- Menggunakan text-shimmer untuk nama tamu agar terasa spesial --}}
                <h2 class="text-2xl font-body font-bold text-shimmer-gold">
                    {{ $guest->name ?? 'Tamu Kehormatan' }}
                </h2>
                <p class="text-[10px] text-gray-500 mt-2 italic">*Mohon maaf bila ada kesalahan penulisan nama</p>
            </div>

            {{-- Tombol Buka (Aksi Utama) --}}
            <button onclick="openRoyalInvitation()"
                    class="btn-open-shimmer group relative w-full py-4 rounded-full text-white font-body font-bold text-lg shadow-xl flex items-center justify-center gap-3 overflow-hidden z-10"
                    data-aos="fade-up" data-aos-delay="1100" data-aos-offset="-100">
                <i class="fa-solid fa-envelope-open-text text-xl group-hover:rotate-12 transition-transform"></i>
                <span>Buka Undangan</span>
            </button>

        </div>
    </div>
</section>
