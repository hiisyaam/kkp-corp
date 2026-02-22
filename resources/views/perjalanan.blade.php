<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rute & Perjalanan | KKP Corp</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { kkpDark: "#262626", kkpBlue: "#8cc9e9", kkpBlueDark: "#5baacf" },
                    fontFamily: { sans: ["Montserrat", "sans-serif"], inter: ["Inter", "sans-serif"] },
                },
            },
        };
    </script>
</head>

<body class="bg-[#1c1c1c] text-white font-sans antialiased overflow-x-hidden flex flex-col min-h-screen">

    @include('template.nav')

    <main class="flex-grow">
        
        <section class="relative w-full pt-32 pb-20 lg:pt-40 lg:pb-28 bg-kkpDark overflow-hidden flex items-center justify-center border-b border-white/5">
            <img src="{{ asset('asset/image/kkp-hero.png') }}" alt="Background" class="absolute inset-0 w-full h-full object-cover opacity-20 object-center">
            <div class="absolute inset-0 bg-gradient-to-t from-[#1c1c1c] via-kkpDark/80 to-transparent"></div>

            <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mt-8 sm:mt-0">
                <div class="inline-flex items-center gap-2 sm:gap-3 mb-4">
                    <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full"></span>
                    <h3 class="text-kkpBlue font-bold font-sans text-[10px] sm:text-xs uppercase tracking-widest drop-shadow-md">Eksplorasi Rute</h3>
                    <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full"></span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-white font-sans uppercase italic tracking-wide drop-shadow-2xl mb-4">
                    PILIH <span class="text-kkpBlue">WILAYAH TUJUAN</span>
                </h1>
                <p class="text-gray-300 font-inter text-xs sm:text-sm md:text-base max-w-2xl mx-auto drop-shadow-md">
                    Jelajahi berbagai rute perjalanan dan jadwal armada KKP yang tersebar di berbagai wilayah untuk menemani perjalanan Anda.
                </p>
            </div>
        </section>

        <section class="w-full py-16 relative">
            <div class="absolute top-0 right-0 w-[300px] h-[300px] bg-kkpBlue/5 rounded-full blur-[100px] pointer-events-none z-0"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                    
                    @foreach($wilayahs as $w)
                        <a href="{{ url('/perjalanan/' . $w->id) }}" class="group relative bg-[#262626]/80 backdrop-blur-md border border-white/10 rounded-3xl p-6 sm:p-8 hover:-translate-y-2 hover:bg-white/5 hover:border-kkpBlue/50 transition-all duration-500 overflow-hidden flex flex-col h-full shadow-lg hover:shadow-[0_15px_40px_rgba(140,201,233,0.15)]">
                            
                            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-kkpBlue to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <div class="absolute -right-4 -bottom-4 text-[120px] font-black text-white/5 font-sans italic leading-none pointer-events-none group-hover:scale-110 group-hover:text-kkpBlue/5 transition-all duration-700">
                                <span class="material-icons-round text-[150px]">map</span>
                            </div>

                            <div class="relative z-10 mb-4">
                                <div class="w-14 h-14 bg-white/5 border border-white/10 rounded-2xl flex items-center justify-center text-kkpBlue mb-5 group-hover:bg-kkpBlue group-hover:text-kkpDark transition-colors duration-300">
                                    <span class="material-icons-round text-3xl">location_on</span>
                                </div>
                                <h4 class="text-xl sm:text-2xl font-black text-white font-sans tracking-wide uppercase">
                                    {{ $w->nama_wilayah }}
                                </h4>
                            </div>

                            <div class="relative z-10 mt-auto flex items-center text-kkpBlue font-bold text-xs sm:text-sm uppercase tracking-widest group-hover:text-white transition-colors">
                                Lihat Rute <span class="material-icons-round text-sm ml-1 transform group-hover:translate-x-2 transition-transform">arrow_forward</span>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
        </section>

    </main>

    @include('template.footer')

</body>
</html>