<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Masuk | KKP Corp</title>

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
    <style>
        /* MENCEGAH BROWSER AUTOFILL MENGUBAH BACKGROUND MENJADI PUTIH */
        input:-webkit-autofill,
        input:-webkit-autofill:hover, 
        input:-webkit-autofill:focus, 
        input:-webkit-autofill:active{
            -webkit-box-shadow: 0 0 0 30px #222222 inset !important;
            -webkit-text-fill-color: white !important;
            transition: background-color 5000s ease-in-out 0s;
        }
    </style>
</head>

<body class="bg-kkpDark text-white font-sans antialiased overflow-x-hidden flex flex-col min-h-screen">

    @include('template.nav')

    <main class="flex-grow flex items-center justify-center pt-40 sm:pt-48 pb-20 relative bg-kkpDark px-4">
        
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[300px] h-[300px] md:w-[500px] md:h-[500px] bg-kkpBlue/10 rounded-full blur-[100px] pointer-events-none z-0"></div>

        <div class="w-full max-w-md relative z-10">
            <div class="bg-[#1c1c1c]/80 backdrop-blur-xl border border-white/10 rounded-[2rem] p-6 sm:p-10 shadow-2xl relative overflow-hidden group hover:border-kkpBlue/30 transition-all duration-500">
                
                <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-kkpBlue to-transparent"></div>

                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-14 h-14 sm:w-16 sm:h-16 bg-white/5 border border-white/10 rounded-2xl text-kkpBlue mb-4 shadow-inner">
                        <span class="material-icons-round text-2xl sm:text-3xl">login</span>
                    </div>
                    <h1 class="text-2xl sm:text-3xl font-black text-white font-sans uppercase italic tracking-wide">
                        Selamat <span class="text-kkpBlue">Datang</span>
                    </h1>
                    <p class="text-gray-400 font-inter text-[11px] sm:text-sm mt-2">
                        Masuk untuk mengelola tiket dan akun KKP+ Anda
                    </p>
                </div>

                @if ($errors->any())
                    <div class="mb-6 bg-red-500/10 border border-red-500/50 rounded-xl p-3 sm:p-4 flex items-start gap-3">
                        <span class="material-icons-round text-red-500 text-lg sm:text-xl">error_outline</span>
                        <div class="text-red-400 font-inter text-[10px] sm:text-xs leading-relaxed">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    </div>
                @endif

                <form action="/login" method="POST" class="space-y-4 sm:space-y-5">
                    @csrf
                    
                    <div class="space-y-1 relative">
                        <label class="block font-sans text-[10px] sm:text-[11px] text-gray-400 uppercase tracking-widest font-bold ml-1">Alamat Email</label>
                        <div class="flex items-center bg-[#222222] rounded-xl p-3 border {{ $errors->has('email') ? 'border-red-500/50' : 'border-white/5' }} focus-within:border-kkpBlue transition-all">
                            <span class="material-icons-round text-gray-500 mr-2 sm:mr-3 text-lg sm:text-xl">email</span>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="Masukkan email Anda" class="w-full bg-transparent border-0 outline-none focus:outline-none focus:ring-0 text-white placeholder-gray-400 font-inter text-xs sm:text-sm" required />
                        </div>
                    </div>

                    <div class="space-y-1 relative">
                        <label class="block font-sans text-[10px] sm:text-[11px] text-gray-400 uppercase tracking-widest font-bold ml-1">Kata Sandi</label>
                        <div class="flex items-center bg-[#222222] rounded-xl p-3 border {{ $errors->has('email') ? 'border-red-500/50' : 'border-white/5' }} focus-within:border-kkpBlue transition-all">
                            <span class="material-icons-round text-gray-500 mr-2 sm:mr-3 text-lg sm:text-xl">lock</span>
                            <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" class="w-full bg-transparent border-0 outline-none focus:outline-none focus:ring-0 text-white placeholder-gray-400 font-inter text-xs sm:text-sm" required />
                            <button type="button" onclick="togglePassword('password', 'toggle-icon')" class="text-gray-500 hover:text-white transition-colors focus:outline-none ml-2">
                                <span id="toggle-icon" class="material-icons-round text-lg sm:text-xl">visibility_off</span>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center justify-between pt-1">
                        <label class="flex items-center cursor-pointer group">
                            <input type="checkbox" name="remember" class="w-3.5 h-3.5 sm:w-4 sm:h-4 rounded border-gray-600 bg-[#222222] text-kkpBlue focus:ring-kkpBlue/50 cursor-pointer">
                            <span class="ml-2 text-[10px] sm:text-sm text-gray-400 font-inter group-hover:text-white transition-colors">Ingat Saya</span>
                        </label>
                        <a href="#" class="text-[10px] sm:text-sm font-bold text-kkpBlue hover:text-white transition-colors font-sans">Lupa Kata Sandi?</a>
                    </div>

                    <button type="submit" class="w-full bg-kkpBlue text-kkpDark py-3 sm:py-3.5 rounded-xl font-bold hover:bg-white hover:-translate-y-0.5 transition-all duration-300 shadow-[0_10px_20px_rgba(140,201,233,0.2)] mt-4 text-xs sm:text-sm">
                        Masuk
                    </button>
                </form>

                <div class="mt-6 sm:mt-8 text-center border-t border-white/10 pt-5 sm:pt-6">
                    <p class="text-[10px] sm:text-xs text-gray-400 font-inter">
                        Belum punya akun KKP+? 
                        <a href="/register" class="font-bold text-white hover:text-kkpBlue transition-colors font-sans uppercase tracking-wide ml-1 block mt-1 sm:inline sm:mt-0">Daftar Sekarang</a>
                    </p>
                </div>

            </div>
        </div>
    </main>

    @include('template.footer')

    <script>
        function togglePassword(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);
            if (input.type === "password") {
                input.type = "text";
                icon.textContent = "visibility";
                icon.classList.add("text-kkpBlue");
            } else {
                input.type = "password";
                icon.textContent = "visibility_off";
                icon.classList.remove("text-kkpBlue");
            }
        }
    </script>
</body>
</html>