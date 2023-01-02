<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PEMIRA 2022</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />
    <link rel="stylesheet" href="<?php echo base_url('/css/app.css') ?>">
    <script src="https://kit.fontawesome.com/861b96d111.js" crossorigin="anonymous"></script>
</head>

<body class="bg-[#e6e7ba] overflow-x-hidden lg:overflow-x-hidden">
    <nav class="z-20 fixed top-0 w-screen bg-white lg:bg-transparent overflow-x-hidden drop-shadow-md">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-4">
                    <div class="mr-4">
                        <a href="" class="flex items-center px-2">
                            <img class="h-16 lg:h-20 mr-1" src="<?php echo base_url('/images/logo.svg') ?>">
                        </a>
                    </div>
                </div>

                <div class="hidden md:flex items-center space-x-1">
                    <a href="/" class="py-4 px-3 rounded-tl-2xl rounded-br-2xl text-[#899443] hover:bg-[#899443] hover:text-white">Beranda</a>
                    <a href="/capresma" class="py-4 px-3 rounded-tl-2xl rounded-br-2xl text-[#899443] hover:bg-[#899443] hover:text-white">Capresma</a>
                    <a href="#timeline" class="py-4 px-3 rounded-tl-2xl rounded-br-2xl text-[#899443] hover:bg-[#899443] hover:text-white">Timeline</a>
                    <a href="/lokasi" class="py-4 px-3 rounded-tl-2xl rounded-br-2xl text-[#899443] hover:bg-[#899443] hover:text-white">Lokasi
                        Pemilihan</a>
                </div>

                <!-- mobile button -->
                <div class="mt-4 md:hidden flex items-center">
                    <button class="mobile-menu-button">
                        <i class="fa-solid fa-bars w-10 h-10"></i>
                    </button>
                </div>

            </div>
        </div>
        <!-- mobile menu -->
        <div class="mobile-menu hidden md:hidden bg-white">
            <a href="/" class="block py-2 px-4 text-sm">Beranda</a>
            <a href="/capresma" class="block py-2 px-4 text-sm">Capresma</a>
            <a href="#timeline" class="block py-2 px-4 text-sm">Timeline</a>
            <a href="/lokasi" class="block py-2 px-4 text-sm">Lokasi Pemilihan</a>
            <div class="p-1 bottom-0 bg-[#899443]"></div>
        </div>
    </nav>

    <section class="flex flex-col justify-center mt-16 sm:mt-0">
        <div class="w-screen">
            <div class="-mt-2 lg:-mt-24">
                <img class="w-72 md:w-[36rem] lg:w-[44rem] z-10 absolute loading-normal" src="<?php echo base_url('/images/awan-depan.svg') ?>">
            </div>
            <div class="mt-56 w-screen">
                <img class="z-100 absolute" src="<?php echo base_url('/images/awan-belakang.svg') ?>">
            </div>
            <div class="-mt-32 md:mt-20 mx-7 md:mx-56 lg:mx-auto z-[9] relative lg:max-w-[600px]">
                <div class="rounded-2xl p-4 lg:p-28" style="background: rgba(255, 255, 255, 0.6);">
                    <div class="text-center px-5 py-5">
                        <h1 class="text-lg lg:text-4xl font-bold text-gray-900">Pemira KM ITERA 2022</h1>
                    </div>
                    <div class="text-center px-5 pb-6">
                        <h4 class="lg:text-xl mb-6">
                            Pemilihan Raya Keluarga Mahasiswa Institut Teknologi Sumatera
                        </h4>
                        <div class="space-y-3">
                            <button type="submit" class="mt-4 p-4 px-12 items-center justify-center rounded-lg lg:px-32 lg:text-2xl bg-[#899443] hover:opacity-75 text-white">
                                Vote
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="-mt-24 md:-mt-56 lg:-mt-96 z-[8]">
                <img class=" object-center w-screen" src="<?php echo base_url('/images/bg-berandaa.svg') ?>">
            </div>
        </div>
    </section>

    <section class="bg-white text-center items-center justify-center pt-10 lg:pt-2 -mt-20 md:-mt-40 lg:-mt-64 overflow-x-hidden">
        <div class="mt-24 lg:mt-80 mb-8 mx-7 md:mx-44 lg:mx-80">
            <h1 class="text-lg lg:text-4xl mb-8 font-bold lg:px-16">
                Tentang Pemira
            </h1>
            <div class="border-2 border-[#899443] rounded-lg shadow-[#bababa] shadow-md p-4">
                <p class="lg:text-xl mb-4 lg:px-12 lg:pt-6">
                    PEMIRA KM ITERA 2021 merupakan kegiatan pemilihan presiden KM ITERA
                    yang akan memimpin kabinet KM ITERA di periode selanjutnya.
                </p>
                <p class="lg:text-xl font-semibold italic lg:px-12">
                    "Keberhasilan pemimpin diukur dari kemampuan mereka
                    dalam menyejahterakan umat yang mereka pimpin."
                </p>
                <p class="lg:text-xl mb-4 lg:px-12">
                    - Abdurrahman Wahid
                </p>
                <p class="lg:text-xl mb-4 lg:px-12 lg:pb-6">
                    Mari kita wujudkan kepemimpinan yang lebih baik daripada sebelumnya
                    sebagai wujud perkembangan yang nyata dalam menjalankan kehidupan.
                </p>
            </div>
        </div>

        <div class="mt-16">
            <h1 class="mb-8 text-lg lg:text-4xl font-bold">Tutorial</h1>
            <div class="z-[15] justify-center flex lg:mx-80">
                <iframe class="rounded-xl lg:shadow-none lg:w-[1280px] lg:h-[280px]" allow="autoplay; encrypted-media" allowfullscreen="" frameborder="0" height="auto" src="https://www.youtube.com/embed/8OxTG8plkz4?rel=0" width="auto"></iframe><img border="0" height="0" src="https://i2.ytimg.com/vi/mu1KSw28snI/0.jpg" width="0" />
            </div>
        </div>

        <div class="mt-16 grid overflow-x-hidden" id="timeline">
            <div class="flex justify-center">
                <h1 class="text-lg lg:text-4xl z-[11] font-bold">Timeline</h1>
            </div>
            <div class="w-screen flex flex-wrap justify-center mt-8 lg:my-16 lg:flex-row lg:justify-center z-[11]">
                <div class="w-32 lg:w-48 m-4 lg:m-8 text-center bg-gradient-to-br from-zinc-200 to-zinc-400 rounded-xl p-2 shadow-md shadow-zinc-500">
                    <h1 class="font-extrabold text-2xl lg:text-4xl">22-23</h1>
                    <h3 class="font-bold text-sm lg:text-xl">November</h3>
                    <h5 class="font-bold text-sm lg:text-xl">2022</h5>
                    <h5 class="text-white text-xs lg:text-xl mt-2">Open Recruitment Presma</h5>
                </div>
                <div class="w-32 lg:w-48 m-4 lg:m-8 text-center bg-gradient-to-br from-zinc-200 to-zinc-400 rounded-xl p-2 shadow-md shadow-zinc-500">
                    <h1 class="font-extrabold text-2xl lg:text-4xl">22-23</h1>
                    <h3 class="font-bold text-sm lg:text-xl">November</h3>
                    <h5 class="font-bold text-sm lg:text-xl">2022</h5>
                    <h5 class="text-white text-xs lg:text-xl mt-2">Open Recruitment Presma</h5>
                </div>
                <div class="w-32 lg:w-48 m-4 lg:m-8 text-center bg-gradient-to-br from-zinc-200 to-zinc-400 rounded-xl p-2 shadow-md shadow-zinc-500">
                    <h1 class="font-extrabold text-2xl lg:text-4xl">22-23</h1>
                    <h3 class="font-bold text-sm lg:text-xl">November</h3>
                    <h5 class="font-bold text-sm lg:text-xl">2022</h5>
                    <h5 class="text-white text-xs lg:text-xl mt-2">Open Recruitment Presma</h5>
                </div>
                <div class="w-32 lg:w-48 m-4 lg:m-8 text-center bg-gradient-to-br from-zinc-200 to-zinc-400 rounded-xl p-2 shadow-md shadow-zinc-500">
                    <h1 class="font-extrabold text-2xl lg:text-4xl">22-23</h1>
                    <h3 class="font-bold text-sm lg:text-xl">November</h3>
                    <h5 class="font-bold text-sm lg:text-xl">2022</h5>
                    <h5 class="text-white text-xs lg:text-xl mt-2">Open Recruitment Presma</h5>
                </div>
            </div>
        </div>

        <div class="mt-16 z-50 lg:z-50 overflow-x-hidden">
            <div class="w-screen bottom-0">
                <img src="<?php echo base_url('/images/footer-beranda.svg') ?>">
            </div>
        </div>
    </section>
    <script src="<?php echo base_url('/js/app.js') ?>"></script>
</body>

</html>