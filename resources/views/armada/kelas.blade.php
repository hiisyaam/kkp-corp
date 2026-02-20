<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kelas Armada | KKP Corp</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Montserrat:wght@400;600;700;800&display=swap"
        rel="stylesheet">

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
                        sans: ["Montserrat", "sans-serif"], // Utama
                        inter: ["Inter", "sans-serif"],     // Deskripsi / Detail
                    },
                },
            },
        };
    </script>
    <style>
        /* Sembunyikan scrollbar bawaan agar tab terlihat bersih */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="bg-kkpDark text-white font-sans antialiased overflow-x-hidden flex flex-col min-h-screen">

    @include('template.nav')

    <main class="flex-grow pt-32 lg:pt-40 pb-20 relative bg-[#1c1c1c]">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            
            <div class="w-full flex justify-center mb-10 relative">
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-3/4 h-[200px] bg-kkpBlue/10 blur-[80px] rounded-full pointer-events-none"></div>
                <img src="{{ asset('asset/image/kkp-hero.png') }}" alt="Armada Executive" class="w-full max-w-4xl h-auto object-contain relative z-10 drop-shadow-2xl mix-blend-lighten" style="-webkit-mask-image: linear-gradient(to bottom, black 80%, transparent 100%); mask-image: linear-gradient(to bottom, black 80%, transparent 100%);">
            </div>

            <div class="relative w-full flex items-center justify-center mb-12 sm:mb-16 group">
                <button onclick="scrollTabs('left')" class="hidden md:flex w-10 h-10 rounded-full bg-white/5 border border-white/10 items-center justify-center hover:bg-kkpBlue hover:border-kkpBlue hover:text-kkpDark transition-all text-gray-400 absolute left-0 z-10 shadow-lg">
                    <span class="material-icons-round">chevron_left</span>
                </button>

                <div id="tab-container" class="flex space-x-3 overflow-x-auto no-scrollbar py-4 px-4 w-full md:w-[90%] snap-x snap-mandatory scroll-smooth">
                    <button class="snap-center shrink-0 border border-white/20 text-gray-400 px-6 py-2.5 rounded-full font-bold text-sm md:text-base hover:border-white/50 hover:text-white transition-all whitespace-nowrap focus:outline-none">Economy</button>
                    <button class="snap-center shrink-0 border border-white/20 text-gray-400 px-6 py-2.5 rounded-full font-bold text-sm md:text-base hover:border-white/50 hover:text-white transition-all whitespace-nowrap focus:outline-none">Business/Premium</button>
                    
                    <button class="snap-center shrink-0 border-2 border-kkpBlue text-kkpBlue bg-kkpBlue/5 px-8 py-2.5 rounded-full font-black text-sm md:text-base shadow-[0_0_15px_rgba(140,201,233,0.3)] transition-all whitespace-nowrap focus:outline-none">Executive Plus</button>
                    
                    <button class="snap-center shrink-0 border border-white/20 text-gray-400 px-6 py-2.5 rounded-full font-bold text-sm md:text-base hover:border-white/50 hover:text-white transition-all whitespace-nowrap focus:outline-none">Priority</button>
                    <button class="snap-center shrink-0 border border-white/20 text-gray-400 px-6 py-2.5 rounded-full font-bold text-sm md:text-base hover:border-white/50 hover:text-white transition-all whitespace-nowrap focus:outline-none">Imperial</button>
                    <button class="snap-center shrink-0 border border-white/20 text-gray-400 px-6 py-2.5 rounded-full font-bold text-sm md:text-base hover:border-white/50 hover:text-white transition-all whitespace-nowrap focus:outline-none">Suites Compartement</button>
                </div>

                <button onclick="scrollTabs('right')" class="hidden md:flex w-10 h-10 rounded-full bg-white/5 border border-white/10 items-center justify-center hover:bg-kkpBlue hover:border-kkpBlue hover:text-kkpDark transition-all text-gray-400 absolute right-0 z-10 shadow-lg">
                    <span class="material-icons-round">chevron_right</span>
                </button>
            </div>

            <div class="text-center mb-8">
                <h2 class="text-2xl md:text-3xl font-black text-white font-sans uppercase tracking-widest drop-shadow-md">
                    Fasilitas Kelas Armada
                </h2>
            </div>

            <div class="relative w-full aspect-[4/3] sm:aspect-[16/9] lg:h-[500px] rounded-3xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)] border border-white/10 mb-8 sm:mb-12 group">
                
                <img id="gallery-image" src="{{ asset('asset/image/kkp-hero.png') }}" alt="Interior Class" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-[1.03] transition-all duration-500 ease-in-out">
                
                <div class="absolute inset-0 bg-gradient-to-t from-kkpDark via-kkpDark/60 to-transparent pointer-events-none"></div>

                <button onclick="prevImage()" class="absolute left-3 sm:left-6 top-1/2 -translate-y-1/2 w-10 h-10 sm:w-12 sm:h-12 rounded-full border border-white/50 text-white flex items-center justify-center bg-black/40 backdrop-blur-sm hover:bg-kkpBlue hover:border-kkpBlue hover:text-kkpDark hover:scale-110 transition-all opacity-80 hover:opacity-100 z-30 focus:outline-none">
                    <span class="material-icons-round text-lg sm:text-2xl">arrow_back_ios_new</span>
                </button>

                <button onclick="nextImage()" class="absolute right-3 sm:right-6 top-1/2 -translate-y-1/2 w-10 h-10 sm:w-12 sm:h-12 rounded-full border border-white/50 text-white flex items-center justify-center bg-black/40 backdrop-blur-sm hover:bg-kkpBlue hover:border-kkpBlue hover:text-kkpDark hover:scale-110 transition-all opacity-80 hover:opacity-100 z-30 focus:outline-none">
                    <span class="material-icons-round text-lg sm:text-2xl pl-1">arrow_forward_ios</span>
                </button>

                <div class="absolute bottom-6 sm:bottom-10 left-5 sm:left-10 z-20 max-w-2xl pr-4 pointer-events-none">
                    <h3 class="text-2xl min-[375px]:text-3xl md:text-4xl font-black text-white font-sans mb-1 sm:mb-2 drop-shadow-lg">
                        Executive Plus Double Decker
                    </h3>
                    <p class="text-xs sm:text-base font-bold text-kkpBlue font-inter mb-1 sm:mb-2 drop-shadow-md">
                        Pemandangan Luas Selama Perjalanan jadi Milik Anda
                    </p>
                    <p class="text-[10px] sm:text-xs text-gray-300 font-inter leading-relaxed drop-shadow-md hidden sm:block">
                        Tempat terbaik untuk menikmati pemandangan yang dikombinasikan dengan kursi yang nyaman akan memanjakan Anda selama perjalanan.
                    </p>
                </div>

                <div class="absolute bottom-6 sm:bottom-10 right-5 sm:right-10 z-30">
                    <a href="#" class="border-2 border-white text-white bg-black/20 backdrop-blur-md px-4 sm:px-6 py-2 sm:py-2.5 rounded-full font-bold text-[10px] sm:text-sm hover:bg-white hover:text-kkpDark hover:scale-105 transition-all inline-flex items-center gap-2">
                        Denah Seat
                    </a>
                </div>

                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2 z-20">
                    <div id="dot-0" class="w-2 h-2 rounded-full bg-kkpBlue transition-all duration-300"></div>
                    <div id="dot-1" class="w-2 h-2 rounded-full bg-white/40 transition-all duration-300"></div>
                    <div id="dot-2" class="w-2 h-2 rounded-full bg-white/40 transition-all duration-300"></div>
                </div>
            </div>

            <div class="w-full bg-[#262626] rounded-3xl p-5 sm:p-8 md:p-10 border border-white/5 shadow-xl">
                <div class="grid grid-cols-3 min-[375px]:grid-cols-4 md:grid-cols-6 lg:grid-cols-8 xl:grid-cols-12 gap-3 sm:gap-4">
                    
                    <div class="flex flex-col items-center justify-center p-2 h-24 sm:h-28 bg-white/5 rounded-2xl hover:bg-white/10 hover:-translate-y-1 transition-all border border-transparent hover:border-white/10 group">
                        <span class="material-icons-round text-2xl sm:text-3xl text-gray-300 group-hover:text-white mb-1 sm:mb-2">ac_unit</span>
                        <span class="text-[9px] sm:text-[10px] font-bold font-sans uppercase tracking-wider text-gray-400 group-hover:text-kkpBlue text-center leading-tight">AC</span>
                    </div>

                    <div class="flex flex-col items-center justify-center p-2 h-24 sm:h-28 bg-white/5 rounded-2xl hover:bg-white/10 hover:-translate-y-1 transition-all border border-transparent hover:border-white/10 group">
                        <span class="material-icons-round text-2xl sm:text-3xl text-gray-300 group-hover:text-white mb-1 sm:mb-2">tv</span>
                        <span class="text-[9px] sm:text-[10px] font-bold font-sans uppercase tracking-wider text-gray-400 group-hover:text-kkpBlue text-center leading-tight">Entertainment</span>
                    </div>

                    <div class="flex flex-col items-center justify-center p-2 h-24 sm:h-28 bg-white/5 rounded-2xl hover:bg-white/10 hover:-translate-y-1 transition-all border border-transparent hover:border-white/10 group">
                        <span class="material-icons-round text-2xl sm:text-3xl text-gray-300 group-hover:text-white mb-1 sm:mb-2">wc</span>
                        <span class="text-[9px] sm:text-[10px] font-bold font-sans uppercase tracking-wider text-gray-400 group-hover:text-kkpBlue text-center leading-tight">Toilet</span>
                    </div>

                    <div class="flex flex-col items-center justify-center p-2 h-24 sm:h-28 bg-white/5 rounded-2xl hover:bg-white/10 hover:-translate-y-1 transition-all border border-transparent hover:border-white/10 group">
                        <span class="material-icons-round text-2xl sm:text-3xl text-gray-300 group-hover:text-white mb-1 sm:mb-2">bed</span>
                        <span class="text-[9px] sm:text-[10px] font-bold font-sans uppercase tracking-wider text-gray-400 group-hover:text-kkpBlue text-center leading-tight break-words px-1">Bantal &<br>Selimut</span>
                    </div>

                    <div class="flex flex-col items-center justify-center p-2 h-24 sm:h-28 bg-white/5 rounded-2xl hover:bg-white/10 hover:-translate-y-1 transition-all border border-transparent hover:border-white/10 group">
                        <span class="material-icons-round text-2xl sm:text-3xl text-gray-300 group-hover:text-white mb-1 sm:mb-2">tapas</span>
                        <span class="text-[9px] sm:text-[10px] font-bold font-sans uppercase tracking-wider text-gray-400 group-hover:text-kkpBlue text-center leading-tight break-words px-1">Snack On<br>Board</span>
                    </div>

                    <div class="flex flex-col items-center justify-center p-2 h-24 sm:h-28 bg-white/5 rounded-2xl hover:bg-white/10 hover:-translate-y-1 transition-all border border-transparent hover:border-white/10 group">
                        <span class="material-icons-round text-2xl sm:text-3xl text-gray-300 group-hover:text-white mb-1 sm:mb-2">restaurant</span>
                        <span class="text-[9px] sm:text-[10px] font-bold font-sans uppercase tracking-wider text-gray-400 group-hover:text-kkpBlue text-center leading-tight">Makan</span>
                    </div>

                    <div class="flex flex-col items-center justify-center p-2 h-24 sm:h-28 bg-white/5 rounded-2xl hover:bg-white/10 hover:-translate-y-1 transition-all border border-transparent hover:border-white/10 group">
                        <span class="material-icons-round text-2xl sm:text-3xl text-gray-300 group-hover:text-white mb-1 sm:mb-2">water_drop</span>
                        <span class="text-[9px] sm:text-[10px] font-bold font-sans uppercase tracking-wider text-gray-400 group-hover:text-kkpBlue text-center leading-tight px-1">Air Mineral</span>
                    </div>

                    <div class="flex flex-col items-center justify-center p-2 h-24 sm:h-28 bg-white/5 rounded-2xl hover:bg-white/10 hover:-translate-y-1 transition-all border border-transparent hover:border-white/10 group">
                        <span class="material-icons-round text-2xl sm:text-3xl text-gray-300 group-hover:text-white mb-1 sm:mb-2">airline_seat_recline_extra</span>
                        <span class="text-[9px] sm:text-[10px] font-bold font-sans uppercase tracking-wider text-gray-400 group-hover:text-kkpBlue text-center leading-tight break-words px-1">Reclining<br>Seat</span>
                    </div>

                    <div class="flex flex-col items-center justify-center p-2 h-24 sm:h-28 bg-white/5 rounded-2xl hover:bg-white/10 hover:-translate-y-1 transition-all border border-transparent hover:border-white/10 group">
                        <span class="material-icons-round text-2xl sm:text-3xl text-gray-300 group-hover:text-white mb-1 sm:mb-2">airline_seat_legroom_extra</span>
                        <span class="text-[9px] sm:text-[10px] font-bold font-sans uppercase tracking-wider text-gray-400 group-hover:text-kkpBlue text-center leading-tight px-1">Leg Rest</span>
                    </div>

                    <div class="flex flex-col items-center justify-center p-2 h-24 sm:h-28 bg-white/5 rounded-2xl hover:bg-white/10 hover:-translate-y-1 transition-all border border-transparent hover:border-white/10 group">
                        <span class="material-icons-round text-2xl sm:text-3xl text-gray-300 group-hover:text-white mb-1 sm:mb-2">support_agent</span>
                        <span class="text-[9px] sm:text-[10px] font-bold font-sans uppercase tracking-wider text-gray-400 group-hover:text-kkpBlue text-center leading-tight break-words px-1">Layanan<br>Pramugari</span>
                    </div>

                    <div class="flex flex-col items-center justify-center p-2 h-24 sm:h-28 bg-white/5 rounded-2xl hover:bg-white/10 hover:-translate-y-1 transition-all border border-transparent hover:border-white/10 group">
                        <span class="material-icons-round text-2xl sm:text-3xl text-gray-300 group-hover:text-white mb-1 sm:mb-2">electrical_services</span>
                        <span class="text-[9px] sm:text-[10px] font-bold font-sans uppercase tracking-wider text-gray-400 group-hover:text-kkpBlue text-center leading-tight break-words px-1">Charging<br>Port</span>
                    </div>

                    <div class="flex flex-col items-center justify-center p-2 h-24 sm:h-28 bg-white/5 rounded-2xl hover:bg-white/10 hover:-translate-y-1 transition-all border border-transparent hover:border-white/10 group">
                        <span class="material-icons-round text-2xl sm:text-3xl text-gray-300 group-hover:text-white mb-1 sm:mb-2">wifi</span>
                        <span class="text-[9px] sm:text-[10px] font-bold font-sans uppercase tracking-wider text-gray-400 group-hover:text-kkpBlue text-center leading-tight">WIFI</span>
                    </div>

                </div>

                <div class="mt-6 sm:mt-8 text-center">
                    <p class="text-[9px] sm:text-[11px] text-gray-500 font-inter italic">*Snack on board tersedia pada rute tertentu</p>
                </div>
            </div>

        </div>
    </main>

    @include('template.footer')

    <script>
        // 1. Script Navigasi Tab Horizontal
        const tabContainer = document.getElementById('tab-container');
        function scrollTabs(direction) {
            const scrollAmount = 250; // Jarak geser dalam pixel
            if (direction === 'left') {
                tabContainer.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            } else {
                tabContainer.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            }
        }

        // 2. Script Interaktif Image Gallery (Slider)
        // Disini kita siapkan array untuk menyimpan daftar gambar interior.
        // Nanti jika ada 3 gambar interior berbeda, tinggal ubah URL-nya di sini.
        const interiorImages = [
            "{{ asset('asset/image/kkp-hero.png') }}", // Gambar 1
            "{{ asset('asset/image/kkp-hero.png') }}", // Gambar 2 (Ganti URL-nya nanti)
            "{{ asset('asset/image/kkp-hero.png') }}"  // Gambar 3 (Ganti URL-nya nanti)
        ];
        
        let currentImgIndex = 0;
        const galleryElement = document.getElementById('gallery-image');

        function updateGalleryUI(newIndex) {
            // Update indicator dots
            document.getElementById(`dot-${currentImgIndex}`).classList.replace('bg-kkpBlue', 'bg-white/40');
            document.getElementById(`dot-${newIndex}`).classList.replace('bg-white/40', 'bg-kkpBlue');
            
            // Efek Fade-out gambar saat ini
            galleryElement.style.opacity = '0';
            
            setTimeout(() => {
                // Ganti source gambar
                galleryElement.src = interiorImages[newIndex];
                // Efek Fade-in gambar baru
                galleryElement.style.opacity = '1';
                currentImgIndex = newIndex;
            }, 250); // Waktu jeda transisi (harus match dengan duration CSS)
        }

        function nextImage() {
            let nextIndex = (currentImgIndex + 1) % interiorImages.length;
            updateGalleryUI(nextIndex);
        }

        function prevImage() {
            let prevIndex = (currentImgIndex - 1 + interiorImages.length) % interiorImages.length;
            updateGalleryUI(prevIndex);
        }
    </script>
</body>
</html>