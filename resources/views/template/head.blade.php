<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KKP Corp | Kiarasari Kencana Pasundan</title>

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
</head>

<body class="bg-kkpDark text-white font-sans antialiased overflow-x-hidden flex flex-col min-h-screen">

    @include('template.nav')

    <section id="beranda" class="w-full bg-kkpDark flex flex-col justify-between pt-28 lg:pt-36 pb-8 relative">
        
        <div class="relative w-full max-w-[1920px] mx-auto overflow-hidden flex flex-col items-center">
            
            <div class="absolute inset-x-0 top-[20%] sm:top-[25%] md:top-[25%] lg:top-[22%] px-4 text-center flex flex-col items-center z-10 pointer-events-none">
                <h1 class="mb-1 md:mb-2 text-[11px] min-[375px]:text-[13px] sm:text-2xl md:text-4xl lg:text-[54px] font-black tracking-wider leading-tight uppercase italic drop-shadow-xl font-sans">
                    <span class="text-kkpBlue">KIARASARI</span> <span class="text-white">KENCANA PASUNDAN</span>
                </h1>
                <p class="text-[8px] min-[375px]:text-[9px] sm:text-xs md:text-sm lg:text-xl font-medium text-white font-sans drop-shadow-md tracking-wide">
                    <span class="italic">Travel with <strong class="text-kkpBlue">Style</strong>, Arrive with <strong class="text-kkpBlue">Smile</strong></span>
                </p>
            </div>

            <img src="{{ asset('asset/image/kkp-hero.png') }}" alt="Armada KKP" 
                class="w-full h-auto object-contain z-0" 
                style="-webkit-mask-image: linear-gradient(to bottom, transparent 0%, black 15%, black 85%, transparent 100%); mask-image: linear-gradient(to bottom, transparent 0%, black 15%, black 85%, transparent 100%);" />
        </div>

        <div id="online-ticketing" class="relative z-20 w-full max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mt-0 md:-mt-8 lg:-mt-16">
            <div class="bg-[#1c1c1c]/95 border border-white/10 rounded-3xl shadow-2xl p-6 lg:p-8 backdrop-blur-md">
                <form class="flex flex-col lg:flex-row gap-4 lg:items-end">
                    <div class="flex-1 space-y-2 relative group">
                        <label class="block font-sans text-[11px] text-gray-400 uppercase tracking-widest font-bold">Kota Asal</label>
                        <div class="flex items-center bg-[#222222]/80 rounded-xl p-3 border border-white/5 focus-within:border-kkpBlue transition-all">
                            <span class="material-icons-round text-kkpBlue mr-3 transition-all">trip_origin</span>
                            <input type="text" placeholder="Dari mana?"
                                class="w-full bg-transparent border-0 outline-none focus:outline-none focus:ring-0 text-white placeholder-gray-500 font-inter text-sm" />
                        </div>
                    </div>

                    <div class="flex-1 space-y-2 relative group">
                        <label class="block font-sans text-[11px] text-gray-400 uppercase tracking-widest font-bold">Kota Tujuan</label>
                        <div class="flex items-center bg-[#222222]/80 rounded-xl p-3 border border-white/5 focus-within:border-kkpBlue transition-all">
                            <span class="material-icons-round text-kkpBlue mr-3 transition-all">location_on</span>
                            <input type="text" placeholder="Mau kemana?"
                                class="w-full bg-transparent border-0 outline-none focus:outline-none focus:ring-0 text-white placeholder-gray-500 font-inter text-sm" />
                        </div>
                    </div>

                    <div class="flex-1 space-y-2 relative group">
                        <label class="block font-sans text-[11px] text-gray-400 uppercase tracking-widest font-bold">Tanggal Berangkat</label>
                        <div class="flex items-center bg-[#222222]/80 rounded-xl p-3 border border-white/5 focus-within:border-kkpBlue transition-all">
                            <span class="material-icons-round text-kkpBlue mr-3 transition-all">calendar_month</span>
                            <input type="date"
                                class="w-full bg-transparent border-0 outline-none focus:outline-none focus:ring-0 text-white font-inter text-sm [&::-webkit-calendar-picker-indicator]:filter [&::-webkit-calendar-picker-indicator]:invert opacity-80 focus:opacity-100 cursor-pointer" />
                        </div>
                    </div>

                    <button type="button"
                        class="w-full lg:w-auto bg-kkpBlue text-kkpDark px-8 py-3.5 rounded-xl font-bold hover:bg-white transition-colors flex items-center justify-center gap-2 h-[52px]">
                        <span class="material-icons-round">search</span>
                        Cari Tiket
                    </button>
                </form>
            </div>
        </div>
    </section>

    <section id="tentang-perusahaan" class="w-full bg-[#1c1c1c] pt-20 lg:pt-28 relative border-t border-white/5 overflow-hidden">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 mb-10 lg:mb-16">
            <div class="flex flex-col lg:flex-row gap-8 lg:gap-16">
                
                <div class="w-full lg:w-1/3 flex flex-col space-y-4 shrink-0">
                    <div class="inline-flex items-center gap-3">
                        <span class="w-10 h-1 bg-kkpBlue rounded-full"></span>
                        <h3 class="text-kkpBlue font-bold font-sans text-xs md:text-sm uppercase tracking-widest">Tentang Perusahaan</h3>
                    </div>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-white font-sans uppercase italic tracking-wide leading-tight drop-shadow-md">
                        OTOBUS VIRTUAL <span class="text-kkpBlue">KKP</span>
                    </h2>
                </div>
                
                <div class="w-full lg:w-2/3">
                    <div class="prose prose-invert prose-lg max-w-none text-gray-300 font-inter text-sm md:text-base leading-relaxed text-justify">
                        <p>
                            PO. Kiarasari merupakan perusahaan otobus virtual yang dikelola secara resmi oleh PT. Kiarasari Kencana Pasundan (<strong class="text-kkpBlue">KKP</strong> Corporation), sebuah badan usaha yang berpusat di Soreang, Kab. Bandung. <strong class="text-kkpBlue">KKP</strong> berdiri pada 24 Februari 2024 yang berperan sebagai induk usaha dalam pengelolaan dan pengembangan berbagai unit bisnis di bawahnya (Business Group).
                        </p>
                        <p class="mt-4">
                            Di bawah naungan <strong class="text-kkpBlue">KKP</strong> Corp., PO. Kiarasari bergerak di bidang transportasi dan perjalanan virtual dengan fokus pada penyediaan pengalaman perjalanan yang mengedepankan kenyamanan, keamanan, dan kemewahan, serta mengusung konsep armada modern dan berkelas melalui penggunaan unit dari karoseri Adiputro yang dipadukan dengan chassis Mercedes-Benz sebagai representasi standar kualitas, performa, dan prestise.
                        </p>
                        <p class="mt-4">
                            Selain sektor transportasi virtual, <strong class="text-kkpBlue">KKP</strong> Corp. juga menaungi unit usaha lain, yaitu <strong class="text-kkpBlue">KKP</strong> Garage yang bergerak di bidang pendukung otomotif dan pengelolaan armada, serta Rumah Makan Khas Sunda Kurnia Kencana Parahyangan (<strong class="text-kkpBlue">KKP</strong>) yang bergerak di bidang kuliner.
                        </p>
                        <p class="mt-4">
                            Dengan struktur usaha yang terintegrasi dan visi pengembangan jangka panjang, <strong class="text-kkpBlue">KKP</strong> Corp. berkomitmen membangun setiap unit bisnis secara profesional, berkelanjutan, dan berorientasi pada kualitas, menjadikan PO. Kiarasari bagian dari ekosistem usaha yang solid, berkarakter, dan terus berkembang.
                        </p>
                    </div>
                    
                    <div class="pt-4 border-t border-white/10 mt-6">
                        <p class="text-gray-500 text-[11px] md:text-xs italic font-inter">*PT (Pervirtualan Terbatas)</p>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="w-full relative z-10 flex justify-center mt-4">
            <img src="{{ asset('asset/image/kkp-hero.png') }}" alt="Armada KKP" 
                 class="w-full max-w-[1920px] h-auto object-contain opacity-90 drop-shadow-[0_20px_50px_rgba(0,0,0,0.8)] mix-blend-lighten" 
                 style="-webkit-mask-image: linear-gradient(to bottom, transparent 0%, black 15%, black 85%, transparent 100%); mask-image: linear-gradient(to bottom, transparent 0%, black 15%, black 85%, transparent 100%);" />
        </div>
        
    </section>
    <section id="sejarah" class="w-full bg-kkpDark py-16 sm:py-20 lg:py-28 relative border-t border-white/5 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="flex flex-col items-center text-center mb-12 sm:mb-16 md:mb-20">
                <div class="inline-flex items-center gap-2 sm:gap-3 mb-3 sm:mb-4">
                    <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full"></span>
                    <h3 class="text-kkpBlue font-bold font-sans text-[10px] sm:text-xs md:text-sm uppercase tracking-widest">Perjalanan Kami</h3>
                    <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full"></span>
                </div>
                <h2 class="text-2xl min-[375px]:text-3xl md:text-4xl lg:text-5xl font-black text-white font-sans uppercase italic tracking-wide drop-shadow-md">
                    SEJARAH SINGKAT PERUSAHAAN
                </h2>
            </div>

            <div class="relative max-w-4xl mx-auto">
                <div class="absolute left-[23px] sm:left-[27px] md:left-[50%] md:-translate-x-1/2 top-2 bottom-2 w-1 bg-gradient-to-b from-kkpBlue via-kkpBlue/30 to-transparent rounded-full opacity-50"></div>

                <div class="space-y-8 sm:space-y-12">
                    
                    <div class="relative flex flex-col md:flex-row items-center justify-between group/card">
                        <div class="hidden md:block w-5/12"></div> <div class="absolute left-[17px] sm:left-[21px] md:left-1/2 md:-translate-x-1/2 w-3 sm:w-4 h-3 sm:h-4 bg-kkpBlue rounded-full ring-4 ring-kkpDark shadow-[0_0_15px_rgba(140,201,233,0.5)] z-10 group-hover/card:scale-150 transition-all duration-300"></div>
                        
                        <div class="w-full md:w-5/12 pl-12 sm:pl-16 md:pl-0">
                            <div class="bg-white/5 border border-white/10 rounded-2xl sm:rounded-3xl p-4 sm:p-6 lg:p-8 hover:bg-white/10 hover:border-kkpBlue/30 transition-all duration-300 shadow-xl relative overflow-hidden">
                                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-kkpBlue to-transparent opacity-0 group-hover/card:opacity-100 transition-opacity duration-300"></div>
                                
                                <h4 class="text-xl sm:text-2xl lg:text-3xl font-black text-kkpBlue font-sans mb-2 sm:mb-3 relative z-10">2017</h4>
                                <p class="text-gray-300 font-inter text-[11px] min-[375px]:text-xs sm:text-sm md:text-base leading-relaxed text-justify relative z-10">
                                    Kiarasari Kencana Pasundan berawal dari inisiatif dua pendiri, yaitu Bapak Daffa Dhia Fadhlurrahman dan Dika Herwidyawan melalui pendirian QS Trans (Bus Pariwisata) yang menjadi cikal bakal pengembangan konsep perusahaan otobis virtual <strong class="text-kkpBlue">KKP</strong>.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="relative flex flex-col md:flex-row items-center justify-between group/card">
                        <div class="w-full md:w-5/12 pl-12 sm:pl-16 md:pl-0 md:text-right order-2 md:order-1 mt-6 md:mt-0">
                            <div class="bg-white/5 border border-white/10 rounded-2xl sm:rounded-3xl p-4 sm:p-6 lg:p-8 hover:bg-white/10 hover:border-kkpBlue/30 transition-all duration-300 shadow-xl relative overflow-hidden">
                                <div class="absolute top-0 right-0 w-full h-1 bg-gradient-to-l from-kkpBlue to-transparent opacity-0 group-hover/card:opacity-100 transition-opacity duration-300"></div>
                                
                                <h4 class="text-xl sm:text-2xl lg:text-3xl font-black text-kkpBlue font-sans mb-2 sm:mb-3 relative z-10">2018</h4>
                                <p class="text-gray-300 font-inter text-[11px] min-[375px]:text-xs sm:text-sm md:text-base leading-relaxed text-justify relative z-10" style="text-align-last: inherit;">
                                    QS Trans mengalami perkembangan dan bertransformasi menjadi dua entitas usaha di bawah naungan 2D Trans Group, yaitu Daffa Trans (DAF Trans) yang berfokus pada layanan Pariwisata dan Dika Trans yang melayani sektor Trayek Reguler.
                                </p>
                            </div>
                        </div>
                        
                        <div class="absolute left-[17px] sm:left-[21px] top-4 sm:top-6 md:top-auto md:left-1/2 md:-translate-x-1/2 w-3 sm:w-4 h-3 sm:h-4 bg-kkpBlue rounded-full ring-4 ring-kkpDark shadow-[0_0_15px_rgba(140,201,233,0.5)] z-10 group-hover/card:scale-150 transition-all duration-300 order-1 md:order-2"></div>
                        
                        <div class="hidden md:block w-5/12 order-3"></div>
                    </div>

                    <div class="relative flex flex-col md:flex-row items-center justify-between group/card">
                        <div class="hidden md:block w-5/12"></div>
                        
                        <div class="absolute left-[17px] sm:left-[21px] top-4 sm:top-6 md:top-auto md:left-1/2 md:-translate-x-1/2 w-3 sm:w-4 h-3 sm:h-4 bg-kkpBlue rounded-full ring-4 ring-kkpDark shadow-[0_0_15px_rgba(140,201,233,0.5)] z-10 group-hover/card:scale-150 transition-all duration-300"></div>
                        
                        <div class="w-full md:w-5/12 pl-12 sm:pl-16 md:pl-0 mt-6 md:mt-0">
                            <div class="bg-white/5 border border-white/10 rounded-2xl sm:rounded-3xl p-4 sm:p-6 lg:p-8 hover:bg-white/10 hover:border-kkpBlue/30 transition-all duration-300 shadow-xl relative overflow-hidden">
                                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-kkpBlue to-transparent opacity-0 group-hover/card:opacity-100 transition-opacity duration-300"></div>
                                
                                <h4 class="text-xl sm:text-2xl lg:text-3xl font-black text-kkpBlue font-sans mb-2 sm:mb-3 relative z-10">2019–2023</h4>
                                <p class="text-gray-300 font-inter text-[11px] min-[375px]:text-xs sm:text-sm md:text-base leading-relaxed text-justify relative z-10">
                                    Perusahaan memasuki fase pengembangan dan pematangan konsep, mencakup evaluasi model bisnis, penguatan identitas, serta perumusan visi jangka panjang sebagai perusahaan otobis virtual yang berorientasi pada kualitas layanan.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="relative flex flex-col md:flex-row items-center justify-between group/card">
                        <div class="w-full md:w-5/12 pl-12 sm:pl-16 md:pl-0 md:text-right order-2 md:order-1 mt-6 md:mt-0">
                            <div class="bg-white/5 border border-kkpBlue/30 rounded-2xl sm:rounded-3xl p-4 sm:p-6 lg:p-8 hover:bg-white/10 hover:border-kkpBlue transition-all duration-300 shadow-[0_10px_30px_rgba(140,201,233,0.15)] relative overflow-hidden">
                                <div class="absolute top-0 right-0 w-full h-1.5 bg-gradient-to-l from-kkpBlue to-transparent opacity-100"></div>
                                
                                <h4 class="text-xl sm:text-2xl lg:text-3xl font-black text-kkpBlue font-sans mb-2 sm:mb-3 relative z-10">2024</h4>
                                <p class="text-gray-300 font-inter text-[11px] min-[375px]:text-xs sm:text-sm md:text-base leading-relaxed text-justify relative z-10" style="text-align-last: inherit;">
                                    Perusahaan resmi bertransformasi dan beroperasi dengan identitas PO. Kiarasari di bawah badan hukum PT. Kiarasari Kencana Pasundan (<strong class="text-kkpBlue">KKP</strong> Corp.) pada 24 Februari 2024. Daffa Trans (DAF Trans) dan Dika Trans kembali dilebur menjadi satu kesatuan pelayanan Bus Pariwisata dan Bus Trayek Reguler yang berpusat di daerah Soreang, Kab. Bandung dengan mengusung nilai profesionalisme, kenyamanan, keamanan, dan kemewahan dalam setiap perjalanan virtual.
                                </p>
                            </div>
                        </div>
                        
                        <div class="absolute left-[13px] sm:left-[17px] top-4 sm:top-6 md:top-auto md:left-[calc(50%-10px)] w-5 sm:w-6 h-5 sm:h-6 bg-kkpDark border-[3px] sm:border-4 border-kkpBlue rounded-full shadow-[0_0_20px_rgba(140,201,233,0.8)] z-10 flex items-center justify-center order-1 md:order-2 group-hover/card:scale-125 transition-all duration-300">
                            <div class="w-1.5 sm:w-2 h-1.5 sm:h-2 bg-white rounded-full"></div>
                        </div>
                        
                        <div class="hidden md:block w-5/12 order-3"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="visi-misi" class="w-full bg-[#1c1c1c] py-16 sm:py-20 lg:py-28 relative border-t border-white/5 overflow-hidden">
        
        <div class="absolute top-0 right-0 w-[300px] md:w-[500px] h-[300px] md:h-[500px] bg-kkpBlue/5 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[300px] md:w-[500px] h-[300px] md:h-[500px] bg-white/5 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 md:gap-12 lg:gap-16 items-start">
                
                <div class="lg:col-span-5 flex flex-col h-full border border-white/10 rounded-[1.5rem] md:rounded-[2rem] p-6 sm:p-8 lg:p-12 shadow-2xl relative overflow-hidden group">
                    
                    <img src="{{ asset('asset/image/kkp-hero.png') }}" alt="Visi KKP" 
                         class="absolute inset-0 w-full h-full object-cover z-0 group-hover:scale-110 transition-transform duration-1000 ease-in-out" />
                    
                    <div class="absolute inset-0 bg-gradient-to-br from-kkpDark/95 via-kkpDark/85 to-[#1c1c1c]/95 z-0"></div>
                    
                    <div class="absolute -top-10 -right-10 w-32 h-32 bg-kkpBlue/20 rounded-full blur-3xl pointer-events-none z-0 group-hover:bg-kkpBlue/40 transition-colors duration-500"></div>
                    
                    <div class="inline-flex items-center gap-2 sm:gap-3 mb-6 sm:mb-8 relative z-10">
                        <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full shadow-[0_0_10px_rgba(140,201,233,0.5)]"></span>
                        <h3 class="text-kkpBlue font-bold font-sans text-[10px] sm:text-xs md:text-sm uppercase tracking-widest drop-shadow-md">Visi Perusahaan</h3>
                    </div>
                    
                    <h2 class="text-2xl min-[375px]:text-3xl md:text-4xl font-black text-white font-sans uppercase italic tracking-wide leading-tight mb-6 sm:mb-8 relative z-10 drop-shadow-lg">
                        Standar Baru <br><span class="text-kkpBlue">Transportasi Virtual</span>
                    </h2>
                    
                    <div class="relative z-10 border-l-4 border-kkpBlue pl-4 sm:pl-5 pr-3 sm:pr-4 py-3 sm:py-4 rounded-r-xl sm:rounded-r-2xl bg-white/5 backdrop-blur-sm border-y border-r border-white/5 shadow-lg">
                        <p class="text-gray-200 font-inter text-[11px] min-[375px]:text-xs sm:text-sm lg:text-base leading-relaxed italic font-medium drop-shadow-md text-justify">
                            "Perusahaan otobus virtual terdepan yang menghadirkan standar baru dalam dunia transportasi virtual melalui pengalaman perjalanan yang nyaman, aman, realistis, dan berkelas."
                        </p>
                    </div>
                </div>

                <div class="lg:col-span-7 flex flex-col">
                    <div class="inline-flex items-center gap-2 sm:gap-3 mb-6 sm:mb-8">
                        <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full"></span>
                        <h3 class="text-kkpBlue font-bold font-sans text-[10px] sm:text-xs md:text-sm uppercase tracking-widest">Misi Perusahaan</h3>
                    </div>

                    <ul class="space-y-3 sm:space-y-4">
                        <li class="flex items-start gap-4 sm:gap-5 p-4 sm:p-5 lg:p-6 bg-white/5 rounded-2xl sm:rounded-3xl border border-transparent hover:border-white/10 hover:bg-[#262626] transition-all duration-300 group shadow-lg">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 shrink-0 bg-kkpDark border border-white/10 rounded-xl sm:rounded-2xl flex items-center justify-center text-kkpBlue font-black font-sans text-lg sm:text-xl group-hover:bg-kkpBlue group-hover:text-kkpDark transition-colors shadow-inner">1</div>
                            <p class="text-gray-300 font-inter text-[11px] min-[375px]:text-xs sm:text-sm md:text-base leading-relaxed pt-1 sm:pt-1.5 text-justify">
                                Menyediakan pengalaman perjalanan otobis virtual yang mengutamakan kenyamanan, keamanan, dan kemewahan.
                            </p>
                        </li>
                        
                        <li class="flex items-start gap-4 sm:gap-5 p-4 sm:p-5 lg:p-6 bg-white/5 rounded-2xl sm:rounded-3xl border border-transparent hover:border-white/10 hover:bg-[#262626] transition-all duration-300 group shadow-lg">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 shrink-0 bg-kkpDark border border-white/10 rounded-xl sm:rounded-2xl flex items-center justify-center text-kkpBlue font-black font-sans text-lg sm:text-xl group-hover:bg-kkpBlue group-hover:text-kkpDark transition-colors shadow-inner">2</div>
                            <p class="text-gray-300 font-inter text-[11px] min-[375px]:text-xs sm:text-sm md:text-base leading-relaxed pt-1 sm:pt-1.5 text-justify">
                                Menghadirkan konsep perjalanan yang realistis melalui pengelolaan armada dan operasional yang profesional.
                            </p>
                        </li>

                        <li class="flex items-start gap-4 sm:gap-5 p-4 sm:p-5 lg:p-6 bg-white/5 rounded-2xl sm:rounded-3xl border border-transparent hover:border-white/10 hover:bg-[#262626] transition-all duration-300 group shadow-lg">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 shrink-0 bg-kkpDark border border-white/10 rounded-xl sm:rounded-2xl flex items-center justify-center text-kkpBlue font-black font-sans text-lg sm:text-xl group-hover:bg-kkpBlue group-hover:text-kkpDark transition-colors shadow-inner">3</div>
                            <p class="text-gray-300 font-inter text-[11px] min-[375px]:text-xs sm:text-sm md:text-base leading-relaxed pt-1 sm:pt-1.5 text-justify">
                                Mengembangkan inovasi dan kualitas visual seiring dengan perkembangan teknologi transportasi virtual.
                            </p>
                        </li>

                        <li class="flex items-start gap-4 sm:gap-5 p-4 sm:p-5 lg:p-6 bg-white/5 rounded-2xl sm:rounded-3xl border border-transparent hover:border-white/10 hover:bg-[#262626] transition-all duration-300 group shadow-lg">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 shrink-0 bg-kkpDark border border-white/10 rounded-xl sm:rounded-2xl flex items-center justify-center text-kkpBlue font-black font-sans text-lg sm:text-xl group-hover:bg-kkpBlue group-hover:text-kkpDark transition-colors shadow-inner">4</div>
                            <p class="text-gray-300 font-inter text-[11px] min-[375px]:text-xs sm:text-sm md:text-base leading-relaxed pt-1 sm:pt-1.5 text-justify">
                                Membangun identitas perusahaan yang kuat, konsisten, dan berkarakter.
                            </p>
                        </li>

                        <li class="flex items-start gap-4 sm:gap-5 p-4 sm:p-5 lg:p-6 bg-white/5 rounded-2xl sm:rounded-3xl border border-transparent hover:border-white/10 hover:bg-[#262626] transition-all duration-300 group shadow-lg">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 shrink-0 bg-kkpDark border border-white/10 rounded-xl sm:rounded-2xl flex items-center justify-center text-kkpBlue font-black font-sans text-lg sm:text-xl group-hover:bg-kkpBlue group-hover:text-kkpDark transition-colors shadow-inner">5</div>
                            <p class="text-gray-300 font-inter text-[11px] min-[375px]:text-xs sm:text-sm md:text-base leading-relaxed pt-1 sm:pt-1.5 text-justify">
                                Memberikan pengalaman perjalanan yang berkesan sesuai dengan semangat <span class="italic font-semibold text-white">“Travel with <strong class="text-kkpBlue">Style</strong>, Arrive with <strong class="text-kkpBlue">Smile</strong>.”</span>
                            </p>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <section id="nilai-inti" class="w-full bg-kkpDark py-16 sm:py-20 lg:py-28 relative border-t border-white/5 overflow-hidden">
        
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-kkpBlue/5 rounded-full blur-[120px] pointer-events-none z-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="flex flex-col items-center text-center mb-12 sm:mb-16 md:mb-20">
                <div class="inline-flex items-center gap-2 sm:gap-3 mb-3 sm:mb-4">
                    <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full"></span>
                    <h3 class="text-kkpBlue font-bold font-sans text-[10px] sm:text-xs md:text-sm uppercase tracking-widest">Pondasi Kami</h3>
                    <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full"></span>
                </div>
                <h2 class="text-2xl min-[375px]:text-3xl md:text-4xl lg:text-5xl font-black text-white font-sans uppercase italic tracking-wide drop-shadow-md">
                    <span class="text-kkpBlue">KKP</span> – NILAI INTI PERUSAHAAN
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
                
                <div class="group relative bg-[#1c1c1c]/50 backdrop-blur-md border border-white/10 rounded-[2rem] p-6 sm:p-8 hover:-translate-y-2 hover:bg-white/5 hover:border-kkpBlue/40 hover:shadow-[0_15px_40px_rgba(140,201,233,0.15)] transition-all duration-500 overflow-hidden flex flex-col h-full">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-kkpBlue to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="absolute -right-4 -bottom-8 text-[180px] font-black text-white/5 font-sans italic leading-none pointer-events-none group-hover:scale-110 group-hover:text-kkpBlue/5 transition-all duration-700">
                        K
                    </div>

                    <div class="relative z-10 mb-4 sm:mb-6">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 bg-white/5 border border-white/10 rounded-2xl flex items-center justify-center text-kkpBlue mb-5 group-hover:bg-kkpBlue group-hover:text-kkpDark transition-colors duration-300">
                            <span class="material-icons-round text-2xl sm:text-3xl">workspace_premium</span>
                        </div>
                        <h4 class="text-lg min-[375px]:text-xl sm:text-2xl font-black text-white font-sans tracking-wide uppercase">
                            <span class="text-3xl sm:text-4xl text-kkpBlue">K</span>ualitas<br>Profesional
                        </h4>
                    </div>

                    <div class="relative z-10 mt-auto">
                        <p class="text-gray-300 font-inter text-[11px] min-[375px]:text-xs sm:text-sm leading-relaxed text-justify">
                            Menjalankan seluruh operasional secara profesional, bertanggung jawab, dan konsisten dengan standar tinggi demi menjamin keamanan, ketertiban, serta keandalan setiap perjalanan virtual.
                        </p>
                    </div>
                </div>

                <div class="group relative bg-[#1c1c1c]/50 backdrop-blur-md border border-white/10 rounded-[2rem] p-6 sm:p-8 hover:-translate-y-2 hover:bg-white/5 hover:border-kkpBlue/40 hover:shadow-[0_15px_40px_rgba(140,201,233,0.15)] transition-all duration-500 overflow-hidden flex flex-col h-full mt-0 md:mt-8">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-kkpBlue to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="absolute -right-4 -bottom-8 text-[180px] font-black text-white/5 font-sans italic leading-none pointer-events-none group-hover:scale-110 group-hover:text-kkpBlue/5 transition-all duration-700">
                        K
                    </div>

                    <div class="relative z-10 mb-4 sm:mb-6">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 bg-white/5 border border-white/10 rounded-2xl flex items-center justify-center text-kkpBlue mb-5 group-hover:bg-kkpBlue group-hover:text-kkpDark transition-colors duration-300">
                            <span class="material-icons-round text-2xl sm:text-3xl">airline_seat_recline_extra</span>
                        </div>
                        <h4 class="text-lg min-[375px]:text-xl sm:text-2xl font-black text-white font-sans tracking-wide uppercase">
                            <span class="text-3xl sm:text-4xl text-kkpBlue">K</span>enyamanan<br>Berkelas
                        </h4>
                    </div>

                    <div class="relative z-10 mt-auto">
                        <p class="text-gray-300 font-inter text-[11px] min-[375px]:text-xs sm:text-sm leading-relaxed text-justify">
                            Menghadirkan pengalaman perjalanan yang aman, nyaman, tenang, dan menyenangkan dengan pendekatan layanan yang mengutamakan detail serta kepuasan konsumen.
                        </p>
                    </div>
                </div>

                <div class="group relative bg-[#1c1c1c]/50 backdrop-blur-md border border-white/10 rounded-[2rem] p-6 sm:p-8 hover:-translate-y-2 hover:bg-white/5 hover:border-kkpBlue/40 hover:shadow-[0_15px_40px_rgba(140,201,233,0.15)] transition-all duration-500 overflow-hidden flex flex-col h-full mt-0 md:mt-16">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-kkpBlue to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="absolute -right-4 -bottom-8 text-[180px] font-black text-white/5 font-sans italic leading-none pointer-events-none group-hover:scale-110 group-hover:text-kkpBlue/5 transition-all duration-700">
                        P
                    </div>

                    <div class="relative z-10 mb-4 sm:mb-6">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 bg-white/5 border border-white/10 rounded-2xl flex items-center justify-center text-kkpBlue mb-5 group-hover:bg-kkpBlue group-hover:text-kkpDark transition-colors duration-300">
                            <span class="material-icons-round text-2xl sm:text-3xl">diamond</span>
                        </div>
                        <h4 class="text-lg min-[375px]:text-xl sm:text-2xl font-black text-white font-sans tracking-wide uppercase">
                            <span class="text-3xl sm:text-4xl text-kkpBlue">P</span>restise &<br>Estetika
                        </h4>
                    </div>

                    <div class="relative z-10 mt-auto">
                        <p class="text-gray-300 font-inter text-[11px] min-[375px]:text-xs sm:text-sm leading-relaxed text-justify">
                            Menampilkan identitas perusahaan melalui visual armada dan perjalanan yang elegan, berkelas, dan berestetika tinggi sebagai representasi kemewahan dan citra premium.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="komitmen" class="w-full bg-[#1c1c1c] py-16 sm:py-20 lg:py-28 relative border-t border-white/5 overflow-hidden">
        
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[300px] md:w-[600px] h-[300px] md:h-[600px] bg-kkpBlue/5 rounded-full blur-[100px] pointer-events-none z-0"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="relative bg-gradient-to-b from-white/5 to-transparent border border-white/10 rounded-[2rem] md:rounded-[3rem] p-8 sm:p-12 lg:p-16 text-center shadow-2xl overflow-hidden group hover:border-kkpBlue/30 hover:bg-white/5 transition-all duration-500">

                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-1/4 h-1.5 bg-gradient-to-r from-transparent via-kkpBlue to-transparent opacity-50 group-hover:opacity-100 group-hover:w-1/2 transition-all duration-700 ease-in-out"></div>

                <div class="inline-flex items-center justify-center w-16 h-16 sm:w-20 sm:h-20 bg-kkpDark border border-white/10 rounded-full mb-6 sm:mb-8 text-kkpBlue shadow-[0_0_20px_rgba(140,201,233,0.15)] group-hover:scale-110 transition-transform duration-500">
                    <span class="material-icons-round text-3xl sm:text-4xl">verified</span>
                </div>

                <h2 class="text-2xl min-[375px]:text-3xl md:text-4xl lg:text-5xl font-black text-white font-sans uppercase italic tracking-wide mb-6 sm:mb-8 drop-shadow-md">
                    KOMITMEN <span class="text-kkpBlue">PERUSAHAAN</span>
                </h2>

                <p class="text-gray-300 font-inter text-[11px] min-[375px]:text-xs sm:text-sm md:text-base lg:text-lg leading-relaxed text-justify max-w-4xl mx-auto">
                    <strong class="text-white font-semibold italic"><span class="text-kkpBlue">Kiarasari</span> Kencana Pasundan</strong> berkomitmen untuk terus meningkatkan kualitas layanan, menjaga standar keamanan dan kenyamanan, serta menghadirkan inovasi yang relevan dengan perkembangan dunia transportasi virtual. Kepuasan konsumen menjadi prioritas utama dalam setiap perjalanan yang dihadirkan.
                </p>

            </div>
        </div>
    </section>
    <section id="layanan" class="w-full bg-kkpDark py-16 sm:py-20 lg:py-28 relative border-t border-white/5 overflow-hidden">
        
        <div class="absolute top-1/4 right-0 w-[400px] h-[400px] bg-kkpBlue/5 rounded-full blur-[120px] pointer-events-none z-0"></div>
        <div class="absolute bottom-1/4 left-0 w-[400px] h-[400px] bg-white/5 rounded-full blur-[120px] pointer-events-none z-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="flex flex-col items-center text-center mb-16 md:mb-24">
                <div class="inline-flex items-center gap-2 sm:gap-3 mb-3 sm:mb-4">
                    <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full"></span>
                    <h3 class="text-kkpBlue font-bold font-sans text-[10px] sm:text-xs md:text-sm uppercase tracking-widest">Ekosistem KKP Corp</h3>
                    <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full"></span>
                </div>
                <h2 class="text-2xl min-[375px]:text-3xl md:text-4xl lg:text-5xl font-black text-white font-sans uppercase italic tracking-wide drop-shadow-md max-w-4xl">
                    LAYANAN DAN KONSEP OPERASIONAL
                </h2>
            </div>

            <div class="space-y-20 lg:space-y-32">
                
                <div class="relative flex flex-col md:flex-row items-center group">
                    <div class="w-full md:w-[60%] relative rounded-[2rem] overflow-hidden shadow-2xl z-0 h-[250px] sm:h-[350px] md:h-[450px] border border-white/10">
                        <div class="absolute inset-0 bg-kkpDark/30 group-hover:bg-transparent transition-all duration-700 z-10"></div>
                        <img src="{{ asset('asset/image/kkp-hero.png') }}" alt="PO Kiarasari" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                    </div>
                    
                    <div class="w-[90%] md:w-[50%] relative z-20 -mt-16 md:mt-0 md:-ml-24 mx-auto md:mx-0 order-2">
                        <div class="bg-[#1c1c1c]/90 backdrop-blur-xl border border-white/10 rounded-3xl p-6 sm:p-8 lg:p-12 shadow-[0_30px_60px_rgba(0,0,0,0.6)] group-hover:border-kkpBlue/40 transition-colors duration-500 relative overflow-hidden">
                            <div class="absolute top-2 right-4 text-[80px] font-black text-white/5 font-sans italic leading-none z-0">01</div>
                            
                            <h3 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-black text-white font-sans uppercase italic mb-4 sm:mb-6 relative z-10">
                                PO. <span class="text-kkpBlue">Kiarasari</span>
                            </h3>
                            <p class="text-gray-300 font-inter text-[11px] min-[375px]:text-xs sm:text-sm md:text-base leading-relaxed text-justify relative z-10">
                                Menyediakan layanan perjalanan otobis virtual pada sektor Pariwisata dan Trayek Reguler dengan konsep realistis dan modern. Setiap perjalanan dikelola secara profesional dengan memperhatikan detail operasional, etika berkendara, serta kenyamanan penumpang virtual, sehingga menghadirkan pengalaman yang imersif dan bernilai estetika tinggi.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="relative flex flex-col md:flex-row items-center group">
                    <div class="w-[90%] md:w-[50%] relative z-20 -mt-16 md:mt-0 md:-mr-24 mx-auto md:mx-0 order-2 md:order-1">
                        <div class="bg-[#1c1c1c]/90 backdrop-blur-xl border border-white/10 rounded-3xl p-6 sm:p-8 lg:p-12 shadow-[0_30px_60px_rgba(0,0,0,0.6)] group-hover:border-kkpBlue/40 transition-colors duration-500 relative overflow-hidden">
                            <div class="absolute top-2 left-4 text-[80px] font-black text-white/5 font-sans italic leading-none z-0">02</div>
                            
                            <h3 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-black text-white font-sans uppercase italic mb-4 sm:mb-6 relative z-10 pl-2">
                                <span class="text-kkpBlue">KKP</span> Garage
                            </h3>
                            <p class="text-gray-300 font-inter text-[11px] min-[375px]:text-xs sm:text-sm md:text-base leading-relaxed text-justify relative z-10">
                                Berperan sebagai unit pendukung yang menyediakan layanan pengadaan, perawatan, dan pengelolaan armada, guna memastikan standar kualitas, kesiapan operasional, serta konsistensi visual dan performa armada dalam seluruh layanan transportasi virtual.
                            </p>
                        </div>
                    </div>

                    <div class="w-full md:w-[60%] relative rounded-[2rem] overflow-hidden shadow-2xl z-0 h-[250px] sm:h-[350px] md:h-[450px] border border-white/10 order-1 md:order-2">
                        <div class="absolute inset-0 bg-kkpDark/30 group-hover:bg-transparent transition-all duration-700 z-10"></div>
                        <img src="{{ asset('asset/image/kkp-hero.png') }}" alt="KKP Garage" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                    </div>
                </div>

                <div class="relative flex flex-col md:flex-row items-center group">
                    <div class="w-full md:w-[60%] relative rounded-[2rem] overflow-hidden shadow-2xl z-0 h-[250px] sm:h-[350px] md:h-[450px] border border-white/10">
                        <div class="absolute inset-0 bg-kkpDark/30 group-hover:bg-transparent transition-all duration-700 z-10"></div>
                        <img src="{{ asset('asset/image/kkp-hero.png') }}" alt="RM KKP" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                    </div>
                    
                    <div class="w-[90%] md:w-[50%] relative z-20 -mt-16 md:mt-0 md:-ml-24 mx-auto md:mx-0 order-2">
                        <div class="bg-[#1c1c1c]/90 backdrop-blur-xl border border-white/10 rounded-3xl p-6 sm:p-8 lg:p-12 shadow-[0_30px_60px_rgba(0,0,0,0.6)] group-hover:border-kkpBlue/40 transition-colors duration-500 relative overflow-hidden">
                            <div class="absolute top-2 right-4 text-[80px] font-black text-white/5 font-sans italic leading-none z-0">03</div>
                            
                            <h3 class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-black text-white font-sans uppercase italic mb-4 sm:mb-6 relative z-10">
                                RM. <span class="text-kkpBlue">Kurnia Kencana Parahyangan</span>
                            </h3>
                            <p class="text-gray-300 font-inter text-[11px] min-[375px]:text-xs sm:text-sm md:text-base leading-relaxed text-justify relative z-10">
                                Menjalankan unit usaha di bidang kuliner, dengan menghadirkan sajian khas Sunda yang mengedepankan kualitas rasa, pelayanan, dan identitas budaya sebagai bagian dari diversifikasi dan penguatan ekosistem usaha <strong class="text-kkpBlue">KKP</strong> Corp.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="armada-visual" class="w-full bg-[#1c1c1c] py-16 sm:py-20 lg:py-28 relative border-t border-white/5 overflow-hidden">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="flex flex-col items-center text-center mb-10 sm:mb-16">
                <div class="inline-flex items-center gap-2 sm:gap-3 mb-3 sm:mb-4">
                    <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full"></span>
                    <h3 class="text-kkpBlue font-bold font-sans text-[10px] sm:text-xs md:text-sm uppercase tracking-widest">Galeri Kami</h3>
                    <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full"></span>
                </div>
                <h2 class="text-2xl min-[375px]:text-3xl md:text-4xl lg:text-5xl font-black text-white font-sans uppercase italic tracking-wide drop-shadow-md">
                    ARMADA & IDENTITAS VISUAL
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-6 mb-16 sm:mb-24">
                
                <div class="group relative rounded-2xl sm:rounded-3xl overflow-hidden aspect-[4/3] md:aspect-square lg:aspect-[4/3] shadow-lg border border-white/10 cursor-pointer">
                    <div class="absolute inset-0 bg-kkpDark/20 group-hover:bg-transparent transition-all duration-700 z-10"></div>
                    <img src="{{ asset('asset/image/kkp-hero.png') }}" alt="Bus KKP" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-in-out" />
                    <div class="absolute bottom-0 left-0 w-full p-4 sm:p-6 bg-gradient-to-t from-kkpDark/90 via-kkpDark/50 to-transparent z-20 translate-y-2 group-hover:translate-y-0 transition-transform duration-500">
                        <h4 class="text-white font-bold font-sans text-sm sm:text-base lg:text-lg uppercase tracking-wide">Bus <span class="text-kkpBlue">KKP</span></h4>
                    </div>
                </div>

                <div class="group relative rounded-2xl sm:rounded-3xl overflow-hidden aspect-[4/3] md:aspect-square lg:aspect-[4/3] shadow-lg border border-white/10 cursor-pointer">
                    <div class="absolute inset-0 bg-kkpDark/20 group-hover:bg-transparent transition-all duration-700 z-10"></div>
                    <img src="{{ asset('asset/image/kkp-hero.png') }}" alt="KKP Garage" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-in-out" />
                    <div class="absolute bottom-0 left-0 w-full p-4 sm:p-6 bg-gradient-to-t from-kkpDark/90 via-kkpDark/50 to-transparent z-20 translate-y-2 group-hover:translate-y-0 transition-transform duration-500">
                        <h4 class="text-white font-bold font-sans text-sm sm:text-base lg:text-lg uppercase tracking-wide"><span class="text-kkpBlue">KKP</span> Garage</h4>
                    </div>
                </div>

                <div class="group relative rounded-2xl sm:rounded-3xl overflow-hidden aspect-[4/3] md:aspect-square lg:aspect-[4/3] shadow-lg border border-white/10 cursor-pointer">
                    <div class="absolute inset-0 bg-kkpDark/20 group-hover:bg-transparent transition-all duration-700 z-10"></div>
                    <img src="{{ asset('asset/image/kkp-hero.png') }}" alt="RM KKP" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-in-out" />
                    <div class="absolute bottom-0 left-0 w-full p-4 sm:p-6 bg-gradient-to-t from-kkpDark/90 via-kkpDark/50 to-transparent z-20 translate-y-2 group-hover:translate-y-0 transition-transform duration-500">
                        <h4 class="text-white font-bold font-sans text-sm sm:text-base lg:text-lg uppercase tracking-wide">RM <span class="text-kkpBlue">KKP</span></h4>
                    </div>
                </div>

            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 lg:gap-8">
                
                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl sm:rounded-[2rem] p-5 sm:p-6 lg:p-8 flex flex-col items-center justify-center text-center group hover:bg-white/10 hover:border-kkpBlue/40 transition-colors duration-300">
                    <span class="material-icons-round text-3xl sm:text-4xl lg:text-5xl text-kkpBlue/50 mb-3 group-hover:text-kkpBlue transition-colors duration-300">directions_bus</span>
                    <h3 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white font-sans mb-1">50<span class="text-kkpBlue">+</span></h3>
                    <p class="text-[10px] min-[375px]:text-xs sm:text-sm text-gray-400 font-bold uppercase tracking-widest font-sans">Armada</p>
                </div>

                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl sm:rounded-[2rem] p-5 sm:p-6 lg:p-8 flex flex-col items-center justify-center text-center group hover:bg-white/10 hover:border-kkpBlue/40 transition-colors duration-300">
                    <span class="material-icons-round text-3xl sm:text-4xl lg:text-5xl text-kkpBlue/50 mb-3 group-hover:text-kkpBlue transition-colors duration-300">storefront</span>
                    <h3 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white font-sans mb-1">100<span class="text-kkpBlue">+</span></h3>
                    <p class="text-[10px] min-[375px]:text-xs sm:text-sm text-gray-400 font-bold uppercase tracking-widest font-sans">Jaringan Agen</p>
                </div>

                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl sm:rounded-[2rem] p-5 sm:p-6 lg:p-8 flex flex-col items-center justify-center text-center group hover:bg-white/10 hover:border-kkpBlue/40 transition-colors duration-300">
                    <span class="material-icons-round text-3xl sm:text-4xl lg:text-5xl text-kkpBlue/50 mb-3 group-hover:text-kkpBlue transition-colors duration-300">route</span>
                    <h3 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white font-sans mb-1">30<span class="text-kkpBlue">+</span></h3>
                    <p class="text-[10px] min-[375px]:text-xs sm:text-sm text-gray-400 font-bold uppercase tracking-widest font-sans">Rute Perjalanan</p>
                </div>

                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl sm:rounded-[2rem] p-5 sm:p-6 lg:p-8 flex flex-col items-center justify-center text-center group hover:bg-white/10 hover:border-kkpBlue/40 transition-colors duration-300">
                    <span class="material-icons-round text-3xl sm:text-4xl lg:text-5xl text-kkpBlue/50 mb-3 group-hover:text-kkpBlue transition-colors duration-300">restaurant</span>
                    <h3 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white font-sans mb-1">5<span class="text-kkpBlue">+</span></h3>
                    <p class="text-[10px] min-[375px]:text-xs sm:text-sm text-gray-400 font-bold uppercase tracking-widest font-sans">Rumah Makan</p>
                </div>

            </div>
        </div>
    </section>

    <section id="penutup" class="w-full bg-kkpDark py-20 sm:py-24 lg:py-32 relative border-t border-white/5 overflow-hidden flex items-center justify-center">
        
        <div class="absolute inset-0 opacity-20 pointer-events-none" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;"></div>
        
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[80%] max-w-3xl h-[80%] bg-kkpBlue/10 rounded-full blur-[150px] pointer-events-none z-0"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            
            <span class="material-icons-round text-5xl sm:text-6xl text-kkpBlue/40 mb-6 sm:mb-8 block">format_quote</span>
            
            <p class="text-gray-200 font-sans font-semibold text-sm sm:text-base md:text-lg lg:text-xl leading-relaxed sm:leading-loose text-justify md:text-center mb-10 sm:mb-12">
                Dengan semangat profesionalisme dan kecintaan terhadap dunia transportasi, <strong class="text-white italic"><span class="text-kkpBlue">Kiarasari</span> Kencana Pasundan</strong> hadir sebagai perusahaan otobus virtual yang mengutamakan kualitas, estetika, dan pengalaman perjalanan. Setiap perjalanan dirancang untuk memberikan rasa aman, nyaman, dan kepuasan, sehingga selalu berakhir dengan senyuman.
            </p>

            <div class="inline-block relative">
                <div class="absolute top-1/2 -translate-y-1/2 -left-8 sm:-left-16 w-6 sm:w-12 h-px bg-gradient-to-l from-kkpBlue to-transparent"></div>
                <div class="absolute top-1/2 -translate-y-1/2 -right-8 sm:-right-16 w-6 sm:w-12 h-px bg-gradient-to-r from-kkpBlue to-transparent"></div>
                
                <p class="text-base sm:text-xl md:text-2xl lg:text-3xl font-black text-white font-sans uppercase italic tracking-widest drop-shadow-[0_0_15px_rgba(140,201,233,0.5)]">
                    "Travel with <span class="text-kkpBlue">Style</span>, Arrive with <span class="text-kkpBlue">Smile</span>"
                </p>
            </div>

        </div>
    </section>
    <main class="flex-grow"></main>
    @include('template.footer')
</body>

</html>