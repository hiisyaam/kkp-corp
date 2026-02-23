<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rute {{ $wilayah->nama_wilayah }} | KKP Corp</title>

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
                    colors: { kkpDark: "#262626", kkpBlue: "#8cc9e9", kkpBlueDark: "#5baacf", kkpbf:"#bfbfbf" },
                    fontFamily: { sans: ["Montserrat", "sans-serif"], inter: ["Inter", "sans-serif"] },
                },
            },
        };
    </script>
    <style>
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        .subnav-scroll::-webkit-scrollbar { height: 3px; }
        .subnav-scroll::-webkit-scrollbar-track { background: rgba(255, 255, 255, 0.05); border-radius: 10px; }
        .subnav-scroll::-webkit-scrollbar-thumb { background: rgba(140, 201, 233, 0.6); border-radius: 10px; }
        @media (min-width: 768px) { .subnav-scroll::-webkit-scrollbar { display: none; } }
    </style>
</head>

<body class="bg-[#1c1c1c] text-white font-sans antialiased overflow-x-hidden flex flex-col min-h-screen">

    @include('template.nav')

    <main class="flex-grow">
        
        <section class="relative w-full pt-32 pb-16 lg:pt-40 lg:pb-24 bg-kkpDark overflow-hidden flex items-center justify-center">
            <img src="{{ asset('asset/image/kkp-hero.png') }}" alt="Background" class="absolute inset-0 w-full h-full object-cover opacity-20 object-center">
            <div class="absolute inset-0 bg-gradient-to-t from-[#1c1c1c] via-kkpDark/80 to-transparent"></div>

            <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mt-8 sm:mt-0">
                <a href="/perjalanan" class="inline-flex items-center gap-2 text-gray-400 hover:text-kkpBlue transition-colors font-inter text-xs sm:text-sm mb-4">
                    <span class="material-icons-round text-sm">arrow_back</span> Kembali ke Wilayah
                </a>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-kkpbf font-sans uppercase italic tracking-wide drop-shadow-2xl mb-4">
                    RUTE <span class="text-kkpBlue">{{ $wilayah->nama_wilayah }}</span>
                </h1>
                <p class="text-white font-inter text-xs sm:text-sm md:text-base max-w-2xl mx-auto drop-shadow-md">
                    Jadwal keberangkatan dan informasi trayek lengkap untuk wilayah {{ $wilayah->nama_wilayah }}.
                </p>
            </div>
        </section>

        <section class="w-full relative bg-[#1c1c1c]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
                
                @if($wilayah->lineInduk->count() > 0)
                    <div class="relative w-full flex items-center justify-center mb-10 sm:mb-16 group">
                        <button onclick="scrollTabs('left')" class="hidden md:flex w-10 h-10 rounded-full bg-white/5 border border-white/10 items-center justify-center hover:bg-kkpBlue hover:border-kkpBlue hover:text-kkpDark transition-all text-gray-400 absolute left-0 z-10 shadow-lg">
                            <span class="material-icons-round">chevron_left</span>
                        </button>

                        <div id="tab-container" class="flex space-x-3 overflow-x-auto subnav-scroll pb-3 px-4 w-full md:w-[90%] snap-x snap-mandatory scroll-smooth">
                            @foreach($wilayah->lineInduk as $index => $induk)
                                <button onclick="switchLine({{ $index }})" id="tab-btn-{{ $index }}" 
                                    class="tab-btn snap-center shrink-0 transition-all whitespace-nowrap focus:outline-none flex flex-col items-center justify-center
                                    {{ $index === 0 ? 'border-2 border-kkpBlue bg-kkpBlue/5 px-6 sm:px-8 py-2 sm:py-3 rounded-2xl shadow-[0_0_15px_rgba(140,201,233,0.3)]' : 'border border-white/10 bg-white/5 px-5 sm:px-6 py-2 sm:py-3 rounded-2xl hover:border-white/30' }}">
                                    <span class="text-[10px] sm:text-xs font-bold uppercase tracking-widest {{ $index === 0 ? 'text-white' : 'text-gray-400' }} line-kode">{{ $induk->kode_line }}</span>
                                </button>
                            @endforeach
                        </div>

                        <button onclick="scrollTabs('right')" class="hidden md:flex w-10 h-10 rounded-full bg-white/5 border border-white/10 items-center justify-center hover:bg-kkpBlue hover:border-kkpBlue hover:text-kkpDark transition-all text-gray-400 absolute right-0 z-10 shadow-lg">
                            <span class="material-icons-round">chevron_right</span>
                        </button>
                    </div>

                    @foreach($wilayah->lineInduk as $index => $induk)
                        <div id="content-{{ $index }}" class="line-content {{ $index !== 0 ? 'hidden' : '' }} transition-opacity duration-500 ease-in-out pb-20">
                            
                            @if($induk->lineDetail->count() > 0)
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                                    @foreach($induk->lineDetail as $rute)
                                        <div class="bg-[#262626]/80 backdrop-blur-md border border-white/10 hover:border-kkpBlue/30 rounded-2xl sm:rounded-3xl p-5 sm:p-6 transition-all duration-300 group flex flex-col sm:flex-row gap-4 items-center sm:items-stretch relative overflow-hidden shadow-lg">
                                            
                                            <div class="absolute inset-0 bg-gradient-to-r from-kkpBlue/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none"></div>

                                            <div class="flex flex-col items-center justify-center shrink-0 w-full sm:w-32 border-b sm:border-b-0 sm:border-r border-white/10 pb-4 sm:pb-0 sm:pr-4 relative z-10 text-center">
                                                <span class="material-icons-round text-kkpBlue text-xl sm:text-2xl mb-1">schedule</span>
                                                <span class="text-sm sm:text-base font-black text-kkpbf font-sans leading-tight px-2">{{ $rute->waktu_berangkat }}</span>
                                            </div>

                                            <div class="flex-1 flex flex-col justify-center text-center sm:text-left relative z-10 w-full">
                                                
                                                <div class="mb-2">
                                                    <span class="inline-flex items-center bg-kkpBlue/10 border border-kkpBlue/30 text-kkpBlue text-[9px] sm:text-[10px] font-bold px-2.5 py-1 rounded-md uppercase tracking-wider">
                                                        {{ $rute->kelas->nama_kelas ?? 'Reguler' }}
                                                    </span>
                                                </div>

                                                <h4 class="text-base sm:text-lg md:text-xl font-black text-kkpbf font-sans uppercase flex flex-col min-[400px]:flex-row items-center sm:items-start gap-1 min-[400px]:gap-2 mb-1.5 leading-tight">
                                                    <span>{{ $rute->asal }}</span>
                                                    <span class="material-icons-round text-gray-500 text-sm sm:text-base hidden min-[400px]:inline-block">arrow_forward</span>
                                                    <span class="material-icons-round text-gray-500 text-sm sm:text-base min-[400px]:hidden">arrow_downward</span>
                                                    <span>{{ $rute->tujuan }}</span>
                                                </h4>
                                                
                                                @if($rute->via)
                                                    <div class="flex items-start justify-center sm:justify-start gap-1.5 text-gray-400 mt-1">
                                                        <span class="material-icons-round text-[14px] sm:text-[16px] mt-[1px]">route</span>
                                                        <p class="text-[10px] sm:text-xs font-inter leading-relaxed max-w-[95%]">Via: {{ $rute->via }}</p>
                                                    </div>
                                                @endif
                                            </div>

                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="text-center py-16 bg-white/5 border border-white/10 rounded-3xl">
                                    <span class="material-icons-round text-4xl text-gray-500 mb-3">bus_alert</span>
                                    <p class="text-gray-400 font-inter text-sm sm:text-base">Belum ada rute perjalanan untuk jalur ini.</p>
                                </div>
                            @endif

                        </div>
                    @endforeach

                @else
                    <div class="text-center py-20">
                        <h3 class="text-xl font-bold text-gray-400">Belum ada jalur rute untuk wilayah ini.</h3>
                    </div>
                @endif

            </div>
        </section>

    </main>

    @include('template.footer')

    <script>
        const tabContainer = document.getElementById('tab-container');
        function scrollTabs(direction) {
            const scrollAmount = 250; 
            if (direction === 'left') {
                tabContainer.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            } else {
                tabContainer.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            }
        }

        function switchLine(index) {
            // Sembunyikan konten lama
            const allContents = document.querySelectorAll('.line-content');
            allContents.forEach(el => {
                el.classList.add('hidden');
                el.classList.remove('opacity-100');
                el.classList.add('opacity-0');
            });

            // Munculkan konten baru
            const targetContent = document.getElementById('content-' + index);
            targetContent.classList.remove('hidden');
            setTimeout(() => {
                targetContent.classList.remove('opacity-0');
                targetContent.classList.add('opacity-100');
            }, 50);

            // Reset Tab styling
            const allTabs = document.querySelectorAll('.tab-btn');
            const inactiveClass = "border border-white/10 bg-white/5 px-5 sm:px-6 py-2 sm:py-3 rounded-2xl hover:border-white/30".split(" ");
            const inactiveTextClass = "text-gray-400";
            
            allTabs.forEach(el => {
                el.className = "tab-btn snap-center shrink-0 transition-all whitespace-nowrap focus:outline-none flex flex-col items-center justify-center"; 
                el.classList.add(...inactiveClass);
                el.querySelector('.line-kode').classList.replace('text-white', inactiveTextClass);
            });

            // Set Active Tab styling
            const activeTab = document.getElementById('tab-btn-' + index);
            const activeClass = "border-2 border-kkpBlue bg-kkpBlue/5 px-6 sm:px-8 py-2 sm:py-3 rounded-2xl shadow-[0_0_15px_rgba(140,201,233,0.3)]".split(" ");
            
            activeTab.className = "tab-btn snap-center shrink-0 transition-all whitespace-nowrap focus:outline-none flex flex-col items-center justify-center"; 
            activeTab.classList.add(...activeClass);
            activeTab.querySelector('.line-kode').classList.replace(inactiveTextClass, 'text-white');

            activeTab.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
        }
    </script>
</body>
</html>