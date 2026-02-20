<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Akun | KKP Corp</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">

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

    <main class="flex-grow flex items-center justify-center pt-32 pb-20 relative bg-kkpDark">
        
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[300px] h-[300px] md:w-[600px] md:h-[600px] bg-white/5 rounded-full blur-[120px] pointer-events-none z-0"></div>

        <div class="w-full max-w-lg px-4 sm:px-6 relative z-10">
            <div class="bg-[#1c1c1c]/80 backdrop-blur-xl border border-white/10 rounded-[2rem] p-8 sm:p-10 shadow-2xl relative overflow-hidden group hover:border-kkpBlue/30 transition-all duration-500">
                
                <div class="absolute top-0 right-0 w-full h-1.5 bg-gradient-to-l from-kkpBlue to-transparent"></div>

                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-white/5 border border-white/10 rounded-2xl text-kkpBlue mb-4 shadow-inner">
                        <span class="material-icons-round text-3xl">person_add</span>
                    </div>
                    <h1 class="text-2xl sm:text-3xl font-black text-white font-sans uppercase italic tracking-wide">
                        Buat Akun <span class="text-kkpBlue">KKP+</span>
                    </h1>
                    <p class="text-gray-400 font-inter text-xs sm:text-sm mt-2">
                        Daftar sekarang untuk menikmati layanan prioritas dan promo eksklusif.
                    </p>
                </div>

                <form action="#" method="POST" class="space-y-4">
                    
                    <div class="space-y-1 relative">
                        <label class="block font-sans text-[11px] text-gray-400 uppercase tracking-widest font-bold ml-1">Nama Lengkap</label>
                        <div class="flex items-center bg-[#222222] rounded-xl p-3 border border-white/5 focus-within:border-kkpBlue transition-all">
                            <span class="material-icons-round text-gray-500 mr-3">badge</span>
                            <input type="text" placeholder="Masukkan nama lengkap Anda" class="w-full bg-transparent border-0 outline-none focus:outline-none focus:ring-0 text-white placeholder-gray-600 font-inter text-sm" required />
                        </div>
                    </div>

                    <div class="space-y-1 relative">
                        <label class="block font-sans text-[11px] text-gray-400 uppercase tracking-widest font-bold ml-1">Alamat Email</label>
                        <div class="flex items-center bg-[#222222] rounded-xl p-3 border border-white/5 focus-within:border-kkpBlue transition-all">
                            <span class="material-icons-round text-gray-500 mr-3">email</span>
                            <input type="email" placeholder="contoh@email.com" class="w-full bg-transparent border-0 outline-none focus:outline-none focus:ring-0 text-white placeholder-gray-600 font-inter text-sm" required />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1 relative">
                            <label class="block font-sans text-[11px] text-gray-400 uppercase tracking-widest font-bold ml-1">Password</label>
                            <div class="flex items-center bg-[#222222] rounded-xl p-3 border border-white/5 focus-within:border-kkpBlue transition-all">
                                <span class="material-icons-round text-gray-500 mr-3 text-lg">lock</span>
                                <input type="password" placeholder="Buat password" class="w-full bg-transparent border-0 outline-none focus:outline-none focus:ring-0 text-white placeholder-gray-600 font-inter text-sm" required />
                            </div>
                        </div>

                        <div class="space-y-1 relative">
                            <label class="block font-sans text-[11px] text-gray-400 uppercase tracking-widest font-bold ml-1">Konfirmasi Password</label>
                            <div class="flex items-center bg-[#222222] rounded-xl p-3 border border-white/5 focus-within:border-kkpBlue transition-all">
                                <span class="material-icons-round text-gray-500 mr-3 text-lg">lock_reset</span>
                                <input type="password" placeholder="Ulangi password" class="w-full bg-transparent border-0 outline-none focus:outline-none focus:ring-0 text-white placeholder-gray-600 font-inter text-sm" required />
                            </div>
                        </div>
                    </div>

                    <div class="pt-2">
                        <label class="flex items-start cursor-pointer group">
                            <input type="checkbox" required class="mt-0.5 w-4 h-4 rounded border-gray-600 bg-[#222222] text-kkpBlue focus:ring-kkpBlue/50 cursor-pointer">
                            <span class="ml-2 text-[11px] sm:text-xs text-gray-400 font-inter group-hover:text-white transition-colors leading-relaxed">
                                Saya setuju dengan <a href="#" class="text-kkpBlue hover:text-white font-bold transition-colors">Syarat & Ketentuan</a> serta <a href="#" class="text-kkpBlue hover:text-white font-bold transition-colors">Kebijakan Privasi</a> yang berlaku di KKP Corp.
                            </span>
                        </label>
                    </div>

                    <button type="submit" class="w-full bg-white text-kkpDark py-3.5 rounded-xl font-bold hover:bg-kkpBlue hover:-translate-y-0.5 transition-all duration-300 shadow-lg mt-2">
                        Daftar Akun
                    </button>
                </form>

                <div class="mt-8 text-center border-t border-white/10 pt-6">
                    <p class="text-xs sm:text-sm text-gray-400 font-inter">
                        Sudah punya akun? 
                        <a href="/login" class="font-bold text-white hover:text-kkpBlue transition-colors font-sans uppercase tracking-wide ml-1">Masuk di sini</a>
                    </p>
                </div>

            </div>
        </div>
    </main>

    @include('template.footer')

</body>
</html>