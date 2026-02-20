<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KKP+ Membership | KKP Corp</title>

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

    <main class="flex-grow pt-32 lg:pt-40 pb-20 relative bg-kkpDark overflow-hidden flex items-center">
        
        <div class="absolute top-0 right-0 w-[400px] md:w-[600px] h-[400px] md:h-[600px] bg-kkpBlue/10 rounded-full blur-[120px] pointer-events-none z-0"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-[#1c1c1c] rounded-full blur-[100px] pointer-events-none z-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
                
                <div class="w-full lg:w-1/2 flex flex-col space-y-6 lg:space-y-8 z-20 order-2 lg:order-1">
                    
                    <div class="inline-flex items-center gap-3 bg-white/5 border border-white/10 rounded-full px-5 py-2 w-max shadow-lg backdrop-blur-sm">
                        <span class="material-icons-round text-kkpBlue text-sm">stars</span>
                        <span class="text-white font-bold font-sans text-[10px] sm:text-xs uppercase tracking-widest">Membership Program</span>
                    </div>

                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[54px] font-black text-white font-sans uppercase italic tracking-wide leading-tight drop-shadow-xl">
                        Lebih Eksklusif,<br>
                        Bersama <span class="text-kkpBlue">KKP+</span>
                    </h1>

                    <p class="text-gray-300 font-inter text-sm sm:text-base md:text-lg leading-relaxed text-justify lg:text-left max-w-xl">
                        Bergabunglah menjadi anggota KKP+ dan nikmati pengalaman transportasi virtual dengan berbagai keuntungan premium. Cukup dengan mendaftarkan akun, Anda otomatis menjadi bagian dari keluarga besar kami.
                    </p>

                    <div class="flex flex-col space-y-4 pt-2">
                        <div class="flex items-start gap-4 p-4 bg-[#1c1c1c]/60 border border-white/5 rounded-2xl hover:bg-white/5 hover:border-kkpBlue/30 transition-all duration-300">
                            <div class="w-10 h-10 shrink-0 bg-kkpBlue/10 rounded-full flex items-center justify-center text-kkpBlue">
                                <span class="material-icons-round text-xl">confirmation_number</span>
                            </div>
                            <div>
                                <h4 class="text-white font-bold font-sans text-sm md:text-base mb-1">Akses Tiket Lebih Cepat</h4>
                                <p class="text-gray-400 font-inter text-xs md:text-sm">Prioritas dalam pemilihan kursi dan pemesanan armada khusus.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 bg-[#1c1c1c]/60 border border-white/5 rounded-2xl hover:bg-white/5 hover:border-kkpBlue/30 transition-all duration-300">
                            <div class="w-10 h-10 shrink-0 bg-kkpBlue/10 rounded-full flex items-center justify-center text-kkpBlue">
                                <span class="material-icons-round text-xl">card_giftcard</span>
                            </div>
                            <div>
                                <h4 class="text-white font-bold font-sans text-sm md:text-base mb-1">Promo & Diskon Eksklusif</h4>
                                <p class="text-gray-400 font-inter text-xs md:text-sm">Dapatkan penawaran harga spesial yang hanya tersedia untuk member.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 bg-[#1c1c1c]/60 border border-white/5 rounded-2xl hover:bg-white/5 hover:border-kkpBlue/30 transition-all duration-300">
                            <div class="w-10 h-10 shrink-0 bg-kkpBlue/10 rounded-full flex items-center justify-center text-kkpBlue">
                                <span class="material-icons-round text-xl">loyalty</span>
                            </div>
                            <div>
                                <h4 class="text-white font-bold font-sans text-sm md:text-base mb-1">KKP Reward Points</h4>
                                <p class="text-gray-400 font-inter text-xs md:text-sm">Kumpulkan poin di setiap perjalanan untuk ditukarkan dengan merchandise atau tiket gratis.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-col gap-4 pt-6">
                        <a href="/register" class="bg-kkpBlue text-kkpDark px-8 py-3.5 rounded-xl font-bold hover:bg-white hover:-translate-y-1 transition-all duration-300 flex items-center justify-center gap-2 shadow-[0_10px_20px_rgba(140,201,233,0.3)]">
                            Daftar KKP+
                            <span class="material-icons-round text-lg">arrow_forward</span>
                        </a>
                    </div>

                </div>

                <div class="w-full lg:w-1/2 relative order-1 lg:order-2 flex justify-center lg:justify-end min-h-[300px] sm:min-h-[400px]">
                    <div class="absolute right-0 top-1/2 -translate-y-1/2 w-3/4 h-[120%] bg-gradient-to-l from-white/5 to-transparent border-r border-y border-white/10 rounded-l-[3rem] -z-10 hidden lg:block"></div>
                    
                    <div class="relative w-full max-w-lg aspect-square lg:aspect-[4/5] flex items-center justify-center group">
                        <div class="absolute inset-0 bg-kkpBlue/20 rounded-full blur-[80px] group-hover:bg-kkpBlue/30 transition-all duration-700"></div>
                        
                        <img src="{{ asset('asset/image/kkp-hero.png') }}" alt="KKP Plus Armada" 
                             class="w-full h-auto object-contain relative z-10 drop-shadow-[0_20px_40px_rgba(0,0,0,0.8)] mix-blend-lighten transform group-hover:scale-105 transition-transform duration-700 ease-in-out" 
                             style="-webkit-mask-image: radial-gradient(circle, black 50%, transparent 100%); mask-image: radial-gradient(circle, black 50%, transparent 100%);" />
                    </div>
                </div>

            </div>
        </div>
    </main>

    @include('template.footer')
</body>

</html>