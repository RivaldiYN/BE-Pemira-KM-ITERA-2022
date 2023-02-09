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

<body class="bg-[#e6e7ba] overflow-x-hidden">
    <nav class="z-20 fixed w-screen px-5 md:px-10">
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

    <div class="paralag w-screen relative z-10">
        <div class="awan">
            <img class="w-64 md:w-[20vw]" src="<?php echo base_url('/images/awan.svg') ?>" alt="">
        </div>
        <div class="mainbg">
            <img class="w-screen relative md:-top-28 top0" src="<?php echo base_url('/images/bg-beranda.svg') ?>" alt="">
        </div>


        <div class="absolute top-24 lg:top-52 w-full">
            <div class="w-[70vw] lg:w-[50vw] mx-auto rounded-2xl p-4 md:p-16" style="background: rgba(255, 255, 255, 0.6);">
                <div class="text-center px-5 py-5">
                    <h1 class="text-lg md:text-extra-desktop font-extrabold font-poppins text-gray-900">Pemira KM ITERA 2022</h1>
                    </div>
                    <div class="text-center px-5 md:pb-6 pb-2">
                        <h4 class="md:text-normal-desktop mb-6">
                            Pemilihan Raya Keluarga Mahasiswa Institut Teknologi Sumatera
                        </h4>
                        <div class="space-y-3">
                        <div class="md:mt-20 mt-10">
                            <a href="http://pemira.km.itera.ac.id/" 
                            class="p-4 px-12 items-center justify-center rounded-lg md:px-32 md:text-normal-desktop bg-[#899443] hover:opacity-75 text-white">
                            Vote
                        </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        </div>

    <div class="bg-second">

    <section class="py-8 px-4 pt-44 bg-second relative -top-[8rem] md:-top-[24rem]  text-center
    ">
        <div class="maincontainer relative top-9 md:top-64">
            <h1 class="text-normal-desktop md:text-extra-desktop  text-center font-bold leading-relaxed py-4 md:py-8 text">
                Tentang Pemira </h1>
            <div
                class="container border-4 md:border-8 border-button-color rounded-normal-desktop shadow-[#bababa] shadow-md md:p-10 md:w-[70vw] mx-4 md:mx-auto p-4 text-normal-mobile md:text-normal-desktop font-bold">
                <p class="leading-7 md:mb-12 mb-4   ">
                    PEMIRA KM ITERA 2021 merupakan kegiatan pemilihan presiden KM ITERA
                    yang akan memimpin kabinet KM ITERA di periode selanjutnya.
                </p>
                <blockquote class="font-bold italic text-center tracking-wider hover:antialiased mt-3">
                    "Keberhasilan pemimpin diukur dari kemampuan mereka
                    dalam menyejahterakan umat yang mereka pimpin."
                    </blockquote>
                    <p class="text-center mb-3">
                    - Abdurrahman Wahid -
                </p>
                <p class="leading-7 mt-4 md:mt-12  ">
                    Mari kita wujudkan kepemimpinan yang lebih baik daripada sebelumnya
                    sebagai wujud perkembangan yang nyata dalam menjalankan kehidupan.
                </p>
            </div>
        </div>
</section>

        <!-- Tutorial-->
    <section class="pb-8 px-4 bg-second">
        <h1 class="text-xl md:text-2xl lg:text-4xl text-center font-bold leading-relaxed py-4 md:py-8 mx-auto">
            Tutorial
        </h1>
        <iframe class="rounded-xl w-full md:w-3/4 aspect-video mx-auto xl:w-3/5" allow="autoplay; encrypted-media"
            allowfullscreen="" frameborder="0" height="auto" src="https://www.youtube.com/embed/8OxTG8plkz4?rel=0"
            width="auto">
            <img src="https://i2.ytimg.com/vi/mu1KSw28snI/0.jpg" />
        </iframe>
    </section>

    <!-- Timeline-->

    <section class="py-8 container mx-auto px-4">
            <h1 class="text-xl md:text-2xl lg:text-4xl text-center font-bold leading-relaxed py-4">Timeline</h1>

            <div class="grid grid-cols-2 md:grid-cols-4 " id="timeline">

                <div class="flex items-center justify-center mt-10">
                    <div style="background-image: url(<?php echo base_url("/images/Union.svg") ?>);" class="timeline-box  bg-no-repeat bg-cover drop-shadow-[0_5px_10px_rgba(0,0,0,0.25)] w-40 md:w-64 h-40 md:h-64 px-4 py-2 md:p-8 flex justify-center items-center">
                        <div class="gruping">
                            <h1 class="font-black text-big-mobile md:text-big-desktop text-center ">02</h1>
                            <h3 class="font-extrabold text-md xl:text-xl text-center -translate-y-2">februari 2023</h3>
                            <h5 class="text-white font-bold text-xs mt-2 md:text-sm xl:text-medium-mobile text-center" style="text-shadow: 2px 0 10px black;">
                                Uji Panelis    
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center mt-10">
                <div style="background-image: url(<?php echo base_url("/images/Union.svg") ?>);" class="timeline-box bg-no-repeat bg-cover drop-shadow-[0_5px_10px_rgba(0,0,0,0.25)] w-40 md:w-64 h-40 md:h-64 px-4 py-2 md:p-8 flex justify-center items-center" style="filter: drop-shadow(0px 5px 30px 20px rgba(0,0,0,0.75));">
                        <div class="gruping">
                            <h1 class="font-black text-big-mobile md:text-big-desktop text-center ">06-10</h1>
                            <h3 class="font-extrabold text-md xl:text-xl text-center -translate-y-2">februari 2023</h3>
                            <h5 class="text-white font-bold text-xs mt-2 md:text-sm xl:text-medium-mobile text-center" style="text-shadow: 2px 0 10px black;">
                                Dialog Publik    
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center mt-10">
                <div style="background-image: url(<?php echo base_url("/images/Union.svg") ?>);" class="timeline-box bg-no-repeat bg-cover drop-shadow-[0_5px_10px_rgba(0,0,0,0.25)] w-40 md:w-64 h-40 md:h-64 px-4 py-2 md:p-8 flex justify-center items-center">
                        <div class="gruping">
                            <h1 class="font-black text-big-mobile md:text-big-desktop text-center ">11-12</h1>
                            <h3 class="font-extrabold text-md xl:text-xl text-center -translate-y-2">februari 2023</h3>
                            <h5 class="text-white font-bold text-xs mt-2 md:text-sm xl:text-medium-mobile text-center" style="text-shadow: 2px 0 10px black;">
                                Masa Tenang    
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center mt-10">
                <div style="background-image: url(<?php echo base_url("/images/Union.svg") ?>); " class="timeline-box  bg-no-repeat bg-cover drop-shadow-[0_5px_10px_rgba(0,0,0,0.25)] w-40 md:w-64 h-40 md:h-64 px-4 py-2 md:p-8 flex justify-center items-center">
                        <div class="gruping">
                            <h1 class="font-black text-big-mobile md:text-big-desktop text-center ">13-15</h1>
                            <h3 class="font-extrabold text-md xl:text-xl text-center -translate-y-2">februari 2023</h3>
                            <h5 class="text-white font-bold text-xs mt-2 md:text-sm xl:text-medium-mobile text-center" style="text-shadow: 2px 0 10px black;">
                                PEMIRA Presiden KM ITERA 2023 
                            </h5>
                        </div>
                    </div>
                </div>
                </section>

    </div>

    <footer class="absolute w-screen bg-second">
        <img class="w-screen" src="<?php echo base_url('/images/footer-beranda.svg') ?>" alt="">
    </footer>
    <script src="<?php echo base_url('/js/app.js') ?>"></script>
    <script src="<?php echo base_url('/js/script.js') ?>"></script>
</body>

</html>