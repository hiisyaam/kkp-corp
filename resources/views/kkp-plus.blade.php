<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KKP+ Executive Membership | KKP Corp</title>

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

<body class="bg-kkpDark text-white font-sans antialiased overflow-x-hidden flex flex-col min-h-screen">

    @include('template.nav')

    <main class="flex-grow pt-28 sm:pt-32 lg:pt-40 pb-20 relative bg-kkpDark overflow-hidden flex items-center min-h-screen">
        
        <div class="absolute top-0 right-0 w-[400px] md:w-[600px] h-[400px] md:h-[600px] bg-kkpBlue/10 rounded-full blur-[120px] pointer-events-none z-0"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-[#1c1c1c] rounded-full blur-[100px] pointer-events-none z-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            
            <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-20">
                
                <div class="w-full lg:w-1/2 flex flex-col z-20 order-2 lg:order-1">
                    
                    <div class="inline-flex items-center gap-2 sm:gap-3 bg-white/5 border border-white/10 rounded-full px-4 sm:px-5 py-2 w-max shadow-lg backdrop-blur-sm mb-4 sm:mb-6">
                        <span class="material-icons-round text-kkpBlue text-sm">stars</span>
                        <span class="text-white font-bold font-sans text-[10px] sm:text-xs uppercase tracking-widest">Execlusive Membership</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-[64px] font-black text-kkpbf font-sans uppercase italic tracking-wide leading-none drop-shadow-xl">
                        KKP<span class="text-kkpBlue">+</span>
                    </h1>
                    <h2 class="text-base sm:text-lg md:text-xl lg:text-2xl font-bold text-kkpBlue font-sans uppercase tracking-widest mt-2 mb-4 sm:mb-6 drop-shadow-md">
                        Experience, Exclusive, Excellence
                    </h2>

                    <p class="text-gray-300 font-inter text-xs sm:text-sm md:text-base leading-relaxed text-justify max-w-xl">
                        <strong class="text-white">KKP+</strong> merupakan program executive membership dari Kiarasari Kencana Pasundan yang dirancang untuk menghadirkan layanan prioritas dan pengalaman perjalanan yang lebih personal. Program ini menjadi bentuk apresiasi tertinggi perusahaan kepada pelanggan dan mitra terpilih, melalui akses istimewa dan hubungan profesional jangka panjang.
                    </p>

                    <div class="relative z-10 border-l-4 border-kkpBlue pl-4 sm:pl-5 pr-3 py-3 sm:py-4 my-5 sm:my-6 rounded-r-xl sm:rounded-r-2xl bg-white/5 backdrop-blur-sm border-y border-r border-white/5 shadow-lg max-w-xl">
                        <span class="block text-kkpBlue font-bold font-sans text-[10px] sm:text-xs uppercase tracking-widest mb-1.5">Visi Program</span>
                        <p class="text-gray-200 font-inter text-[11px] sm:text-sm leading-relaxed italic font-medium drop-shadow-md text-justify">
                            "Menjadi standar keanggotaan premium yang merepresentasikan profesionalisme, loyalitas, dan kemitraan berkelanjutan antara perusahaan dan pelanggan."
                        </p>
                    </div>

                    <div class="flex flex-col space-y-3 sm:space-y-4 pt-2">
                        
                        <div class="flex items-start gap-4 p-3 sm:p-4 bg-[#1c1c1c]/60 border border-white/5 rounded-2xl hover:bg-white/5 hover:border-kkpBlue/30 transition-all duration-300">
                            <div class="w-10 h-10 shrink-0 bg-kkpBlue/10 rounded-full flex items-center justify-center text-kkpBlue">
                                <span class="material-icons-round text-lg sm:text-xl">support_agent</span>
                            </div>
                            <div>
                                <h4 class="text-white font-bold font-sans text-sm md:text-base mb-1">Priority Service</h4>
                                <p class="text-gray-400 font-inter text-[11px] sm:text-xs md:text-sm leading-relaxed">Akses layanan prioritas dalam reservasi, konfirmasi perjalanan, serta dukungan komunikasi yang lebih responsif.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-3 sm:p-4 bg-[#1c1c1c]/60 border border-white/5 rounded-2xl hover:bg-white/5 hover:border-kkpBlue/30 transition-all duration-300">
                            <div class="w-10 h-10 shrink-0 bg-kkpBlue/10 rounded-full flex items-center justify-center text-kkpBlue">
                                <span class="material-icons-round text-lg sm:text-xl">workspace_premium</span>
                            </div>
                            <div>
                                <h4 class="text-white font-bold font-sans text-sm md:text-base mb-1">Executive Recognition</h4>
                                <p class="text-gray-400 font-inter text-[11px] sm:text-xs md:text-sm leading-relaxed">Status resmi sebagai Member KKP+ dengan identitas eksklusif sebagai simbol kepercayaan dan loyalitas.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-3 sm:p-4 bg-[#1c1c1c]/60 border border-white/5 rounded-2xl hover:bg-white/5 hover:border-kkpBlue/30 transition-all duration-300">
                            <div class="w-10 h-10 shrink-0 bg-kkpBlue/10 rounded-full flex items-center justify-center text-kkpBlue">
                                <span class="material-icons-round text-lg sm:text-xl">loyalty</span>
                            </div>
                            <div>
                                <h4 class="text-white font-bold font-sans text-sm md:text-base mb-1">Loyalty Appreciation</h4>
                                <p class="text-gray-400 font-inter text-[11px] sm:text-xs md:text-sm leading-relaxed">Program penghargaan berbasis loyalitas melalui akumulasi poin perjalanan dan benefit khusus bagi member aktif.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 pt-6 sm:pt-8 w-full max-w-xl">
                        <a href="/register" class="w-full sm:w-auto flex-1 bg-kkpBlue text-kkpDark px-6 py-3.5 rounded-xl font-bold hover:bg-white hover:-translate-y-1 transition-all duration-300 flex items-center justify-center gap-2 shadow-[0_10px_20px_rgba(140,201,233,0.3)]">
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