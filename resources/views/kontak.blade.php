<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hubungi Kami | KKP Corp</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('asset/image/logo-tab.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            <div class="absolute top-0 right-0 w-[300px] h-[300px] bg-kkpBlue/5 rounded-full blur-[100px] pointer-events-none"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-white/5 rounded-full blur-[100px] pointer-events-none"></div>

            <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mt-8 sm:mt-0">
                <div class="inline-flex items-center gap-2 sm:gap-3 mb-4">
                    <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full"></span>
                    <h3 class="text-kkpBlue font-bold font-sans text-[10px] sm:text-xs uppercase tracking-widest">Pusat Informasi & Bantuan</h3>
                    <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full"></span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-kkpbf font-sans uppercase italic tracking-wide mb-4">
                    HUBUNGI <span class="text-kkpBlue">KAMI</span>
                </h1>
                <p class="text-gray-300 font-inter text-xs sm:text-sm md:text-base max-w-2xl mx-auto leading-relaxed">
                    Kami selalu siap mendengar masukan, menjawab pertanyaan, dan membantu kebutuhan perjalanan Anda. Jangan ragu untuk menghubungi layanan pelanggan kami.
                </p>
            </div>
        </section>

        <section class="w-full py-12 sm:py-20 relative z-20 bg-[#1c1c1c]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5 sm:gap-6 lg:gap-8">
                    
                    <div class="bg-[#262626]/80 backdrop-blur-md border border-white/10 rounded-2xl sm:rounded-3xl p-6 sm:p-8 hover:-translate-y-2 hover:border-kkpBlue/40 hover:bg-white/5 transition-all duration-300 shadow-xl group text-center flex flex-col items-center">
                        <div class="w-14 h-14 bg-white/5 border border-white/10 rounded-2xl flex items-center justify-center text-kkpBlue mb-4 sm:mb-5 group-hover:bg-kkpBlue group-hover:text-kkpDark transition-colors duration-300 shadow-inner">
                            <span class="material-icons-round text-3xl">support_agent</span>
                        </div>
                        <h4 class="text-lg sm:text-xl font-bold text-kkpbf font-sans uppercase tracking-wide mb-2">Layanan Pelanggan</h4>
                        <p class="text-white font-inter text-xs sm:text-sm mb-4 leading-relaxed">Senin - Minggu (08:00 - 22:00 WIB)</p>
                        <a href="https://wa.me/6281315211836" target="_blank" class="text-xl sm:text-2xl font-black text-kkpBlue tracking-wider hover:text-white transition-colors">
                            0813-1521-1836*
                        </a>
                        <p class="font-inter text-[10px] text-gray-500 italic mt-3">*hanya nomor telpon palsu</p>
                    </div>

                    <div class="bg-[#262626]/80 backdrop-blur-md border border-white/10 rounded-2xl sm:rounded-3xl p-6 sm:p-8 hover:-translate-y-2 hover:border-kkpBlue/40 hover:bg-white/5 transition-all duration-300 shadow-xl group text-center flex flex-col items-center">
                        <div class="w-14 h-14 bg-white/5 border border-white/10 rounded-2xl flex items-center justify-center text-kkpBlue mb-4 sm:mb-5 group-hover:bg-kkpBlue group-hover:text-kkpDark transition-colors duration-300 shadow-inner">
                            <span class="material-icons-round text-3xl">email</span>
                        </div>
                        <h4 class="text-lg sm:text-xl font-bold text-kkpbf font-sans uppercase tracking-wide mb-2">Email</h4>
                        <p class="text-white font-inter text-xs sm:text-sm mb-4 leading-relaxed">Untuk keperluan kemitraan dan informasi resmi.</p>
                        <a href="mailto:ptkkp.kiarasari@gmail.com" class="text-lg sm:text-xl font-black text-kkpBlue tracking-wider hover:text-white transition-colors break-all">
                            ptkkp.kiarasari@gmail.com
                        </a>
                    </div>

                    <div class="bg-[#262626]/80 backdrop-blur-md border border-white/10 rounded-2xl sm:rounded-3xl p-6 sm:p-8 hover:-translate-y-2 hover:border-kkpBlue/40 hover:bg-white/5 transition-all duration-300 shadow-xl group text-center flex flex-col items-center">
                        <div class="w-14 h-14 bg-white/5 border border-white/10 rounded-2xl flex items-center justify-center text-kkpBlue mb-4 sm:mb-5 group-hover:bg-kkpBlue group-hover:text-kkpDark transition-colors duration-300 shadow-inner">
                            <span class="material-icons-round text-3xl">corporate_fare</span>
                        </div>
                        <h4 class="text-lg sm:text-xl font-bold text-kkpbf font-sans uppercase tracking-wide mb-2">Kantor Pusat</h4>
                        <p class="text-white font-inter text-xs sm:text-sm leading-relaxed max-w-[200px] mt-2">
                            Soreang, Kab. Bandung<br>
                            Jawa Barat, Indonesia
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <section class="w-full pb-16 sm:pb-28 relative bg-[#1c1c1c]">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
                
                <div class="mb-10 sm:mb-14 flex flex-col items-center">
                    <div class="inline-flex items-center gap-2 sm:gap-3 mb-3">
                        <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full"></span>
                        <h3 class="text-kkpBlue font-bold font-sans text-[10px] sm:text-xs uppercase tracking-widest">Komunitas Virtual</h3>
                        <span class="w-6 sm:w-10 h-1 bg-kkpBlue rounded-full"></span>
                    </div>
                    <h2 class="text-2xl md:text-4xl lg:text-5xl font-black text-kkpbf font-sans uppercase italic tracking-wide mb-4 leading-tight">
                        IKUTI KAMI DI <span class="text-kkpBlue">SOSIAL MEDIA</span>
                    </h2>
                    <p class="text-gray-400 font-inter text-xs sm:text-sm md:text-base leading-relaxed max-w-2xl mx-auto">
                        Bergabunglah dengan komunitas otobus virtual kami. Dapatkan informasi terbaru mengenai rute, armada baru, dan event menarik lainnya melalui platform resmi KKP Corp.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-6 text-left">
                    
                    <a href="https://instagram.com/kkp.kiarasari" class="group flex items-center justify-between p-4 sm:p-6 bg-[#262626]/50 border border-white/10 rounded-2xl hover:bg-gradient-to-r hover:from-[#833ab4] hover:via-[#fd1d1d] hover:to-[#fcb045] hover:border-transparent transition-all duration-300 shadow-md hover:-translate-y-1">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white group-hover:bg-white/20 group-hover:border-transparent transition-colors shadow-inner">
                                <i class="fa-brands fa-instagram text-2xl"></i>
                            </div>
                            <div class="flex flex-col">
                                <span class="font-bold text-white font-sans text-sm sm:text-base tracking-wide">Instagram</span>
                                <span class="text-[10px] sm:text-xs text-gray-400 group-hover:text-white/90 font-inter">@kkp.kiarasari</span>
                            </div>
                        </div>
                        <span class="material-icons-round text-gray-500 group-hover:text-white transition-colors transform group-hover:translate-x-1">arrow_forward_ios</span>
                    </a>

                    <a href="#" class="group flex items-center justify-between p-4 sm:p-6 bg-[#262626]/50 border border-white/10 rounded-2xl hover:bg-[#1877F2] hover:border-transparent transition-all duration-300 shadow-md hover:-translate-y-1">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white group-hover:bg-white/20 group-hover:border-transparent transition-colors shadow-inner">
                                <i class="fa-brands fa-facebook-f text-2xl"></i>
                            </div>
                            <div class="flex flex-col">
                                <span class="font-bold text-white font-sans text-sm sm:text-base tracking-wide">Facebook</span>
                                <span class="text-[10px] sm:text-xs text-gray-400 group-hover:text-white/90 font-inter">Teu Nyahoo, sugan weh aya facenuk</span>
                            </div>
                        </div>
                        <span class="material-icons-round text-gray-500 group-hover:text-white transition-colors transform group-hover:translate-x-1">arrow_forward_ios</span>
                    </a>

                    <a href="#" class="group flex items-center justify-between p-4 sm:p-6 bg-[#262626]/50 border border-white/10 rounded-2xl hover:bg-[#FF0000] hover:border-transparent transition-all duration-300 shadow-md hover:-translate-y-1">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white group-hover:bg-white/20 group-hover:border-transparent transition-colors shadow-inner">
                                <i class="fa-brands fa-youtube text-2xl"></i>
                            </div>
                            <div class="flex flex-col">
                                <span class="font-bold text-white font-sans text-sm sm:text-base tracking-wide">YouTube</span>
                                <span class="text-[10px] sm:text-xs text-gray-400 group-hover:text-white/90 font-inter">Ieu ge te apal urg mh</span>
                            </div>
                        </div>
                        <span class="material-icons-round text-gray-500 group-hover:text-white transition-colors transform group-hover:translate-x-1">arrow_forward_ios</span>
                    </a>

                </div>
            </div>
        </section>

    </main>

    @include('template.footer')

</body>
</html>