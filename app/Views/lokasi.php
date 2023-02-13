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
<nav class="z-50 fixed w-screen px-5 md:px-10">
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
                        <a href="/capresma" class="font-bold text-lime-900 hover:bg-[#C0D057] px-6 py-2 hover:rounded-tl-small-desktop hover:rounded-br-small-desktop  hover:text-white">Capresma</a> 
                    </li>
                    <li>
                        <a href="/#timeline" class="font-bold text-lime-900 hover:bg-[#C0D057] px-6 py-2 hover:rounded-tl-small-desktop hover:rounded-br-small-desktop  hover:text-white">Timeline</a> 
                    </li>
                    <li>
                        <a href="/lokasi" class="bg-button-color px-6 py-2 rounded-tl-small-desktop rounded-br-small-desktop font-bold text-white">Lokasi Pemilihan</a> 
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

    <!-- jumbotron -->
    <section class="overflow-x-hidden sm:mt-0">
        <div class="md:mt-60 lg:mt-80 mx-6 md:mx-44 lg:mx-64 absolute justify-center lg:justify-center">
            <div class="text-center z-20">
                <h1 class="text-lg md:text-2xl lg:text-4xl font-bold mx-5 mt-16 z-20">Validasi voting Calon Presiden Mahasiswa Itera tahun 2022 akan diadakan di aula gedung C dan gedung F ITERA</h1>
            </div>
        </div>
        <div class="top-0">
            <img class="m-0 z-0 lg:-mt-28 lg:flex w-screen" src="<?php echo base_url('/images/bg-pemilih.svg') ?>" />
        </div>
    </section>
    <!-- jumbotron -->

    <!-- daerah pemilihan -->
    <section class="pt-2 lg:z-50 lg:-mt-20 flex flex-col lg:flex-row justify-around overflow-x-hidden">
        <!-- Gedung C -->
        <div class="my-10 container mx-auto">
            <h1 class="text-center font-bold text-lg lg:text-2xl">Aula Gedung C ITERA</h1>
            <img src="<?php echo base_url('/images/gedC.svg') ?>" class="w-9/12 z-20 relative drop-shadow-2xl mx-auto" alt="">
            <!-- drop shadow -->
            <div style="background-image: url(<?php echo base_url("/images/detailintersct.svg") ?>);"
                class="rounded-xl text-[#FEFFEF] bg-[#899443] lg:shadow-none z-10 justify-center -translate-y-10 py-8 bg-no-repeat bg-contain bg-bottom w-10/12 mx-auto bg-origin-border">
                <ul class="py-8" id="Clist">
                    <li class="flex py-2">
                        <div class="mx-auto w-full px-4">
                            <p class="justify-end">Senin, 13 Februari 2023</p>
                            <div
                                class=" w-1/2 h-2 bg-white rounded-xl shadow-[47px_-20px_50px_-57px_rgba(0,0,0,0.75)_inset]">
                            </div>
                        </div>
                    </li>
                </ul>

                <ul class="py-8" id="Clist2">
                    <li class="flex py-2">
                        <div class="mx-auto w-full px-4">
                            <p class="justify-end">Selasa, 14 Februari 2023</p>
                            <div
                                class=" w-1/2 h-2 bg-white rounded-xl shadow-[47px_-20px_50px_-57px_rgba(0,0,0,0.75)_inset]">
                            </div>
                        </div>
                    </li>
                </ul>

                <!-- <ul class="py-8" id="Clist3">
                    <li class="flex py-2">
                        <div class="mx-auto w-full px-4">
                            <p class="justify-end">Rabu, 15 Februari 2023</p>
                            <div
                                class=" w-1/2 h-2 bg-white rounded-xl shadow-[47px_-20px_50px_-57px_rgba(0,0,0,0.75)_inset]">
                            </div>
                        </div>
                    </li>
                </ul> -->
            </div>
        </div>
        <!-- Gedung c -->

        <!-- Gedung F -->
        <div class="my-10 container mx-auto">
            <h1 class="text-center font-bold text-lg lg:text-2xl">Aula Gedung F ITERA</h1>
            <img src="<?php echo base_url('/images/gedF.svg') ?>" class="w-9/12 z-20 relative drop-shadow-2xl mx-auto" alt="">
            <!-- drop shadow -->
            <div style="background-image: url(<?php echo base_url("/images/detailintersct.svg") ?>);"
                class="rounded-xl text-[#FEFFEF] bg-[#899443] lg:shadow-none z-10 justify-center -translate-y-10 py-8 bg-no-repeat bg-contain bg-bottom w-10/12 mx-auto bg-origin-border">

                <ul class="py-8" id="Flist">
                    <li class="flex py-2">
                        <div class="mx-auto w-full px-4">
                            <p class="justify-end">Selasa, 14 Februari 2023</p>
                            <div
                                class=" w-1/2 h-2 bg-white rounded-xl shadow-[47px_-20px_50px_-57px_rgba(0,0,0,0.75)_inset]">
                            </div>
                        </div>
                    </li>
                </ul>

                <ul class="py-8" id="Flist2">
                    <li class="flex py-2">
                        <div class="mx-auto w-full px-4">
                            <p class="justify-end">Rabu, 15 Februari 2023</p>
                            <div
                                class=" w-1/2 h-2 bg-white rounded-xl shadow-[47px_-20px_50px_-57px_rgba(0,0,0,0.75)_inset]">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Gedung F -->
    </section>

    <footer class="absolute w-screen bg-second">
        <img class="w-screen" src="<?php echo base_url('/images/footer-beranda.svg') ?>">
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script>
        var Clist = [
            "Fisika",
            "Teknik Sipil",
            "SAP",
            "DKV",
            "Teknik Industri Pertanian",
            "Instrumentasi dan Automasi",
            "Sains Aktuaria",
            "Teknik Geofisika",
            "Kimia",
            "Farmasi",
            "Teknik Sistem Energi",
            "Teknik Kimia",
            "Rekayasa Minyak dan Gas"
        ];
        var Clist2 = [
            "Teknik Elektro",
            "Teknik Informatika",
            "Teknik Biosistem",
            "Teknik Material",
            "ARL",
            "Sains Data",
            "Teknik Geomatika",
            "Teknik Geologi",
            "Biologi",
            "Teknik Lingkungan",
        ];
        var Clist3 = [
            
        ];
        var Flist = [
            "PWK",
            "Matematika",
            "Teknik Kelautan",
            "Teknik Fisika",
            "Teknik Pertambangan",
            "Rekayasa Kehutanan",
            "Rekayasa Tata Kelola Air Terpadu",
            "Teknik Perkeretaapian",
            "Teknik Biomedis",
            "Rekayasa Kosmetik"
        ];
        var Flist2 = [
            "Arsitektur",
            "Teknik Mesin",
            "Teknik Industri",
            "Teknologi Pangan",
            "Teknik Telekomunikasi",
            "Sains Lingkungan Kelautan"
        ];
        function createList(listId, tag) {
            $.each(tag, function (index, namaProdi) {
                $("#" + listId).append('<li class="flex py-[2px]">' +
                    '<p class="bg-[#FEFEFE] text-[#899443] rounded-md rounded-b font-bold text-center py-2 px-auto ml-3 shadow-[47px_-20px_50px_-57px_rgba(0,0,0,0.75)_inset] min-w-[30px]">' + (index + 1) + '</p>' +
                    '<div class="mx-auto w-full px-4">' +
                    '<p>' + namaProdi + '</p>' +
                    '<div class="w-full h-1 bg-slate-300 rounded-xl shadow-[47px_-20px_50px_-57px_rgba(0,0,0,0.75)_inset]"></div>' +
                    '</div>' +
                    '</li>');
            });
        }
        $(document).ready(function () {
            createList("Clist", Clist);
            createList("Clist2", Clist2);
            // createList("Clist3", Clist3);
            createList("Flist", Flist);
            createList("Flist2", Flist2);
        });
    </script>

    <script src="<?php echo base_url('/js/app.js') ?>">
    </script>
    <script src="<?php echo base_url('/js/script.js') ?>"></script>

</body>

</html>