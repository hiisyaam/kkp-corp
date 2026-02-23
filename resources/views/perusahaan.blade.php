<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil Perusahaan | KKP Corp</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Montserrat:wght@400;600;700;800&display=swap"
        rel="stylesheet">
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
                        kkpbf: "#bfbfbf",
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
        /* Mengatur agar saat klik menu, judul section tidak tertutup navbar yang sticky */
        section {
            scroll-margin-top: 150px;
        }

        /* CUSTOM SCROLLBAR UNTUK SUB-NAVBAR DI MOBILE */
        .subnav-scroll::-webkit-scrollbar {
            height: 3px; /* Ketebalan scrollbar */
        }
        .subnav-scroll::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.05); /* Warna track samar */
            border-radius: 10px;
        }
        .subnav-scroll::-webkit-scrollbar-thumb {
            background: rgba(140, 201, 233, 0.6); /* Warna kkpBlue agak transparan */
            border-radius: 10px;
        }
        .subnav-scroll::-webkit-scrollbar-thumb:hover {
            background: rgba(140, 201, 233, 1); /* Warna kkpBlue solid */
        }
        /* Sembunyikan scrollbar di layar Desktop agar tetap bersih */
        @media (min-width: 768px) {
            .subnav-scroll::-webkit-scrollbar {
                display: none;
            }
            .subnav-scroll {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }
        }
    </style>
</head>

<body class="bg-kkpDark text-white font-sans antialiased overflow-x-hidden flex flex-col min-h-screen">

    @include('template.nav')

    <main class="flex-grow">
        
        <div class="pt-28 sm:pt-32 lg:pt-40 pb-8 sm:pb-10 w-full bg-[#1c1c1c]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center md:text-left mb-6 sm:mb-8 max-w-4xl mx-auto md:mx-0">
                    <div class="inline-flex items-center justify-center md:justify-start gap-2 sm:gap-3 mb-3">
                        <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full"></span>
                        <h3 class="text-kkpBlue font-bold font-sans text-[10px] sm:text-xs uppercase tracking-widest drop-shadow-md">Company Profile</h3>
                        <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full md:hidden"></span>
                    </div>
                    <h1 class="text-2xl min-[320px]:text-3xl sm:text-4xl lg:text-5xl font-black text-kkpBlue font-sans uppercase italic tracking-wide mb-3 sm:mb-4 drop-shadow-lg leading-tight">
                        KKP <span class="text-kkpbf">CORPORATION</span>
                    </h1>
                    <p class="text-gray-300 font-inter text-[11px] min-[320px]:text-xs sm:text-sm md:text-base leading-relaxed drop-shadow-md text-justify md:text-left">
                        Induk usaha yang mengelola dan mengembangkan ekosistem transportasi otobus virtual secara profesional, inovatif, dan berkelas untuk menghadirkan standar baru dalam setiap perjalanan Anda.
                    </p>
                </div>

                <div class="relative w-full aspect-[16/9] md:aspect-[21/9] lg:h-[450px] rounded-2xl sm:rounded-[2rem] overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)] border border-white/10 group">
                    <img src="{{ asset('asset/image/kkp-perusahaan.jpeg') }}" alt="Markas KKP" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-1000 ease-in-out">
                    <div class="absolute inset-0 bg-kkpDark/20 group-hover:bg-transparent transition-all duration-700"></div>
                </div>

            </div>
        </div>

        <div id="sticky-subnav" class="sticky top-[104px] sm:top-[112px] md:top-[120px] z-40 w-full bg-[#1c1c1c]/90 backdrop-blur-lg border-b border-white/5 py-3 sm:py-4 shadow-lg transition-all duration-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center space-x-2 sm:space-x-4 overflow-x-auto subnav-scroll pb-2 md:pb-0 snap-x snap-mandatory">
                    <a href="#tentang-perusahaan" class="sub-nav-link snap-center shrink-0 px-4 sm:px-5 py-2 rounded-full font-bold text-[10px] min-[320px]:text-[11px] sm:text-sm transition-all duration-300 bg-kkpBlue text-kkpDark shadow-[0_0_15px_rgba(140,201,233,0.3)]">
                        Tentang KKP
                    </a>
                    <a href="#sejarah" class="sub-nav-link snap-center shrink-0 px-4 sm:px-5 py-2 rounded-full font-bold text-[10px] min-[320px]:text-[11px] sm:text-sm text-gray-400 hover:text-white hover:bg-white/10 transition-all duration-300">
                        Sejarah
                    </a>
                    <a href="#visi-misi" class="sub-nav-link snap-center shrink-0 px-4 sm:px-5 py-2 rounded-full font-bold text-[10px] min-[320px]:text-[11px] sm:text-sm text-gray-400 hover:text-white hover:bg-white/10 transition-all duration-300">
                        Visi & Misi
                    </a>
                    <a href="#nilai-inti" class="sub-nav-link snap-center shrink-0 px-4 sm:px-5 py-2 rounded-full font-bold text-[10px] min-[320px]:text-[11px] sm:text-sm text-gray-400 hover:text-white hover:bg-white/10 transition-all duration-300">
                        Nilai Inti
                    </a>
                    <a href="#komitmen" class="sub-nav-link snap-center shrink-0 px-4 sm:px-5 py-2 rounded-full font-bold text-[10px] min-[320px]:text-[11px] sm:text-sm text-gray-400 hover:text-white hover:bg-white/10 transition-all duration-300">
                        Komitmen
                    </a>
                </div>
            </div>
        </div>

        <section id="tentang-perusahaan" class="w-full bg-[#1c1c1c] pt-12 sm:pt-16 lg:pt-20 relative overflow-hidden section-spy">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 mb-10 lg:mb-16">
                <div class="flex flex-col lg:flex-row gap-6 sm:gap-8 lg:gap-16">
                    <div class="w-full lg:w-1/3 flex flex-col space-y-3 sm:space-y-4 shrink-0">
                        <div class="inline-flex items-center gap-2 sm:gap-3">
                            <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full"></span>
                            <h3 class="text-kkpBlue font-bold font-sans text-[10px] min-[320px]:text-xs md:text-sm uppercase tracking-widest">Tentang Perusahaan</h3>
                        </div>
                        <h2 class="text-2xl min-[320px]:text-3xl md:text-4xl lg:text-5xl font-black text-kkpbf font-sans uppercase italic tracking-wide leading-tight drop-shadow-md">
                            OTOBUS VIRTUAL <span class="text-kkpBlue">KKP</span>
                        </h2>
                    </div>
                    
                    <div class="w-full lg:w-2/3">
                        <div class="prose prose-invert max-w-none text-gray-300 font-inter text-[11px] min-[320px]:text-xs sm:text-sm md:text-base leading-relaxed text-justify">
                            <p>
                                PO. Kiarasari merupakan perusahaan otobus virtual yang dikelola secara resmi oleh PT. Kiarasari Kencana Pasundan (<strong class="text-kkpBlue">KKP</strong> Corporation), sebuah badan usaha yang berpusat di Soreang, Kab. Bandung. <strong class="text-kkpBlue">KKP</strong> berdiri pada 24 Februari 2024 yang berperan sebagai induk usaha dalam pengelolaan dan pengembangan berbagai unit bisnis di bawahnya (Business Group).
                            </p>
                            <p class="mt-3 sm:mt-4">
                                Di bawah naungan <strong class="text-kkpBlue">KKP</strong> Corp., PO. Kiarasari bergerak di bidang transportasi dan perjalanan virtual dengan fokus pada penyediaan pengalaman perjalanan yang mengedepankan kenyamanan, keamanan, dan kemewahan, serta mengusung konsep armada modern dan berkelas melalui penggunaan unit dari karoseri Adiputro yang dipadukan dengan chassis Mercedes-Benz sebagai representasi standar kualitas, performa, dan prestise.
                            </p>
                            <p class="mt-3 sm:mt-4">
                                Selain sektor transportasi virtual, <strong class="text-kkpBlue">KKP</strong> Corp. juga menaungi unit usaha lain, yaitu <strong class="text-kkpBlue">KKP</strong> Garage yang bergerak di bidang pendukung otomotif dan pengelolaan armada, serta Rumah Makan Khas Sunda Kurnia Kencana Parahyangan (<strong class="text-kkpBlue">KKP</strong>) yang bergerak di bidang kuliner.
                            </p>
                            <p class="mt-3 sm:mt-4">
                                Dengan struktur usaha yang terintegrasi dan visi pengembangan jangka panjang, <strong class="text-kkpBlue">KKP</strong> Corp. berkomitmen membangun setiap unit bisnis secara profesional, berkelanjutan, dan berorientasi pada kualitas, menjadikan PO. Kiarasari bagian dari ekosistem usaha yang solid, berkarakter, dan terus berkembang.
                            </p>
                        </div>
                        <div class="pt-3 sm:pt-4 border-t border-white/10 mt-5 sm:mt-6">
                            <p class="text-gray-500 text-[9px] min-[320px]:text-[10px] md:text-xs italic font-inter">*PT (Pervirtualan Terbatas)</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full relative z-10 flex justify-center mt-4 pb-12 sm:pb-16 px-4">
                <img src="{{ asset('asset/image/kkp-hero.png') }}" alt="Armada KKP" 
                    class="w-full max-w-5xl h-auto object-contain opacity-70 drop-shadow-[0_20px_50px_rgba(0,0,0,0.8)] mix-blend-lighten" 
                    style="-webkit-mask-image: linear-gradient(to bottom, transparent 0%, black 25%, black 75%, transparent 100%); mask-image: linear-gradient(to bottom, transparent 0%, black 25%, black 75%, transparent 100%);" />
            </div>
        </section>

        <section id="sejarah" class="w-full bg-kkpDark py-12 sm:py-16 lg:py-28 relative border-t border-white/5 overflow-hidden section-spy">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="flex flex-col items-center text-center mb-10 sm:mb-16 md:mb-20">
                    <div class="inline-flex items-center gap-2 sm:gap-3 mb-3 sm:mb-4">
                        <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full"></span>
                        <h3 class="text-kkpBlue font-bold font-sans text-[10px] min-[320px]:text-xs md:text-sm uppercase tracking-widest">Perjalanan Kami</h3>
                        <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full"></span>
                    </div>
                    <h2 class="text-2xl min-[320px]:text-3xl md:text-4xl lg:text-5xl font-black text-kkpbf font-sans uppercase italic tracking-wide drop-shadow-md">
                        SEJARAH SINGKAT
                    </h2>
                </div>

                <div class="relative max-w-4xl mx-auto">
                    <div class="absolute left-[19px] sm:left-[27px] md:left-[50%] md:-translate-x-1/2 top-2 bottom-2 w-1 bg-gradient-to-b from-kkpBlue via-kkpBlue/30 to-transparent rounded-full opacity-50"></div>

                    <div class="space-y-6 sm:space-y-12">
                        <div class="relative flex flex-col md:flex-row items-center justify-between group/card">
                            <div class="hidden md:block w-5/12"></div> 
                            <div class="absolute left-[13px] sm:left-[21px] md:left-1/2 md:-translate-x-1/2 w-4 h-4 bg-kkpBlue rounded-full ring-4 ring-kkpDark shadow-[0_0_15px_rgba(140,201,233,0.5)] z-10 group-hover/card:scale-150 transition-all duration-300"></div>
                            <div class="w-full md:w-5/12 pl-10 sm:pl-16 md:pl-0">
                                <div class="bg-white/5 border border-white/10 rounded-2xl sm:rounded-3xl p-4 sm:p-6 lg:p-8 hover:bg-white/10 transition-all duration-300 shadow-xl relative overflow-hidden">
                                    <h4 class="text-lg min-[320px]:text-xl sm:text-2xl lg:text-3xl font-black text-kkpBlue font-sans mb-2 relative z-10">2017</h4>
                                    <p class="text-gray-300 font-inter text-[11px] min-[320px]:text-xs sm:text-sm md:text-base leading-relaxed text-justify relative z-10">
                                        Kiarasari Kencana Pasundan berawal dari inisiatif dua pendiri, yaitu Bapak Daffa Dhia Fadhlurrahman dan Dika Herwidyawan melalui pendirian QS Trans (Bus Pariwisata) yang menjadi cikal bakal pengembangan konsep perusahaan otobis virtual <strong class="text-kkpBlue">KKP</strong>.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="relative flex flex-col md:flex-row items-center justify-between group/card">
                            <div class="w-full md:w-5/12 pl-10 sm:pl-16 md:pl-0 md:text-right order-2 md:order-1 mt-4 md:mt-0">
                                <div class="bg-white/5 border border-white/10 rounded-2xl sm:rounded-3xl p-4 sm:p-6 lg:p-8 hover:bg-white/10 transition-all duration-300 shadow-xl relative overflow-hidden">
                                    <h4 class="text-lg min-[320px]:text-xl sm:text-2xl lg:text-3xl font-black text-kkpBlue font-sans mb-2 relative z-10">2018</h4>
                                    <p class="text-gray-300 font-inter text-[11px] min-[320px]:text-xs sm:text-sm md:text-base leading-relaxed text-justify relative z-10" style="text-align-last: inherit;">
                                        QS Trans mengalami perkembangan dan bertransformasi menjadi dua entitas usaha di bawah naungan 2D Trans Group, yaitu Daffa Trans (DAF Trans) yang berfokus pada layanan Pariwisata dan Dika Trans yang melayani sektor Trayek Reguler.
                                    </p>
                                </div>
                            </div>
                            <div class="absolute left-[13px] sm:left-[21px] top-4 md:top-auto md:left-1/2 md:-translate-x-1/2 w-4 h-4 bg-kkpBlue rounded-full ring-4 ring-kkpDark shadow-[0_0_15px_rgba(140,201,233,0.5)] z-10 group-hover/card:scale-150 transition-all duration-300 order-1 md:order-2"></div>
                            <div class="hidden md:block w-5/12 order-3"></div>
                        </div>

                        <div class="relative flex flex-col md:flex-row items-center justify-between group/card">
                            <div class="hidden md:block w-5/12"></div>
                            <div class="absolute left-[13px] sm:left-[21px] top-4 md:top-auto md:left-1/2 md:-translate-x-1/2 w-4 h-4 bg-kkpBlue rounded-full ring-4 ring-kkpDark shadow-[0_0_15px_rgba(140,201,233,0.5)] z-10 group-hover/card:scale-150 transition-all duration-300"></div>
                            <div class="w-full md:w-5/12 pl-10 sm:pl-16 md:pl-0 mt-4 md:mt-0">
                                <div class="bg-white/5 border border-white/10 rounded-2xl sm:rounded-3xl p-4 sm:p-6 lg:p-8 hover:bg-white/10 transition-all duration-300 shadow-xl relative overflow-hidden">
                                    <h4 class="text-lg min-[320px]:text-xl sm:text-2xl lg:text-3xl font-black text-kkpBlue font-sans mb-2 relative z-10">2019–2023</h4>
                                    <p class="text-gray-300 font-inter text-[11px] min-[320px]:text-xs sm:text-sm md:text-base leading-relaxed text-justify relative z-10">
                                        Perusahaan memasuki fase pengembangan dan pematangan konsep, mencakup evaluasi model bisnis, penguatan identitas, serta perumusan visi jangka panjang sebagai perusahaan otobis virtual yang berorientasi pada kualitas layanan.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="relative flex flex-col md:flex-row items-center justify-between group/card">
                            <div class="w-full md:w-5/12 pl-10 sm:pl-16 md:pl-0 md:text-right order-2 md:order-1 mt-4 md:mt-0">
                                <div class="bg-white/5 border border-kkpBlue/30 rounded-2xl sm:rounded-3xl p-4 sm:p-6 lg:p-8 hover:bg-white/10 transition-all duration-300 shadow-[0_10px_30px_rgba(140,201,233,0.15)] relative overflow-hidden">
                                    <h4 class="text-lg min-[320px]:text-xl sm:text-2xl lg:text-3xl font-black text-kkpBlue font-sans mb-2 relative z-10">2024</h4>
                                    <p class="text-gray-300 font-inter text-[11px] min-[320px]:text-xs sm:text-sm md:text-base leading-relaxed text-justify relative z-10" style="text-align-last: inherit;">
                                        Perusahaan resmi bertransformasi dan beroperasi dengan identitas PO. Kiarasari di bawah badan hukum PT. Kiarasari Kencana Pasundan (<strong class="text-kkpBlue">KKP</strong> Corp.) pada 24 Februari 2024. Daffa Trans (DAF Trans) dan Dika Trans kembali dilebur menjadi satu kesatuan pelayanan Bus Pariwisata dan Bus Trayek Reguler yang berpusat di daerah Soreang, Kab. Bandung dengan mengusung nilai profesionalisme, kenyamanan, keamanan, dan kemewahan dalam setiap perjalanan virtual.
                                    </p>
                                </div>
                            </div>
                            <div class="absolute left-[9px] sm:left-[17px] top-4 md:top-auto md:left-[calc(50%-12px)] w-6 h-6 bg-kkpDark border-4 border-kkpBlue rounded-full shadow-[0_0_20px_rgba(140,201,233,0.8)] z-10 flex items-center justify-center order-1 md:order-2 group-hover/card:scale-125 transition-all duration-300">
                                <div class="w-2 h-2 bg-white rounded-full"></div>
                            </div>
                            <div class="hidden md:block w-5/12 order-3"></div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="visi-misi" class="w-full bg-[#1c1c1c] py-12 sm:py-16 lg:py-28 relative border-t border-white/5 overflow-hidden section-spy">
            <div class="absolute top-0 right-0 w-[300px] md:w-[500px] h-[300px] md:h-[500px] bg-kkpBlue/5 rounded-full blur-[100px] pointer-events-none"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 md:gap-12 lg:gap-16 items-start">
                    
                    <div class="lg:col-span-5 flex flex-col h-full border border-white/10 rounded-2xl md:rounded-[2rem] p-5 sm:p-8 lg:p-12 shadow-2xl relative overflow-hidden group">
                        <img src="{{ asset('asset/image/kkp-hero.png') }}" alt="Visi KKP" class="absolute inset-0 w-full h-full object-cover z-0 group-hover:scale-110 transition-transform duration-1000 ease-in-out" />
                        <div class="absolute inset-0 bg-gradient-to-br from-kkpDark/95 via-kkpDark/85 to-[#1c1c1c]/95 z-0"></div>
                        <div class="inline-flex items-center gap-2 sm:gap-3 mb-4 sm:mb-8 relative z-10">
                            <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full shadow-[0_0_10px_rgba(140,201,233,0.5)]"></span>
                            <h3 class="text-kkpBlue font-bold font-sans text-[10px] min-[320px]:text-xs md:text-sm uppercase tracking-widest drop-shadow-md">Visi Perusahaan</h3>
                        </div>
                        <h2 class="text-2xl min-[320px]:text-3xl md:text-4xl font-black text-kkpbf font-sans uppercase italic tracking-wide leading-tight mb-5 sm:mb-8 relative z-10 drop-shadow-lg">
                            Standar Baru <br><span class="text-kkpBlue">Transportasi Virtual</span>
                        </h2>
                        <div class="relative z-10 border-l-4 border-kkpBlue pl-4 sm:pl-5 pr-3 sm:pr-4 py-3 sm:py-4 rounded-r-xl sm:rounded-r-2xl bg-white/5 backdrop-blur-sm border-y border-r border-white/5 shadow-lg">
                            <p class="text-gray-200 font-inter text-[11px] min-[320px]:text-xs sm:text-sm lg:text-base leading-relaxed italic font-medium drop-shadow-md text-justify">
                                "Perusahaan otobus virtual terdepan yang menghadirkan standar baru dalam dunia transportasi virtual melalui pengalaman perjalanan yang nyaman, aman, realistis, dan berkelas."
                            </p>
                        </div>
                    </div>

                    <div class="lg:col-span-7 flex flex-col">
                        <div class="inline-flex items-center gap-2 sm:gap-3 mb-5 sm:mb-8">
                            <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full"></span>
                            <h3 class="text-kkpBlue font-bold font-sans text-[10px] min-[320px]:text-xs md:text-sm uppercase tracking-widest">Misi Perusahaan</h3>
                        </div>
                        <ul class="space-y-3 sm:space-y-4">
                            <li class="group flex items-start gap-3 sm:gap-5 p-3 sm:p-5 lg:p-6 bg-white/5 rounded-2xl sm:rounded-3xl hover:bg-white/10 transition-all duration-300 shadow-lg cursor-pointer">
                                <div class="w-10 h-10 sm:w-12 sm:h-12 shrink-0 bg-kkpDark border border-white/10 rounded-xl sm:rounded-2xl flex items-center justify-center text-kkpBlue font-black text-base sm:text-xl group-hover:bg-kkpBlue group-hover:text-kkpDark transition-colors duration-300 shadow-inner">1</div>
                                <p class="text-gray-300 font-inter text-[11px] min-[320px]:text-xs sm:text-sm md:text-base leading-relaxed pt-1 sm:pt-1.5 text-justify">
                                    Menyediakan pengalaman perjalanan otobis virtual yang mengutamakan kenyamanan, keamanan, dan kemewahan.
                                </p>
                            </li>
                            <li class="group flex items-start gap-3 sm:gap-5 p-3 sm:p-5 lg:p-6 bg-white/5 rounded-2xl sm:rounded-3xl hover:bg-white/10 transition-all duration-300 shadow-lg cursor-pointer">
                                <div class="w-10 h-10 sm:w-12 sm:h-12 shrink-0 bg-kkpDark border border-white/10 rounded-xl sm:rounded-2xl flex items-center justify-center text-kkpBlue font-black text-base sm:text-xl group-hover:bg-kkpBlue group-hover:text-kkpDark transition-colors duration-300 shadow-inner">2</div>
                                <p class="text-gray-300 font-inter text-[11px] min-[320px]:text-xs sm:text-sm md:text-base leading-relaxed pt-1 sm:pt-1.5 text-justify">
                                    Menghadirkan konsep perjalanan yang realistis melalui pengelolaan armada dan operasional yang profesional.
                                </p>
                            </li>
                            <li class="group flex items-start gap-3 sm:gap-5 p-3 sm:p-5 lg:p-6 bg-white/5 rounded-2xl sm:rounded-3xl hover:bg-white/10 transition-all duration-300 shadow-lg cursor-pointer">
                                <div class="w-10 h-10 sm:w-12 sm:h-12 shrink-0 bg-kkpDark border border-white/10 rounded-xl sm:rounded-2xl flex items-center justify-center text-kkpBlue font-black text-base sm:text-xl group-hover:bg-kkpBlue group-hover:text-kkpDark transition-colors duration-300 shadow-inner">3</div>
                                <p class="text-gray-300 font-inter text-[11px] min-[320px]:text-xs sm:text-sm md:text-base leading-relaxed pt-1 sm:pt-1.5 text-justify">
                                    Mengembangkan inovasi dan kualitas visual seiring dengan perkembangan teknologi transportasi virtual.
                                </p>
                            </li>
                            <li class="group flex items-start gap-3 sm:gap-5 p-3 sm:p-5 lg:p-6 bg-white/5 rounded-2xl sm:rounded-3xl hover:bg-white/10 transition-all duration-300 shadow-lg cursor-pointer">
                                <div class="w-10 h-10 sm:w-12 sm:h-12 shrink-0 bg-kkpDark border border-white/10 rounded-xl sm:rounded-2xl flex items-center justify-center text-kkpBlue font-black text-base sm:text-xl group-hover:bg-kkpBlue group-hover:text-kkpDark transition-colors duration-300 shadow-inner">4</div>
                                <p class="text-gray-300 font-inter text-[11px] min-[320px]:text-xs sm:text-sm md:text-base leading-relaxed pt-1 sm:pt-1.5 text-justify">
                                    Membangun identitas perusahaan yang kuat, konsisten, dan berkarakter.
                                </p>
                            </li>
                            <li class="group flex items-start gap-3 sm:gap-5 p-3 sm:p-5 lg:p-6 bg-white/5 rounded-2xl sm:rounded-3xl hover:bg-white/10 transition-all duration-300 shadow-lg cursor-pointer">
                                <div class="w-10 h-10 sm:w-12 sm:h-12 shrink-0 bg-kkpDark border border-white/10 rounded-xl sm:rounded-2xl flex items-center justify-center text-kkpBlue font-black text-base sm:text-xl group-hover:bg-kkpBlue group-hover:text-kkpDark transition-colors duration-300 shadow-inner">5</div>
                                <p class="text-gray-300 font-inter text-[11px] min-[320px]:text-xs sm:text-sm md:text-base leading-relaxed pt-1 sm:pt-1.5 text-justify">
                                    Memberikan pengalaman perjalanan yang berkesan sesuai dengan semangat <span class="italic font-semibold text-white">“Travel with <strong class="text-kkpBlue">Style</strong>, Arrive with <strong class="text-kkpBlue">Smile</strong>.”</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="nilai-inti" class="w-full bg-kkpDark py-12 sm:py-16 lg:py-28 relative border-t border-white/5 overflow-hidden section-spy">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[400px] h-[400px] sm:w-[600px] sm:h-[600px] bg-kkpBlue/5 rounded-full blur-[120px] pointer-events-none z-0"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="flex flex-col items-center text-center mb-10 sm:mb-16 md:mb-20">
                    <div class="inline-flex items-center gap-2 sm:gap-3 mb-3 sm:mb-4">
                        <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full"></span>
                        <h3 class="text-kkpBlue font-bold font-sans text-[10px] min-[320px]:text-xs md:text-sm uppercase tracking-widest">Pondasi Kami</h3>
                        <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full"></span>
                    </div>
                    <h2 class="text-2xl min-[320px]:text-3xl md:text-4xl lg:text-5xl font-black text-kkpbf font-sans uppercase italic tracking-wide drop-shadow-md">
                        <span class="text-kkpBlue">KKP</span> – NILAI INTI PERUSAHAAN
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5 sm:gap-6 lg:gap-8">
                    <div class="group relative bg-[#1c1c1c]/50 backdrop-blur-md border border-white/10 rounded-2xl sm:rounded-[2rem] p-5 sm:p-8 hover:-translate-y-2 hover:bg-white/5 transition-all duration-500 overflow-hidden flex flex-col h-full">
                        <div class="absolute -right-4 -bottom-8 text-[120px] sm:text-[180px] font-black text-white/5 font-sans italic leading-none pointer-events-none group-hover:scale-110 group-hover:text-kkpBlue/5 transition-all duration-700">K</div>
                        <div class="relative z-10 mb-4 sm:mb-6">
                            <div class="w-10 h-10 sm:w-14 sm:h-14 bg-white/5 border border-white/10 rounded-xl sm:rounded-2xl flex items-center justify-center text-kkpBlue mb-4 sm:mb-5 group-hover:bg-kkpBlue group-hover:text-kkpDark transition-colors duration-300">
                                <span class="material-icons-round text-xl sm:text-3xl">workspace_premium</span>
                            </div>
                            <h4 class="text-base min-[320px]:text-lg sm:text-2xl font-black text-kkpbf font-sans tracking-wide uppercase"><span class="text-2xl sm:text-4xl text-kkpBlue">K</span>ualitas<br>Profesional</h4>
                        </div>
                        <p class="text-gray-300 font-inter text-[11px] min-[320px]:text-xs sm:text-sm leading-relaxed text-justify relative z-10 mt-auto">Menjalankan seluruh operasional secara profesional, bertanggung jawab, dan konsisten dengan standar tinggi demi menjamin keamanan, ketertiban, serta keandalan setiap perjalanan virtual.</p>
                    </div>

                    <div class="group relative bg-[#1c1c1c]/50 backdrop-blur-md border border-white/10 rounded-2xl sm:rounded-[2rem] p-5 sm:p-8 hover:-translate-y-2 hover:bg-white/5 transition-all duration-500 overflow-hidden flex flex-col h-full mt-0 md:mt-8">
                        <div class="absolute -right-4 -bottom-8 text-[120px] sm:text-[180px] font-black text-white/5 font-sans italic leading-none pointer-events-none group-hover:scale-110 group-hover:text-kkpBlue/5 transition-all duration-700">K</div>
                        <div class="relative z-10 mb-4 sm:mb-6">
                            <div class="w-10 h-10 sm:w-14 sm:h-14 bg-white/5 border border-white/10 rounded-xl sm:rounded-2xl flex items-center justify-center text-kkpBlue mb-4 sm:mb-5 group-hover:bg-kkpBlue group-hover:text-kkpDark transition-colors duration-300">
                                <span class="material-icons-round text-xl sm:text-3xl">airline_seat_recline_extra</span>
                            </div>
                            <h4 class="text-base min-[320px]:text-lg sm:text-2xl font-black text-kkpbf font-sans tracking-wide uppercase"><span class="text-2xl sm:text-4xl text-kkpBlue">K</span>enyamanan<br>Berkelas</h4>
                        </div>
                        <p class="text-gray-300 font-inter text-[11px] min-[320px]:text-xs sm:text-sm leading-relaxed text-justify relative z-10 mt-auto">Menghadirkan pengalaman perjalanan yang aman, nyaman, tenang, dan menyenangkan dengan pendekatan layanan yang mengutamakan detail serta kepuasan konsumen.</p>
                    </div>

                    <div class="group relative bg-[#1c1c1c]/50 backdrop-blur-md border border-white/10 rounded-2xl sm:rounded-[2rem] p-5 sm:p-8 hover:-translate-y-2 hover:bg-white/5 transition-all duration-500 overflow-hidden flex flex-col h-full mt-0 md:mt-16">
                        <div class="absolute -right-4 -bottom-8 text-[120px] sm:text-[180px] font-black text-white/5 font-sans italic leading-none pointer-events-none group-hover:scale-110 group-hover:text-kkpBlue/5 transition-all duration-700">P</div>
                        <div class="relative z-10 mb-4 sm:mb-6">
                            <div class="w-10 h-10 sm:w-14 sm:h-14 bg-white/5 border border-white/10 rounded-xl sm:rounded-2xl flex items-center justify-center text-kkpBlue mb-4 sm:mb-5 group-hover:bg-kkpBlue group-hover:text-kkpDark transition-colors duration-300">
                                <span class="material-icons-round text-xl sm:text-3xl">diamond</span>
                            </div>
                            <h4 class="text-base min-[320px]:text-lg sm:text-2xl font-black text-kkpbf font-sans tracking-wide uppercase"><span class="text-2xl sm:text-4xl text-kkpBlue">P</span>restise &<br>Estetika</h4>
                        </div>
                        <p class="text-gray-300 font-inter text-[11px] min-[320px]:text-xs sm:text-sm leading-relaxed text-justify relative z-10 mt-auto">Menampilkan identitas perusahaan melalui visual armada dan perjalanan yang elegan, berkelas, dan berestetika tinggi sebagai representasi kemewahan dan citra premium.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="komitmen" class="w-full bg-[#1c1c1c] py-12 sm:py-16 lg:py-28 relative border-t border-white/5 overflow-hidden section-spy">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[300px] md:w-[600px] h-[300px] md:h-[600px] bg-kkpBlue/5 rounded-full blur-[100px] pointer-events-none z-0"></div>
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="relative bg-gradient-to-b from-white/5 to-transparent border border-white/10 rounded-2xl sm:rounded-[3rem] p-6 sm:p-12 lg:p-16 text-center shadow-2xl overflow-hidden group transition-all duration-500">
                    <div class="inline-flex items-center justify-center w-12 h-12 sm:w-20 sm:h-20 bg-kkpDark border border-white/10 rounded-full mb-5 sm:mb-8 text-kkpBlue shadow-[0_0_20px_rgba(140,201,233,0.15)] group-hover:scale-110 transition-transform duration-500">
                        <span class="material-icons-round text-2xl sm:text-4xl">verified</span>
                    </div>
                    <h2 class="text-2xl min-[320px]:text-3xl md:text-4xl lg:text-5xl font-black text-kkpbf font-sans uppercase italic tracking-wide mb-5 sm:mb-8 drop-shadow-md">
                        KOMITMEN <span class="text-kkpBlue">PERUSAHAAN</span>
                    </h2>
                    <p class="text-gray-300 font-inter text-[11px] min-[320px]:text-xs sm:text-sm md:text-base lg:text-lg leading-relaxed text-justify max-w-4xl mx-auto">
                        <strong class="text-white font-semibold italic"><span class="text-kkpBlue">Kiarasari</span> Kencana Pasundan</strong> berkomitmen untuk terus meningkatkan kualitas layanan, menjaga standar keamanan dan kenyamanan, serta menghadirkan inovasi yang relevan dengan perkembangan dunia transportasi virtual. Kepuasan konsumen menjadi prioritas utama dalam setiap perjalanan yang dihadirkan.
                    </p>
                </div>
            </div>
        </section>

    </main>
    
    @include('template.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sections = document.querySelectorAll('.section-spy');
            const navLinks = document.querySelectorAll('.sub-nav-link');

            function updateNavStatus() {
                let current = '';
                
                sections.forEach(section => {
                    // Toleransi tinggi offset agar status menu cepat respons
                    const sectionTop = section.offsetTop - 200; 
                    if (window.scrollY >= sectionTop) {
                        current = section.getAttribute('id');
                    }
                });

                navLinks.forEach(link => {
                    // Reset styling menu
                    link.classList.remove('bg-kkpBlue', 'text-kkpDark', 'shadow-[0_0_15px_rgba(140,201,233,0.3)]');
                    link.classList.add('text-gray-400', 'hover:text-white', 'hover:bg-white/10');

                    // Set class aktif (biru solid)
                    if (link.getAttribute('href').includes(current) && current !== '') {
                        link.classList.remove('text-gray-400', 'hover:text-white', 'hover:bg-white/10');
                        link.classList.add('bg-kkpBlue', 'text-kkpDark', 'shadow-[0_0_15px_rgba(140,201,233,0.3)]');
                    }
                });
            }

            window.addEventListener('scroll', updateNavStatus);
            updateNavStatus();
        });
    </script>
</body>

</html>