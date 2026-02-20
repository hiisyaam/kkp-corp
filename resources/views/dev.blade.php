<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Under Development | KKP Corp</title>

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

    <main class="flex-grow flex flex-col items-center justify-center pt-32 pb-20 relative">
        <div class="absolute inset-0 bg-gradient-to-b from-kkpDark via-[#1c1c1c] to-kkpDark z-0"></div>
        
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[300px] h-[300px] bg-kkpBlue/10 rounded-full blur-[100px] pointer-events-none z-0"></div>

        <div class="relative z-10 flex flex-col items-center text-center px-4">
            
            <div class="w-24 h-24 sm:w-32 sm:h-32 bg-white/5 border border-white/10 rounded-full flex items-center justify-center mb-6 shadow-[0_0_30px_rgba(140,201,233,0.15)] animate-pulse">
                <span class="material-icons-round text-5xl sm:text-7xl text-kkpBlue">engineering</span>
            </div>
            
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-7xl font-black text-white font-sans uppercase italic tracking-wide drop-shadow-xl mb-4">
                MASIH <span class="text-kkpBlue">DEV</span> BANG
            </h1>
            
            <p class="text-gray-400 font-inter text-xs sm:text-sm md:text-base max-w-lg mb-8">
                Halaman yang Anda tuju sedang dalam tahap perakitan dan pengembangan oleh tim KKP Garage. Silakan kembali lagi nanti!
            </p>

            <a href="/" class="bg-kkpBlue text-kkpDark px-6 sm:px-8 py-3 rounded-xl font-bold hover:bg-white hover:-translate-y-1 transition-all duration-300 flex items-center gap-2 shadow-lg">
                <span class="material-icons-round text-lg">arrow_back</span>
                Kembali ke Beranda
            </a>

        </div>
    </main>

    @include('template.footer')
</body>

</html>