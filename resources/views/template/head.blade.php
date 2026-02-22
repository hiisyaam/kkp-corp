<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KKP Corp | Kiarasari Kencana Pasundan</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

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
                <h1 class="mb-1 md:mb-8 text-[11px] min-[375px]:text-[13px] sm:text-2xl md:text-4xl lg:text-[54px] font-black tracking-wider leading-tight uppercase italic drop-shadow-xl font-sans">
                    <span class="text-kkpBlue">KIARASARI</span> <span class="text-kkpbf">KENCANA PASUNDAN</span>
                </h1>
                <p class="text-[8px] min-[375px]:text-[9px] sm:text-xs md:text-sm lg:text-3xl font-medium text-white font-sans drop-shadow-md tracking-wide">
                    <span class="italic text-kkpbf"><strong class="text-kkpBlue">Travel</strong> with <strong class="text-kkpBlue">Style</strong>, <strong class="text-kkpBlue">Arrive</strong> with <strong class="text-kkpBlue">Smile</strong></span>
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
                        <img src="{{ asset('asset/image/kkp-ber-1.jpeg') }}" alt="PO Kiarasari" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
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
                        <img src="{{ asset('asset/image/kkp-ber-2.jpeg') }}" alt="KKP Garage" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
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
                    <img src="{{ asset('asset/image/kkp-ber-1.jpeg') }}" alt="Bus KKP" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-in-out" />
                    <div class="absolute bottom-0 left-0 w-full p-4 sm:p-6 bg-gradient-to-t from-kkpDark/90 via-kkpDark/50 to-transparent z-20 translate-y-2 group-hover:translate-y-0 transition-transform duration-500">
                        <h4 class="text-white font-bold font-sans text-sm sm:text-base lg:text-lg uppercase tracking-wide">Bus <span class="text-kkpBlue">KKP</span></h4>
                    </div>
                </div>

                <div class="group relative rounded-2xl sm:rounded-3xl overflow-hidden aspect-[4/3] md:aspect-square lg:aspect-[4/3] shadow-lg border border-white/10 cursor-pointer">
                    <div class="absolute inset-0 bg-kkpDark/20 group-hover:bg-transparent transition-all duration-700 z-10"></div>
                    <img src="{{ asset('asset/image/kkp-ber-2.jpeg') }}" alt="KKP Garage" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-in-out" />
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
                    <h3 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white font-sans mb-1">2100<span class="text-kkpBlue">+</span></h3>
                    <p class="text-[10px] min-[375px]:text-xs sm:text-sm text-gray-400 font-bold uppercase tracking-widest font-sans">Armada</p>
                </div>

                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl sm:rounded-[2rem] p-5 sm:p-6 lg:p-8 flex flex-col items-center justify-center text-center group hover:bg-white/10 hover:border-kkpBlue/40 transition-colors duration-300">
                    <span class="material-icons-round text-3xl sm:text-4xl lg:text-5xl text-kkpBlue/50 mb-3 group-hover:text-kkpBlue transition-colors duration-300">storefront</span>
                    <h3 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white font-sans mb-1">1200<span class="text-kkpBlue">+</span></h3>
                    <p class="text-[10px] min-[375px]:text-xs sm:text-sm text-gray-400 font-bold uppercase tracking-widest font-sans">Jaringan Agen</p>
                </div>

                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl sm:rounded-[2rem] p-5 sm:p-6 lg:p-8 flex flex-col items-center justify-center text-center group hover:bg-white/10 hover:border-kkpBlue/40 transition-colors duration-300">
                    <span class="material-icons-round text-3xl sm:text-4xl lg:text-5xl text-kkpBlue/50 mb-3 group-hover:text-kkpBlue transition-colors duration-300">route</span>
                    <h3 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white font-sans mb-1">360<span class="text-kkpBlue">+</span></h3>
                    <p class="text-[10px] min-[375px]:text-xs sm:text-sm text-gray-400 font-bold uppercase tracking-widest font-sans">Rute Perjalanan</p>
                </div>

                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl sm:rounded-[2rem] p-5 sm:p-6 lg:p-8 flex flex-col items-center justify-center text-center group hover:bg-white/10 hover:border-kkpBlue/40 transition-colors duration-300">
                    <span class="material-icons-round text-3xl sm:text-4xl lg:text-5xl text-kkpBlue/50 mb-3 group-hover:text-kkpBlue transition-colors duration-300">restaurant</span>
                    <h3 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white font-sans mb-1">15<span class="text-kkpBlue">+</span></h3>
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

    @include('template.footer')
</body>

</html>