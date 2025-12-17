<!DOCTYPE html>
<html lang="id" class="scroll-smooth overflow-x-hidden">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Undangan Walimatul Khitan Eksklusif - Muhammad Wahid Arsyaka">
    <meta name="theme-color" content="#047857">
<title>M. Wahid Arsyakaa</title>

{{-- Tambahkan ?v=2 di akhir agar browser me-reload logo baru --}}
<link rel="icon" type="image/jpeg" href="{{ asset('logo_baru.jpeg') }}">
<link rel="shortcut icon" type="image/jpeg" href="{{ asset('logo_baru.jpeg') }}">

    {{-- PREMIUM FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- Kombinasi Font: Cinzel (Dekoratif), Alex Brush (Script Mewah), Outfit (Modern Clean) --}}
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Cinzel+Decorative:wght@400;700;900&family=Outfit:wght@300;400;500;700&display=swap" rel="stylesheet">

    {{-- LIBRARIES --}}
    {{-- Tailwind tetap ada untuk utilitas dasar, tapi kita akan menimpa banyak dengan custom CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    {{-- ULTRA COMPLEX CUSTOM CSS --}}
    <style>
        /* --- 1. THEME VARIABLES & PALETTE --- */
        :root {
            /* Background Layers */
            --bg-base: #F0FDF4;
            --bg-pattern-overlay: rgba(4, 120, 87, 0.03);

            /* Emerald Palette */
            --emerald-darkest: #022c22;
            --emerald-dark: #047857;
            --emerald-main: #10B981;
            --emerald-light: #6EE7B7;
            --emerald-glass: rgba(4, 120, 87, 0.15);

            /* Gold Metallic Palette (Untuk efek Shimmer) */
            --gold-rich: #B48E43;
            --gold-light: #FDE68A;
            --gold-shimmer-1: linear-gradient(45deg, #B48E43, #FDE68A, #B48E43);
            --gold-shimmer-text: linear-gradient(to right, #B48E43 0%, #FDE68A 50%, #B48E43 100%);

            /* Text & Fonts */
            --text-primary: #022c22;
            --text-secondary: #374151;
            --font-decor: 'Cinzel Decorative', serif;
            --font-script: 'Alex Brush', cursive;
            --font-body: 'Outfit', sans-serif;

            /* Glassmorphism Depth */
            --glass-border: 1px solid rgba(255, 255, 255, 0.4);
            --glass-shadow: 0 8px 32px 0 rgba(4, 120, 87, 0.1);
            --glass-blur: blur(12px);
        }

        /* --- 2. GLOBAL RESET & BASE STYLES --- */
        body {
            font-family: var(--font-body);
            color: var(--text-primary);
            background-color: var(--bg-base);
            /* Layer 1: Pola Geometris Halus (Overlay statis) */
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23047857' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            overflow-x: hidden;
            position: relative;
        }

        /* --- 3. ADVANCED BACKGROUND ANIMATIONS (The Blobs & Particles) --- */
        /* Container untuk efek background agar tidak mengganggu konten */
        #bg-effects-container {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            z-index: -1; overflow: hidden; pointer-events: none;
        }

        /* Blob yang kamu suka, di-upgrade */
        .royal-blob {
            position: absolute; filter: blur(60px); opacity: 0.5;
            animation: blobFloat 20s infinite alternate cubic-bezier(0.4, 0, 0.2, 1);
        }
        .blob-1 { top: -10%; left: -10%; width: 50vw; height: 50vw; background: var(--emerald-light); animation-delay: 0s; }
        .blob-2 { bottom: -10%; right: -10%; width: 60vw; height: 60vw; background: var(--gold-light); animation-delay: -5s; }
        .blob-3 { top: 30%; left: 40%; width: 30vw; height: 30vw; background: var(--emerald-main); opacity: 0.3; animation-delay: -10s; }

        @keyframes blobFloat {
            0% { transform: translate(0, 0) scale(1) rotate(0deg); }
            50% { transform: translate(30px, -50px) scale(1.1) rotate(5deg); }
            100% { transform: translate(-20px, 30px) scale(0.9) rotate(-5deg); }
        }

        /* Partikel Debu Emas (Floating Dust) */
        .gold-particle {
            position: absolute; width: 3px; height: 3px; background: var(--gold-rich);
            border-radius: 50%; opacity: 0; box-shadow: 0 0 5px var(--gold-light);
            animation: particleRise 15s infinite linear;
        }
        @keyframes particleRise {
            0% { transform: translateY(100vh) scale(0); opacity: 0; }
            20% { opacity: 0.8; }
            80% { opacity: 0.6; }
            100% { transform: translateY(-10vh) scale(1.5); opacity: 0; }
        }

        /* --- 4. UTILITY CLASSES & EFFECTS --- */
        /* Teks Emas Berkilau (Shimmer Text) */
        .text-shimmer-gold {
            background: var(--gold-shimmer-text); background-size: 200% auto;
            -webkit-background-clip: text; -webkit-text-fill-color: transparent;
            animation: textShine 3s linear infinite; font-weight: bold;
        }
        @keyframes textShine { to { background-position: 200% center; } }

        /* Border Emas Berkilau (Shimmer Border) */
        .border-shimmer-gold {
            position: relative; border: 2px solid transparent;
            background-clip: padding-box; /* Important for gradient border */
        }
        .border-shimmer-gold::before {
            content: ''; position: absolute; inset: -2px; z-index: -1;
            background: var(--gold-shimmer-1); background-size: 200% 200%;
            border-radius: inherit; animation: borderRotate 4s linear infinite;
        }
        @keyframes borderRotate { 0% { background-position: 0% 50%; } 100% { background-position: 100% 50%; } }

        /* Glassmorphism Panel (Level Max) */
        .royal-glass {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: var(--glass-blur); -webkit-backdrop-filter: var(--glass-blur);
            border: var(--glass-border); box-shadow: var(--glass-shadow);
            /* Efek pantulan cahaya halus di sudut */
            background-image: linear-gradient(135deg, rgba(255,255,255,0.4) 0%, rgba(255,255,255,0) 40%);
        }

        /* Custom Scrollbar (Agar serasi dengan tema) */
        ::-webkit-scrollbar { width: 10px; }
        ::-webkit-scrollbar-track { background: var(--bg-base); }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, var(--emerald-dark), var(--gold-rich));
            border-radius: 5px; border: 2px solid var(--bg-base);
        }

        /* --- 5. COMPONENT STYLES --- */
        /* Music Button dengan Pulse */
        .music-control-btn {
            position: fixed; bottom: 30px; right: 30px; z-index: 9999;
            width: 55px; height: 55px; border-radius: 50%;
            background: var(--bg-base); border: 2px solid var(--gold-rich);
            color: var(--emerald-dark); display: flex; align-items: center; justify-content: center;
            box-shadow: 0 4px 20px rgba(4, 120, 87, 0.3); cursor: pointer; transition: all 0.3s ease;
        }
        .music-control-btn::after { /* Efek Pulse */
            content: ''; position: absolute; inset: -5px; border-radius: 50%;
            border: 2px solid var(--gold-light); opacity: 0;
            animation: pulseGold 2s infinite;
        }
        .music-spin { animation: vinylSpin 4s linear infinite; }
        @keyframes pulseGold { 0% { transform: scale(1); opacity: 0.8; } 100% { transform: scale(1.5); opacity: 0; } }
        @keyframes vinylSpin { 100% { transform: rotate(360deg); } }

        /* Ornamen Pemisah (Divider) SVG */
        .royal-divider {
            width: 100%; height: auto; max-width: 300px; margin: 2rem auto;
            display: block; fill: none; stroke: var(--gold-rich); stroke-width: 1;
            opacity: 0.6;
        }
    </style>
</head>
<body class="antialiased">

    {{-- 1. BACKGROUND EFFECTS LAYER (Blobs & Particles) --}}
    <div id="bg-effects-container">
        <div class="royal-blob blob-1"></div>
        <div class="royal-blob blob-2"></div>
        <div class="royal-blob blob-3"></div>
        {{-- Partikel akan digenerate oleh JS --}}
    </div>

    {{-- 2. AUDIO PLAYER --}}
    <audio id="royal-audio" loop preload="auto">
        {{-- Pastikan file musik ada di public/music/blue.mp3 --}}
        <source src="{{ $setting->music_path }}" type="audio/mpeg">
    </audio>
    {{-- Tombol musik hanya muncul setelah undangan dibuka --}}
    <div id="music-toggle-btn" class="music-control-btn hidden" onclick="toggleRoyalMusic()">
        <i class="fa-solid fa-compact-disc text-2xl"></i>
    </div>

    {{-- 3. MAIN APP CONTAINER --}}
    {{-- Menggunakan max-w-[550px] agar terlihat eksklusif seperti aplikasi mobile di layar besar --}}
    <div class="relative w-full max-w-[550px] mx-auto min-h-screen shadow-[0_0_50px_rgba(0,0,0,0.2)] border-x border-white/20 bg-transparent">

        {{-- INCLUDE PARTIALS --}}
        @include('partials._cover')
        @include('partials._content')

    </div>

  {{-- 4. SCRIPTS (Libraries & Global Logic) --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    {{-- Tambahkan SweetAlert2 untuk Popup Cantik --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // --- GLOBAL VARIABLES ---
        const audio = document.getElementById('royal-audio');
        const musicBtn = document.getElementById('music-toggle-btn');
        const coverScreen = document.getElementById('royal-cover');
        const mainContent = document.getElementById('royal-content'); // Pastikan ID ini ada di <main>
        let isMusicPlaying = false;

        // --- 1. LOGIKA CEK SESSION (PENTING: Agar tidak balik ke cover setelah submit) ---
        document.addEventListener("DOMContentLoaded", function() {

            // Generate Particles (Kode lama kamu)
            const container = document.getElementById('bg-effects-container');
            if(container) {
                for (let i = 0; i < 30; i++) {
                    const particle = document.createElement('div');
                    particle.classList.add('gold-particle');
                    particle.style.left = `${Math.random() * 100}%`;
                    particle.style.animationDelay = `${Math.random() * 15}s`;
                    particle.style.animationDuration = `${15 + Math.random() * 10}s`;
                    container.appendChild(particle);
                }
            }

            // CEK APAKAH ADA PESAN SUKSES DARI LARAVEL?
            @if(session('success_rsvp') || session('success_wish'))
                // A. Bypass Cover (Langsung hilangkan cover & munculkan konten)
                coverScreen.style.display = 'none';
                mainContent.classList.remove('hidden');

                // B. Munculkan Tombol Musik (Opsional, status pause dulu)
                musicBtn.classList.remove('hidden');

                // C. Tampilkan Popup Berhasil (SweetAlert)
                Swal.fire({
                    title: 'Alhamdulillah!',
                    text: "{{ session('success_rsvp') ?? session('success_wish') }}",
                    icon: 'success',
                    confirmButtonText: 'Tutup',
                    confirmButtonColor: '#064E3B', // Emerald Dark
                    background: '#ffffff',
                    color: '#064E3B',
                    iconColor: '#B48E43', // Gold
                    showClass: { popup: 'animate__animated animate__fadeInDown' },
                    hideClass: { popup: 'animate__animated animate__fadeOutUp' },
                    customClass: {
                        popup: 'rounded-[30px] border-2 border-[#B48E43]', // Styling border emas
                        title: 'font-decor',
                        content: 'font-body'
                    }
                });

                // D. (Opsional) Scroll otomatis ke bagian Ucapan jika itu adalah submit ucapan
                @if(session('success_wish'))
                    // Pastikan kamu punya ID 'wish-section' di section ucapan
                    const wishSection = document.getElementById('wish-section');
                    if(wishSection) wishSection.scrollIntoView({ behavior: 'smooth' });
                @endif

            @endif
        });

        // --- INIT LIBRARIES ---
        AOS.init({
            duration: 1200,
            easing: 'cubic-bezier(0.4, 0, 0.2, 1)',
            once: false,
            mirror: true,
            offset: 80,
        });

        // --- OPEN INVITATION LOGIC ---
        function openRoyalInvitation() {
            // 1. Kunci scroll tubuh saat transisi
            document.body.style.overflow = 'hidden';

            // 2. Mainkan Musik
            audio.volume = 0.6;
            const playPromise = audio.play();
            if (playPromise !== undefined) {
                playPromise.then(_ => {
                    isMusicPlaying = true;
                    musicBtn.classList.add('music-spin');
                }).catch(error => {
                    console.log("Autoplay dicegah browser.");
                });
            }

            // 3. Animasi Cover "Terangkat"
            coverScreen.style.transition = 'transform 1.8s cubic-bezier(0.7, 0, 0.3, 1), opacity 1.8s ease-out';
            coverScreen.style.transform = 'translate3d(0, -100%, 0) scale(0.95)';
            coverScreen.style.opacity = '0';

            // 4. Tampilkan Konten Utama
            mainContent.classList.remove('hidden');
            musicBtn.classList.remove('hidden');

            // 5. Bersihkan DOM
            setTimeout(() => {
                coverScreen.style.display = 'none';
                document.body.style.overflow = 'auto';
                AOS.refresh();
            }, 1800);
        }

        // --- MUSIC TOGGLE LOGIC ---
        function toggleRoyalMusic() {
            if(isMusicPlaying) {
                audio.pause();
                musicBtn.classList.remove('music-spin');
            } else {
                audio.play();
                musicBtn.classList.add('music-spin');
            }
            isMusicPlaying = !isMusicPlaying;
        }

        // --- COPY TO CLIPBOARD (Dengan SweetAlert Toast) ---
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(() => {
                // Gunakan Toast SweetAlert biar lebih elegan
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                });

                Toast.fire({
                    icon: 'success',
                    title: 'Nomor berhasil disalin!'
                });
            });
        }
    </script>
</body>
</html>
