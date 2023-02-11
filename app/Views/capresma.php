<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PEMIRA 2022</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
                foreach($detail_capresma as $details) {
                    
                ?>
    <link rel="preload" as="image" href="<?php echo base_url('/images/' . $details['images']) ?>">
    <?php
            }
            ?>
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />
    <link rel="stylesheet" href="<?php echo base_url('/css/app.css') ?>">

    <script src="https://kit.fontawesome.com/861b96d111.js" crossorigin="anonymous"></script>
</head>

<body class=" overflow-x-hidden bg-second">
<nav class="top-0 z-50 fixed w-screen px-5 md:px-10">
        <div class="nav-container flex flex-row justify-between md:items-center items-start ">
            <div class="logo">
                <div class="logoContainer bg-white px-5 pb-5 pt-3 rounded-b-3xl">
                <img class="w-28" src="<?php echo base_url('/images/logo_2.svg') ?>">
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
                        <a href="/" class="font-bold text-lime-900 hover:bg-[#C0D057] px-6 py-2 hover:rounded-tl-small-desktop hover:rounded-br-small-desktop  hover:text-white">Beranda</a>
                    </li>
                    <li>
                        <a href="/capresma" class="bg-button-color px-6 py-2 rounded-tl-small-desktop rounded-br-small-desktop font-bold text-white">Capresma</a> 
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
            <li class="m-2">
                <a href="/" class="font-bold w-full block text-lime-900 py-2 px-3 bg-white rounded-normal-mobile active:bg-[#C0D057]">Beranda</a> 
            </li>
            <li class="m-2">
                <a href="/capresma" class="font-bold w-full block text-lime-900 py-2 px-3 bg-white rounded-normal-mobile active:bg-[#C0D057]">Capresma</a> 
            </li>
            <li class="m-2">
                <a href="/#timeline" class="font-bold w-full block text-lime-900 py-2 px-3 bg-white rounded-normal-mobile active:bg-[#C0D057]">Timeline</a> 
            </li>
            <li class="m-2 ">
                <a href="/lokasi" class="font-bold w-full block text-lime-900 py-2 px-3 bg-white rounded-normal-mobile active:bg-[#C0D057]">Lokasi Pemilihan</a> 
            </li>
        </ul>
    </nav>

    <section style="background-image: url(<?php echo base_url("/images/Frame_19.svg")?>); margin:0px" class="overflow-x-hidden mt-0 pt-10 pb-52 md:bg bg-cover bg-no-repeat bg-center w-screen">
    <?php
                $i = 0;
                foreach($detail_capresma as $details) {
                    
                ?>
        <div class="grid grid-cols-1 md:grid-cols-2 w-screen mx-auto  content-center">
        
            <div class="text-center w-1/2 mx-auto">
                
                <a class="justify-center flex" href="/detail-capresma/<?= $details['id'] ?>">
            <img src="<?php echo base_url('/images/' . $details['images']) ?>" alt="capresma">
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
            </div>
        </div>
    </section>

    <footer class="">
        <img style=" position: relative; bottom: 0;
        width: 100vw;
        "
         src="<?php echo base_url('/images/footer-beranda.svg') ?>" alt="">
    </footer>
    <script src="<?php echo base_url('/js/app.js') ?>"></script>
    <script src="<?php echo base_url('/js/script.js') ?>"></script>
</body>

</html>