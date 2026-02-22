<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kelas Armada | KKP Corp</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        kkpDark: "#262626",
                        kkpBlue: "#8cc9e9",
                        kkpBlueDark: "#5baacf",
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
        /* Sembunyikan scrollbar di Desktop */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        
        /* Custom Scrollbar untuk Mobile Tab */
        .subnav-scroll::-webkit-scrollbar {
            height: 3px;
        }
        .subnav-scroll::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
        }
        .subnav-scroll::-webkit-scrollbar-thumb {
            background: rgba(140, 201, 233, 0.6);
            border-radius: 10px;
        }
        @media (min-width: 768px) {
            .subnav-scroll::-webkit-scrollbar {
                display: none;
            }
        }
    </style>
</head>

<body class="bg-kkpDark text-white font-sans antialiased overflow-x-hidden flex flex-col min-h-screen">

    @include('template.nav')

    <main class="flex-grow pt-28 sm:pt-32 lg:pt-40 pb-20 relative bg-[#1c1c1c]">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            
            <div class="w-full flex justify-center mb-8 sm:mb-10 relative">
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-3/4 h-[200px] bg-kkpBlue/10 blur-[80px] rounded-full pointer-events-none"></div>
                <img src="{{ asset('asset/image/kkp-hero.png') }}" alt="Armada KKP" class="w-full max-w-4xl h-auto object-contain relative z-10 drop-shadow-2xl mix-blend-lighten" style="-webkit-mask-image: linear-gradient(to bottom, black 80%, transparent 100%); mask-image: linear-gradient(to bottom, black 80%, transparent 100%);">
            </div>

            <div class="relative w-full flex items-center justify-center mb-10 sm:mb-16 group">
                <button onclick="scrollTabs('left')" class="hidden md:flex w-10 h-10 rounded-full bg-white/5 border border-white/10 items-center justify-center hover:bg-kkpBlue hover:border-kkpBlue hover:text-kkpDark transition-all text-gray-400 absolute left-0 z-10 shadow-lg">
                    <span class="material-icons-round">chevron_left</span>
                </button>

                <div id="tab-container" class="flex space-x-3 overflow-x-auto subnav-scroll pb-3 sm:pb-4 px-4 w-full md:w-[90%] snap-x snap-mandatory scroll-smooth">
                    @foreach($kelas as $index => $k)
                        <button onclick="switchClass({{ $index }})" id="tab-btn-{{ $index }}" 
                            class="tab-btn snap-center shrink-0 transition-all whitespace-nowrap focus:outline-none 
                            {{ $index === 0 ? 'border-2 border-kkpBlue text-kkpBlue bg-kkpBlue/5 px-6 sm:px-8 py-2 sm:py-2.5 rounded-full font-black text-xs sm:text-sm md:text-base shadow-[0_0_15px_rgba(140,201,233,0.3)]' : 'border border-white/20 text-gray-400 px-5 sm:px-6 py-2 sm:py-2.5 rounded-full font-bold text-xs sm:text-sm md:text-base hover:border-white/50 hover:text-white' }}">
                            {{ $k->nama_kelas }}
                        </button>
                    @endforeach
                </div>

                <button onclick="scrollTabs('right')" class="hidden md:flex w-10 h-10 rounded-full bg-white/5 border border-white/10 items-center justify-center hover:bg-kkpBlue hover:border-kkpBlue hover:text-kkpDark transition-all text-gray-400 absolute right-0 z-10 shadow-lg">
                    <span class="material-icons-round">chevron_right</span>
                </button>
            </div>

            <div class="text-center mb-6 sm:mb-8">
                <h2 class="text-2xl md:text-3xl font-black text-white font-sans uppercase tracking-widest drop-shadow-md">
                    Fasilitas <span class="text-kkpBlue">Kelas Armada</span>
                </h2>
            </div>

            @php
                $deskripsiMap = [
                    'ECONOMY' => [
                        'tagline' => 'Perjalanan Ekonomis Tetap Nyaman',
                        'deskripsi' => 'Nikmati perjalanan dengan harga terjangkau tanpa mengorbankan standar kenyamanan dan keamanan standar KKP.'
                    ],
                    'BUSINESS' => [
                        'tagline' => 'Kenyamanan Ekstra untuk Perjalanan Anda',
                        'deskripsi' => 'Fasilitas lebih lengkap dengan ruang kaki yang lega untuk memastikan Anda beristirahat dengan baik.'
                    ],
                    'PREMIUM' => [
                        'tagline' => 'Layanan Prioritas di Setiap Perjalanan',
                        'deskripsi' => 'Hadir dengan privasi lebih dan fasilitas hiburan lengkap yang menemani perjalanan panjang Anda.'
                    ],
                    'EXECUTIVE' => [
                        'tagline' => 'Pemandangan Luas Selama Perjalanan',
                        'deskripsi' => 'Tempat terbaik untuk menikmati pemandangan yang dikombinasikan dengan kursi super nyaman untuk memanjakan Anda.'
                    ],
                    'SUPER EXE' => [
                        'tagline' => 'Kemewahan di Atas Rata-rata',
                        'deskripsi' => 'Ruang pribadi eksklusif dengan konfigurasi kursi renggang untuk kenyamanan istirahat paripurna.'
                    ],
                    'PRIORITY' => [
                        'tagline' => 'Eksklusivitas Kelas Premium Tanpa Batas',
                        'deskripsi' => 'Kelas tertinggi dengan fasilitas bagaikan hotel berjalan. Privasi penuh dan pelayanan pramugari eksklusif.'
                    ]
                ];
            @endphp

            @foreach($kelas as $index => $k)
                @php
                    $currentTagline = $deskripsiMap[$k->nama_kelas]['tagline'] ?? 'Nikmati Perjalanan Eksklusif Bersama Kami';
                    $currentDeskripsi = $deskripsiMap[$k->nama_kelas]['deskripsi'] ?? 'Fasilitas premium dan kenyamanan maksimal yang dirancang khusus untuk memenuhi standar tinggi perjalanan Anda.';
                    
                    $denahFileName = 'denah-' . strtolower(str_replace(' ', '-', $k->nama_kelas)) . '.png';
                @endphp

                <div id="content-{{ $index }}" class="class-content {{ $index !== 0 ? 'hidden' : '' }} transition-opacity duration-500 ease-in-out">
                    
                    <div class="relative w-full aspect-[4/3] sm:aspect-[16/9] lg:h-[500px] rounded-2xl sm:rounded-3xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)] border border-white/10 mb-8 sm:mb-12 group">
                        
                        <img id="gallery-image" src="{{ asset('asset/image/kkp-hero.png') }}" alt="Interior {{ $k->nama_kelas }}" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-[1.03] transition-all duration-500 ease-in-out">
                        
                        <div class="absolute inset-0 bg-gradient-to-t from-kkpDark via-kkpDark/60 to-transparent pointer-events-none"></div>

                        <button onclick="prevImage()" class="absolute left-3 sm:left-6 top-1/2 -translate-y-1/2 w-8 h-8 sm:w-12 sm:h-12 rounded-full border border-white/50 text-white flex items-center justify-center bg-black/40 backdrop-blur-sm hover:bg-kkpBlue hover:border-kkpBlue hover:text-kkpDark hover:scale-110 transition-all opacity-80 hover:opacity-100 z-30 focus:outline-none">
                            <span class="material-icons-round text-sm sm:text-2xl">arrow_back_ios_new</span>
                        </button>

                        <button onclick="nextImage()" class="absolute right-3 sm:right-6 top-1/2 -translate-y-1/2 w-8 h-8 sm:w-12 sm:h-12 rounded-full border border-white/50 text-white flex items-center justify-center bg-black/40 backdrop-blur-sm hover:bg-kkpBlue hover:border-kkpBlue hover:text-kkpDark hover:scale-110 transition-all opacity-80 hover:opacity-100 z-30 focus:outline-none">
                            <span class="material-icons-round text-sm sm:text-2xl pl-1">arrow_forward_ios</span>
                        </button>

                        <div class="absolute bottom-0 left-0 w-full p-5 sm:p-8 md:p-10 flex flex-col sm:flex-row justify-between items-start sm:items-end gap-3 sm:gap-4 z-20 pointer-events-none">
                            
                            <div class="pointer-events-auto max-w-2xl pr-4">
                                <h3 class="text-xl min-[375px]:text-3xl md:text-4xl font-black text-white font-sans mb-1 sm:mb-2 drop-shadow-lg">
                                    {{ $k->nama_kelas }}
                                </h3>
                                <p class="text-[10px] min-[375px]:text-xs sm:text-base font-bold text-kkpBlue font-inter mb-1 sm:mb-2 drop-shadow-md">
                                    {{ $currentTagline }}
                                </p>
                                <p class="text-[10px] sm:text-xs text-gray-300 font-inter leading-relaxed drop-shadow-md mt-1">
                                    {{ $currentDeskripsi }}
                                </p>
                            </div>

                            <div class="pointer-events-auto shrink-0 mt-2 sm:mt-0">
                                <button onclick="openModal({{ $index }})" class="border border-white text-white bg-black/40 backdrop-blur-md px-3 sm:px-6 py-2 sm:py-2.5 rounded-full font-bold text-[10px] sm:text-sm hover:bg-white hover:text-kkpDark hover:scale-105 transition-all inline-flex items-center gap-1.5 sm:gap-2 focus:outline-none shadow-lg">
                                    <span class="material-icons-round text-sm sm:text-base">view_module</span> Denah Seat
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="w-full bg-[#262626] rounded-2xl sm:rounded-3xl p-5 sm:p-8 md:p-10 border border-white/5 shadow-xl">
                        
                        <div class="flex flex-wrap justify-center gap-3 sm:gap-4">
                            
                            <div class="w-20 h-24 sm:w-28 sm:h-28 flex flex-col items-center justify-center p-2 bg-white/5 rounded-2xl hover:bg-white/10 hover:-translate-y-1 transition-all border border-transparent hover:border-white/10 group">
                                <span class="material-icons-round text-2xl sm:text-3xl text-gray-300 group-hover:text-white mb-1 sm:mb-2">ac_unit</span>
                                <span class="text-[9px] sm:text-[10px] font-bold font-sans uppercase tracking-wider text-gray-400 group-hover:text-kkpBlue text-center leading-tight">AC</span>
                            </div>

                            @if($k->seat_config)
                            <div class="w-20 h-24 sm:w-28 sm:h-28 flex flex-col items-center justify-center p-2 bg-white/5 rounded-2xl hover:bg-white/10 hover:-translate-y-1 transition-all border border-transparent hover:border-white/10 group">
                                <span class="material-icons-round text-2xl sm:text-3xl text-gray-300 group-hover:text-white mb-1 sm:mb-2">airline_seat_recline_normal</span>
                                <span class="text-[8px] sm:text-[10px] font-bold font-sans uppercase tracking-wider text-gray-400 group-hover:text-kkpBlue text-center leading-tight px-1">Config<br>{{ $k->seat_config }}</span>
                            </div>
                            @endif

                            @if($k->total_seat)
                            <div class="w-20 h-24 sm:w-28 sm:h-28 flex flex-col items-center justify-center p-2 bg-white/5 rounded-2xl hover:bg-white/10 hover:-translate-y-1 transition-all border border-transparent hover:border-white/10 group">
                                <span class="material-icons-round text-2xl sm:text-3xl text-gray-300 group-hover:text-white mb-1 sm:mb-2">event_seat</span>
                                <span class="text-[9px] sm:text-[10px] font-bold font-sans uppercase tracking-wider text-gray-400 group-hover:text-kkpBlue text-center leading-tight px-1">{{ $k->total_seat }}<br>Seat</span>
                            </div>
                            @endif

                            @if($k->legrest)
                            <div class="w-20 h-24 sm:w-28 sm:h-28 flex flex-col items-center justify-center p-2 bg-white/5 rounded-2xl hover:bg-white/10 hover:-translate-y-1 transition-all border border-transparent hover:border-white/10 group">
                                <span class="material-icons-round text-2xl sm:text-3xl text-gray-300 group-hover:text-white mb-1 sm:mb-2">airline_seat_legroom_extra</span>
                                <span class="text-[9px] sm:text-[10px] font-bold font-sans uppercase tracking-wider text-gray-400 group-hover:text-kkpBlue text-center leading-tight px-1">Leg<br>Rest</span>
                            </div>
                            @endif

                            @if($k->avod)
                            <div class="w-20 h-24 sm:w-28 sm:h-28 flex flex-col items-center justify-center p-2 bg-white/5 rounded-2xl hover:bg-white/10 hover:-translate-y-1 transition-all border border-transparent hover:border-white/10 group">
                                <span class="material-icons-round text-2xl sm:text-3xl text-gray-300 group-hover:text-white mb-1 sm:mb-2">tv</span>
                                <span class="text-[9px] sm:text-[10px] font-bold font-sans uppercase tracking-wider text-gray-400 group-hover:text-kkpBlue text-center leading-tight">AVOD</span>
                            </div>
                            @endif

                            @if($k->toilet)
                            <div class="w-20 h-24 sm:w-28 sm:h-28 flex flex-col items-center justify-center p-2 bg-white/5 rounded-2xl hover:bg-white/10 hover:-translate-y-1 transition-all border border-transparent hover:border-white/10 group">
                                <span class="material-icons-round text-2xl sm:text-3xl text-gray-300 group-hover:text-white mb-1 sm:mb-2">wc</span>
                                <span class="text-[9px] sm:text-[10px] font-bold font-sans uppercase tracking-wider text-gray-400 group-hover:text-kkpBlue text-center leading-tight">Toilet</span>
                            </div>
                            @endif

                            @if($k->smoking_room)
                            <div class="w-20 h-24 sm:w-28 sm:h-28 flex flex-col items-center justify-center p-2 bg-white/5 rounded-2xl hover:bg-white/10 hover:-translate-y-1 transition-all border border-transparent hover:border-white/10 group">
                                <span class="material-icons-round text-2xl sm:text-3xl text-gray-300 group-hover:text-white mb-1 sm:mb-2">smoking_rooms</span>
                                <span class="text-[8px] sm:text-[10px] font-bold font-sans uppercase tracking-wider text-gray-400 group-hover:text-kkpBlue text-center leading-tight px-1">Smoking<br>Room</span>
                            </div>
                            @endif

                            @if($k->dispenser)
                            <div class="w-20 h-24 sm:w-28 sm:h-28 flex flex-col items-center justify-center p-2 bg-white/5 rounded-2xl hover:bg-white/10 hover:-translate-y-1 transition-all border border-transparent hover:border-white/10 group">
                                <span class="material-icons-round text-2xl sm:text-3xl text-gray-300 group-hover:text-white mb-1 sm:mb-2">water_drop</span>
                                <span class="text-[9px] sm:text-[10px] font-bold font-sans uppercase tracking-wider text-gray-400 group-hover:text-kkpBlue text-center leading-tight px-1">Air<br>Mineral</span>
                            </div>
                            @endif

                            @if($k->mini_bar)
                            <div class="w-20 h-24 sm:w-28 sm:h-28 flex flex-col items-center justify-center p-2 bg-white/5 rounded-2xl hover:bg-white/10 hover:-translate-y-1 transition-all border border-transparent hover:border-white/10 group">
                                <span class="material-icons-round text-2xl sm:text-3xl text-gray-300 group-hover:text-white mb-1 sm:mb-2">local_bar</span>
                                <span class="text-[9px] sm:text-[10px] font-bold font-sans uppercase tracking-wider text-gray-400 group-hover:text-kkpBlue text-center leading-tight px-1">Mini<br>Bar</span>
                            </div>
                            @endif

                            @if($k->pillow)
                            <div class="w-20 h-24 sm:w-28 sm:h-28 flex flex-col items-center justify-center p-2 bg-white/5 rounded-2xl hover:bg-white/10 hover:-translate-y-1 transition-all border border-transparent hover:border-white/10 group">
                                <span class="material-icons-round text-2xl sm:text-3xl text-gray-300 group-hover:text-white mb-1 sm:mb-2">airline_seat_individual_suite</span>
                                <span class="text-[9px] sm:text-[10px] font-bold font-sans uppercase tracking-wider text-gray-400 group-hover:text-kkpBlue text-center leading-tight">Bantal</span>
                            </div>
                            @endif

                            @if($k->blanket)
                            <div class="w-20 h-24 sm:w-28 sm:h-28 flex flex-col items-center justify-center p-2 bg-white/5 rounded-2xl hover:bg-white/10 hover:-translate-y-1 transition-all border border-transparent hover:border-white/10 group">
                                <span class="material-icons-round text-2xl sm:text-3xl text-gray-300 group-hover:text-white mb-1 sm:mb-2">bed</span>
                                <span class="text-[9px] sm:text-[10px] font-bold font-sans uppercase tracking-wider text-gray-400 group-hover:text-kkpBlue text-center leading-tight">Selimut</span>
                            </div>
                            @endif

                        </div>
                        
                        <div class="mt-6 sm:mt-8 text-center">
                            <p class="text-[9px] sm:text-[11px] text-gray-500 font-inter italic">*Ketersediaan fasilitas dapat berubah sewaktu-waktu</p>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </main>

    @include('template.footer')
    @foreach($kelas as $index => $k)
        @php
            $denahFileName = 'denah-' . strtolower(str_replace(' ', '-', $k->nama_kelas)) . '.png';
        @endphp
        <div id="modal-{{ $index }}" class="fixed inset-0 z-[9999] hidden items-center justify-center p-4 sm:p-6 bg-black/80 backdrop-blur-sm transition-opacity">
            
            <div class="relative w-full max-w-3xl bg-[#1c1c1c] border border-white/10 rounded-2xl sm:rounded-3xl p-5 sm:p-10 shadow-[0_0_50px_rgba(0,0,0,0.8)] flex flex-col items-center max-h-[85vh] overflow-y-auto no-scrollbar">
                
                <button onclick="closeModal({{ $index }})" class="absolute top-4 right-4 sm:top-6 sm:right-6 w-8 h-8 sm:w-10 sm:h-10 bg-white/5 border border-white/10 rounded-full flex items-center justify-center text-gray-400 hover:bg-red-500 hover:text-white hover:border-red-500 transition-all focus:outline-none z-10">
                    <span class="material-icons-round text-lg sm:text-2xl">close</span>
                </button>

                <h3 class="text-lg sm:text-2xl font-black text-white font-sans uppercase italic tracking-wide mb-4 sm:mb-6 mt-2 sm:mt-0">
                    Denah Seat <span class="text-kkpBlue">{{ $k->nama_kelas }}</span>
                </h3>

                <div class="w-full bg-white/5 rounded-xl border border-white/5 p-2 sm:p-4 flex justify-center">
                    <img src="{{ asset('asset/image/' . $denahFileName) }}" 
                         alt="Denah {{ $k->nama_kelas }}" 
                         class="max-w-full h-auto max-h-[50vh] object-contain rounded-lg">
                </div>
            </div>
        </div>
    @endforeach

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

        function switchClass(index) {
            const allContents = document.querySelectorAll('.class-content');
            allContents.forEach(el => {
                el.classList.add('hidden');
                el.classList.remove('opacity-100');
                el.classList.add('opacity-0');
            });

            const targetContent = document.getElementById('content-' + index);
            targetContent.classList.remove('hidden');
            setTimeout(() => {
                targetContent.classList.remove('opacity-0');
                targetContent.classList.add('opacity-100');
            }, 50);

            const allTabs = document.querySelectorAll('.tab-btn');
            const inactiveClass = "tab-btn snap-center shrink-0 border border-white/20 text-gray-400 px-5 sm:px-6 py-2 sm:py-2.5 rounded-full font-bold text-xs sm:text-sm md:text-base hover:border-white/50 hover:text-white transition-all whitespace-nowrap focus:outline-none".split(" ");
            
            allTabs.forEach(el => {
                el.className = ""; 
                el.classList.add(...inactiveClass);
            });

            const activeTab = document.getElementById('tab-btn-' + index);
            const activeClass = "tab-btn snap-center shrink-0 border-2 border-kkpBlue text-kkpBlue bg-kkpBlue/5 px-6 sm:px-8 py-2 sm:py-2.5 rounded-full font-black text-xs sm:text-sm md:text-base shadow-[0_0_15px_rgba(140,201,233,0.3)] transition-all whitespace-nowrap focus:outline-none".split(" ");
            
            activeTab.className = ""; 
            activeTab.classList.add(...activeClass);

            activeTab.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
        }

        function openModal(index) {
            const modal = document.getElementById('modal-' + index);
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden'; 
        }

        function closeModal(index) {
            const modal = document.getElementById('modal-' + index);
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = 'auto'; 
        }
    </script>
</body>
</html>