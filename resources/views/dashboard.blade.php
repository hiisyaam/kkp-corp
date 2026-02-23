<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard KKP+ | KKP Corp</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Montserrat:wght@400;600;700;800;900&display=swap" rel="stylesheet">
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

    <main class="flex-grow pt-32 pb-20 relative bg-kkpDark">
        
        <div class="absolute top-0 right-0 w-[300px] h-[300px] sm:w-[500px] sm:h-[500px] bg-kkpBlue/10 rounded-full blur-[100px] sm:blur-[120px] pointer-events-none z-0"></div>
        <div class="absolute bottom-10 left-0 w-[200px] h-[200px] sm:w-[400px] sm:h-[400px] bg-white/5 rounded-full blur-[80px] pointer-events-none z-0"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="bg-gradient-to-r from-kkpBlue/20 to-transparent border-l-4 border-kkpBlue rounded-r-2xl sm:rounded-r-3xl p-6 sm:p-8 mb-8 sm:mb-10 shadow-lg flex items-center gap-4 sm:gap-6">
                <div class="hidden sm:flex w-16 h-16 bg-kkpBlue/20 rounded-full items-center justify-center text-kkpBlue shrink-0">
                    <span class="material-icons-round text-3xl">verified</span>
                </div>
                <div>
                    <h1 class="text-2xl sm:text-3xl lg:text-4xl font-black text-kkpbf font-sans uppercase italic tracking-wide mb-1 sm:mb-2 drop-shadow-md">
                        Selamat Datang di <span class="text-kkpBlue">KKP+</span>
                    </h1>
                    <p class="text-gray-300 font-inter text-xs sm:text-sm leading-relaxed">
                        Selamat! Anda telah resmi menjadi bagian dari keanggotaan prioritas KKP Corp. Nikmati pengalaman perjalanan yang lebih personal dan eksklusif bersama kami.
                    </p>
                </div>
            </div>

            <div class="bg-[#262626]/80 backdrop-blur-xl border border-white/10 rounded-3xl sm:rounded-[2.5rem] p-6 sm:p-10 shadow-2xl relative overflow-hidden group hover:border-kkpBlue/30 transition-all duration-500">
                
                <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-kkpBlue to-transparent"></div>

                <div class="absolute -right-10 -bottom-10 text-[150px] font-black text-white/5 font-sans pointer-events-none group-hover:scale-110 group-hover:text-kkpBlue/5 transition-all duration-700">
                    <span class="material-icons-round text-[200px]">card_membership</span>
                </div>

                <div class="relative z-10">
                    <div class="flex items-center gap-3 mb-8 sm:mb-10 border-b border-white/10 pb-4 sm:pb-6">
                        <span class="material-icons-round text-kkpBlue text-2xl sm:text-3xl">account_circle</span>
                        <h2 class="text-lg sm:text-xl font-bold text-kkpbf font-sans uppercase tracking-widest">
                            Profil Anggota
                        </h2>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 sm:gap-10">
                        
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 sm:w-14 sm:h-14 bg-white/5 border border-white/10 rounded-xl flex items-center justify-center text-kkpBlue shadow-inner shrink-0 mt-1">
                                <span class="material-icons-round text-xl sm:text-2xl">badge</span>
                            </div>
                            <div>
                                <p class="text-[10px] sm:text-xs text-gray-400 font-sans uppercase tracking-widest font-bold mb-1.5">Nama Lengkap</p>
                                <p class="text-base sm:text-lg font-bold text-white font-inter break-words">{{ Auth::user()->name }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 sm:w-14 sm:h-14 bg-white/5 border border-white/10 rounded-xl flex items-center justify-center text-kkpBlue shadow-inner shrink-0 mt-1">
                                <span class="material-icons-round text-xl sm:text-2xl">email</span>
                            </div>
                            <div>
                                <p class="text-[10px] sm:text-xs text-gray-400 font-sans uppercase tracking-widest font-bold mb-1.5">Alamat Email</p>
                                <p class="text-base sm:text-lg font-bold text-white font-inter break-all">{{ Auth::user()->email }}</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 md:col-span-2">
                            <div class="w-12 h-12 sm:w-14 sm:h-14 bg-white/5 border border-white/10 rounded-xl flex items-center justify-center text-kkpBlue shadow-inner shrink-0 mt-1">
                                <span class="material-icons-round text-xl sm:text-2xl">stars</span>
                            </div>
                            <div>
                                <p class="text-[10px] sm:text-xs text-gray-400 font-sans uppercase tracking-widest font-bold mb-2">Status Keanggotaan</p>
                                <div class="inline-flex items-center gap-2 bg-kkpBlue/10 border border-kkpBlue/30 px-3 py-1.5 sm:px-4 sm:py-2 rounded-lg">
                                    <span class="w-2 h-2 rounded-full bg-kkpBlue animate-pulse"></span>
                                    <p class="text-xs sm:text-sm font-bold text-kkpBlue font-sans uppercase tracking-widest">
                                        {{ Auth::user()->role === 'admin' ? 'Administrator' : 'Member KKP+' }}
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </main>

    @include('template.footer')

</body>
</html>