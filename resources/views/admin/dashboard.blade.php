<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Undangan</title>

    {{-- Libraries --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Outfit', sans-serif; background-color: #F8F9FC; /* Latar belakang lebih cerah & bersih */ }

        /* Premium Custom Scrollbar */
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #059669; }

        /* Sidebar Active State dengan efek Glow halus */
        .nav-item.active {
            background: linear-gradient(to right, rgba(16, 185, 129, 0.15), transparent);
            color: #047857;
            font-weight: 700;
            position: relative;
        }
        .nav-item.active::before {
            content: ''; position: absolute; left: 0; top: 50%; transform: translateY(-50%);
            height: 70%; width: 4px; background: #059669; border-radius: 0 4px 4px 0;
        }

        /* Soft Shadow untuk kesan Premium Melayang */
        .premium-shadow { box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.05), 0 4px 6px -2px rgba(0, 0, 0, 0.01); }
        .premium-shadow-hover:hover { box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.1); transform: translateY(-2px); }

        /* Gradient Text */
        .text-gradient-royal { background: linear-gradient(135deg, #065f46, #059669); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .text-gradient-gold { background: linear-gradient(135deg, #B48E43, #d97706); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    </style>
</head>
<body class="text-gray-700 antialiased h-screen flex overflow-hidden">

    {{-- 1. SIDEBAR (KIRI) - DESAIN BARU --}}
    <aside class="w-72 bg-white hidden md:flex flex-col z-20 premium-shadow relative">
        {{-- Hiasan Top Sidebar --}}
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-emerald-500 via-emerald-300 to-emerald-500"></div>

        <div class="h-24 flex items-center px-8">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-gradient-to-tr from-emerald-700 to-emerald-500 flex items-center justify-center text-white text-2xl shadow-lg shadow-emerald-200/50">
                    <i class="fa-solid fa-crown"></i>
                </div>
                <div>
                    <h1 class="font-extrabold text-2xl tracking-tight text-gradient-royal">Admin Panel</h1>
                    <p class="text-[11px] text-emerald-600/70 uppercase tracking-widest font-bold">by Dhimzz</p>
                </div>
            </div>
        </div>

        <nav class="flex-1 px-6 py-8 space-y-3">
            <p class="px-2 text-xs font-extrabold text-gray-400 uppercase tracking-widest mb-4">Menu Utama</p>
            <a href="#" class="nav-item active flex items-center gap-4 px-4 py-4 text-sm font-medium rounded-2xl transition-all duration-300 group">
                <i class="fa-solid fa-chart-pie text-xl group-hover:scale-110 transition-transform"></i> Dashboard
            </a>
            <a href="#" onclick="document.getElementById('add-guest-input').focus()" class="nav-item flex items-center gap-4 px-4 py-4 text-sm font-medium text-gray-500 rounded-2xl transition-all duration-300 hover:bg-gray-50 hover:text-emerald-700 group">
                <i class="fa-solid fa-user-plus text-xl group-hover:scale-110 transition-transform"></i> Tambah Tamu
            </a>

            <p class="px-2 text-xs font-extrabold text-gray-400 uppercase tracking-widest mt-10 mb-4">Ringkasan Live</p>
            <div class="px-5 py-5 bg-emerald-50/60 rounded-3xl border border-emerald-100/50 relative overflow-hidden">
                {{-- Background pattern halus --}}
                <div class="absolute inset-0 opacity-[0.03] bg-[url('https://www.transparenttextures.com/patterns/arabesque.png')]"></div>
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-sm font-bold text-emerald-900">Total Kehadiran</span>
                        <span class="text-sm font-extrabold text-emerald-600">{{ $stats['hadir'] }} <span class="text-[10px] font-medium">Orang</span></span>
                    </div>
                    <div class="w-full bg-emerald-200/50 rounded-full h-2.5 p-0.5">
                        @php $percent = $stats['total_tamu'] > 0 ? ($stats['hadir'] / $stats['total_tamu']) * 100 : 0; @endphp
                        <div class="bg-gradient-to-r from-emerald-500 to-emerald-400 h-full rounded-full shadow-sm relative" style="width: {{ $percent }}%">
                           <div class="absolute right-0 top-1/2 -translate-y-1/2 w-1.5 h-1.5 bg-white rounded-full mr-0.5 animate-pulse"></div>
                        </div>
                    </div>
                    <p class="text-[10px] text-emerald-600/70 mt-2 text-right">{{ number_format($percent, 0) }}% dari total undangan</p>
                </div>
            </div>
        </nav>

        <div class="p-6">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button class="w-full flex items-center justify-center gap-3 px-4 py-4 text-sm font-bold text-red-500 bg-red-50/50 hover:bg-red-100/80 rounded-2xl transition-all duration-300 group">
                    <i class="fa-solid fa-right-from-bracket group-hover:translate-x-1 transition-transform"></i> Keluar Sistem
                </button>
            </form>
        </div>
    </aside>

    {{-- 2. MAIN CONTENT (KANAN) --}}
    <main class="flex-1 flex flex-col h-screen overflow-hidden relative">

        {{-- Topbar Mobile & Desktop Premium --}}
        <header class="h-24 bg-white/70 backdrop-blur-xl flex items-center justify-between px-8 sticky top-0 z-30 shadow-sm/50">
            <div class="md:hidden flex items-center gap-3">
                <div class="w-10 h-10 bg-gradient-to-tr from-emerald-600 to-emerald-500 rounded-xl flex items-center justify-center text-white shadow-md"><i class="fa-solid fa-crown"></i></div>
                <span class="font-extrabold text-xl text-gray-800 tracking-tight">RoyalPanel</span>
            </div>
            <div class="hidden md:block">
                <h2 class="text-3xl font-extrabold text-gray-800 leading-tight"><span class="text-gradient-royal">Overview</span> Acara</h2>
                <p class="text-sm font-medium text-gray-400">Update terkini statistik undangan Anda.</p>
            </div>
            <div class="flex items-center gap-6">
                <div class="hidden md:flex flex-col items-end">
                    <span class="text-base font-bold text-gray-800">Administrator</span>
                    <div class="flex items-center gap-1.5">
                        <span class="relative flex h-2.5 w-2.5">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                        </span>
                        <span class="text-xs font-semibold text-emerald-600">Online Active</span>
                    </div>
                </div>
                <div class="w-12 h-12 rounded-full p-0.5 bg-gradient-to-tr from-emerald-400 to-emerald-600 shadow-md">
                    <div class="w-full h-full rounded-full border-2 border-white overflow-hidden">
                        <img src="https://ui-avatars.com/api/?name=Admin+Royal&background=059669&color=fff&bold=true" alt="Admin" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </header>

        <div class="flex-1 overflow-y-auto p-6 md:p-10 pb-20">

            {{-- 3. STATS CARDS (DESAIN BARU MELAYANG) --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                {{-- Card Total --}}
                <div class="bg-white p-8 rounded-[30px] premium-shadow premium-shadow-hover transition-all relative overflow-hidden group">
                    <div class="absolute -right-6 -top-6 text-[120px] text-blue-50/80 z-0 group-hover:scale-110 transition-transform group-hover:rotate-12"><i class="fa-solid fa-users"></i></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-blue-100/50 rounded-2xl flex items-center justify-center text-blue-600 text-2xl mb-4 shadow-sm"><i class="fa-solid fa-users"></i></div>
                        <p class="text-sm font-bold text-gray-400 uppercase tracking-wider mb-2">Total Tamu</p>
                        <h3 class="text-5xl font-extrabold text-gray-800">{{ $stats['total_tamu'] }}</h3>
                    </div>
                </div>
                {{-- Card Hadir --}}
                <div class="bg-white p-8 rounded-[30px] premium-shadow premium-shadow-hover transition-all relative overflow-hidden group">
                    <div class="absolute -right-6 -top-6 text-[120px] text-emerald-50/80 z-0 group-hover:scale-110 transition-transform group-hover:rotate-12"><i class="fa-solid fa-circle-check"></i></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-emerald-100/50 rounded-2xl flex items-center justify-center text-emerald-600 text-2xl mb-4 shadow-sm"><i class="fa-solid fa-circle-check"></i></div>
                        <p class="text-sm font-bold text-gray-400 uppercase tracking-wider mb-2">Konfirmasi Hadir</p>
                        <h3 class="text-5xl font-extrabold text-emerald-600">{{ $stats['hadir'] }}</h3>
                    </div>
                </div>
                {{-- Card Tidak Hadir --}}
                <div class="bg-white p-8 rounded-[30px] premium-shadow premium-shadow-hover transition-all relative overflow-hidden group">
                    <div class="absolute -right-6 -top-6 text-[120px] text-red-50/80 z-0 group-hover:scale-110 transition-transform group-hover:rotate-12"><i class="fa-solid fa-circle-xmark"></i></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-red-100/50 rounded-2xl flex items-center justify-center text-red-500 text-2xl mb-4 shadow-sm"><i class="fa-solid fa-circle-xmark"></i></div>
                        <p class="text-sm font-bold text-gray-400 uppercase tracking-wider mb-2">Berhalangan</p>
                        <h3 class="text-5xl font-extrabold text-red-500">{{ $stats['tidak_hadir'] }}</h3>
                    </div>
                </div>
                {{-- Card Ucapan (Special Gradient) --}}
                <div class="bg-gradient-to-br from-amber-400 via-orange-500 to-amber-600 p-8 rounded-[30px] premium-shadow premium-shadow-hover transition-all relative overflow-hidden group text-white">
                    <div class="absolute -right-6 -top-6 text-[120px] text-white/10 z-0 group-hover:scale-110 transition-transform group-hover:rotate-12"><i class="fa-solid fa-envelope-open-text"></i></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white text-2xl mb-4 shadow-inner"><i class="fa-solid fa-heart"></i></div>
                        <p class="text-sm font-bold text-amber-100 uppercase tracking-wider mb-2">Doa & Ucapan</p>
                        <h3 class="text-5xl font-extrabold text-white">{{ $stats['total_ucapan'] }}</h3>
                    </div>
                </div>
            </div>

            {{-- 4. MAIN LAYOUT GRID --}}
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-8 items-start">

                {{-- KOLOM KIRI: MANAJEMEN TAMU --}}
                <div class="xl:col-span-2 space-y-8">

                    {{-- Form Tambah Tamu (Lebih Menonjol) --}}
                    <div class="bg-white p-8 rounded-[35px] premium-shadow relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-100/30 rounded-full -mr-16 -mt-16 blur-2xl"></div>
                         <div class="relative z-10">
                            <h3 class="text-2xl font-extrabold text-gray-800 mb-6 flex items-center gap-3">
                                <span class="w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center text-emerald-600 text-lg"><i class="fa-solid fa-user-plus"></i></span>
                                Tambah Tamu Baru
                            </h3>
                             <form action="{{ route('admin.guest.store') }}" method="POST" class="flex flex-col sm:flex-row gap-4">
                                 @csrf
                                 <div class="flex-1 relative">
                                     <i class="fa-solid fa-keyboard absolute left-5 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                     <input type="text" id="add-guest-input" name="name" placeholder="Ketik nama lengkap tamu disini..."
                                            class="w-full pl-12 pr-6 py-4 bg-gray-50/50 border-2 border-gray-100 rounded-2xl focus:outline-none focus:border-emerald-500 focus:bg-white focus:ring-4 focus:ring-emerald-500/10 transition-all font-semibold text-gray-700 placeholder-gray-400" required>
                                 </div>
                                 <button class="bg-gradient-to-r from-emerald-600 to-emerald-500 hover:from-emerald-700 hover:to-emerald-600 text-white px-10 py-4 rounded-2xl font-extrabold shadow-lg shadow-emerald-600/20 transition-all hover:scale-[1.02] active:scale-95 flex items-center justify-center gap-3">
                                     <i class="fa-solid fa-check-circle text-lg"></i> Simpan Data
                                 </button>
                             </form>
                         </div>
                    </div>

                    {{-- Tabel Data Tamu (Lebih Bersih & Luas) --}}
                    <div class="bg-white rounded-[35px] premium-shadow overflow-hidden">
                        <div class="p-8 border-b border-gray-50 flex flex-col sm:flex-row justify-between items-end sm:items-center gap-6">
                            <div>
                                <h3 class="text-2xl font-extrabold text-gray-800 mb-2">Database Undangan</h3>
                                <p class="text-sm font-medium text-gray-500">Kelola daftar dan link undangan untuk tamu Anda.</p>
                            </div>
                            <div class="relative group">
                                <i class="fa-solid fa-search absolute left-5 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-emerald-600 transition-colors"></i>
                                <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Cari nama tamu..."
                                       class="pl-12 pr-6 py-3 bg-gray-50/50 border-2 border-gray-100 rounded-2xl text-sm focus:outline-none focus:border-emerald-500 focus:bg-white w-64 transition-all font-medium">
                            </div>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left" id="guestTable">
                                <thead class="bg-[#F8F9FC] text-gray-500 uppercase font-extrabold text-xs tracking-widest">
                                    <tr>
                                        <th class="px-8 py-5 rounded-tl-[35px]">Profile Tamu</th>
                                        <th class="px-8 py-5 text-center">Status RSVP</th>
                                        <th class="px-8 py-5 text-center">Aksi Cepat</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-50">
                                    @foreach($guests as $guest)
                                    <tr class="hover:bg-emerald-50/40 transition-all group">
                                        <td class="px-8 py-5">
                                            <div class="flex items-center gap-4">
                                                <div class="w-12 h-12 rounded-2xl bg-gray-100 flex items-center justify-center text-emerald-600 font-bold text-lg shadow-sm group-hover:bg-white group-hover:shadow-md transition-all">
                                                    {{ substr($guest->name, 0, 1) }}
                                                </div>
                                                <div>
                                                    <div class="font-extrabold text-gray-800 text-lg">{{ $guest->name }}</div>
                                                    <div class="text-xs text-gray-400 font-mono mt-0.5"><i class="fa-solid fa-link mr-1"></i> /?to={{ $guest->slug }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-8 py-5 text-center align-middle">
                                            @php $status = $rsvps->where('name_rsvp', $guest->name)->first(); @endphp
                                            @if($status)
                                                @if($status->status_rsvp == 'hadir')
                                                    <div class="inline-flex flex-col items-center justify-center bg-emerald-100/50 border border-emerald-200 text-emerald-700 px-4 py-2 rounded-2xl gap-1">
                                                        <span class="text-xs font-extrabold flex items-center gap-1.5"><div class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></div> Hadir</span>
                                                    </div>
                                                @else
                                                    <div class="inline-flex flex-col items-center justify-center bg-red-100/50 border border-red-200 text-red-700 px-4 py-2 rounded-2xl gap-1">
                                                        <span class="text-xs font-extrabold flex items-center gap-1.5"><i class="fa-solid fa-xmark text-sm"></i> Tidak</span>
                                                    </div>
                                                @endif
                                            @else
                                                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-2xl text-xs font-bold bg-gray-100/80 text-gray-500 border border-gray-200">
                                                    <i class="fa-regular fa-clock"></i> Belum Respon
                                                </span>
                                            @endif
                                        </td>
                                        <td class="px-8 py-5">
                                            <div class="flex items-center justify-center gap-2">
                                                <button onclick="copyLink('{{ url('/?to=' . urlencode($guest->name)) }}')" class="w-10 h-10 rounded-xl bg-white border border-gray-200 text-gray-500 flex items-center justify-center hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-all shadow-sm active:scale-95" title="Copy Link">
                                                    <i class="fa-regular fa-copy text-lg"></i>
                                                </button>
                                                <a href="{{ url('/?to=' . urlencode($guest->name)) }}" target="_blank" class="w-10 h-10 rounded-xl bg-white border border-gray-200 text-gray-500 flex items-center justify-center hover:bg-blue-50 hover:text-blue-600 hover:border-blue-200 transition-all shadow-sm active:scale-95" title="Buka Undangan">
                                                    <i class="fa-solid fa-arrow-up-right-from-square text-lg"></i>
                                                </a>
                                                <form action="{{ route('admin.guest.destroy', $guest->id) }}" method="POST" onsubmit="return confirmDelete(event)">
                                                    @csrf @method('DELETE')
                                                    <button class="w-10 h-10 rounded-xl bg-white border border-gray-200 text-gray-400 flex items-center justify-center hover:bg-red-50 hover:text-red-500 hover:border-red-200 transition-all shadow-sm active:scale-95" title="Hapus Tamu">
                                                        <i class="fa-solid fa-trash-can text-lg"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @if($guests->isEmpty())
                            <div class="p-16 text-center flex flex-col items-center justify-center bg-gray-50/30">
                                <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center text-gray-300 mb-6 shadow-sm border border-gray-100"><i class="fa-solid fa-users-slash text-4xl"></i></div>
                                <h4 class="text-xl font-bold text-gray-700 mb-2">Belum Ada Data Tamu</h4>
                                <p class="text-gray-500 font-medium">Silakan tambahkan tamu undangan Anda di form di atas.</p>
                            </div>
                        @endif
                    </div>
                </div>

                {{-- KOLOM KANAN: WIDGETS --}}
                <div class="space-y-8">

                    {{-- 1. PENGATURAN MEDIA (Aksen Emas Premium) --}}
                    <div class="bg-white rounded-[35px] premium-shadow p-8 relative overflow-hidden border-t-4 border-amber-400/80">
                        <div class="absolute top-0 right-0 w-40 h-40 bg-amber-100/20 rounded-full -mr-20 -mt-20 blur-3xl"></div>
                        <h3 class="text-xl font-extrabold text-gray-800 mb-8 flex items-center gap-3 relative z-10">
                            <span class="w-10 h-10 rounded-xl bg-gradient-to-br from-amber-400 to-amber-600 flex items-center justify-center text-white shadow-lg shadow-amber-200">
                                <i class="fa-solid fa-photo-film"></i>
                            </span>
                            <span class="text-gradient-gold">Media & Galeri</span>
                        </h3>

                        <form action="{{ route('admin.media.update') }}" method="POST" enctype="multipart/form-data" class="space-y-8 relative z-10">
                            @csrf
                            {{-- Upload Musik --}}
                            <div class="bg-amber-50/50 p-6 rounded-3xl border-2 border-amber-100/50 hover:border-amber-200 transition-all group">
                                <label class="block text-xs font-extrabold text-amber-700 mb-4 uppercase tracking-wider flex items-center gap-2">
                                    <i class="fa-solid fa-music text-lg group-hover:animate-bounce"></i> Musik Latar (MP3)
                                </label>
                                <div class="relative">
                                    <input type="file" name="music" accept=".mp3,.wav" class="block w-full text-sm text-gray-500 file:mr-4 file:py-3 file:px-6 file:rounded-2xl file:border-0 file:text-xs file:font-bold file:bg-gradient-to-r file:from-amber-500 file:to-amber-400 file:text-white hover:file:from-amber-600 hover:file:to-amber-500 file:shadow-md file:cursor-pointer cursor-pointer bg-white rounded-2xl border border-amber-100">
                                </div>
                                @if($setting->music_path)
                                    <div class="mt-4 flex items-center gap-3 bg-white/80 p-3 rounded-2xl border border-amber-200 shadow-sm backdrop-blur-sm">
                                        <div class="w-10 h-10 bg-amber-100 rounded-xl flex items-center justify-center text-amber-600 animate-pulse"><i class="fa-solid fa-volume-high"></i></div>
                                        <audio controls class="h-8 w-full rounded-lg shadow-inner bg-amber-50"><source src="{{ asset('storage/' . $setting->music_path) }}" type="audio/mpeg"></audio>
                                    </div>
                                @else
                                    <div class="mt-4 p-3 bg-gray-100/50 rounded-2xl flex items-center justify-center text-xs text-gray-500 italic border border-dashed border-gray-300">
                                        <i class="fa-regular fa-circle-xmark mr-2"></i> Belum ada musik custom diupload.
                                    </div>
                                @endif
                            </div>

                            {{-- Upload Galeri --}}
                            <div>
                                <label class="block text-xs font-extrabold text-gray-700 mb-4 uppercase tracking-wider flex items-center gap-2">
                                    <i class="fa-solid fa-images text-lg text-emerald-600"></i> Galeri 3 Kolom
                                </label>
                                <div class="grid grid-cols-3 gap-4">
                                    @for ($i = 1; $i <= 3; $i++)
                                        @php $galleryKey = 'gallery_' . $i; @endphp
                                        <div class="space-y-3 group">
                                            <div class="aspect-[3/4] bg-gray-100 rounded-3xl overflow-hidden border-2 border-gray-200 relative group-hover:border-emerald-400 group-hover:shadow-lg transition-all">
                                                @if($setting->$galleryKey)
                                                    <img src="{{ $setting->gallery_1 }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                                                    <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-white font-bold">Ubah</div>
                                                @else
                                                    <div class="w-full h-full flex flex-col items-center justify-center text-gray-300 bg-gray-50 group-hover:bg-white transition-colors">
                                                        <i class="fa-solid fa-image text-3xl mb-2 group-hover:text-emerald-400 transition-colors"></i>
                                                        <span class="text-xs font-bold">Foto {{ $i }}</span>
                                                    </div>
                                                @endif
                                            </div>
                                            <input type="file" name="{{ $galleryKey }}" accept="image/*" class="text-[10px] w-full text-gray-500 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:bg-gray-100 file:text-gray-700 file:font-bold hover:file:bg-emerald-100 hover:file:text-emerald-700 file:cursor-pointer cursor-pointer">
                                        </div>
                                    @endfor
                                </div>
                            </div>
                            <button type="submit" class="w-full bg-gradient-to-r from-amber-500 to-amber-400 hover:from-amber-600 hover:to-amber-500 text-white font-extrabold py-4 rounded-2xl shadow-xl shadow-amber-500/30 transition-all active:scale-95 flex items-center justify-center gap-3 text-lg relative overflow-hidden group">
                                <span class="absolute inset-0 w-full h-full bg-white/20 group-hover:scale-x-100 scale-x-0 transition-transform origin-left"></span>
                                <i class="fa-solid fa-cloud-arrow-up relative z-10"></i> <span class="relative z-10">Simpan Semua Media</span>
                            </button>
                        </form>
                    </div>

                    {{-- 2. KELOLA UCAPAN (MODERN LIST) --}}
                    <div class="bg-white rounded-[35px] premium-shadow p-8 relative overflow-hidden">
                         <h3 class="text-xl font-extrabold text-gray-800 mb-8 flex items-center gap-3 relative z-10">
                            <span class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-white shadow-lg shadow-blue-200">
                                <i class="fa-solid fa-comments"></i>
                            </span>
                            Moderasi Ucapan
                        </h3>
                        <div class="space-y-4 max-h-[500px] overflow-y-auto pr-2 custom-scrollbar">
                            @forelse($wishes as $wish)
                                <div class="p-5 rounded-[25px] border-2 transition-all relative group bg-white hover:shadow-md {{ $wish->is_hidden ? 'border-red-100 bg-red-50/30' : 'border-gray-100 hover:border-emerald-200' }}">

                                    <div class="flex justify-between items-start mb-3">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-full bg-gradient-to-br {{ $wish->is_hidden ? 'from-red-400 to-red-600' : 'from-emerald-400 to-emerald-600' }} flex items-center justify-center text-white font-bold shadow-sm">
                                                {{ substr($wish->sender_name, 0, 1) }}
                                            </div>
                                            <div>
                                                <h5 class="font-bold text-gray-800 text-base flex items-center gap-2">
                                                    {{ $wish->sender_name }}
                                                    @if($wish->is_hidden) <span class="text-[9px] uppercase bg-red-100 text-red-600 px-2 py-0.5 rounded-full font-extrabold tracking-wider">Disembunyikan</span> @endif
                                                </h5>
                                                <p class="text-[10px] text-gray-400 font-medium flex items-center gap-1"><i class="fa-regular fa-clock"></i> {{ $wish->created_at->diffForHumans() }}</p>
                                            </div>
                                        </div>
                                         <form action="{{ route('admin.wish.toggle', $wish->id) }}" method="POST">
                                            @csrf @method('PATCH')
                                            <button type="submit" class="w-10 h-10 rounded-xl flex items-center justify-center transition-all shadow-sm active:scale-90 {{ $wish->is_hidden ? 'bg-red-500 text-white hover:bg-red-600 shadow-red-200' : 'bg-gray-100 text-gray-400 hover:bg-emerald-500 hover:text-white hover:shadow-emerald-200' }}" title="{{ $wish->is_hidden ? 'Tampilkan Kembali' : 'Sembunyikan Ucapan' }}">
                                                <i class="fa-solid {{ $wish->is_hidden ? 'fa-eye-slash' : 'fa-eye' }} text-lg"></i>
                                            </button>
                                        </form>
                                    </div>

                                    <div class="bg-gray-50/80 p-4 rounded-2xl relative {{ $wish->is_hidden ? 'opacity-60 grayscale' : '' }}">
                                        <i class="fa-solid fa-quote-left text-gray-200 absolute top-2 left-2 text-xl"></i>
                                        <p class="text-sm text-gray-600 italic leading-relaxed pl-6 relative z-10">
                                            "{{ Str::limit($wish->message, 150) }}"
                                        </p>
                                    </div>
                                </div>
                            @empty
                                <div class="p-10 text-center flex flex-col items-center justify-center bg-gray-50/50 rounded-[30px] border-2 border-dashed border-gray-200">
                                    <i class="fa-regular fa-comments text-4xl text-gray-300 mb-4"></i>
                                    <p class="text-gray-500 font-medium">Belum ada ucapan masuk.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

    {{-- JAVASCRIPT SAMA SEPERTI SEBELUMNYA --}}
    <script>
        function copyLink(url) { navigator.clipboard.writeText(url).then(() => { Swal.fire({ toast: true, position: 'bottom-end', showConfirmButton: false, timer: 2000, icon: 'success', title: 'Link berhasil disalin ke clipboard!', background: '#10B981', color: '#fff', iconColor: '#fff' }); }); }
        function confirmDelete(e) { e.preventDefault(); Swal.fire({ title: 'Hapus Tamu Ini?', text: "Data dan link undangan akan hilang permanen.", icon: 'warning', showCancelButton: true, confirmButtonColor: '#ef4444', cancelButtonColor: '#94a3b8', confirmButtonText: 'Ya, Hapus Sekarang', cancelButtonText: 'Batalkan', customClass: { popup: 'rounded-[30px]', confirmButton: 'rounded-xl px-6 py-3 font-bold', cancelButton: 'rounded-xl px-6 py-3 font-bold' } }).then((result) => { if (result.isConfirmed) e.target.submit(); }); }
        function searchTable() { var input = document.getElementById("searchInput"), filter = input.value.toUpperCase(); var rows = document.getElementById("guestTable").getElementsByTagName("tr"); for (var i = 0; i < rows.length; i++) { var col = rows[i].getElementsByTagName("td")[0]; if (col) { var txt = col.textContent || col.innerText; rows[i].style.display = txt.toUpperCase().indexOf(filter) > -1 ? "" : "none"; } } }
        @if(session('success')) Swal.fire({ toast: true, position: 'top-end', showConfirmButton: false, timer: 3000, icon: 'success', title: "{{ session('success') }}", background: '#10B981', color: '#fff', iconColor: '#fff' }); @endif
    </script>
</body>
</html>
