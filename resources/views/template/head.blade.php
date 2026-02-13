<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KKP Corp | Kiarasari Kencana Pasundan</title>

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

<body class="bg-kkpDark text-white font-sans antialiased overflow-x-hidden">

    <div class="fixed top-6 left-1/2 -translate-x-1/2 w-[95%] max-w-7xl z-50">
        <nav
            class="bg-kkpDark/80 backdrop-blur-lg border border-white/10 rounded-full px-6 py-3 flex items-center justify-between shadow-2xl transition-all">

            <div class="flex-1 flex items-center cursor-pointer">
                <div class="w-12 h-12 flex items-center justify-center">
                    <img src="{{ asset('asset/image/kkp.png') }}" alt="">
                </div>
            </div>

            <div class="hidden lg:flex flex-none space-x-8 items-center">
                <a href="#beranda"
                    class="text-white hover:text-kkpBlue transition-colors font-semibold text-sm">Beranda</a>
                <a href="#perjalanan"
                    class="text-gray-300 hover:text-kkpBlue transition-colors font-semibold text-sm">Perjalanan</a>
                <a href="#armada" class="text-gray-300 hover:text-kkpBlue transition-colors font-semibold text-sm">Kelas
                    Armada</a>
                <a href="#kkpplus" class="text-gray-300 hover:text-kkpBlue transition-colors font-semibold text-sm">KKP
                    Plus</a>
                <a href="#perusahaan"
                    class="text-gray-300 hover:text-kkpBlue transition-colors font-semibold text-sm">Perusahaan</a>
            </div>

            <div class="hidden lg:flex flex-1 justify-end items-center space-x-4">
                <a href="#" class="text-white hover:text-kkpBlue font-semibold text-sm transition-colors">Masuk</a>
                <a href="#"
                    class="bg-white text-kkpDark px-5 py-2 rounded-full font-bold text-sm hover:bg-gray-200 transition-all">Daftar</a>
            </div>

            <div class="lg:hidden flex items-center justify-end flex-1">
                <button id="mobile-menu-btn"
                    class="text-white focus:outline-none p-2 bg-white/5 rounded-full border border-white/10">
                    <span class="material-icons-round text-2xl">menu</span>
                </button>
            </div>
        </nav>

        <div id="mobile-menu"
            class="hidden absolute top-full left-0 w-full mt-3 bg-kkpDark border border-white/10 rounded-3xl p-4 shadow-2xl flex flex-col space-y-3">
            <a href="#beranda"
                class="text-white font-semibold text-sm px-4 py-2 hover:bg-white/5 rounded-xl">Beranda</a>
            <a href="#perjalanan"
                class="text-gray-300 font-semibold text-sm px-4 py-2 hover:bg-white/5 rounded-xl">Perjalanan</a>
            <a href="#armada" class="text-gray-300 font-semibold text-sm px-4 py-2 hover:bg-white/5 rounded-xl">Kelas
                Armada</a>
            <a href="#kkpplus" class="text-gray-300 font-semibold text-sm px-4 py-2 hover:bg-white/5 rounded-xl">KKP
                Plus</a>
            <a href="#perusahaan"
                class="text-gray-300 font-semibold text-sm px-4 py-2 hover:bg-white/5 rounded-xl">Perusahaan</a>
            <div class="h-px w-full bg-white/10 my-2"></div>
            <div class="flex gap-3 px-4 pb-2">
                <a href="#"
                    class="flex-1 text-center border border-white/20 text-white py-2 rounded-xl font-semibold text-sm">Masuk</a>
                <a href="#"
                    class="flex-1 text-center bg-white text-kkpDark py-2 rounded-xl font-bold text-sm">Daftar</a>
            </div>
        </div>
    </div>

    <section id="beranda"
        class="relative w-full min-h-[100dvh] flex flex-col items-center justify-center bg-kkpDark overflow-hidden pt-20">

        <div class="absolute inset-0 z-0">
            <img src="{{ asset('asset/image/kkp-hero.png') }}" alt="Armada KKP"
                class="w-full h-full object-cover object-bottom opacity-70" />

            <div class="absolute inset-0 bg-gradient-to-b from-kkpDark/95 via-kkpDark/50 to-kkpDark"></div>
        </div>


        <div
            class="relative z-10 w-full px-4 text-center flex flex-col items-center justify-center max-w-7xl mx-auto mt-12 md:mt-0">

            <h1
                class="mb-4 text-4xl md:text-5xl lg:text-[54px] font-black tracking-wide leading-tight text-white uppercase italic drop-shadow-[0_5px_15px_rgba(0,0,0,0.9)] font-sans">
                KIARASARI KENCANA PASUNDAN
            </h1>

            <p
                class="mb-8 text-sm md:text-base font-normal text-gray-200 lg:text-lg sm:px-16 xl:px-48 font-inter drop-shadow-[0_2px_4px_rgba(0,0,0,0.8)] max-w-4xl leading-relaxed">
                <strong class="text-kkpBlue italic">Travel with Style, Arrive with Smile.</strong>
            </p>
        </div>
    </section>

    <div class="relative z-30 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 -mt-2 lg:-mt-3">
        <div class="bg-[#1c1c1c] border border-white/10 rounded-3xl shadow-2xl p-6 lg:p-8 backdrop-blur-xl">
            <form class="flex flex-col lg:flex-row gap-4 lg:items-end">
                <div class="flex-1 space-y-2 relative group">
                    <label class="block font-sans text-[11px] text-gray-400 uppercase tracking-widest font-bold">Kota
                        Asal</label>
                    <div
                        class="flex items-center bg-[#222222] rounded-xl p-3 border border-white/5 focus-within:border-kkpBlue transition-all">
                        <span class="material-icons-round text-kkpBlue mr-3 transition-all">trip_origin</span>
                        <input type="text" placeholder="Dari mana?"
                            class="w-full bg-transparent border-0 outline-none focus:outline-none focus:ring-0 text-white placeholder-gray-600 font-inter text-sm" />
                    </div>
                </div>

                <div class="flex-1 space-y-2 relative group">
                    <label class="block font-sans text-[11px] text-gray-400 uppercase tracking-widest font-bold">Kota
                        Tujuan</label>
                    <div
                        class="flex items-center bg-[#222222] rounded-xl p-3 border border-white/5 focus-within:border-kkpBlue transition-all">
                        <span class="material-icons-round text-kkpBlue mr-3 transition-all">location_on</span>
                        <input type="text" placeholder="Mau kemana?"
                            class="w-full bg-transparent border-0 outline-none focus:outline-none focus:ring-0 text-white placeholder-gray-600 font-inter text-sm" />
                    </div>
                </div>

                <div class="flex-1 space-y-2 relative group">
                    <label class="block font-sans text-[11px] text-gray-400 uppercase tracking-widest font-bold">Tanggal
                        Berangkat</label>
                    <div
                        class="flex items-center bg-[#222222] rounded-xl p-3 border border-white/5 focus-within:border-kkpBlue transition-all">
                        <span class="material-icons-round text-kkpBlue mr-3 transition-all">calendar_month</span>
                        <input type="date"
                            class="w-full bg-transparent border-0 outline-none focus:outline-none focus:ring-0 text-white font-inter text-sm [&::-webkit-calendar-picker-indicator]:filter [&::-webkit-calendar-picker-indicator]:invert opacity-80 focus:opacity-100 cursor-pointer" />
                    </div>
                </div>

                <button type="button"
                    class="w-full lg:w-auto bg-kkpBlue text-kkpDark px-8 py-3.5 rounded-xl font-bold hover:bg-white transition-colors flex items-center justify-center gap-2 h-[52px]">
                    <span class="material-icons-round">search</span>
                    Cari Tiket
                </button>
            </form>
        </div>
    </div>

    <div class="w-full max-w-7xl mx-auto h-px bg-gradient-to-r from-transparent via-white/10 to-transparent my-20">
    </div>

    <section id="perusahaan" class="pb-20 pt-10">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-block mb-4">
                    <span class="material-icons-round text-kkpBlue text-5xl">timeline</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4">Jejak Langkah Kami</h2>
                <p class="font-inter text-gray-400 max-w-2xl mx-auto">Transformasi perjalanan PT. Kiarasari Kencana
                    Pasundan dari masa ke masa menuju pengalaman otobus virtual terbaik.</p>
            </div>

            <div
                class="relative border-l-2 border-kkpBlue/30 ml-4 md:ml-1/2 md:translate-x-[20px] lg:translate-x-0 space-y-16">

                <div class="relative pl-10 group">
                    <div
                        class="absolute w-6 h-6 bg-kkpBlue rounded-full -left-[13px] top-1.5 shadow-[0_0_20px_rgba(140,201,233,0.8)] ring-4 ring-kkpDark group-hover:scale-125 transition-transform">
                    </div>
                    <div
                        class="bg-[#1c1c1c] border border-kkpBlue/20 rounded-2xl p-6 hover:border-kkpBlue/60 transition-all hover:shadow-[0_0_30px_rgba(140,201,233,0.2)]">
                        <h3 class="text-2xl font-bold text-white mb-1">2017</h3>
                        <h4 class="text-kkpBlue font-semibold mb-3 flex items-center gap-2">
                            <span class="material-icons-round text-sm">rocket_launch</span>
                            Inisiatif Pendirian
                        </h4>
                        <p class="font-inter text-sm text-gray-400 leading-relaxed">
                            Berawal dari inisiatif dua pendiri, yaitu Mas Daffa Dhia Fadhlurrahman dan Dika Herwidyawan
                            melalui pendirian QS Trans (Bus Pariwisata) sebagai cikal bakal.
                        </p>
                    </div>
                </div>

                <div class="relative pl-10 group">
                    <div
                        class="absolute w-6 h-6 bg-kkpDark border-2 border-kkpBlue rounded-full -left-[13px] top-1.5 ring-4 ring-kkpDark group-hover:scale-125 transition-transform">
                    </div>
                    <div
                        class="bg-[#1c1c1c] border border-white/10 rounded-2xl p-6 hover:border-kkpBlue/40 transition-all hover:shadow-[0_0_20px_rgba(140,201,233,0.1)]">
                        <h3 class="text-2xl font-bold text-white mb-1">2018</h3>
                        <h4 class="text-kkpBlue font-semibold mb-3 flex items-center gap-2">
                            <span class="material-icons-round text-sm">transform</span>
                            Transformasi Entitas
                        </h4>
                        <p class="font-inter text-sm text-gray-400 leading-relaxed">
                            QS Trans bertransformasi menjadi 2D Trans Group, melahirkan Daffa Trans (Pariwisata) dan
                            Dika Trans (Trayek Reguler).
                        </p>
                    </div>
                </div>

                <div class="relative pl-10 group">
                    <div
                        class="absolute w-6 h-6 bg-kkpDark border-2 border-kkpBlue rounded-full -left-[13px] top-1.5 ring-4 ring-kkpDark group-hover:scale-125 transition-transform">
                    </div>
                    <div
                        class="bg-[#1c1c1c] border border-white/10 rounded-2xl p-6 hover:border-kkpBlue/40 transition-all hover:shadow-[0_0_20px_rgba(140,201,233,0.1)]">
                        <h3 class="text-2xl font-bold text-white mb-1">2019 - 2023</h3>
                        <h4 class="text-kkpBlue font-semibold mb-3 flex items-center gap-2">
                            <span class="material-icons-round text-sm">trending_up</span>
                            Fase Pematangan
                        </h4>
                        <p class="font-inter text-sm text-gray-400 leading-relaxed">
                            Fase evaluasi model bisnis, penguatan identitas, dan perumusan visi jangka panjang otobis
                            virtual berorientasi kualitas layanan.
                        </p>
                    </div>
                </div>

                <div class="relative pl-10 group">
                    <div
                        class="absolute w-6 h-6 bg-kkpBlue rounded-full -left-[13px] top-1.5 shadow-[0_0_20px_rgba(140,201,233,0.8)] ring-4 ring-kkpDark group-hover:scale-125 transition-transform">
                    </div>
                    <div
                        class="bg-[#1c1c1c] border border-kkpBlue/20 rounded-2xl p-6 hover:border-kkpBlue/60 transition-all hover:shadow-[0_0_30px_rgba(140,201,233,0.2)]">
                        <h3 class="text-2xl font-bold text-white mb-1">2024</h3>
                        <h4 class="text-kkpBlue font-semibold mb-3 flex items-center gap-2">
                            <span class="material-icons-round text-sm">celebration</span>
                            Lahirnya PO. Kiarasari
                        </h4>
                        <p class="font-inter text-sm text-gray-400 leading-relaxed">
                            Resmi beroperasi dengan identitas PO. Kiarasari di bawah PT. Kiarasari Kencana Pasundan (KKP
                            Corp) yang berpusat di Soreang, Kab. Bandung pada 24 Februari 2024.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="w-full max-w-7xl mx-auto h-px bg-gradient-to-r from-transparent via-white/10 to-transparent my-10">
    </div>

    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-block mb-4">
                <span class="material-icons-round text-kkpBlue text-5xl">auto_awesome</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4">Filosofi <span
                    class="text-kkpBlue">K-K-P</span></h2>
            <p class="font-inter text-gray-400 max-w-2xl mx-auto mb-16">Tiga pilar utama yang menjadi fondasi layanan
                kami dalam menghadirkan pengalaman perjalanan terbaik.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="bg-gradient-to-br from-[#1c1c1c] to-[#141414] border border-white/5 p-8 rounded-3xl hover:border-kkpBlue/50 transition-all duration-300 group hover:shadow-[0_0_40px_rgba(140,201,233,0.15)] hover:-translate-y-2">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-kkpBlue/20 to-kkpBlue/5 text-kkpBlue rounded-2xl flex items-center justify-center text-4xl font-black mx-auto mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
                        <span class="material-icons-round text-4xl">verified</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3 group-hover:text-kkpBlue transition-colors">Kualitas
                        Profesional</h3>
                    <p class="font-inter text-gray-400 text-sm leading-relaxed">Menjalankan operasional secara
                        profesional dan konsisten menjamin keamanan, ketertiban, dan keandalan.</p>
                </div>

                <div
                    class="bg-gradient-to-br from-[#1c1c1c] to-[#141414] border border-white/5 p-8 rounded-3xl hover:border-kkpBlue/50 transition-all duration-300 group hover:shadow-[0_0_40px_rgba(140,201,233,0.15)] hover:-translate-y-2">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-kkpBlue/20 to-kkpBlue/5 text-kkpBlue rounded-2xl flex items-center justify-center text-4xl font-black mx-auto mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
                        <span class="material-icons-round text-4xl">airline_seat_recline_extra</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3 group-hover:text-kkpBlue transition-colors">Kenyamanan
                        Berkelas</h3>
                    <p class="font-inter text-gray-400 text-sm leading-relaxed">Pengalaman perjalanan aman, tenang,
                        dengan layanan yang mengutamakan detail dan kepuasan konsumen.</p>
                </div>

                <div
                    class="bg-gradient-to-br from-[#1c1c1c] to-[#141414] border border-white/5 p-8 rounded-3xl hover:border-kkpBlue/50 transition-all duration-300 group hover:shadow-[0_0_40px_rgba(140,201,233,0.15)] hover:-translate-y-2">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-kkpBlue/20 to-kkpBlue/5 text-kkpBlue rounded-2xl flex items-center justify-center text-4xl font-black mx-auto mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
                        <span class="material-icons-round text-4xl">diamond</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3 group-hover:text-kkpBlue transition-colors">Prestise &
                        Estetika</h3>
                    <p class="font-inter text-gray-400 text-sm leading-relaxed">Visual armada yang elegan dan
                        berestetika tinggi sebagai representasi kemewahan dan citra premium.</p>
                </div>
            </div>
        </div>
    </section>

    <footer id="kontak" class="bg-[#141414] pt-20 pb-10 mt-10 border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mb-16 border-b border-white/10 pb-16">
                <div class="space-y-6 lg:col-span-1">
                    <div class="flex items-center gap-2">
                        <div class="w-15 h-15 flex items-center justify-center">
                            <img src="{{ asset('asset/image/kkp.png') }}" alt="">
                        </div>
                    </div>
                    <div class="my-3 italic">
                        <span class="font-bold text-2xl tracking-tight text-kkpBlue">
                            KIARASARI
                        </span>
                        <span class="font-bold text-2xl tracking-tight text-white">
                            KENCANA
                        </span>
                        <span class="font-bold text-2xl tracking-tight text-white">
                            PASUNDAN
                        </span>
                    </div>
                    <p class="font-inter text-gray-400 text-sm leading-relaxed">
                        Perusahaan otobus virtual terdepan yang menghadirkan standar baru dunia transportasi dengan
                        "Travel with Style, Arrive with Smile".
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://instagram.com/kkp.kiarasari"
                            class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center hover:bg-gradient-to-br hover:from-purple-600 hover:via-pink-600 hover:to-orange-500 hover:border-transparent transition-all duration-300 group"
                            title="Instagram">
                            <svg class="w-5 h-5 fill-current text-white" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="https://www.tiktok.com/@kkp.kiarasari"
                            class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center hover:bg-black hover:border-transparent transition-all duration-300 group"
                            title="TikTok">
                            <svg class="w-5 h-5 fill-current text-white" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="space-y-6">
                    <h4 class="text-lg font-bold text-white uppercase tracking-wider">Layanan Pelanggan</h4>
                    <ul class="space-y-4 font-inter text-sm text-gray-400">
                        <li class="flex items-start gap-3">
                            <span class="material-icons-round text-kkpBlue text-xl">headset_mic</span>
                            <div>
                                <p class="font-semibold text-white font-sans">Customer Service</p>
                                <p>0813-1521-1836</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="material-icons-round text-kkpBlue text-xl">call</span>
                            <div>
                                <p class="font-semibold text-white font-sans">Call Center</p>
                                <p>022-24022024</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="space-y-6">
                    <h4 class="text-lg font-bold text-white uppercase tracking-wider">Lokasi Kami</h4>
                    <ul class="space-y-4 font-inter text-sm text-gray-400">
                        <li class="flex items-start gap-3">
                            <span class="material-icons-round text-kkpBlue text-xl">business</span>
                            <div>
                                <p class="font-semibold text-white font-sans">Kantor Pusat</p>
                                <p>Soreang, Kab. Bandung</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="material-icons-round text-kkpBlue text-xl">store</span>
                            <div>
                                <p class="font-semibold text-white font-sans">Kantor Cabang</p>
                                <p>1. Bubulak, Kab. Bogor</p>
                                <p>2. Cikokol, Kota Tangerang</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col md:flex-row justify-between items-center font-inter text-xs text-gray-500 pt-4">
                <p>&copy; 2026 PT. Kiarasari Kencana Pasundan (KKP Corp). All rights reserved.</p>
                <div class="flex gap-4 mt-4 md:mt-0">
                    <a href="#" class="hover:text-kkpBlue">Syarat & Ketentuan</a>
                    <a href="#" class="hover:text-kkpBlue">Kebijakan Privasi</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>

</html>