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

    <div class="w-screen bottom-0 hidden md:flex lg:flex">
        <img src="<?php echo base_url('/images/footer-desktop.svg') ?>">
    </div>
    <div class="w-screen bottom-0 md:hidden lg:hidden">
        <img src="<?php echo base_url('/images/footer-mobile.svg') ?>">
    </div>

    <script src="<?php echo base_url('/js/app.js') ?>">
    </script>
    <script src="<?php echo base_url('/js/script.js') ?>"></script>

</body>

</html>