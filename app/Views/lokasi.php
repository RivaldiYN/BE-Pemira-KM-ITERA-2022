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

<body class="bg-[#FEFFEF] overflow-x-hidden">
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
                    <a href="/" class="py-4 px-3 rounded-tl-2xl rounded-br-2xl text-[#899443] hover:bg-[#899443] hover:text-[#FEFFEF]">Beranda</a>
                    <a href="/capresma" class="py-4 px-3 rounded-tl-2xl rounded-br-2xl text-[#899443] hover:bg-[#899443] hover:text-[#FEFFEF]">Capresma</a>
                    <a href="/#timeline" class="py-4 px-3 rounded-tl-2xl rounded-br-2xl text-[#899443] hover:bg-[#899443] hover:text-[#FEFFEF]">Timeline</a>
                    <a href="/lokasi" class="py-4 px-3 rounded-tl-2xl rounded-br-2xl text-[#899443] hover:bg-[#899443] hover:text-[#FEFFEF]">Lokasi
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
            <a href="/#timeline" class="block py-2 px-4 text-sm">Timeline</a>
            <a href="/lokasi" class="block py-2 px-4 text-sm">Lokasi Pemilihan</a>
            <div class="p-1 bottom-0 bg-[#899443]"></div>
        </div>
    </nav>

    <section class="overflow-x-hidden mt-16 sm:mt-0">
        <div class="md:mt-60 lg:mt-80 mx-6 md:mx-44 lg:mx-64 absolute justify-center lg:justify-center">
            <div class="text-center z-20">
                <h1 class="text-lg md:text-2xl lg:text-4xl font-bold mx-5 mt-16 z-20">Pemilihan Calon Presiden Mahasiswa Itera tahun 2022 akan diadakan di aula gedung E dan gedung F ITERA</h1>
            </div>
        </div>
        <div class="top-0">
            <img class="m-0 z-0 lg:-mt-28 lg:flex w-screen" src="<?php echo base_url('/images/bg-pemilih.svg') ?>" />
        </div>
    </section>

    <section class="mt-2 lg:z-50 lg:-mt-20 flex flex-col lg:flex-row justify-center overflow-x-hidden">
        <div class="my-10">
            <h1 class="text-center font-bold text-lg lg:text-2xl">Gedung E ITERA</h1>
            <div class="rounded-xl text-[#FEFFEF] border-2 border-[#899443] bg-[#899443] lg:shadow-none mx-7 lg:mx-12 mt-4 z-50 justify-center flex">
                <ul class="px-4 lg:px-10 py-4 lg:py-8">
                    <li class="py-2 lg:py-2 text-sm lg:text-base p-4 my-2 bg-[#FEFEFE] text-[#899443] rounded-md font-bold">1</li>
                    <li class="py-2 lg:py-2 text-sm lg:text-base p-4 my-2 bg-[#FEFEFE] text-[#899443] rounded-md font-bold">2</li>
                    <li class="py-2 lg:py-2 text-sm lg:text-base p-4 my-2 bg-[#FEFEFE] text-[#899443] rounded-md font-bold">3</li>
                    <li class="py-2 lg:py-2 text-sm lg:text-base p-4 my-2 bg-[#FEFEFE] text-[#899443] rounded-md font-bold">4</li>
                </ul>
                <ul class="px-4 lg:px-10 py-4 lg:py-8">
                    <li class="py-2 lg:py-2 text-sm lg:text-base my-2">Nama Program Studi</li>
                    <li class="py-2 lg:py-2 text-sm lg:text-base my-2">Nama Program Studi</li>
                    <li class="py-2 lg:py-2 text-sm lg:text-base my-2">Nama Program Studi</li>
                    <li class="py-2 lg:py-2 text-sm lg:text-base my-2">Nama Program Studi</li>
                </ul>
            </div>
        </div>
        <div class="my-10">
            <h1 class="text-center font-bold text-lg lg:text-2xl">Gedung F ITERA</h1>
            <div class="rounded-xl text-[#FEFFEF] border-2 border-[#899443] bg-[#899443] lg:shadow-none mx-7 lg:mx-12 mt-4 z-50 justify-center flex">
                <ul class="px-4 lg:px-8 py-4 lg:py-8">
                    <li class="py-2 lg:py-2 text-sm lg:text-base p-4 my-2 bg-[#FEFEFE] text-[#899443] rounded-md font-bold">1</li>
                    <li class="py-2 lg:py-2 text-sm lg:text-base p-4 my-2 bg-[#FEFEFE] text-[#899443] rounded-md font-bold">2</li>
                    <li class="py-2 lg:py-2 text-sm lg:text-base p-4 my-2 bg-[#FEFEFE] text-[#899443] rounded-md font-bold">3</li>
                    <li class="py-2 lg:py-2 text-sm lg:text-base p-4 my-2 bg-[#FEFEFE] text-[#899443] rounded-md font-bold">4</li>
                </ul>
                <ul class="px-4 lg:px-8 py-4 lg:py-8">
                    <li class="py-2 lg:py-2 text-sm lg:text-base my-2">Nama Program Studi</li>
                    <li class="py-2 lg:py-2 text-sm lg:text-base my-2">Nama Program Studi</li>
                    <li class="py-2 lg:py-2 text-sm lg:text-base my-2">Nama Program Studi</li>
                    <li class="py-2 lg:py-2 text-sm lg:text-base my-2">Nama Program Studi</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="bottom-0 hidden md:flex lg:flex">
        <img class="w-screen" src="<?php echo base_url('/images/footer-desktop.svg') ?>">
    </div>
    <div class="w-screen bottom-0 md:hidden lg:hidden">
        <img src="<?php echo base_url('/images/footer-mobile.svg') ?>">
    </div>

    <script src="<?php echo base_url('/js/app.js') ?>">
    </script>

</body>

</html>