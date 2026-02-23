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
        
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[300px] h-[300px] md:w-[600px] md:h-[600px] bg-white/5 rounded-full blur-[120px] pointer-events-none z-0"></div>

        <div class="w-full max-w-lg relative z-10">
            <div class="bg-[#1c1c1c]/80 backdrop-blur-xl border border-white/10 rounded-[2rem] p-6 sm:p-10 shadow-2xl relative overflow-hidden group hover:border-kkpBlue/30 transition-all duration-500">
                
                <div class="absolute top-0 right-0 w-full h-1.5 bg-gradient-to-l from-kkpBlue to-transparent"></div>

                <div class="text-center mb-6 sm:mb-8">
                    <div class="inline-flex items-center justify-center w-14 h-14 sm:w-16 sm:h-16 bg-white/5 border border-white/10 rounded-2xl text-kkpBlue mb-4 shadow-inner">
                        <span class="material-icons-round text-2xl sm:text-3xl">person_add</span>
                    </div>
                    <h1 class="text-2xl sm:text-3xl font-black text-white font-sans uppercase italic tracking-wide">
                        Buat Akun <span class="text-kkpBlue">KKP+</span>
                    </h1>
                    <p class="text-gray-400 font-inter text-[11px] sm:text-sm mt-2">
                        Daftar sekarang untuk menikmati layanan prioritas dan promo eksklusif.
                    </p>
                </div>

                @if ($errors->any())
                    <div class="mb-6 bg-red-500/10 border border-red-500/50 rounded-xl p-3 sm:p-4 flex items-start gap-3">
                        <span class="material-icons-round text-red-500 text-lg sm:text-xl">error_outline</span>
                        <ul class="text-red-400 font-inter text-[10px] sm:text-xs list-disc pl-3">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/register" method="POST" class="space-y-4">
                    @csrf
                    
                    <div class="space-y-1 relative">
                        <label class="block font-sans text-[10px] sm:text-[11px] text-gray-400 uppercase tracking-widest font-bold ml-1">Nama Lengkap</label>
                        <div class="flex items-center bg-[#222222] rounded-xl p-3 border {{ $errors->has('name') ? 'border-red-500/50' : 'border-white/5' }} focus-within:border-kkpBlue transition-all">
                            <span class="material-icons-round text-gray-500 mr-2 sm:mr-3 text-lg sm:text-xl">badge</span>
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Masukkan nama lengkap Anda" class="w-full bg-transparent border-0 outline-none focus:outline-none focus:ring-0 text-white placeholder-gray-400 font-inter text-xs sm:text-sm" required />
                        </div>
                    </div>

                    <div class="space-y-1 relative">
                        <label class="block font-sans text-[10px] sm:text-[11px] text-gray-400 uppercase tracking-widest font-bold ml-1">Alamat Email</label>
                        <div class="flex items-center bg-[#222222] rounded-xl p-3 border {{ $errors->has('email') ? 'border-red-500/50' : 'border-white/5' }} focus-within:border-kkpBlue transition-all">
                            <span class="material-icons-round text-gray-500 mr-2 sm:mr-3 text-lg sm:text-xl">email</span>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="contoh@email.com" class="w-full bg-transparent border-0 outline-none focus:outline-none focus:ring-0 text-white placeholder-gray-400 font-inter text-xs sm:text-sm" required />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1 relative">
                            <label class="block font-sans text-[10px] sm:text-[11px] text-gray-400 uppercase tracking-widest font-bold ml-1">Kata Sandi</label>
                            <div class="flex items-center bg-[#222222] rounded-xl p-3 border {{ $errors->has('password') ? 'border-red-500/50' : 'border-white/5' }} focus-within:border-kkpBlue transition-all">
                                <span class="material-icons-round text-gray-500 mr-2 text-lg">lock</span>
                                <input type="password" id="reg-password" name="password" placeholder="Min. 8 Karakter" class="w-full bg-transparent border-0 outline-none focus:outline-none focus:ring-0 text-white placeholder-gray-400 font-inter text-xs sm:text-sm" required />
                                <button type="button" onclick="togglePassword('reg-password', 'toggle-icon-1')" class="text-gray-500 hover:text-white transition-colors focus:outline-none ml-1">
                                    <span id="toggle-icon-1" class="material-icons-round text-lg">visibility_off</span>
                                </button>
                            </div>
                        </div>

                        <div class="space-y-1 relative">
                            <label class="block font-sans text-[10px] sm:text-[11px] text-gray-400 uppercase tracking-widest font-bold ml-1">Ulangi Sandi</label>
                            <div class="flex items-center bg-[#222222] rounded-xl p-3 border {{ $errors->has('password') ? 'border-red-500/50' : 'border-white/5' }} focus-within:border-kkpBlue transition-all">
                                <span class="material-icons-round text-gray-500 mr-2 text-lg">lock_reset</span>
                                <input type="password" id="reg-password-confirm" name="password_confirmation" placeholder="Ulangi Sandi" class="w-full bg-transparent border-0 outline-none focus:outline-none focus:ring-0 text-white placeholder-gray-400 font-inter text-xs sm:text-sm" required />
                                <button type="button" onclick="togglePassword('reg-password-confirm', 'toggle-icon-2')" class="text-gray-500 hover:text-white transition-colors focus:outline-none ml-1">
                                    <span id="toggle-icon-2" class="material-icons-round text-lg">visibility_off</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="pt-2">
                        <label class="flex items-start cursor-pointer group">
                            <input type="checkbox" required class="mt-0.5 w-3.5 h-3.5 sm:w-4 sm:h-4 rounded border-gray-600 bg-[#222222] text-kkpBlue focus:ring-kkpBlue/50 cursor-pointer">
                            <span class="ml-2 text-[10px] sm:text-[11px] text-gray-400 font-inter group-hover:text-white transition-colors leading-relaxed">
                                Saya setuju dengan <a href="#" class="text-kkpBlue hover:text-white font-bold transition-colors">Syarat & Ketentuan</a> serta <a href="#" class="text-kkpBlue hover:text-white font-bold transition-colors">Kebijakan Privasi</a> KKP.
                            </span>
                        </label>
                    </div>

                    <button type="submit" class="w-full bg-white text-kkpDark py-3 sm:py-3.5 rounded-xl font-bold hover:bg-kkpBlue hover:-translate-y-0.5 transition-all duration-300 shadow-lg mt-2 text-xs sm:text-sm">
                        Daftar Akun
                    </button>
                </form>

                <div class="mt-6 sm:mt-8 text-center border-t border-white/10 pt-5 sm:pt-6">
                    <p class="text-[10px] sm:text-xs text-gray-400 font-inter">
                        Sudah punya akun? 
                        <a href="/login" class="font-bold text-white hover:text-kkpBlue transition-colors font-sans uppercase tracking-wide ml-1 block mt-1 sm:inline sm:mt-0">Masuk di sini</a>
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