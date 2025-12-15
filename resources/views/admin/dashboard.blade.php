<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Admin Dashboard</title>

    {{-- Libraries --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    {{-- SweetAlert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Outfit', sans-serif; background-color: #F3F4F6; }

        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #CBD5E1; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #94A3B8; }

        /* Sidebar Active State */
        .nav-item.active { background: linear-gradient(90deg, rgba(16, 185, 129, 0.1) 0%, transparent 100%); border-left: 4px solid #059669; color: #059669; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased h-screen flex overflow-hidden">

    {{-- 1. SIDEBAR (KIRI) --}}
    <aside class="w-64 bg-white border-r border-gray-200 hidden md:flex flex-col z-10 shadow-sm">
        {{-- Logo Area --}}
        <div class="h-20 flex items-center px-8 border-b border-gray-100">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-emerald-600 to-emerald-800 flex items-center justify-center text-white text-lg shadow-lg shadow-emerald-200">
                    <i class="fa-solid fa-crown"></i>
                </div>
                <div>
                    <h1 class="font-bold text-lg text-gray-800 tracking-tight">Hai Admin</h1>
                    <p class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">By Dimass</p>
                </div>
            </div>
        </div>

        {{-- Navigation --}}
        <nav class="flex-1 px-4 py-6 space-y-2">
            <p class="px-4 text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Main Menu</p>

            <a href="#" class="nav-item active flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-xl transition-all hover:bg-gray-50">
                <i class="fa-solid fa-chart-pie text-lg w-6"></i> Dashboard
            </a>
            <a href="#" onclick="document.getElementById('add-guest-input').focus()" class="nav-item flex items-center gap-3 px-4 py-3 text-sm font-medium text-gray-600 rounded-xl transition-all hover:bg-gray-50 hover:text-emerald-600">
                <i class="fa-solid fa-user-plus text-lg w-6"></i> Tambah Tamu
            </a>

            <p class="px-4 text-xs font-bold text-gray-400 uppercase tracking-widest mt-8 mb-2">Data</p>
            <div class="px-4 py-3 bg-emerald-50 rounded-xl border border-emerald-100">
                <div class="flex items-center justify-between mb-1">
                    <span class="text-xs font-bold text-emerald-800">Kehadiran</span>
                    <span class="text-xs font-bold text-emerald-600">{{ $stats['hadir'] }} Org</span>
                </div>
                <div class="w-full bg-emerald-200 rounded-full h-1.5">
                    @php
                        $percent = $stats['total_tamu'] > 0 ? ($stats['hadir'] / $stats['total_tamu']) * 100 : 0;
                    @endphp
                    <div class="bg-emerald-600 h-1.5 rounded-full" style="width: {{ $percent }}%"></div>
                </div>
            </div>
        </nav>

        {{-- Logout --}}
        <div class="p-4 border-t border-gray-100">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button class="w-full flex items-center justify-center gap-2 px-4 py-3 text-sm font-bold text-red-600 bg-red-50 rounded-xl hover:bg-red-100 transition-colors">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                </button>
            </form>
        </div>
    </aside>

    {{-- 2. MAIN CONTENT (KANAN) --}}
    <main class="flex-1 flex flex-col h-screen overflow-hidden relative">

        {{-- Header Mobile / Topbar --}}
        <header class="h-20 bg-white/80 backdrop-blur-md border-b border-gray-200 flex items-center justify-between px-6 sticky top-0 z-20">
            <div class="md:hidden flex items-center gap-3">
                <div class="w-8 h-8 bg-emerald-600 rounded-lg flex items-center justify-center text-white"><i class="fa-solid fa-crown"></i></div>
                <span class="font-bold text-gray-800">RoyalPanel</span>
            </div>

            <div class="hidden md:block">
                <h2 class="text-xl font-bold text-gray-800">Dashboard Overview</h2>
                <p class="text-xs text-gray-500">Pantau perkembangan undangan Anda hari ini.</p>
            </div>

            <div class="flex items-center gap-4">
                <div class="hidden md:flex flex-col items-end">
                    <span class="text-sm font-bold text-gray-800">Administrator</span>
                    <span class="text-[10px] text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full">Online</span>
                </div>
                <div class="w-10 h-10 rounded-full bg-gray-200 border-2 border-white shadow-sm overflow-hidden">
                    <img src="https://ui-avatars.com/api/?name=Admin+Royal&background=059669&color=fff" alt="Admin">
                </div>
            </div>
        </header>

        {{-- Scrollable Content --}}
        <div class="flex-1 overflow-y-auto p-4 md:p-8 pb-20">

            {{-- 3. STATS CARDS (GRADIENT STYLE) --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">

                {{-- Card 1 --}}
                <div class="relative overflow-hidden bg-white p-6 rounded-[24px] shadow-sm border border-gray-100 group hover:shadow-md transition-all">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                        <i class="fa-solid fa-users text-6xl text-blue-600"></i>
                    </div>
                    <p class="text-sm font-medium text-gray-500 mb-1">Total Undangan</p>
                    <h3 class="text-3xl font-bold text-gray-800">{{ $stats['total_tamu'] }}</h3>
                    <div class="mt-4 flex items-center gap-2 text-xs font-bold text-blue-600 bg-blue-50 w-fit px-3 py-1 rounded-full">
                        <i class="fa-solid fa-arrow-up"></i> Target 100%
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="relative overflow-hidden bg-white p-6 rounded-[24px] shadow-sm border border-gray-100 group hover:shadow-md transition-all">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                        <i class="fa-solid fa-circle-check text-6xl text-emerald-600"></i>
                    </div>
                    <p class="text-sm font-medium text-gray-500 mb-1">Akan Hadir</p>
                    <h3 class="text-3xl font-bold text-gray-800">{{ $stats['hadir'] }}</h3>
                    <div class="mt-4 flex items-center gap-2 text-xs font-bold text-emerald-600 bg-emerald-50 w-fit px-3 py-1 rounded-full">
                        <i class="fa-regular fa-face-smile"></i> Alhamdulillah
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="relative overflow-hidden bg-white p-6 rounded-[24px] shadow-sm border border-gray-100 group hover:shadow-md transition-all">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                        <i class="fa-solid fa-circle-xmark text-6xl text-red-500"></i>
                    </div>
                    <p class="text-sm font-medium text-gray-500 mb-1">Berhalangan</p>
                    <h3 class="text-3xl font-bold text-gray-800">{{ $stats['tidak_hadir'] }}</h3>
                    <div class="mt-4 flex items-center gap-2 text-xs font-bold text-red-600 bg-red-50 w-fit px-3 py-1 rounded-full">
                        <i class="fa-regular fa-face-sad-tear"></i> Belum Rejeki
                    </div>
                </div>

                {{-- Card 4 --}}
                <div class="relative overflow-hidden bg-gradient-to-br from-yellow-400 to-orange-500 p-6 rounded-[24px] shadow-lg text-white group">
                    <div class="absolute top-0 right-0 p-4 opacity-20 group-hover:opacity-30 transition-opacity">
                        <i class="fa-solid fa-envelope-open-text text-6xl text-white"></i>
                    </div>
                    <p class="text-sm font-medium text-yellow-100 mb-1">Total Ucapan</p>
                    <h3 class="text-3xl font-bold text-white">{{ $stats['total_ucapan'] }}</h3>
                    <div class="mt-4 flex items-center gap-2 text-xs font-bold text-white bg-white/20 w-fit px-3 py-1 rounded-full backdrop-blur-sm">
                        <i class="fa-solid fa-heart"></i> Doa Restu
                    </div>
                </div>
            </div>

            {{-- 4. LAYOUT GRID (KIRI: TAMU, KANAN: AKTIVITAS) --}}
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">

                {{-- KOLOM KIRI (2/3) --}}
                <div class="xl:col-span-2 space-y-8">

                    {{-- Form Tambah Tamu (Modern) --}}
                    <div class="bg-white p-1 rounded-[24px] shadow-sm border border-gray-100">
                        <form action="{{ route('admin.guest.store') }}" method="POST" class="flex flex-col sm:flex-row gap-0 bg-gray-50 rounded-[20px] p-2">
                            @csrf
                            <div class="flex-1 flex items-center px-4">
                                <i class="fa-solid fa-user-plus text-gray-400 mr-3"></i>
                                <input type="text" id="add-guest-input" name="name" placeholder="Ketik nama tamu baru disini..." class="w-full bg-transparent border-none focus:ring-0 text-gray-700 font-medium placeholder-gray-400 h-12" required>
                            </div>
                            <button class="bg-emerald-600 hover:bg-emerald-700 text-white px-8 py-3 rounded-[16px] font-bold shadow-lg shadow-emerald-200 transition-all active:scale-95 flex items-center justify-center gap-2">
                                <i class="fa-solid fa-plus"></i> Simpan
                            </button>
                        </form>
                    </div>

                    {{-- Tabel Tamu --}}
                    <div class="bg-white rounded-[24px] shadow-sm border border-gray-100 overflow-hidden">
                        <div class="p-6 border-b border-gray-100 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                            <div>
                                <h3 class="text-lg font-bold text-gray-800">Daftar Undangan</h3>
                                <p class="text-xs text-gray-500">Kelola link undangan tamu anda.</p>
                            </div>

                            {{-- Search Box Simple --}}
                            <div class="relative">
                                <i class="fa-solid fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-xs"></i>
                                <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Cari nama..." class="pl-8 pr-4 py-2 bg-gray-50 border border-gray-200 rounded-xl text-xs focus:outline-none focus:border-emerald-500 w-48 transition-all">
                            </div>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="w-full text-left text-sm" id="guestTable">
                                <thead class="bg-gray-50/50 text-gray-500 uppercase font-bold text-[10px] tracking-wider border-b border-gray-100">
                                    <tr>
                                        <th class="px-6 py-4">Nama Tamu</th>
                                        <th class="px-6 py-4 text-center">Status</th>
                                        <th class="px-6 py-4 text-center">Link</th>
                                        <th class="px-6 py-4 text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-50">
                                    @foreach($guests as $guest)
                                    <tr class="hover:bg-emerald-50/30 transition-colors group">
                                        <td class="px-6 py-4">
                                            <div class="font-bold text-gray-800 text-base">{{ $guest->name }}</div>
                                            <div class="text-[10px] text-gray-400 font-mono">{{ $guest->slug }}</div>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            @php
                                                // Cek status di tabel RSVP (manual check sederhana)
                                                $status = $rsvps->where('name_rsvp', $guest->name)->first();
                                            @endphp
                                            @if($status)
                                                @if($status->status_rsvp == 'hadir')
                                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-700"><div class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></div> Hadir</span>
                                                @else
                                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[10px] font-bold bg-red-100 text-red-700">Tidak</span>
                                                @endif
                                            @else
                                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[10px] font-bold bg-gray-100 text-gray-500">Belum</span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <button onclick="copyLink('{{ url('/?to=' . urlencode($guest->name)) }}')"
                                                    class="text-gray-400 hover:text-emerald-600 transition-colors p-2 rounded-lg hover:bg-emerald-50" title="Copy Link">
                                                <i class="fa-regular fa-copy text-lg"></i>
                                            </button>
                                            <a href="{{ url('/?to=' . urlencode($guest->name)) }}" target="_blank" class="text-gray-400 hover:text-blue-600 transition-colors p-2 rounded-lg hover:bg-blue-50 ml-1" title="Buka Link">
                                                <i class="fa-solid fa-arrow-up-right-from-square text-lg"></i>
                                            </a>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <form action="{{ route('admin.guest.destroy', $guest->id) }}" method="POST" onsubmit="return confirmDelete(event)">
                                                @csrf @method('DELETE')
                                                <button class="w-8 h-8 rounded-lg flex items-center justify-center text-gray-300 hover:text-red-500 hover:bg-red-50 transition-all">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @if($guests->isEmpty())
                            <div class="p-10 text-center flex flex-col items-center">
                                <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center text-gray-300 mb-3"><i class="fa-solid fa-users-slash text-2xl"></i></div>
                                <p class="text-gray-500 font-medium">Belum ada tamu.</p>
                            </div>
                        @endif
                    </div>
                </div>

                {{-- KOLOM KANAN (1/3) --}}
                <div class="space-y-8">

                    {{-- Widget RSVP Terbaru --}}
                    <div class="bg-white rounded-[24px] shadow-sm border border-gray-100 p-6">
                        <h3 class="font-bold text-gray-800 mb-4 flex items-center justify-between">
                            <span>RSVP Terbaru</span>
                            <span class="text-xs bg-emerald-50 text-emerald-600 px-2 py-1 rounded-lg">Live</span>
                        </h3>
                        <div class="space-y-4 max-h-[400px] overflow-y-auto pr-1">
                            @forelse($rsvps as $rsvp)
                                <div class="flex gap-4 p-3 rounded-2xl bg-gray-50/50 border border-gray-100 hover:bg-white hover:shadow-sm transition-all">
                                    <div class="flex-shrink-0">
                                        <div class="w-10 h-10 rounded-full flex items-center justify-center text-white text-sm font-bold shadow-sm {{ $rsvp->status_rsvp == 'hadir' ? 'bg-gradient-to-br from-emerald-400 to-emerald-600' : 'bg-gradient-to-br from-red-400 to-red-600' }}">
                                            {{ substr($rsvp->name_rsvp ?? 'T', 0, 1) }}
                                        </div>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-bold text-gray-800 truncate">{{ $rsvp->name_rsvp }}</p>
                                        <div class="flex items-center gap-2 mt-1">
                                            @if($rsvp->status_rsvp == 'hadir')
                                                <span class="text-[10px] font-bold text-emerald-600 bg-emerald-100 px-2 py-0.5 rounded">Hadir</span>
                                                <span class="text-[10px] text-gray-500"><i class="fa-solid fa-user-group text-[8px]"></i> {{ $rsvp->attendance_count }} org</span>
                                            @else
                                                <span class="text-[10px] font-bold text-red-600 bg-red-100 px-2 py-0.5 rounded">Absen</span>
                                            @endif
                                        </div>
                                        <p class="text-[10px] text-gray-400 mt-1 text-right">{{ $rsvp->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                            @empty
                                <p class="text-sm text-gray-400 text-center py-4 italic">Belum ada data.</p>
                            @endforelse
                        </div>
                    </div>

                    {{-- Widget Doa Terbaru --}}
                    <div class="bg-gradient-to-b from-white to-gray-50 rounded-[24px] shadow-sm border border-gray-100 p-6">
                        <h3 class="font-bold text-gray-800 mb-4">Doa & Ucapan</h3>
                        <div class="space-y-4 max-h-[400px] overflow-y-auto pr-1">
                            @forelse($wishes as $wish)
                                <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm relative">
                                    <i class="fa-solid fa-quote-right absolute top-4 right-4 text-gray-100 text-2xl"></i>
                                    <div class="flex items-center gap-2 mb-2">
                                        <span class="text-xs font-bold text-emerald-700 bg-emerald-50 px-2 py-1 rounded-md">{{ $wish->sender_name }}</span>
                                    </div>
                                    <p class="text-xs text-gray-600 italic leading-relaxed">"{{ Str::limit($wish->message, 100) }}"</p>
                                    <p class="text-[9px] text-gray-300 mt-2 text-right">{{ $wish->created_at->diffForHumans() }}</p>
                                </div>
                            @empty
                                <p class="text-sm text-gray-400 text-center py-4 italic">Belum ada ucapan.</p>
                            @endforelse
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

    {{-- SCRIPTS --}}
    <script>
        // 1. COPY LINK FUNCTION
        function copyLink(url) {
            navigator.clipboard.writeText(url).then(() => {
                const Toast = Swal.mixin({
                    toast: true, position: 'top-end', showConfirmButton: false, timer: 2000,
                    didOpen: (toast) => { toast.addEventListener('mouseenter', Swal.stopTimer); toast.addEventListener('mouseleave', Swal.resumeTimer); }
                });
                Toast.fire({ icon: 'success', title: 'Link berhasil disalin!' });
            });
        }

        // 2. CONFIRM DELETE
        function confirmDelete(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Hapus tamu ini?',
                text: "Link undangan tidak akan bisa diakses lagi!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#94a3b8',
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Batal',
                borderRadius: '20px'
            }).then((result) => {
                if (result.isConfirmed) {
                    e.target.submit();
                }
            });
        }

        // 3. SEARCH TABLE FUNCTION
        function searchTable() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("guestTable");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0]; // Kolom Nama
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        // 4. FLASH MESSAGE TOAST
        @if(session('success'))
            const Toast = Swal.mixin({
                toast: true, position: 'top-end', showConfirmButton: false, timer: 3000
            });
            Toast.fire({ icon: 'success', title: "{{ session('success') }}" });
        @endif
    </script>
</body>
</html>
