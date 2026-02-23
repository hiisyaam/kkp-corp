<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rumah Makan KKP | KKP Corp</title>

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
</head>

<body class="bg-[#1c1c1c] text-white font-sans antialiased overflow-x-hidden flex flex-col min-h-screen">

    @include('template.nav')

    <main class="flex-grow">
        
        <section class="relative w-full pt-32 pb-16 lg:pt-40 lg:pb-24 bg-kkpDark overflow-hidden flex items-center justify-center border-b border-white/5">
            <div class="absolute top-0 right-0 w-[300px] h-[300px] bg-kkpBlue/10 rounded-full blur-[100px] pointer-events-none"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-white/5 rounded-full blur-[100px] pointer-events-none"></div>

            <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mt-8 sm:mt-0">
                <div class="inline-flex items-center gap-2 sm:gap-3 mb-4">
                    <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full"></span>
                    <h3 class="text-kkpBlue font-bold font-sans text-[10px] sm:text-xs uppercase tracking-widest">Kurnia Kencana Parahyangan</h3>
                    <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full"></span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-kkpbf font-sans uppercase italic tracking-wide mb-4">
                    RUMAH MAKAN <span class="text-kkpBlue">KKP</span>
                </h1>
                <p class="text-white font-inter text-xs sm:text-sm md:text-base max-w-2xl mx-auto leading-relaxed">
                    Nikmati sajian kuliner khas Sunda yang autentik dan lezat. Fasilitas istirahat dan bersantap terbaik yang dikelola langsung oleh KKP Corp untuk menemani perjalanan maupun acara keluarga Anda.
                </p>
            </div>
        </section>

        <section class="w-full py-16 sm:py-24 relative bg-[#1c1c1c]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                
                <div class="text-center mb-10 sm:mb-16">
                    <h2 class="text-2xl md:text-3xl font-black text-kkpbf font-sans uppercase tracking-widest drop-shadow-md">
                        JARINGAN <span class="text-kkpBlue">RUMAH MAKAN</span>
                    </h2>
                    <p class="text-white font-inter text-xs sm:text-sm mt-2">Temukan lokasi Rumah Makan KKP yang tersebar di berbagai wilayah.</p>
                </div>

                @if($rumahMakan->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                        @foreach($rumahMakan as $rm)
                            <div class="group relative bg-[#262626]/80 backdrop-blur-md border border-white/10 rounded-2xl sm:rounded-3xl p-5 sm:p-6 hover:-translate-y-2 hover:bg-white/5 hover:border-kkpBlue/40 transition-all duration-300 shadow-xl overflow-hidden flex flex-col h-full">
                                
                                <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-kkpBlue to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                                <div class="absolute -right-6 -bottom-6 text-[120px] font-black text-white/5 font-sans pointer-events-none group-hover:scale-110 group-hover:text-kkpBlue/5 transition-all duration-700">
                                    <span class="material-icons-round text-[140px]">restaurant</span>
                                </div>

                                <div class="relative z-10 flex flex-col h-full">
                                    
                                    <div class="flex items-start gap-4 mb-4">
                                        <div class="w-12 h-12 shrink-0 bg-white/5 border border-white/10 rounded-xl flex items-center justify-center text-kkpBlue group-hover:bg-kkpBlue group-hover:text-kkpDark transition-colors duration-300 shadow-inner mt-1">
                                            <span class="material-icons-round text-2xl">storefront</span>
                                        </div>
                                        
                                        <div class="flex flex-col">
                                            <span class="text-[9px] sm:text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1">Rumah Makan KKP</span>
                                            <h4 class="text-sm sm:text-base font-black text-kkpbf font-sans uppercase leading-snug">
                                                DIVISI <span class="text-kkpBlue">{{ $rm->divisi }}</span>
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="flex-grow"></div>

                                    <div class="mt-4 pt-4 border-t border-white/10 flex items-start gap-3">
                                        <span class="material-icons-round text-base sm:text-lg text-gray-500 mt-0.5 shrink-0">location_on</span>
                                        <p class="font-inter text-xs sm:text-sm text-white leading-relaxed">
                                            {{ $rm->lokasi }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-20 bg-[#262626] border border-white/5 rounded-3xl shadow-xl">
                        <span class="material-icons-round text-5xl text-gray-600 mb-4">restaurant_menu</span>
                        <h3 class="text-xl font-bold text-gray-400 mb-2">Belum Ada Lokasi</h3>
                        <p class="text-gray-500 text-sm max-w-md mx-auto">Data lokasi Rumah Makan KKP saat ini sedang diperbarui. Silakan kembali lagi nanti.</p>
                    </div>
                @endif

            </div>
        </section>

    </main>

    @include('template.footer')

</body>
</html>