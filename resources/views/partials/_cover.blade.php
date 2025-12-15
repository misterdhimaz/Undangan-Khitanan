{{-- ROYAL COVER SCREEN SECTION --}}
<section id="royal-cover" class="fixed inset-0 z-[100] w-full h-[100dvh] flex flex-col items-center justify-center overflow-hidden bg-[#F0FDF4]">

    {{-- STYLE KHUSUS COVER (Scoped) --}}
    <style>
        /* Background Khusus Cover */
        #royal-cover::before {
            content: ''; position: absolute; inset: 0; z-index: -2;
            background: radial-gradient(circle at center, var(--bg-base) 0%, #d1fae5 100%);
        }

        /* Ornamen Mandala */
        .cover-mandala {
            position: absolute; top: 50%; left: 50%;
            width: 150vmax; height: 150vmax; /* Pakai vmax agar cover area landscape/portrait */
            transform: translate(-50%, -50%); z-index: -1;
            opacity: 0.05;
            animation: mandalaSpin 60s linear infinite;
            background-image: url("data:image/svg+xml,%3Csvg width='200' height='200' viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23047857' stroke-width='1'%3E%3Cpath d='M100 0v200M0 100h200'/%3E%3Ccircle cx='100' cy='100' r='90'/%3E%3Ccircle cx='100' cy='100' r='70'/%3E%3Cpath d='M100 10l30 30-30 30-30-30z'/%3E%3Cpath d='M100 190l30-30-30-30-30 30z'/%3E%3Cpath d='M10 100l30 30 30-30-30-30z'/%3E%3Cpath d='M190 100l-30 30-30-30 30-30z'/%3E%3C/g%3E%3C/svg%3E");
        }
        @keyframes mandalaSpin { 100% { transform: translate(-50%, -50%) rotate(360deg); } }

        /* Bingkai Foto Complex (CSS Width dihapus, dipindah ke Tailwind) */
        .photo-frame-complex {
            position: relative;
            margin: 0 auto 1.5rem; /* Margin responsive diatur di tailwind */
            display: flex; align-items: center; justify-content: center;
        }
        .photo-frame-complex::before {
            content: ''; position: absolute; inset: -8px; border-radius: 50%;
            border: 2px dashed var(--gold-rich); opacity: 0.6;
            animation: spinSlow 20s linear infinite;
        }
        .photo-frame-complex::after {
            content: ''; position: absolute; inset: -4px; border-radius: 50%;
            border: 2px dotted var(--emerald-main); opacity: 0.8;
            animation: spinFastReverse 10s linear infinite;
        }
        .photo-container-inner {
            width: 100%; height: 100%; border-radius: 50%; overflow: hidden;
            border: 4px solid var(--bg-base);
            box-shadow: 0 10px 30px rgba(4, 120, 87, 0.4);
            position: relative; z-index: 2;
        }
        @keyframes spinSlow { 100% { transform: rotate(360deg); } }
        @keyframes spinFastReverse { 100% { transform: rotate(-360deg); } }

        /* Button Shimmer */
        .btn-open-shimmer {
            position: relative; overflow: hidden;
            background: linear-gradient(135deg, var(--emerald-dark), var(--emerald-main));
            transition: all 0.5s ease;
        }
        .btn-open-shimmer::after {
            content: ''; position: absolute; top: -50%; left: -50%; width: 200%; height: 200%;
            background: linear-gradient(to right, transparent, rgba(255,255,255,0.4), transparent);
            transform: rotate(45deg);
            animation: shimmerFlow 3s infinite cubic-bezier(0.4, 0, 0.2, 1);
        }
        @keyframes shimmerFlow {
            0% { transform: translateX(-100%) rotate(45deg); }
            100% { transform: translateX(100%) rotate(45deg); }
        }
        .btn-open-shimmer:hover { transform: translateY(-5px) scale(1.05); }
    </style>

    {{-- Background Ornaments --}}
    <div class="cover-mandala"></div>

    {{-- MAIN CARD CONTAINER --}}
    {{-- Responsive adjustments: Width 90%, max-width sm/md, padding responsive --}}
    <div class="relative z-10 p-[2px] sm:p-[3px] rounded-[40px] sm:rounded-[50px] w-[90%] max-w-[340px] sm:max-w-md mx-auto my-auto"
         data-aos="zoom-in" data-aos-duration="1500">

        {{-- Border Shimmer --}}
        <div class="absolute inset-0 bg-gradient-to-br from-yellow-200 via-yellow-500 to-yellow-200 rounded-[40px] sm:rounded-[50px] animate-spin-slow opacity-70" style="z-index: -1; filter: blur(2px);"></div>

        {{-- Konten Kartu --}}
        <div class="royal-glass rounded-[38px] sm:rounded-[48px] p-6 sm:p-10 text-center backdrop-blur-xl flex flex-col justify-center h-full">

            {{-- Ornamen Kaligrafi --}}
            <svg class="w-16 sm:w-24 h-auto mx-auto mb-4 sm:mb-6 drop-shadow-sm" viewBox="0 0 276 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M138 0C145.167 11.6667 161.5 36.5 173 43.5C184.5 50.5 215.5 51.5 225 55C215 58.5 184 60 173 66.5C162 73 145.167 97.8333 138 109.5C130.833 97.8333 114 73 103 66.5C92 60 61 58.5 51 55C60.5 51.5 91.5 50.5 103 43.5C114.5 36.5 130.833 11.6667 138 0Z" fill="#B48E43"/>
                <path d="M138 123C130.833 111.333 114.5 86.5 103 79.5C91.5 72.5 60.5 71.5 51 68C61 64.5 92 63 103 56.5C114 50 130.833 25.1667 138 13.5C145.167 25.1667 162 50 173 56.5C184 63 215 64.5 225 68C215.5 71.5 184.5 72.5 173 79.5C161.5 86.5 145.167 111.333 138 123Z" stroke="#047857" stroke-width="2"/>
            </svg>

            {{-- Judul Acara --}}
            <h3 class="font-body uppercase tracking-[0.2em] sm:tracking-[0.4em] text-emerald-800 text-[10px] sm:text-xs font-bold mb-3 sm:mb-4 animate-pulse">
                Undangan Walimatul Khitan
            </h3>

            {{-- Nama Mempelai --}}
            <h1 class="font-script text-4xl sm:text-6xl text-shimmer-gold mb-4 sm:mb-6 leading-tight drop-shadow-md" data-aos="fade-up" data-aos-delay="300">
                Muhammad Wahid Arsyaka
            </h1>

            {{-- Garis Pemisah --}}
            <div class="flex items-center justify-center gap-3 mb-6 sm:mb-8 opacity-80" data-aos="zoom-in" data-aos-delay="500">
                <div class="h-[1px] sm:h-[2px] w-10 sm:w-16 bg-gradient-to-r from-transparent to-emerald-600"></div>
                <i class="fa-solid fa-star-of-life text-gold-rich text-[10px] sm:text-sm fa-spin-slow" style="animation-duration: 10s;"></i>
                <div class="h-[1px] sm:h-[2px] w-10 sm:w-16 bg-gradient-to-l from-transparent to-emerald-600"></div>
            </div>

            {{-- Bingkai Foto Responsive --}}
            {{-- W-32 (HP) -> W-44 (Laptop) --}}
            <div class="photo-frame-complex w-32 h-32 sm:w-44 sm:h-44 mb-6 sm:mb-8" data-aos="zoom-in" data-aos-delay="700">
                <div class="photo-container-inner group overflow-hidden rounded-full">
                    <img src="{{ asset('/foto.png') }}"
                         class="w-full h-full object-cover transition duration-1000 group-hover:scale-110 filter brightness-105"
                         alt="Mempelai Khitan"
                         onerror="this.src='https://via.placeholder.com/300'">
                </div>
            </div>

            {{-- Box Nama Tamu --}}
            <div class="bg-emerald-50/80 rounded-xl sm:rounded-2xl p-3 sm:p-5 mb-6 sm:mb-10 border-2 border-emerald-100/50 backdrop-blur-sm shadow-inner" data-aos="fade-up" data-aos-delay="900">
                <p class="text-[10px] sm:text-xs font-body text-emerald-600 mb-1 sm:mb-2 tracking-wider uppercase">Kepada Yth. Bapak/Ibu/Saudara/i:</p>
                <h2 class="text-xl sm:text-2xl font-body font-bold text-shimmer-gold line-clamp-2">
                    {{ $guest->name ?? 'Tamu Kehormatan' }}
                </h2>
            </div>

            {{-- Tombol Buka --}}
            <button onclick="openRoyalInvitation()"
                    class="btn-open-shimmer group relative w-full py-3 sm:py-4 rounded-full text-white font-body font-bold text-base sm:text-lg shadow-xl flex items-center justify-center gap-2 sm:gap-3 overflow-hidden z-10 cursor-pointer"
                    data-aos="fade-up" data-aos-delay="1100" data-aos-offset="-50">
                <i class="fa-solid fa-envelope-open-text text-lg sm:text-xl group-hover:rotate-12 transition-transform"></i>
                <span>Buka Undangan</span>
            </button>

        </div>
    </div>
</section>
