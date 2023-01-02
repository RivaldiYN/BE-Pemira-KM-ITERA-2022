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

<body class="bg-[#e6e7ba]">
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
                    <a href="/#timeline" class="py-4 px-3 rounded-tl-2xl rounded-br-2xl text-[#899443] hover:bg-[#899443] hover:text-white">Timeline</a>
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
            <a href="/#timeline" class="block py-2 px-4 text-sm">Timeline</a>
            <a href="/lokasi" class="block py-2 px-4 text-sm">Lokasi Pemilihan</a>
            <div class="p-1 bottom-0 bg-[#899443]"></div>
        </div>
    </nav>

    <section class="overflow-x-hidden mt-16 sm:mt-0">
        <div class="w-full lg:absolute flex items-center flex-col lg:justify-center lg:flex-row z-[11]">
            <a class="w-48 mx-14 text-center lg:w-[19.5rem] z-10" href="/detail-capresma">
                <img src="<?php echo base_url('/images/capresma.svg') ?>" alt="capresma">
                <h1 class="lg:text-2xl font-bold">
                    Christian Arvianus Biran Nathanael
                </h1>
                <h1 class="lg:text-2xl">Teknik Informatika '20</h1>
            </a>
            <a class="w-48 mx-14 text-center lg:w-[19.5rem] z-10" href="/detail-capresma">
                <img src="<?php echo base_url('/images/capresma.svg') ?>" alt="capresma" />
                <h1 class="lg:text-2xl font-bold">
                    Christian Arvianus Biran Nathanael
                </h1>
                <h1 class="lg:text-2xl">Teknik Informatika '20</h1>
            </a>
            <a class="w-48 mx-14 text-center lg:w-[19.5rem] z-10" href="/detail-capresma">
                <img src="<?php echo base_url('/images/capresma.svg') ?>" alt="capresma" />
                <h1 class="lg:text-2xl font-bold">
                    Christian Arvianus Biran Nathanael
                </h1>
                <h1 class="lg:text-2xl">Teknik Informatika '20</h1>
            </a>
            <div class="absolute z-0 lg:hidden md:hidden">
                <img src="<?php echo base_url('/images/bg-capresma-mobile.svg') ?>" alt="">
                <img class="mt-48" src="<?php echo base_url('/images/bg-capresma-mobile.svg') ?>" alt="">
                <img class="mt-48" src="<?php echo base_url('/images/bg-capresma-mobile.svg') ?>" alt="">
            </div>
        </div>
        <div class="absolute">
            <img class="w-screen z-10 hidden lg:mt-16 lg:flex" src="<?php echo base_url('/images/bg-capresma.svg') ?>">
        </div>
    </section>

    <section class="mt-16 z-50 lg:z-50">
        <div class="w-screen bottom-0 hidden md:flex lg:hidden">
            <img src="<?php echo base_url('/images/footer-desktop.svg') ?>" alt="">
        </div>
        <div class="w-screen bottom-0 md:hidden lg:hidden">
            <img src="<?php echo base_url('/images/footer-mobile.svg') ?>" alt="">
        </div>
    </section>
    <script src="<?php echo base_url('/js/app.js') ?>"></script>
</body>

</html>