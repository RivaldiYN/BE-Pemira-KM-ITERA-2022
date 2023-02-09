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
    <nav class="top-0 z-50 fixed w-screen px-5 md:px-10">
        <div class="nav-container flex flex-row justify-between md:items-center items-start ">
            <div class="logo">
                <div class="logoContainer bg-white px-5 pb-5 pt-3 rounded-b-3xl">
                <img class="w-28" src="<?php echo base_url('/images/logo.svg') ?>">
                </div>
            </div>

            <div class="nav-link w-full md:w-fit bg-button-color md:bg-transparent py-3 rounded-br-small-desktop">
                <div class="flex md:hidden justify-end px-5">
                    <button class="togle-nav-link" id="togle-nav-menu">
                        <img src="<?php echo base_url('/images/humbergear_menu.svg')?>">
                    </button>
                </div>
                <ul class="hidden md:flex gap-2 items-center">
                    <li>
                        <a href="/" class="bg-button-color px-6 py-2 rounded-tl-small-desktop rounded-br-small-desktop font-bold text-white">Beranda</a>
                    </li>
                    <li>
                        <a href="/capresma" class="font-bold text-lime-900 hover:bg-[#C0D057] px-6 py-2 hover:rounded-tl-small-desktop hover:rounded-br-small-desktop  hover:text-white">Capresma</a> 
                    </li>
                    <li>
                        <a href="/#timeline" class="font-bold text-lime-900 hover:bg-[#C0D057] px-6 py-2 hover:rounded-tl-small-desktop hover:rounded-br-small-desktop  hover:text-white">Timeline</a> 
                    </li>
                    <li>
                        <a href="/lokasi" class="font-bold text-lime-900 hover:bg-[#C0D057] px-6 py-2 hover:rounded-tl-small-desktop hover:rounded-br-small-desktop  hover:text-white">Lokasi Pemilihan</a> 
                    </li>
                </ul>
            </div>
        </div>
        <ul class=" hidden md:hidden w-full bg-[#00000025] pt-5 pb-3 mt-1 rounded-normal-mobile" id="nav-menu">
            <li class="py-2 m-2 px-3 bg-white rounded-normal-mobile active:bg-[#C0D057]">
                <a href="/" class="font-bold text-lime-900">Beranda</a> 
            </li>
            <li class="py-2 m-2 px-3 bg-white rounded-normal-mobile active:bg-[#C0D057]">
                <a href="/capresma" class="font-bold text-lime-900">Capresma</a> 
            </li>
            <li class="py-2 m-2 px-3 bg-white rounded-normal-mobile active:bg-[#C0D057]">
                <a href="#timeline" class="font-bold text-lime-900">Timeline</a> 
            </li>
            <li class="py-2 m-2 px-3 bg-white rounded-normal-mobile active:bg-[#C0D057]">
                <a href="/lokasi" class="font-bold text-lime-900">Lokasi Pemilihan</a> 
            </li>
        </ul>
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
    <script src="<?php echo base_url('/js/script.js') ?>"></script>
</body>

</html>