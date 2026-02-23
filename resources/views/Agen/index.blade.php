<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jaringan Agen | KKP Corp</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('asset/image/logo-tab.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        kkpDark: "#262626",
                        kkpBlue: "#8cc9e9",
                        kkpBlueDark: "#5baacf",
                        kkpbf:"#bfbfbf"
                    },
                    fontFamily: {
                        sans: ["Montserrat", "sans-serif"],
                        inter: ["Inter", "sans-serif"],
                    },
                },
            },
        };
    </script>
    <style>
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        
        /* Custom Scrollbar Mobile Tab */
        .subnav-scroll::-webkit-scrollbar { height: 3px; }
        .subnav-scroll::-webkit-scrollbar-track { background: rgba(255, 255, 255, 0.05); border-radius: 10px; }
        .subnav-scroll::-webkit-scrollbar-thumb { background: rgba(140, 201, 233, 0.6); border-radius: 10px; }
        @media (min-width: 768px) { .subnav-scroll::-webkit-scrollbar { display: none; } }
    </style>
</head>

<body class="bg-kkpDark text-white font-sans antialiased overflow-x-hidden flex flex-col min-h-screen">

    @include('template.nav')

    <main class="flex-grow pt-28 sm:pt-32 lg:pt-40 pb-20 relative bg-[#1c1c1c]">
        
        <div class="absolute top-0 right-0 w-[300px] sm:w-[500px] h-[300px] sm:h-[500px] bg-kkpBlue/10 rounded-full blur-[100px] pointer-events-none z-0"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            
            <div class="text-center mb-10 sm:mb-16">
                <div class="inline-flex items-center gap-2 sm:gap-3 mb-3 sm:mb-4">
                    <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full"></span>
                    <h3 class="text-kkpBlue font-bold font-sans text-[10px] min-[320px]:text-xs md:text-sm uppercase tracking-widest">Titik Keberangkatan</h3>
                    <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full"></span>
                </div>
                <h2 class="text-2xl min-[320px]:text-3xl md:text-4xl lg:text-5xl font-black text-kkpbf font-sans uppercase italic tracking-wide drop-shadow-md">
                    JARINGAN <span class="text-kkpBlue">AGEN RESMI</span>
                </h2>
                <p class="text-white font-inter text-xs sm:text-sm md:text-base mt-4 max-w-2xl mx-auto leading-relaxed">
                    Temukan lokasi agen pembelian tiket dan titik keberangkatan armada KKP terdekat di kota Anda.
                </p>
            </div>

            @if($wilayahs->count() > 0)
                <div class="relative w-full flex items-center justify-center mb-10 sm:mb-14 group">
                    <div id="tab-container" class="flex space-x-3 overflow-x-auto subnav-scroll pb-3 px-4 w-full md:w-[90%] snap-x snap-mandatory scroll-smooth">
                        @foreach($wilayahs as $index => $w)
                            <button onclick="switchWilayah({{ $index }})" id="tab-btn-{{ $index }}" 
                                class="tab-btn snap-center shrink-0 transition-all whitespace-nowrap focus:outline-none 
                                {{ $index === 0 ? 'border-2 border-kkpBlue text-kkpBlue bg-kkpBlue/5 px-6 sm:px-8 py-2 sm:py-2.5 rounded-full font-black text-xs sm:text-sm md:text-base shadow-[0_0_15px_rgba(140,201,233,0.3)]' : 'border border-white/20 text-gray-400 px-5 sm:px-6 py-2 sm:py-2.5 rounded-full font-bold text-xs sm:text-sm md:text-base hover:border-white/50 hover:text-white' }}">
                                <span class="material-icons-round text-sm sm:text-base align-middle mr-1">map</span> 
                                {{ $w->nama_wilayah }}
                            </button>
                        @endforeach
                    </div>
                </div>

                @foreach($wilayahs as $index => $w)
                    <div id="content-{{ $index }}" class="wilayah-content {{ $index !== 0 ? 'hidden' : '' }} transition-opacity duration-500 ease-in-out">
                        
                        @if($w->bagian->count() > 0)
                            @foreach($w->bagian as $b)
                                <div class="mb-10 sm:mb-14">
                                    <div class="flex items-center gap-4 mb-6 sm:mb-8">
                                        <h3 class="text-lg sm:text-xl md:text-2xl font-black text-kkpbf font-sans uppercase tracking-widest">
                                            Area <span class="text-kkpBlue">{{ $b->nama_bagian }}</span>
                                        </h3>
                                        <div class="flex-1 h-px bg-gradient-to-r from-white/20 to-transparent"></div>
                                    </div>

                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6">
                                        
                                        @foreach($b->kota as $k)
                                            <div class="bg-[#262626]/80 backdrop-blur-sm border border-white/5 rounded-2xl sm:rounded-3xl p-5 sm:p-6 hover:bg-white/5 hover:border-kkpBlue/30 transition-all duration-300 shadow-lg group relative overflow-hidden">
                                                
                                                <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-kkpBlue to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                                                <div class="flex items-center gap-3 mb-4 sm:mb-5 pb-4 sm:pb-5 border-b border-white/10">
                                                    <div class="w-10 h-10 sm:w-12 sm:h-12 bg-white/5 border border-white/10 rounded-xl sm:rounded-2xl flex items-center justify-center text-kkpBlue group-hover:bg-kkpBlue group-hover:text-kkpDark transition-colors">
                                                        <span class="material-icons-round text-lg sm:text-xl">location_city</span>
                                                    </div>
                                                    <h4 class="text-base sm:text-lg font-bold text-kkpbf font-sans uppercase tracking-wide">
                                                        {{ $k->nama_kota }}
                                                    </h4>
                                                </div>

                                                @if($k->agen->count() > 0)
                                                    <ul class="space-y-3">
                                                        @foreach($k->agen as $a)
                                                            <li class="flex items-start gap-3 group/agen cursor-default">
                                                                <span class="material-icons-round text-gray-500 text-sm sm:text-base mt-0.5 group-hover/agen:text-kkpBlue transition-colors">storefront</span>
                                                                <span class="text-[11px] sm:text-xs md:text-sm text-gray-300 font-inter group-hover/agen:text-white transition-colors leading-tight pt-0.5">
                                                                    {{ $a->nama_agen }}
                                                                </span>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @else
                                                    <div class="flex items-center gap-2 text-gray-500 italic mt-2">
                                                        <span class="material-icons-round text-sm">info</span>
                                                        <span class="text-[10px] sm:text-xs font-inter">Belum ada agen terdaftar.</span>
                                                    </div>
                                                @endif

                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="text-center py-16 bg-white/5 border border-white/10 rounded-3xl">
                                <span class="material-icons-round text-4xl text-gray-500 mb-3">location_off</span>
                                <p class="text-gray-400 font-inter text-sm sm:text-base">Data jaringan agen untuk wilayah ini sedang dalam pembaruan.</p>
                            </div>
                        @endif

                    </div>
                @endforeach
            @else
                <div class="text-center py-20">
                    <h3 class="text-xl font-bold text-gray-400">Belum ada data Wilayah yang ditambahkan.</h3>
                </div>
            @endif

        </div>
    </main>

    @include('template.footer')

    <script>
        function switchWilayah(index) {
            // Sembunyikan semua konten wilayah
            const allContents = document.querySelectorAll('.wilayah-content');
            allContents.forEach(el => {
                el.classList.add('hidden');
                el.classList.remove('opacity-100');
                el.classList.add('opacity-0');
            });

            // Tampilkan konten wilayah yang diklik
            const targetContent = document.getElementById('content-' + index);
            targetContent.classList.remove('hidden');
            setTimeout(() => {
                targetContent.classList.remove('opacity-0');
                targetContent.classList.add('opacity-100');
            }, 50);

            // Reset styling tab menjadi tidak aktif (abu-abu transparan)
            const allTabs = document.querySelectorAll('.tab-btn');
            const inactiveClass = "tab-btn snap-center shrink-0 border border-white/20 text-gray-400 px-5 sm:px-6 py-2 sm:py-2.5 rounded-full font-bold text-xs sm:text-sm md:text-base hover:border-white/50 hover:text-white transition-all whitespace-nowrap focus:outline-none".split(" ");
            
            allTabs.forEach(el => {
                el.className = ""; 
                el.classList.add(...inactiveClass);
            });

            // Ubah styling tab yang diklik menjadi aktif (biru nyala)
            const activeTab = document.getElementById('tab-btn-' + index);
            const activeClass = "tab-btn snap-center shrink-0 border-2 border-kkpBlue text-kkpBlue bg-kkpBlue/5 px-6 sm:px-8 py-2 sm:py-2.5 rounded-full font-black text-xs sm:text-sm md:text-base shadow-[0_0_15px_rgba(140,201,233,0.3)] transition-all whitespace-nowrap focus:outline-none".split(" ");
            
            activeTab.className = ""; 
            activeTab.classList.add(...activeClass);

            // Geser tab otomatis agar posisi yang diklik berada di tengah layar HP
            activeTab.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
        }
    </script>
</body>
</html>