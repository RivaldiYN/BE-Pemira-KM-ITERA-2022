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

    <section class="overflow-x-hidden">
        <div class="w-screen absolute justify-center flex lg:justify-center z-[11]">
            <div class="w-56 text-center lg:w-[32rem]">
                <div class="justify-center flex">
                    <img src="<?php echo base_url('/images/capresma.svg') ?>" alt="capresma">
                </div>
                <h1 class="text-lg lg:text-2xl font-bold mt-8"><?= $detail_capresma[0]->nama ?></h1>
                <h1 class="text-lg lg:text-2xl lg:mt-8"><?= $detail_capresma[0]->nim ?></h1>
                <h1 class="text-lg lg:text-2xl lg:mt-8"><?= $detail_capresma[0]->prodi ?></h1>
            </div>
        </div>
        <div class="top-0 z-10">
            <img class="m-0 z-10 absolute lg:-mt-28 lg:flex w-screen" src="<?php echo base_url('/images/bg-detail-capresma.svg') ?>" />
        </div>
        <div
            class="w-screen z-[15] absolute justify-center flex mt-[32rem] lg:mt-[52rem] text-center items-center font-bold">
            <a href="#"
                class="justify-center flex text-sm md:text-base py-2 px-4 mx-3 w-28 border-2 border-[#899443] rounded-lg text-[#899443]">CV</a>
            <a href="#"
                class="justify-center flex text-sm md:text-base py-2 px-4 mx-3 w-28 border-2 border-[#899443] bg-[#899443] rounded-lg text-[#FEFFEF]">Kampanye</a>
        </div>
    </section>

    <section>
        <div class="mt-[34rem] lg:mt-[56rem] mx-8 lg:mx-0 p-20 pb-10 justify-center flex">
            <iframe
                class="z-40 rounded-xl border-2 border-[#899443] shadow-lg shadow-[#899443] lg:shadow-none lg:w-[480px] lg:h-[240px]"
                allow="autoplay; encrypted-media" allowfullscreen="" frameborder="0"
                src="https://www.youtube.com/embed/8OxTG8plkz4?rel=0" width="auto"></iframe>
        </div>

        <div class="my-10 md:mx-48 lg:mx-80">
            <h1 class="text-center font-bold lg:text-2xl">Visi :</h1>
            <div class="rounded-xl border-2 border-[#899443] lg:shadow-none mx-7 mt-4 z-50 justify-center flex">
                <h2 class="p-4 lg:p-8"><?= $detail_capresma[0]->visi ?>
                </h2>
            </div>
        </div>

        <div class="my-10 md:mx-48 lg:mx-80">
            <h1 class="text-center font-bold lg:text-2xl">Misi :</h1>
            <div
                class="rounded-xl text-[#FEFFEF] border-2 border-[#899443] bg-[#899443] lg:shadow-none mx-7 mt-4 z-50 shadow-lime-900 shadow-lg">
                <div class="flex flex-row">
                    <div
                        class="bg-[#feffef] w-24 md:w-20 text-center m-4 mr-1 md:mr-4 rounded-b-small-mobile max-h-10 shadow-[40px_-20px_50px_-57px_rgba(0,0,0,0.75)_inset]">
                        <p class="text-normal-desktop text-[#899443] font-extrabold">1.</p>
                </div>
                <div class="m-4 ml-1 md:ml-4">
                <p class="text-smole-mobile md:text-base"><?= nl2br($detail_capresma[0]->misi) ?></p>    
                <div class="w-full h-1 bg-[#feffef] mt-2"></div>
                    </div>
                </div>
                <div class="flex flex-row">
                    <div
                        class="bg-[#feffef] w-24 md:w-20 text-center m-4 mr-1 md:mr-4 rounded-b-small-mobile max-h-10 shadow-[40px_-20px_50px_-57px_rgba(0,0,0,0.75)_inset]">
                        <p class="text-normal-desktop text-[#899443] font-extrabold"><?= nl2br($detail_capresma[0]->misi) ?></p>
                    </div>
                    <div class="m-4 ml-1 md:ml-4">
                        <p class="text-smole-mobile md:text-base"><?= nl2br($detail_capresma[0]->misi) ?></p>
                        <div class="w-full h-1 bg-[#feffef] mt-2"></div>
                    </div>
                </div>
                <div class="flex flex-row">
                    <div
                        class="bg-[#feffef] w-24 md:w-20 text-center m-4 mr-1 md:mr-4 rounded-b-small-mobile max-h-10 shadow-[40px_-20px_50px_-57px_rgba(0,0,0,0.75)_inset]">
                        <p class="text-normal-desktop text-[#899443] font-extrabold">10.</p>
                    </div>
                    <div class="m-4 ml-1 md:ml-4">
                        <p class="text-smole-mobile md:text-base">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, hic? Officiis dolores,
                            tenetur aliquam dolor laboriosam obcaecati non est vel?</p>
                        <div class="w-full h-1 bg-[#feffef] mt-2"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-10 md:mx-48 lg:mx-80">
            <h1 class="text-center font-bold lg:text-2xl">
                Rancangan Program Kerja :
            </h1>
            <div class="misi container mx-auto px-5">
                <div class="item-misi flex md:gap-5 gap-2 mt-5 md:mx-0 bg-button-color bg-[url('/img/Vector.svg')] bg-right-bottom bg-no-repeat w-full md:px-5 md:py-4 px-3 py-2 items-start md:rounded-normal-desktop rounded-normal-mobile shadow-lime-900 shadow-lg">
                    <div class="number-container bg-white  md:pb-5 md:px-7 pb-2 px-4 rounded-b-normal-mobile md:rounded-b-normal-desktop relative shadow-[47px_-20px_50px_-57px_rgba(0,0,0,0.75)_inset] md:-top-4 -top-2">
                        <span class="number text-big-desktop md:text-[80px]  font-extrabold text-button-color">1.</span>
                    </div>
                    <div class="text-contrainer font-poppins text-white">
                        <span class="title font-bold italic text-normal-mobile md:text-normal-desktop">Lorem, ipsum.</span>
                        <p class="description text-smole-mobile md:text-normal-tablet pt-0 md:pt-3 md:text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint natus, fugiat nisi enim dolorem laborum at. Est exercitationem commodi quibusdam.</p>
                    </div>
                </div>
        
                <div class="item-misi flex md:gap-5 gap-2 mt-5 md:mx-0 bg-button-color bg-[url('/img/Vector.svg')] bg-right-bottom bg-no-repeat w-full md:px-5 md:py-4 px-3 py-2 items-start md:rounded-normal-desktop rounded-normal-mobile shadow-lime-900 shadow-lg">
                    <div class="number-container bg-white  md:pb-5 md:px-7 pb-2 px-4 rounded-b-normal-mobile md:rounded-b-normal-desktop relative shadow-[47px_-20px_50px_-57px_rgba(0,0,0,0.75)_inset] md:-top-4 -top-2">
                        <span class="number text-big-desktop md:text-[80px]  font-extrabold text-button-color">2.</span>
                    </div>
                    <div class="text-contrainer font-poppins text-white">
                        <span class="title font-bold italic text-normal-mobile md:text-normal-desktop">Lorem, ipsum.</span>
                        <p class="description text-smole-mobile md:text-normal-tablet pt-0 md:pt-3 md:text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint natus, fugiat nisi enim dolorem laborum at. Est exercitationem commodi quibusdam.</p>
                    </div>
                </div>
        
                <div class="item-misi flex md:gap-5 gap-2 mt-5 md:mx-0 bg-button-color bg-[url('/img/Vector.svg')] bg-right-bottom bg-no-repeat w-full md:px-5 md:py-4 px-3 py-2 items-start md:rounded-normal-desktop rounded-normal-mobile shadow-lime-900 shadow-lg">
                    <div class="number-container bg-white  md:pb-5 md:px-7 pb-2 px-4 rounded-b-normal-mobile md:rounded-b-normal-desktop relative shadow-[47px_-20px_50px_-57px_rgba(0,0,0,0.75)_inset] md:-top-4 -top-2">
                        <span class="number text-big-desktop md:text-[80px]  font-extrabold text-button-color">13.</span>
                    </div>
                    <div class="text-contrainer font-poppins text-white">
                        <span class="title font-bold italic text-normal-mobile md:text-normal-desktop">Lorem, ipsum.</span>
                        <p class="description text-smole-mobile md:text-normal-tablet pt-0 md:pt-3 md:text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint natus, fugiat nisi enim dolorem laborum at. Est exercitationem commodi quibusdam.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bottom-0 hidden md:flex lg:flex">
        <img class="w-screen" src="<?php echo base_url('/images/footer-desktop.svg') ?>">
    </div>
    <div class="w-screen bottom-0 md:hidden lg:hidden">
        <img src="<?php echo base_url('/images/footer-mobile.svg') ?>">
    </div>
    <script src="<?php echo base_url('/js/app.js') ?>"></script>
    <script src="<?php echo base_url('/js/script.js') ?>"></script>
</body>

</html>