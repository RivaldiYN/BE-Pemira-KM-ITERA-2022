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
        <div class="w-screen -mt-20 absolute justify-center flex lg:justify-center z-[11]">
            <div class="w-64 text-center lg:w-[32rem]">
                <div class="justify-center flex">
                    <img src="<?php echo base_url('/images/capresma.svg') ?>" alt="capresma">
                </div>
                <h1 class="text-lg lg:text-2xl font-bold mt-8">Christian Arvianus Biran Nathanael</h1>
                <h1 class="text-lg lg:text-2xl mt-4 lg:mt-8">Teknik Informatika '20</h1>
            </div>
        </div>
        <div class="w-full absolute flex justify-center mt-[32rem] lg:mt-[48rem] flex-row lg:flex-row lg:justify-center z-[11]">
            <div class="w-20 lg:w-24 mx-5 lg:mx-10 text-center">
                <img src="<?php echo base_url('/images/himpunan.svg') ?>" alt="capresma">
            </div>
            <div class="w-20 lg:w-24 mx-5 lg:mx-10 text-center">
                <img src="<?php echo base_url('/images/himpunan.svg') ?>" alt="capresma" />
            </div>
            <div class="w-20 lg:w-24 mx-5 lg:mx-10 text-center">
                <img src="<?php echo base_url('/images/himpunan.svg') ?>" alt="capresma" />
            </div>
        </div>
        <div class="top-0">
            <img class="m-0 z-10 absolute lg:-mt-28 lg:flex w-screen" src="<?php echo base_url('/images/bg-detail-capresma.svg') ?>" />
        </div>
        <div class="w-screen z-[15] absolute justify-center flex mt-[40rem] lg:mt-[60rem] text-center items-center font-bold">
            <a href="#" class="justify-center flex py-2 px-4 mx-3 w-28 border-2 border-[#899443] rounded-lg text-[#899443]">CV</a>
            <a href="#" class="justify-center flex py-2 px-4 mx-3 w-28 border-2 border-[#899443] bg-[#899443] rounded-lg text-[#FEFFEF]">Kampanye</a>
        </div>
    </section>

    <section>
        <div class="mt-[44rem] lg:mt-[64rem] mb-10 p-20 pb-0 z-[15] justify-center flex lg:z-50">
            <iframe class="rounded-xl border-2 border-[#899443] shadow-lg shadow-[#899443] lg:shadow-none" allow="autoplay; encrypted-media" allowfullscreen="" frameborder="0" height="auto" src="https://www.youtube.com/embed/8OxTG8plkz4?rel=0" width="auto"></iframe><img border="0" height="0" src="https://i2.ytimg.com/vi/mu1KSw28snI/0.jpg" width="0" />
        </div>

        <div class="my-10 md:mx-48 lg:mx-80">
            <h1 class="text-center font-bold text-xl lg:text-2xl">Visi :</h1>
            <div class="rounded-xl border-2 border-[#899443] lg:shadow-none mx-7 mt-4 z-50 justify-center flex">
                <h2 class="p-4 lg:p-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, maxime qui
                    aut distinctio asperiores laudantium dolorem. Sint excepturi quae impedit at? Vitae exercitationem
                    optio tempore eum perferendis eligendi aperiam voluptatum?</h2>
            </div>
        </div>

        <div class="my-10 md:mx-48 lg:mx-80">
            <h1 class="text-center font-bold text-xl lg:text-2xl">Misi :</h1>
            <div class="rounded-xl text-[#FEFFEF] border-2 border-[#899443] bg-[#899443] lg:shadow-none mx-7 mt-4 z-50 justify-center flex">
                <ul class="px-4 lg:px-8 py-2 lg:py-4">
                    <li class="py-2 lg:py-4">1. Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li class="py-2 lg:py-4">2. Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li class="py-2 lg:py-4">3. Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li class="py-2 lg:py-4">4. Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                </ul>
            </div>
        </div>

        <div class="my-10 md:mx-48 lg:mx-80">
            <h1 class="text-center font-bold text-xl lg:text-2xl">Rancangan Program Kerja :</h1>
            <div class="rounded-xl overflow-hidden text-[#FEFFEF] border-2 border-[#899443] bg-[#899443] lg:shadow-none mx-7 mt-4 z-50 justify-center flex">
                <div class="p-4 lg:p-8">
                    <h1 class="w-[10%] float-left font-bold lg:text-5xl">1. </h1>
                    <p class="w-[90%] float-left">ipsum, dolor sit amet consectetur adipisicing elit. Eos enim veritatis
                        quaerat atque delectus quos nemo eum dignissimos. Quo, nemo.</p>
                </div>
            </div>
            <div class="rounded-xl text-[#FEFFEF] border-2 border-[#899443] bg-[#899443] lg:shadow-none mx-7 mt-4 z-50 justify-center flex">
                <div class="p-4 lg:p-8">
                    <h1 class="w-[10%] float-left font-bold lg:text-5xl">2. </h1>
                    <p class="w-[90%] float-left">ipsum, dolor sit amet consectetur adipisicing elit. Eos enim veritatis
                        quaerat atque delectus quos nemo eum dignissimos. Quo, nemo.</p>
                </div>
            </div>
            <div class="rounded-xl text-[#FEFFEF] border-2 border-[#899443] bg-[#899443] lg:shadow-none mx-7 mt-4 z-50 justify-center flex">
                <div class="p-4 lg:p-8">
                    <h1 class="w-[10%] float-left font-bold lg:text-5xl">3. </h1>
                    <p class="w-[90%] float-left">ipsum, dolor sit amet consectetur adipisicing elit. Eos enim veritatis
                        quaerat atque delectus quos nemo eum dignissimos. Quo, nemo.</p>
                </div>
            </div>
            <div class="rounded-xl text-[#FEFFEF] border-2 border-[#899443] bg-[#899443] lg:shadow-none mx-7 mt-4 z-50 justify-center flex">
                <div class="p-4 lg:p-8">
                    <h1 class="w-[10%] float-left font-bold lg:text-5xl">4. </h1>
                    <p class="w-[90%] float-left">ipsum, dolor sit amet consectetur adipisicing elit. Eos enim veritatis
                        quaerat atque delectus quos nemo eum dignissimos. Quo, nemo.</p>
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
</body>

</html>