{{-- ROYAL COVER SCREEN SECTION --}}
<section id="royal-cover" class="fixed inset-0 z-[100] w-full h-[100dvh] flex flex-col items-center justify-center overflow-hidden bg-[#F0FDF4]">

    {{-- STYLE KHUSUS COVER --}}
    <style>
        #royal-cover::before {
            content: ''; position: absolute; inset: 0; z-index: -2;
            background: radial-gradient(circle at center, var(--bg-base) 0%, #d1fae5 100%);
        }

        /* Animasi Berputar Pelan untuk Bingkai */
        @keyframes spinSlow { 100% { transform: rotate(360deg); } }
        @keyframes spinReverse { 100% { transform: rotate(-360deg); } }

        .photo-frame-mobile {
            position: relative;
            margin: 0 auto 1rem; /* Jarak bawah lebih kecil */
            display: flex; align-items: center; justify-content: center;
        }
        .photo-frame-mobile::before {
            content: ''; position: absolute; inset: -5px; border-radius: 50%;
            border: 1px dashed var(--gold-rich); opacity: 0.6;
            animation: spinSlow 20s linear infinite;
        }
        .photo-frame-mobile::after {
            content: ''; position: absolute; inset: -3px; border-radius: 50%;
            border: 1px dotted var(--emerald-main); opacity: 0.8;
            animation: spinReverse 15s linear infinite;
        }

        /* Button Shimmer */
        .btn-shimmer {
            background: linear-gradient(135deg, var(--emerald-dark), var(--emerald-main));
            position: relative; overflow: hidden;
        }
        .btn-shimmer::after {
            content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%;
            background: linear-gradient(to right, transparent, rgba(255,255,255,0.3), transparent);
            animation: shine 3s infinite;
        }
        @keyframes shine { 100% { left: 100%; } }
    </style>

    {{-- KARTU UTAMA (Dibuat Flex agar konten menyebar rapi) --}}
    {{-- Lebar 90%, Max lebar 400px, Tinggi Maksimal 90% layar agar tidak kepotong --}}
    <div class="relative z-10 w-[90%] max-w-[400px] max-h-[90dvh] mx-auto p-[2px] rounded-[30px] sm:rounded-[40px] flex flex-col justify-center"
         data-aos="zoom-in" data-aos-duration="1000">

        {{-- Border Gradient --}}
        <div class="absolute inset-0 bg-gradient-to-br from-yellow-200 via-yellow-500 to-yellow-200 rounded-[30px] sm:rounded-[40px] opacity-70" style="z-index: -1;"></div>

        {{-- Konten Dalam (Putih Transparan) --}}
        <div class="royal-glass rounded-[28px] sm:rounded-[38px] w-full h-full p-5 sm:p-8 flex flex-col items-center justify-center text-center shadow-2xl backdrop-blur-xl">

            {{-- 1. Ornamen Atas (Ukuran disesuaikan) --}}
            <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/Basmala.svg"
                 class="h-8 sm:h-12 mb-3 sm:mb-5 opacity-60 filter brightness-0 sepia(1) hue-rotate(50deg) saturate(3)">

            {{-- 2. Judul Kecil --}}
            <h3 class="font-body uppercase tracking-[0.2em] text-emerald-800 text-[9px] sm:text-xs font-bold mb-2 animate-pulse">
                Undangan Walimatul Khitan
            </h3>

            {{-- 3. Nama Mempelai (Ukuran Font Mobile: text-3xl, Laptop: text-5xl) --}}
            <h1 class="font-script text-[2.5rem] leading-none sm:text-6xl text-shimmer-gold mb-3 sm:mb-5 drop-shadow-md py-1">
                Muhammad <br> Wahid Arsyaka
            </h1>

            {{-- 4. Garis Dekorasi --}}
            <div class="flex items-center gap-2 mb-4 opacity-60">
                <div class="h-[1px] w-8 bg-emerald-600"></div>
                <i class="fa-solid fa-star-of-life text-[8px] text-yellow-600"></i>
                <div class="h-[1px] w-8 bg-emerald-600"></div>
            </div>

            {{-- 5. Foto Lingkaran (Ukuran Mobile: w-28, Laptop: w-40) --}}
            <div class="photo-frame-mobile w-28 h-28 sm:w-40 sm:h-40 mb-4 sm:mb-6">
                <div class="w-full h-full rounded-full overflow-hidden border-2 border-white shadow-lg relative z-10">
                    <img src="{{ asset('/foto.png') }}"
                         class="w-full h-full object-cover"
                         alt="Foto Anak"
                         onerror="this.src='https://via.placeholder.com/150'">
                </div>
            </div>

            {{-- 6. Box Nama Tamu (Lebih Compact) --}}
            <div class="bg-emerald-50/50 rounded-xl p-3 w-full mb-4 sm:mb-6 border border-emerald-100">
                <p class="text-[9px] sm:text-xs text-emerald-700 mb-1 uppercase tracking-wider">Kepada Yth. Bapak/Ibu/Saudara/i:</p>
                <h2 class="text-lg sm:text-2xl font-bold text-yellow-700 line-clamp-1">
                    {{ $guest->name ?? 'Tamu Spesial' }}
                </h2>
            </div>

            {{- 7. Tombol Buka -}}
            <button onclick="openRoyalInvitation()"
                    class="btn-shimmer w-full py-3 sm:py-4 rounded-full text-white font-bold text-sm sm:text-lg shadow-lg flex items-center justify-center gap-2 transition transform hover:scale-105 active:scale-95 cursor-pointer">
                <i class="fa-solid fa-envelope-open text-base sm:text-xl"></i>
                <span>Buka Undangan</span>
            </button>

        </div>
    </div>
</section>
