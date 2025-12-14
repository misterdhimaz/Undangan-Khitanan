{{-- ROYAL MAIN CONTENT (LEVEL MAX - FIXED MODAL) --}}
<main id="royal-content" class="hidden w-full pb-10 relative overflow-hidden bg-gradient-to-b from-[#F0FDF4] via-white to-[#F0FDF4]">

    {{-- ================= 1. GLOBAL BACKGROUND FX ================= --}}
    <div class="fixed inset-0 pointer-events-none z-0">
        {{-- Pattern Texture --}}
        <div class="absolute inset-0 opacity-[0.04]"
             style="background-image: url('https://www.transparenttextures.com/patterns/arabesque.png'); background-attachment: fixed;"></div>

        {{-- Animated Blobs (Background) --}}
        <div class="absolute top-[-10%] left-[-20%] w-[500px] h-[500px] bg-emerald-300/20 rounded-full blur-[80px] animate-pulse-slow"></div>
        <div class="absolute bottom-[-10%] right-[-20%] w-[500px] h-[500px] bg-yellow-400/10 rounded-full blur-[80px] animate-pulse-slow" style="animation-delay: 2s"></div>
    </div>

    {{-- Ornamen Sudut Atas (SVG) --}}
    <div class="absolute top-0 left-0 w-48 h-48 z-10 pointer-events-none opacity-40 mix-blend-multiply">
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path fill="#047857" d="M0 0 L150 0 Q75 75 0 150 Z" /><path fill="none" stroke="#B48E43" stroke-width="2" d="M10 10 L130 10 Q70 70 10 130 Z"/></svg>
    </div>
    <div class="absolute top-0 right-0 w-48 h-48 z-10 pointer-events-none opacity-40 mix-blend-multiply rotate-90">
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path fill="#047857" d="M0 0 L150 0 Q75 75 0 150 Z" /><path fill="none" stroke="#B48E43" stroke-width="2" d="M10 10 L130 10 Q70 70 10 130 Z"/></svg>
    </div>

    {{-- ================= 2. HEADER SECTION ================= --}}
    <section class="relative pt-25 pb-24 px-6 text-center bg-white rounded-b-[80px] shadow-2xl z-20 overflow-hidden border-b-4 border-[#B48E43]/20">

        {{-- Animasi Lentera Gantung --}}
        <div class="absolute top-0 left-12 animate-[swing_3s_ease-in-out_infinite] origin-top">
            <div class="w-[1px] h-24 bg-[#B48E43]/60 mx-auto"></div>
            <div class="w-6 h-8 bg-[#FEF3C7] border border-[#B48E43] rounded-b-lg shadow-[0_0_15px_#FDE68A]"></div>
        </div>
        <div class="absolute top-0 right-12 animate-[swing_4s_ease-in-out_infinite] origin-top" style="animation-delay: 1s">
            <div class="w-[1px] h-32 bg-[#B48E43]/60 mx-auto"></div>
            <div class="w-8 h-10 bg-[#FEF3C7] border border-[#B48E43] rounded-b-lg shadow-[0_0_15px_#FDE68A]"></div>
        </div>

        <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/Basmala.svg"
             class="h-20 mx-auto mt-10 mb-5 opacity-80 filter brightness-0 sepia(1) hue-rotate(50deg) saturate(3) drop-shadow-sm"
             data-aos="fade-down" data-aos-duration="1000">

        <h2 class="font-decor text-4xl sm:text-5xl font-bold text-[#064E3B] mb-6 leading-snug" data-aos="fade-up">
            Assalamu’alaikum <br>
            <span class="font-body font-medium text-2xl mt-2 block text-[#B48E43]">Warahmatullahi Wabarakatuh</span>
        </h2>

        <p class="font-body text-gray-600 leading-relaxed mb-12 max-w-lg mx-auto text-lg font-light px-4" data-aos="fade-up" data-aos-delay="100">
            Dengan memohon Rahmat dan Ridho Allah SWT, kami bermaksud menyelenggarakan syukuran Walimatul Khitan putra kami tercinta.
        </p>



        {{-- Profile Photo with Complex Ring --}}
        <div class="relative w-64 h-64 mx-auto mb-10 group" data-aos="zoom-in" data-aos-delay="400">
            <div class="absolute inset-[-15px] border-[1px] border-[#B48E43]/30 rounded-full animate-[spinSlow_30s_linear_infinite]"></div>
            <div class="absolute inset-[-8px] border-[2px] border-dashed border-[#064E3B]/40 rounded-full animate-[spinReverse_20s_linear_infinite]"></div>
            <div class="relative w-full h-full rounded-full p-2 bg-white shadow-2xl overflow-hidden">
                <img src="{{ asset('/foto.png') }}" class="w-full h-full object-cover rounded-full transform group-hover:scale-110 transition duration-700 filter contrast-110" alt="Mempelai">
            </div>
            <div class="absolute -bottom-5 left-1/2 -translate-x-1/2 bg-[#064E3B] text-[#FDE68A] px-8 py-2 rounded-full text-xs font-bold tracking-widest border-2 border-[#FDE68A] shadow-lg whitespace-nowrap z-20">
                CUCU TERCINTA
            </div>
        </div>

        <h3 class="font-body font-bold text-3xl text-gray-800 mb-2" data-aos="fade-up">Bpk. Suwito Haryoko & Ibu Ndari</h3>
        <p class="text-[#064E3B] font-medium tracking-[0.2em] uppercase text-sm" data-aos="fade-up" data-aos-delay="100">Kakek & Nenek</p>
<br>
          {{-- Quote Box --}}
        <div class="relative mx-auto max-w-md mb-16" data-aos="zoom-in" data-aos-delay="200">
            <div class="absolute inset-0 bg-[#F0FDF4] rounded-[40px] transform rotate-3 shadow-lg"></div>
            <div class="royal-glass p-8 rounded-[40px] border border-[#B48E43]/30 relative bg-white/90">
                <i class="fa-solid fa-quote-right text-5xl text-[#064E3B]/10 absolute -top-4 -right-2"></i>
                <p class="text-[#064E3B] font-serif italic text-xl leading-relaxed relative z-10">
                    "Cucu adalah mahkota orang-orang tua, dan kemuliaan anak-anak ialah nenek moyang mereka."
                </p>
                <div class="w-16 h-[2px] bg-[#B48E43] mx-auto my-4 opacity-50"></div>
                <p class="text-xs text-[#B48E43] font-bold uppercase tracking-[0.3em]">— Amsal 17:6</p>
            </div>
        </div>
    </section>

    {{-- DIVIDER --}}
    <div class="relative z-20 -mt-10 flex justify-center opacity-90 drop-shadow-sm">
        <svg width="300" height="40" viewBox="0 0 300 40" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0 Q150 50 300 0 V40 H0 Z" fill="#F0FDF4"/>
            <path d="M0 0 Q150 50 300 0" fill="none" stroke="#B48E43" stroke-width="2"/>
            <circle cx="150" cy="25" r="6" fill="#064E3B" stroke="#FDE68A" stroke-width="2"/>
        </svg>
    </div>

    {{-- ================= 3. DETAIL ACARA SECTION ================= --}}
    <section class="py-20 px-6 relative z-10">
        <div class="text-center mb-16" data-aos="fade-down">
            <h2 class="font-decor text-5xl sm:text-6xl text-[#064E3B] mb-4 drop-shadow-sm">Rangkaian Acara</h2>
            <div class="inline-block px-8 py-2 rounded-full bg-[#064E3B]/5 border border-[#064E3B]/10">
                <p class="text-gray-600 font-medium italic text-sm">InsyaAllah Diselenggarakan Pada:</p>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-8 max-w-lg mx-auto">
            {{-- Card 1: Hari --}}
            <div class="royal-glass p-6 rounded-[35px] flex items-center gap-6 transform hover:-translate-y-2 transition-all duration-500 group border border-white shadow-lg hover:shadow-emerald-200/50 relative overflow-hidden bg-white/80" data-aos="fade-right">
                <div class="absolute left-0 top-0 bottom-0 w-2 bg-[#064E3B]"></div>
                <div class="w-20 h-20 bg-[#D1FAE5] rounded-3xl rotate-3 group-hover:rotate-12 transition-transform duration-500 flex items-center justify-center text-[#064E3B] text-3xl shadow-sm border border-[#064E3B]/20 relative z-10">
                    <i class="fa-solid fa-calendar-day"></i>
                </div>
                <div class="relative z-10">
                    <h4 class="font-bold text-[#064E3B] text-xl mb-1">Hari & Tanggal</h4>
                    <p class="text-gray-700 font-medium text-lg">Jum'at, 02 Januari 2026</p>
                    <p class="text-xs text-[#059669] font-bold bg-[#D1FAE5] px-3 py-1 rounded-full w-fit mt-2">Awal Tahun Baru</p>
                </div>
            </div>

            {{-- Card 2: Jam --}}
            <div class="royal-glass p-6 rounded-[35px] flex items-center gap-6 transform hover:-translate-y-2 transition-all duration-500 group border border-white shadow-lg hover:shadow-yellow-200/50 relative overflow-hidden bg-white/80" data-aos="fade-left" data-aos-delay="100">
                <div class="absolute left-0 top-0 bottom-0 w-2 bg-[#B48E43]"></div>
                <div class="w-20 h-20 bg-[#FEF3C7] rounded-3xl -rotate-3 group-hover:-rotate-12 transition-transform duration-500 flex items-center justify-center text-[#D97706] text-3xl shadow-sm border border-[#D97706]/20 relative z-10">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div class="relative z-10">
                    <h4 class="font-bold text-[#064E3B] text-xl mb-1">Waktu Acara</h4>
                    <p class="text-gray-700 font-medium text-lg">08.00 WIB s.d Selesai</p>
                    <p class="text-xs text-[#D97706] font-bold bg-[#FEF3C7] px-3 py-1 rounded-full w-fit mt-2">Diharapkan Tepat Waktu</p>
                </div>
            </div>

            {{-- Card 3: Agenda --}}
            <div class="royal-glass p-6 rounded-[35px] flex items-center gap-6 transform hover:-translate-y-2 transition-all duration-500 group border border-white shadow-lg relative overflow-hidden bg-white/80" data-aos="fade-right" data-aos-delay="200">
                <div class="absolute left-0 top-0 bottom-0 w-2 bg-[#064E3B]"></div>
                <div class="w-20 h-20 bg-[#D1FAE5] rounded-3xl rotate-3 group-hover:rotate-12 transition-transform duration-500 flex items-center justify-center text-[#064E3B] text-3xl shadow-sm border border-[#064E3B]/20 relative z-10">
                    <i class="fa-solid fa-handshake-simple"></i>
                </div>
                <div class="relative z-10">
                    <h4 class="font-bold text-[#064E3B] text-xl mb-1">Agenda Utama</h4>
                    <p class="text-gray-700 font-medium text-lg">Menjamu Tamu Undangan</p>
                    <p class="text-xs text-gray-500 mt-1 italic">Ramah Tamah & Doa</p>
                </div>
            </div>

            {{-- Card 4: Hiburan --}}
            <div class="royal-glass p-6 rounded-[35px] flex items-center gap-6 transform hover:-translate-y-2 transition-all duration-500 group border border-white shadow-lg relative overflow-hidden bg-white/80" data-aos="fade-left" data-aos-delay="300">
                <div class="absolute left-0 top-0 bottom-0 w-2 bg-[#B48E43]"></div>
                <div class="w-20 h-20 bg-[#FEF3C7] rounded-3xl -rotate-3 group-hover:-rotate-12 transition-transform duration-500 flex items-center justify-center text-[#B48E43] text-3xl shadow-sm border border-[#B48E43]/20 relative z-10">
                    <i class="fa-solid fa-music"></i>
                </div>
                <div class="relative z-10">
                    <h4 class="font-bold text-[#064E3B] text-xl mb-1">Hiburan Spesial</h4>
                    <p class="text-gray-700 font-medium text-lg">Sholawat Bintang Songo</p>
                    <p class="text-xs text-[#B48E43] bg-[#FEF3C7] px-2 py-1 rounded inline-block mt-1 font-bold">Live Hadroh</p>
                </div>
            </div>

            {{-- Card Alamat --}}
            <div class="mt-8 p-1 rounded-[35px] bg-gradient-to-r from-[#064E3B] via-[#B48E43] to-[#064E3B] animate-gradient-x shadow-xl transform hover:scale-[1.02] transition-transform duration-500" data-aos="zoom-in" data-aos-delay="400">
                <div class="bg-white rounded-[31px] p-8 text-center relative overflow-hidden">
                    <div class="absolute inset-0 opacity-[0.03] bg-[url('https://www.transparenttextures.com/patterns/arabesque.png')]"></div>

                    <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mb-6 shadow-inner border border-gray-100 relative z-10 mx-auto">
                        <i class="fa-solid fa-map-location-dot text-4xl text-[#064E3B] drop-shadow-sm animate-bounce-slow"></i>
                    </div>

                    <h4 class="font-decor font-bold text-2xl mb-3 text-[#064E3B] relative z-10">Alamat Lokasi</h4>
                    <p class="text-gray-700 leading-relaxed text-lg mb-6 relative z-10 max-w-xs mx-auto">
                        Dusun Suka Indah, Desa Suka Makmur RT 003, RW 004 <br> Kec. Giri Mulya Kab. Bengkulu Utara
                    </p>

                    <div class="inline-block px-6 py-2 bg-[#F0FDF4] text-[#064E3B] rounded-full text-sm font-bold border border-[#064E3B]/20 relative z-10">
                        <i class="fa-solid fa-house mr-2"></i> Kediaman Bpk. Suwito
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 4. COUNTDOWN SECTION --}}
    <section class="py-24 px-6 text-center relative z-10 bg-[#064E3B] text-white overflow-hidden my-10 rounded-[60px] shadow-2xl mx-4 border-4 border-[#B48E43]/50">
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/arabesque.png')]"></div>
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-black/20 to-transparent"></div>

        <div class="relative z-20">
            <h2 class="font-decor text-4xl sm:text-5xl text-[#FDE68A] mb-12 drop-shadow-md">Menuju Hari Bahagia</h2>

            <div class="flex justify-center gap-3 sm:gap-6 mb-12 flex-wrap">
                {{-- Timer Boxes --}}
                <div class="bg-white/10 backdrop-blur-md border border-white/20 p-4 rounded-2xl w-20 sm:w-24 shadow-[0_10px_20px_rgba(0,0,0,0.3)]">
                    <span id="days" class="block text-3xl sm:text-4xl font-bold text-[#FDE68A]">00</span><span class="text-[10px] uppercase tracking-widest">Hari</span>
                </div>
                <div class="bg-white/10 backdrop-blur-md border border-white/20 p-4 rounded-2xl w-20 sm:w-24 shadow-[0_10px_20px_rgba(0,0,0,0.3)]">
                    <span id="hours" class="block text-3xl sm:text-4xl font-bold text-[#FDE68A]">00</span><span class="text-[10px] uppercase tracking-widest">Jam</span>
                </div>
                <div class="bg-white/10 backdrop-blur-md border border-white/20 p-4 rounded-2xl w-20 sm:w-24 shadow-[0_10px_20px_rgba(0,0,0,0.3)]">
                    <span id="minutes" class="block text-3xl sm:text-4xl font-bold text-[#FDE68A]">00</span><span class="text-[10px] uppercase tracking-widest">Menit</span>
                </div>
                <div class="bg-white/10 backdrop-blur-md border border-white/20 p-4 rounded-2xl w-20 sm:w-24 shadow-[0_10px_20px_rgba(0,0,0,0.3)]">
                    <span id="seconds" class="block text-3xl sm:text-4xl font-bold text-[#FDE68A]">00</span><span class="text-[10px] uppercase tracking-widest">Detik</span>
                </div>
            </div>

            <button id="add-to-calendar" class="group relative inline-flex items-center justify-center px-10 py-4 font-bold text-[#064E3B] transition-all duration-300 bg-gradient-to-r from-[#FDE68A] to-[#FCD34D] rounded-full hover:shadow-[0_0_30px_rgba(253,230,138,0.6)] hover:-translate-y-1 overflow-hidden border border-[#B48E43]" data-aos="zoom-in">
                <span class="relative flex items-center gap-3 text-lg">
                    <i class="fa-solid fa-calendar-plus text-xl group-hover:rotate-12 transition-transform"></i>
                    Simpan Tanggal
                </span>
            </button>
        </div>
    </section>

    {{-- 5. TURUT MENGUNDANG --}}
    <section class="py-20 px-6 bg-white relative z-10">
        <div class="royal-glass p-8 sm:p-12 rounded-[50px] border border-[#B48E43]/20 shadow-2xl relative overflow-hidden max-w-4xl mx-auto">
            <div class="absolute top-0 right-0 w-32 h-32 bg-[#FEF3C7] rounded-bl-[100px] opacity-50"></div>
            <div class="absolute bottom-0 left-0 w-32 h-32 bg-[#D1FAE5] rounded-tr-[100px] opacity-50"></div>

            <h2 class="text-center font-decor text-4xl text-[#064E3B] mb-16 drop-shadow-sm relative z-10" data-aos="fade-down">Turut Mengundang</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 relative z-10">
                {{-- Group 1 --}}
                <div class="space-y-6" data-aos="fade-right">
                    <h3 class="font-bold text-[#B48E43] uppercase tracking-widest border-b pb-2 mb-4 text-center md:text-left">Perangkat Desa</h3>

                    <div class="flex items-center gap-4 group">
                        <div class="w-10 h-10 rounded-full bg-[#064E3B] text-white flex items-center justify-center shadow-md group-hover:rotate-12 transition"><i class="fa-solid fa-user-tie"></i></div>
                        <div><p class="font-bold text-lg text-[#064E3B]">BPK. Subagyo</p><p class="text-xs text-gray-500 uppercase">Kades Suka Makmur</p></div>
                    </div>
                    <div class="flex items-center gap-4 group">
                        <div class="w-10 h-10 rounded-full bg-[#064E3B] text-white flex items-center justify-center shadow-md group-hover:rotate-12 transition"><i class="fa-solid fa-user-pen"></i></div>
                        <div><p class="font-bold text-lg text-[#064E3B]">BPK. Roni</p><p class="text-xs text-gray-500 uppercase">Sekdes Suka Makmur</p></div>
                    </div>
                    <div class="flex items-center gap-4 group">
                        <div class="w-10 h-10 rounded-full bg-[#064E3B] text-white flex items-center justify-center shadow-md group-hover:rotate-12 transition"><i class="fa-solid fa-map-pin"></i></div>
                        <div><p class="font-bold text-lg text-[#064E3B]">BPK. Yono</p><p class="text-xs text-gray-500 uppercase">Kadun RW 01</p></div>
                    </div>
                    <div class="flex items-center gap-4 group">
                        <div class="w-10 h-10 rounded-full bg-[#064E3B] text-white flex items-center justify-center shadow-md group-hover:rotate-12 transition"><i class="fa-solid fa-map-pin"></i></div>
                        <div><p class="font-bold text-lg text-[#064E3B]">BPK. Setiono</p><p class="text-xs text-gray-500 uppercase">Kadun RW 04</p></div>
                    </div>
                </div>

                {{-- Group 2 --}}
                <div class="space-y-6" data-aos="fade-left" data-aos-delay="100">
                    <h3 class="font-bold text-[#B48E43] uppercase tracking-widest border-b pb-2 mb-4 text-center md:text-left">Tokoh Masyarakat</h3>
                    <div class="flex items-center gap-4 group">
                        <div class="w-10 h-10 rounded-full bg-[#B48E43] text-white flex items-center justify-center shadow-md group-hover:rotate-12 transition"><i class="fa-solid fa-gavel"></i></div>
                        <div><p class="font-bold text-lg text-[#78350F]">BPK. Suwardi</p><p class="text-xs text-gray-500 uppercase">Ketua Adat</p></div>
                    </div>
                    <div class="flex items-center gap-4 group">
                        <div class="w-10 h-10 rounded-full bg-[#B48E43] text-white flex items-center justify-center shadow-md group-hover:rotate-12 transition"><i class="fa-solid fa-users"></i></div>
                        <div><p class="font-bold text-lg text-[#78350F]">BPK. Budi Timbul</p><p class="text-xs text-gray-500 uppercase">Ketua RT</p></div>
                    </div>
                    <div class="flex items-center gap-4 group">
                        <div class="w-10 h-10 rounded-full bg-[#B48E43] text-white flex items-center justify-center shadow-md group-hover:rotate-12 transition"><i class="fa-solid fa-mosque"></i></div>
                        <div><p class="font-bold text-lg text-[#78350F]">BPK. Hj. Arif Safaat</p><p class="text-xs text-gray-500 uppercase">Tokoh Agama</p></div>
                    </div>
                    <div class="mt-6 p-4 bg-gray-50 rounded-xl text-center border border-gray-200">
                        <p class="text-gray-500 italic text-sm font-medium">Segenap Keluarga Besar & Panitia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 6. GALERI KENANGAN --}}
    <section class="py-20 px-6 text-center bg-[#F0FDF4] relative z-10 shadow-inner">
        <h2 class="font-royal text-5xl text-[#064E3B] mb-12 drop-shadow-sm" data-aos="fade-up">Galeri Kenangan</h2>

        <div class="p-4 bg-gradient-to-br from-[#FDE68A] via-[#B48E43] to-[#064E3B] rounded-[45px] shadow-2xl max-w-xl mx-auto" data-aos="zoom-in">
            <div class="swiper mySwiper rounded-[35px] overflow-hidden aspect-[4/5] sm:aspect-[4/3] border-[6px] border-white bg-white shadow-inner">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1545622081-30919315d862?q=80&w=800" class="w-full h-full object-cover"></div>
                    <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1511285560982-1351cdeb9821?q=80&w=800" class="w-full h-full object-cover"></div>
                    <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1515934751635-c81c6bc9a2d8?q=80&w=800" class="w-full h-full object-cover"></div>
                </div>
                <div class="swiper-button-next !text-[#B48E43]"></div>
                <div class="swiper-button-prev !text-[#B48E43]"></div>
                <div class="swiper-pagination !bottom-4"></div>
            </div>
        </div>
    </section>

    {{-- 7. DOA & DUKUNGAN (STACKED VERTICAL) --}}
    <section class="py-24 px-6 relative z-10 bg-white">
        <h2 class="text-center font-decor text-5xl text-[#064E3B] mb-16 drop-shadow-sm" data-aos="fade-down">Doa & Dukungan</h2>

        <div class="flex flex-col gap-10 max-w-sm mx-auto">
            {{-- Card Hadiah --}}
            <div class="royal-glass p-8 rounded-[45px] text-center border-2 border-[#FDE68A] relative overflow-hidden group shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105" data-aos="fade-up">
                <div class="relative z-10">
                    <div class="w-24 h-24 mx-auto bg-[#FEF3C7] rounded-full flex items-center justify-center text-[#D97706] text-4xl mb-6 shadow-inner border border-[#D97706]/20">
                        <i class="fa-solid fa-gift animate-pulse"></i>
                    </div>
                    <h3 class="font-royal text-3xl mb-3 text-[#B48E43]">Kirim Hadiah</h3>
                    <p class="text-sm text-gray-600 mb-8 leading-relaxed px-2">Doa restu Anda adalah hadiah terindah. Namun jika memberi adalah ungkapan kasih, kami menerimanya dengan senang hati.</p>
                    <button onclick="openModal('gift-modal')" class="w-full py-4 rounded-full bg-gradient-to-r from-[#D97706] to-[#B45309] text-white font-bold text-lg shadow-lg hover:shadow-xl transition-all flex items-center justify-center gap-3 cursor-pointer">
                        <i class="fa-solid fa-envelope-open-text text-xl"></i> Amplop Digital
                    </button>
                </div>
            </div>

            {{-- Card RSVP --}}
            <div class="royal-glass p-8 rounded-[45px] text-center border-2 border-[#A7F3D0] relative overflow-hidden group shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105" data-aos="fade-up" data-aos-delay="100">
                <div class="relative z-10">
                    <div class="w-24 h-24 mx-auto bg-[#D1FAE5] rounded-full flex items-center justify-center text-[#064E3B] text-4xl mb-6 shadow-inner border border-[#064E3B]/20">
                        <i class="fa-solid fa-clipboard-check animate-pulse"></i>
                    </div>
                    <h3 class="font-royal text-3xl mb-3 text-[#064E3B]">Konfirmasi</h3>
                    <p class="text-sm text-gray-600 mb-8 leading-relaxed px-2">Mohon konfirmasi kehadiran Anda agar kami dapat mempersiapkan acara dengan sebaik-baiknya.</p>
                    <button onclick="openModal('rsvp-modal')" class="w-full py-4 rounded-full bg-gradient-to-r from-[#059669] to-[#047857] text-white font-bold text-lg shadow-lg hover:shadow-xl transition flex items-center justify-center gap-3 cursor-pointer">
                        <i class="fa-solid fa-check-circle text-xl"></i> Isi Form RSVP
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- 8. KIRIM UCAPAN --}}
    <section class="py-20 px-6 relative z-10 bg-gradient-to-b from-white to-[#F0FDF4]">
        <div class="royal-glass p-8 sm:p-12 rounded-[50px] border border-white shadow-xl max-w-2xl mx-auto" data-aos="fade-up">
            <h2 class="text-center font-royal text-4xl text-[#064E3B] mb-10">Kirim Ucapan</h2>

            @if (session('success_wish'))
                <div class="mb-8 p-4 bg-[#D1FAE5] text-[#064E3B] rounded-2xl border border-[#10B981] flex items-center gap-3 animate-pulse">
                    <i class="fa-solid fa-circle-check text-2xl"></i>
                    <span class="font-medium">{{ session('success_wish') }}</span>
                </div>
            @endif

            <form action="{{ route('invitation.wish') }}" method="POST" class="space-y-6">
                @csrf
                <div class="group">
                    <label class="text-sm font-bold text-[#B48E43] uppercase ml-4 mb-2 block tracking-wider">Nama Anda:</label>
                    <input type="text" name="sender_name_wish" required value="{{ $guest->name ?? '' }}" class="w-full bg-white border border-gray-200 rounded-2xl py-4 px-6 focus:outline-none focus:border-[#B48E43] focus:ring-4 focus:ring-[#FEF3C7] transition-all font-medium text-lg shadow-sm">
                </div>
                <div class="group">
                    <label class="text-sm font-bold text-[#B48E43] uppercase ml-4 mb-2 block tracking-wider">Ucapan & Doa:</label>
                    <textarea name="message_wish" rows="4" required class="w-full bg-white border border-gray-200 rounded-2xl py-4 px-6 focus:outline-none focus:border-[#B48E43] focus:ring-4 focus:ring-[#FEF3C7] transition-all font-medium text-lg shadow-sm"></textarea>
                </div>
                <button type="submit" class="w-full py-4 rounded-full bg-gradient-to-r from-[#B48E43] to-[#92400E] text-white font-bold text-lg shadow-lg hover:shadow-xl transition-all flex items-center justify-center gap-3 cursor-pointer">
                    <i class="fa-solid fa-paper-plane"></i> Kirim Ucapan
                </button>
            </form>
        </div>

        {{-- List Ucapan --}}
        <div class="mt-16 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
            <h3 class="text-center font-royal text-3xl text-[#064E3B] mb-8">Doa Para Tamu</h3>
            <div class="space-y-5 max-h-[500px] overflow-y-auto pr-4 custom-scrollbar">
                @forelse ($wishes as $wish)
                    <div class="bg-white p-6 rounded-[30px] border-l-8 border-[#10B981] shadow-sm hover:shadow-md transition-all relative">
                        <i class="fa-solid fa-quote-right absolute top-6 right-6 text-4xl text-gray-100"></i>
                        <div class="flex justify-between items-center mb-3 relative z-10">
                            <h4 class="font-bold text-lg text-[#064E3B] flex items-center gap-2"><i class="fa-solid fa-circle-user text-[#10B981]"></i> {{ $wish->sender_name }}</h4>
                            <span class="text-xs text-[#064E3B] bg-[#D1FAE5] px-3 py-1 rounded-full font-bold">{{ $wish->created_at->diffForHumans() }}</span>
                        </div>
                        <p class="text-gray-700 italic leading-relaxed pl-8 relative z-10">"{{ $wish->message }}"</p>
                    </div>
                @empty
                    <div class="text-center p-10 bg-white/60 rounded-[30px] border-2 border-dashed border-gray-300">
                        <p class="text-gray-500 font-medium text-lg">Belum ada ucapan.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- 9. FOOTER & MAP (FULL WIDTH, NO GAP) --}}
    <section class="pt-40 px-6 pb-20 bg-[#022c22] text-center text-white relative rounded-t-[80px] overflow-hidden z-20 -mt-16 border-t-8 border-[#B48E43]/50">
        {{-- Footer Pattern --}}
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/arabesque.png')] z-0"></div>
        <div class="absolute top-0 left-0 w-full h-32 bg-gradient-to-b from-black/30 to-transparent z-0"></div>

        <div class="relative z-10 max-w-3xl mx-auto">

            <h2 class="font-royal text-5xl text-[#FDE68A] mb-12 drop-shadow-sm">Lokasi Acara</h2>

            {{-- Live Map Iframe --}}
            <div class="p-4 bg-gradient-to-br from-[#B48E43] via-[#FDE68A] to-[#B48E43] rounded-[45px] shadow-2xl mb-12 transform hover:rotate-1 transition-transform duration-500">
                <div class="rounded-[38px] overflow-hidden h-[400px] relative border-4 border-[#022c22] shadow-inner bg-gray-200">
                    {{-- Ganti src di bawah dengan embed link Google Maps asli Anda --}}
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3138976453676!2d102.1643929!3d-3.4190696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zM8KwMjUnMDguNiJTIDEwMsKwMDknNTEuOCJF!5e0!3m2!1sen!2sid!4v1600000000000!5m2!1sen!2sid"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
            </div>

            <a href="https://goo.gl/maps/xyz" target="_blank" class="inline-flex items-center gap-4 bg-gradient-to-r from-[#B48E43] to-[#D97706] text-white px-12 py-5 rounded-full font-bold text-xl shadow-xl shadow-[#B48E43]/40 hover:shadow-2xl hover:scale-105 transition-all group mb-20 border-2 border-[#FDE68A]/50">
                <i class="fa-solid fa-map-location-dot text-2xl group-hover:animate-wiggle"></i> Buka di Google Maps
            </a>

            <div class="max-w-md mx-auto border-t border-white/10 pt-10">
                <h1 class="font-script text-4xl text-[#FDE68A] mb-6 drop-shadow-sm font-royal">Muhammad Wahid Arsyaka Family</h1>
                <p class="text-[#D1FAE5]/80 text-sm mb-10 leading-relaxed font-light px-4">
                    Atas kehadiran dan doa restu Bapak/Ibu/Saudara/i, <br> kami ucapkan terima kasih yang sebesar-besarnya.
                </p>
                <div class="text-[#D1FAE5]/50 text-xs flex items-center justify-center gap-2 bg-[#064E3B]/50 py-3 rounded-full mx-auto w-fit px-8 border border-white/5">
                    Created with <i class="fa-solid fa-heart text-red-500 animate-pulse"></i> by Om DimasAnwar © 2025
                </div>
            </div>
        </div>
    </section>

    {{-- ================= MODALS (POPUP CENTERED) ================= --}}
    {{-- CSS Khusus Modal (Inline agar tidak konflik) --}}
    <style>
        .modal-overlay {
            background: rgba(2, 44, 34, 0.85);
            backdrop-filter: blur(8px);
            transition: opacity 0.4s ease;
        }
        .modal-content {
            transform: scale(0.9);
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        .modal-overlay:not(.hidden) .modal-content {
            transform: scale(1);
        }
    </style>

    {{-- Gift Modal --}}
    <div id="gift-modal" class="modal-overlay fixed inset-0 z-[9999] hidden flex items-center justify-center p-4">
        <div class="modal-content bg-[#F0FDF4] w-full max-w-sm rounded-[35px] p-8 relative border-4 border-[#D97706] shadow-2xl">
            <button onclick="closeModal('gift-modal')" class="absolute top-4 right-4 text-gray-400 hover:text-red-500 bg-white rounded-full w-10 h-10 flex items-center justify-center shadow-md transition-transform hover:rotate-90 cursor-pointer"><i class="fa-solid fa-xmark text-xl"></i></button>

            <div class="text-center mb-8">
                <div class="w-20 h-20 mx-auto bg-[#FEF3C7] rounded-full flex items-center justify-center text-[#D97706] text-4xl mb-4 shadow-inner border border-[#D97706]/30">
                    <i class="fa-solid fa-gift"></i>
                </div>
                <h3 class="font-decor font-bold text-2xl text-[#B48E43] mb-2">Amplop Digital</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Silakan transfer tanda kasih Anda melalui rekening berikut:</p>
            </div>

            <div class="space-y-4">
                {{-- Bank 1 --}}
                <div class="bg-white p-5 rounded-[25px] border-2 border-gray-100 flex items-center justify-between hover:border-[#D97706] transition group shadow-sm">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-10 bg-[#00529C] rounded-lg flex items-center justify-center text-white font-bold italic text-sm shadow-sm">BCA</div>
                        <div><p class="font-bold text-xl text-gray-800 tracking-wider">1234567890</p><p class="text-xs text-gray-500">a.n Bpk. Suwito</p></div>
                    </div>
                    <button onclick="copyToClipboard('1234567890')" class="w-10 h-10 bg-[#FEF3C7] text-[#D97706] rounded-full flex items-center justify-center hover:bg-[#D97706] hover:text-white transition active:scale-90 shadow-sm cursor-pointer"><i class="fa-regular fa-copy"></i></button>
                </div>
                {{-- Bank 2 --}}
                <div class="bg-white p-5 rounded-[25px] border-2 border-gray-100 flex items-center justify-between hover:border-[#059669] transition group shadow-sm">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-10 bg-[#10B981] rounded-lg flex items-center justify-center text-white font-bold text-sm shadow-sm">GOPAY</div>
                        <div><p class="font-bold text-xl text-gray-800 tracking-wider">08123456789</p><p class="text-xs text-gray-500">a.n Ibu Ndari</p></div>
                    </div>
                    <button onclick="copyToClipboard('08123456789')" class="w-10 h-10 bg-[#D1FAE5] text-[#059669] rounded-full flex items-center justify-center hover:bg-[#059669] hover:text-white transition active:scale-90 shadow-sm cursor-pointer"><i class="fa-regular fa-copy"></i></button>
                </div>
            </div>
        </div>
    </div>

    {{-- RSVP Modal --}}
    <div id="rsvp-modal" class="modal-overlay fixed inset-0 z-[9999] hidden flex items-center justify-center p-4">
        <div class="modal-content bg-[#F0FDF4] w-full max-w-sm rounded-[35px] p-8 relative border-4 border-[#064E3B] shadow-2xl">
            <button onclick="closeModal('rsvp-modal')" class="absolute top-4 right-4 text-gray-400 hover:text-red-500 bg-white rounded-full w-10 h-10 flex items-center justify-center shadow-md transition-transform hover:rotate-90 cursor-pointer"><i class="fa-solid fa-xmark text-xl"></i></button>

            <div class="text-center mb-8">
                <div class="w-20 h-20 mx-auto bg-[#D1FAE5] rounded-full flex items-center justify-center text-[#064E3B] text-4xl mb-4 shadow-inner border border-[#064E3B]/30">
                    <i class="fa-solid fa-clipboard-check"></i>
                </div>
                <h3 class="font-decor font-bold text-2xl text-[#064E3B] mb-2">Konfirmasi</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Mohon isi data kehadiran Anda di bawah ini.</p>
            </div>

            <form action="{{ route('invitation.rsvp') }}" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label class="text-xs font-bold text-[#064E3B] uppercase ml-3">Nama Lengkap</label>
                    <input type="text" name="name_rsvp" required class="w-full p-4 bg-white border-2 border-[#A7F3D0] rounded-2xl focus:outline-none focus:border-[#064E3B] font-medium" placeholder="Nama Anda">
                </div>
                <div>
                    <label class="text-xs font-bold text-[#064E3B] uppercase ml-3">Status</label>
                    <select name="status_rsvp" id="status_rsvp_modal" class="w-full p-4 bg-white border-2 border-[#A7F3D0] rounded-2xl focus:outline-none focus:border-[#064E3B] font-medium">
                        <option value="hadir">InsyaAllah Hadir</option>
                        <option value="tidak_hadir">Maaf, Belum Bisa</option>
                    </select>
                </div>
                <div id="jumlah_tamu_wrapper_modal" class="hidden">
                    <label class="text-xs font-bold text-[#064E3B] uppercase ml-3">Jumlah Tamu</label>
                    <input type="number" name="attendance_count" min="1" max="5" class="w-full p-4 bg-white border-2 border-[#A7F3D0] rounded-2xl focus:outline-none focus:border-[#064E3B] font-medium" placeholder="1">
                </div>
                <button class="w-full py-4 rounded-full bg-[#064E3B] text-white font-bold text-lg shadow-lg hover:bg-[#047857] transition mt-4 cursor-pointer">Kirim Konfirmasi</button>
            </form>
        </div>
    </div>

</main>

{{-- SCRIPT KHUSUS UNTUK MEMASTIKAN MODAL & TIMER JALAN --}}
<script>
    // 1. MODAL LOGIC (FIXED)
    function openModal(id) {
        const modal = document.getElementById(id);
        modal.classList.remove('hidden'); // Hapus class hidden dulu
        // Sedikit delay agar transisi CSS berjalan (fade in)
        setTimeout(() => {
            modal.style.opacity = '1';
            document.body.style.overflow = 'hidden'; // Kunci scroll
        }, 10);
    }

    function closeModal(id) {
        const modal = document.getElementById(id);
        modal.style.opacity = '0'; // Fade out dulu
        setTimeout(() => {
            modal.classList.add('hidden'); // Baru sembunyikan
            document.body.style.overflow = 'auto'; // Buka scroll
        }, 400); // Sesuai durasi CSS transition
    }

    // 2. RSVP LOGIC (Show Jumlah Tamu)
    const rsvpSelect = document.getElementById('status_rsvp_modal');
    const guestInput = document.getElementById('jumlah_tamu_wrapper_modal');
    if(rsvpSelect) {
        rsvpSelect.addEventListener('change', function() {
            if(this.value === 'hadir') guestInput.classList.remove('hidden');
            else guestInput.classList.add('hidden');
        });
    }

    // 3. COUNTDOWN TIMER
    const targetDate = new Date("Jan 02, 2026 08:00:00").getTime();
    setInterval(() => {
        const now = new Date().getTime();
        const diff = targetDate - now;
        if(diff < 0) return;
        document.getElementById("days").innerText = Math.floor(diff / (1000 * 60 * 60 * 24));
        document.getElementById("hours").innerText = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        document.getElementById("minutes").innerText = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        document.getElementById("seconds").innerText = Math.floor((diff % (1000 * 60)) / 1000);
    }, 1000);

    // 4. SWIPER
    new Swiper(".mySwiper", {
        effect: "cards", grabCursor: true, autoplay: { delay: 2500 }
    });

    // 5. COPY CLIPBOARD
    function copyToClipboard(text) {
        navigator.clipboard.writeText(text);
        alert('Nomor berhasil disalin!');
    }
</script>
