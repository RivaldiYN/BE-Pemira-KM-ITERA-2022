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
                        <a href="#timeline" class="font-bold text-lime-900 hover:bg-[#C0D057] px-6 py-2 hover:rounded-tl-small-desktop hover:rounded-br-small-desktop  hover:text-white">Timeline</a> 
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

    <section class="overflow-x-hidden mt-16 sm:mt-0">
        <div class="w-screen flex items-center flex-col md:mt-24 md:justify-center md:flex-row z-20">
        <?php
                $i = 0;
                foreach($detail_capresma as $details) {
                    
                ?>
            <div class="mx-14 text-center md:w-48 lg:w-[19.5rem] z-10">
                
                <a href="/detail-capresma/<?= $details['id'] ?>">
                <img src="<?php echo base_url('/images/capresma.svg') ?>" alt="capresma">
                </a>
                <h1 class="mt-4 lg:text-2xl font-bold">
                <?= $details['nama']
                ?>
                </h1>
                <h1 class="lg:text-2xl"><?= $details['nim']
                ?></h1>
                <h1 class="lg:text-2xl"><?= $details['prodi']
                ?></h1>
            </div>
            <?php
            $i++;
            }
            ?>
            <!-- <div class="mx-14 text-center md:w-48 lg:w-[19.5rem] z-10">
                <a href="/detail-capresma">
                <img src="<?php echo base_url('/images/capresma.svg') ?>" alt="capresma">
                </a>
                <h1 class="mt-4 lg:text-2xl font-bold">
                    M. Raihan Adiwidya
                </h1>
                <h1 class="lg:text-2xl">120280118</h1>
                <h1 class="lg:text-2xl">Teknik Kimia</h1>
            </div> -->
            </div>
            <div class="z-0 md:hidden">
                <img class="-mt-[60rem]" src="<?php echo base_url('/images/bg-capresma-mobile.svg') ?>" alt="">
                <img class="mt-48" src="<?php echo base_url('/images/bg-capresma-mobile.svg') ?>" alt="">
                <img class="mt-48" src="<?php echo base_url('/images/bg-capresma-mobile.svg') ?>" alt="">
        </div>
        <div class="z-0">
            <img class="w-screen hidden md:-mt-72 lg:-mt-[40rem] md:flex md:bottom-0" src="<?php echo base_url('/images/bg-capresma.svg') ?>">
        </div>
    </section>

    <section class="mt-16 z-50 lg:z-50 md:hidden">
        <div class="w-screen bottom-0 md:hidden lg:hidden">
            <img src="<?php echo base_url('/images/footer-mobile.svg') ?>" alt="">
        </div>
    </section>
    <script src="<?php echo base_url('/js/app.js') ?>"></script>
    <script src="<?php echo base_url('/js/script.js') ?>"></script>
</body>

</html>