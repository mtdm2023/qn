<?php
?>

<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stores</title>
    <link rel="icon" href="./tsimg/qobon-logo-mob.svg" type="image/png">
    <link rel="stylesheet" href="./tscss/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="./tscss/all.min.css">
    <link rel="stylesheet" href="./tscss/owl.carousel.min.css">
    <link rel="stylesheet" href="./tscss/owl.theme.default.min.css">
    <link rel="stylesheet" href="./tscss/tsfldr/tscss0.min.css">
    <link rel="stylesheet" href="./tscss/tsfldr/tscss1.min.css">
    <link rel="stylesheet" href="./tscss/tsfldr/tscss2.min.css">
    <link rel="stylesheet" href="./tscss/tsfldr/tscss3.min.css">
    <link rel="stylesheet" href="./tscss/tsfldr/tscsssearch.min.css">
</head>

<body class="tsstores TSWView tsrtl  position-relative">

    <div id="tssection-tsajxbg" class=""></div>
    <div id="tssection-tssection-tspgtop"></div>
    <?php /* Category offcanvas */ ?>
    <?php include('./tscmn/categoryoffconvase.php') ?>

    <?php /* Country offcanvas */ ?>
    <div class="offcanvas offcanvas-bottom tsCountryOffconvas" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header pt-5">
        </div>
        <div class="offcanvas-body position-relative h-100 p-0">


            <div class="bg-container  d-flex justify-content-between pt-5 px-5">
                <ul class="d-flex flex-column gap-4 mt-4 w-100">
                    <?php include './tscmn/countries.php' ?>
                </ul>
                <i class=" exit-icon fas fa-xmark exit-icon fa-2x   " data-bs-dismiss="offcanvas" aria-label="Close"></i>

            </div>



        </div>

    </div>

    <?php /* Header */ ?>
    <?php include './tscmn/header.php' ?>


    <?php /* Topbnr */ ?>
    <section id="tssection-tstopbnr" class="tsc-sec-tstopbnr tsbg-0 w-100 h-auto mt-md-5 mt-5 ">
        <div class="row ">
            <div class="col-1 p-0"></div>
            <div class="col-6 d-flex flex-column justify-content-center align-items-start p-0 py-md-0 py-3">
                <h1 class="tscl-main">المتاجر</h1>
                <p class="p1 tscl-F m-0 pe-md-5 pe-0">قوبون يوفر أكثر من 100 علامة تجارية ومحل عالمي ومحلي، مما يتيح
                    للعملاء مجموعة واسعة من الخيارات لتلبية احتياجاتهم وتفضيلاتهم المتنوعة.</p>
            </div>
            <div class="col-5 p-0">
                <img class="w-100 h-100 px-md-3 px-0" src="./tsimg/qobon-stors-img1.png" alt="">
            </div>
        </div>
    </section>

    <?php /* tsstores list */ ?>
    <section id="tssection-tsstoreslist" class="tsc-sec-tsstoreslist w-100 h-auto pt-4 mt-md-5 mt-5 pb-md-5 ">
        <div class="container d-flex gap-md-0 gap-2 p-0 px-md-0 px-4 pb-md-4">
            <?php /* Tags */ ?>
           
                <div class=" d-md-block d-none col-3  categories-list me-md-5">
                    <div class="d-flex flex-column gap-3 ">
                        <?php include './tscmn/categoryList.php' ?>

                    </div>
            </div>
            <div class=" d-flex flex-column">

                <div class=" d-flex justify-content-between align-items-center gap-2 p-0">
                    <?php /* ****** Search input ****** */ ?>
                    <?php include './tscmn/tsstores_search.php' ?>
                    <?php /* ****************filter buttons***************** */ ?>


                    <?php /* التصنيفات Button */ ?>
                    <div
                        class="d-md-none d-flex align-items-center gap-md-1 gap-1  px-md-3 px-2 py-md-2 py-2 sort-button1 btn btn-dark rounded-pill "
                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                        aria-controls="offcanvasRight">
                        <img class="btnIcn_responsive" src="./tsimg/qobon-home-filter-catsbutton.svg	" alt="">
                        <span class="TSFntMedium tsfs-21 text-nowrap sort-text1">التصنيفات</span>
                    </div>



                </div>
                <?php /* stores cards */ ?>
                <div class="row  p-0 g-4 mt-md-4 mt-2">
                    <a href="./tsstoredtls.php" class="col-md-6 col-12 temoCard tsc-scale tsc-tr06s tsc-cursorpointer">
                        <div
                            class="d-flex justify-content-between align-items-center  tsbg-card-bg bordr31 py-md-4 py-4 px-md-4 px-3">
                            <img class="col-2" src="./tsimg/qobon-temo.svg" alt="">
                            <div class="d-flex flex-column gap-1">
                                <span class="TSFntBold tsfs-22 tscl-0">تيمو</span>
                                <span class="TSFntMedium tsfs-16 tscl-0">احدث الملابس ومستلزمات المنزل واكثر</span>
                            </div>
                            <i class="fas position-relative fa-chevron-left tsfs-30"></i>
                        </div>

                    </a>
                    <a href="./tsstoredtls.php" class="col-md-6 col-12 temoCard tsc-scale tsc-tr06s tsc-cursorpointer">
                        <div
                            class="d-flex justify-content-between align-items-center  tsbg-card-bg bordr31 py-md-4 py-4 px-md-4 px-3">
                            <img class="col-2" src="./tsimg/qobon-temo.svg" alt="">
                            <div class="d-flex flex-column gap-1">
                                <span class="TSFntBold tsfs-22 tscl-0">تيمو</span>
                                <span class="TSFntMedium tsfs-16 tscl-0">احدث الملابس ومستلزمات المنزل واكثر</span>
                            </div>
                            <i class="fas position-relative fa-chevron-left tsfs-30"></i>
                        </div>

                    </a>
                    <a href="./tsstoredtls.php" class="col-md-6 col-12 temoCard tsc-scale tsc-tr06s tsc-cursorpointer">
                        <div
                            class="d-flex justify-content-between align-items-center  tsbg-card-bg bordr31 py-md-4 py-4 px-md-4 px-3">
                            <img class="col-2" src="./tsimg/qobon-temo.svg" alt="">
                            <div class="d-flex flex-column gap-1">
                                <span class="TSFntBold tsfs-22 tscl-0">تيمو</span>
                                <span class="TSFntMedium tsfs-16 tscl-0">احدث الملابس ومستلزمات المنزل واكثر</span>
                            </div>
                            <i class="fas position-relative fa-chevron-left tsfs-30"></i>
                        </div>

                    </a>
                    <a href="./tsstoredtls.php" class="col-md-6 col-12 temoCard tsc-scale tsc-tr06s tsc-cursorpointer">
                        <div
                            class="d-flex justify-content-between align-items-center  tsbg-card-bg bordr31 py-md-4 py-4 px-md-4 px-3">
                            <img class="col-2" src="./tsimg/qobon-temo.svg" alt="">
                            <div class="d-flex flex-column gap-1">
                                <span class="TSFntBold tsfs-22 tscl-0">تيمو</span>
                                <span class="TSFntMedium tsfs-16 tscl-0">احدث الملابس ومستلزمات المنزل واكثر</span>
                            </div>
                            <i class="fas position-relative fa-chevron-left tsfs-30"></i>
                        </div>

                    </a>
                    <a href="./tsstoredtls.php" class="col-md-6 col-12 temoCard tsc-scale tsc-tr06s tsc-cursorpointer">
                        <div
                            class="d-flex justify-content-between align-items-center  tsbg-card-bg bordr31 py-md-4 py-4 px-md-4 px-3">
                            <img class="col-2" src="./tsimg/qobon-temo.svg" alt="">
                            <div class="d-flex flex-column gap-1">
                                <span class="TSFntBold tsfs-22 tscl-0">تيمو</span>
                                <span class="TSFntMedium tsfs-16 tscl-0">احدث الملابس ومستلزمات المنزل واكثر</span>
                            </div>
                            <i class="fas position-relative fa-chevron-left tsfs-30"></i>
                        </div>

                    </a>
                    <a href="./tsstoredtls.php" class="col-md-6 col-12 temoCard tsc-scale tsc-tr06s tsc-cursorpointer">
                        <div
                            class="d-flex justify-content-between align-items-center  tsbg-card-bg bordr31 py-md-4 py-4 px-md-4 px-3">
                            <img class="col-2" src="./tsimg/qobon-temo.svg" alt="">
                            <div class="d-flex flex-column gap-1">
                                <span class="TSFntBold tsfs-22 tscl-0">تيمو</span>
                                <span class="TSFntMedium tsfs-16 tscl-0">احدث الملابس ومستلزمات المنزل واكثر</span>
                            </div>
                            <i class="fas position-relative fa-chevron-left tsfs-30"></i>
                        </div>

                    </a>
                    <a href="./tsstoredtls.php" class="col-md-6 col-12 temoCard tsc-scale tsc-tr06s tsc-cursorpointer">
                        <div
                            class="d-flex justify-content-between align-items-center  tsbg-card-bg bordr31 py-md-4 py-4 px-md-4 px-3">
                            <img class="col-2" src="./tsimg/qobon-temo.svg" alt="">
                            <div class="d-flex flex-column gap-1">
                                <span class="TSFntBold tsfs-22 tscl-0">تيمو</span>
                                <span class="TSFntMedium tsfs-16 tscl-0">احدث الملابس ومستلزمات المنزل واكثر</span>
                            </div>
                            <i class="fas position-relative fa-chevron-left tsfs-30"></i>
                        </div>

                    </a>
                    <a href="./tsstoredtls.php" class="col-md-6 col-12 temoCard tsc-scale tsc-tr06s tsc-cursorpointer">
                        <div
                            class="d-flex justify-content-between align-items-center  tsbg-card-bg bordr31 py-md-4 py-4 px-md-4 px-3">
                            <img class="col-2" src="./tsimg/qobon-temo.svg" alt="">
                            <div class="d-flex flex-column gap-1">
                                <span class="TSFntBold tsfs-22 tscl-0">تيمو</span>
                                <span class="TSFntMedium tsfs-16 tscl-0">احدث الملابس ومستلزمات المنزل واكثر</span>
                            </div>
                            <i class="fas position-relative fa-chevron-left tsfs-30"></i>
                        </div>

                    </a>
                    <a href="./tsstoredtls.php" class="col-md-6 col-12 temoCard tsc-scale tsc-tr06s tsc-cursorpointer">
                        <div
                            class="d-flex justify-content-between align-items-center  tsbg-card-bg bordr31 py-md-4 py-4 px-md-4 px-3">
                            <img class="col-2" src="./tsimg/qobon-temo.svg" alt="">
                            <div class="d-flex flex-column gap-1">
                                <span class="TSFntBold tsfs-22 tscl-0">تيمو</span>
                                <span class="TSFntMedium tsfs-16 tscl-0">احدث الملابس ومستلزمات المنزل واكثر</span>
                            </div>
                            <i class="fas position-relative fa-chevron-left tsfs-30"></i>
                        </div>

                    </a>
                    <a href="./tsstoredtls.php" class="col-md-6 col-12 temoCard tsc-scale tsc-tr06s tsc-cursorpointer">
                        <div
                            class="d-flex justify-content-between align-items-center  tsbg-card-bg bordr31 py-md-4 py-4 px-md-4 px-3">
                            <img class="col-2" src="./tsimg/qobon-temo.svg" alt="">
                            <div class="d-flex flex-column gap-1">
                                <span class="TSFntBold tsfs-22 tscl-0">تيمو</span>
                                <span class="TSFntMedium tsfs-16 tscl-0">احدث الملابس ومستلزمات المنزل واكثر</span>
                            </div>
                            <i class="fas position-relative fa-chevron-left tsfs-30"></i>
                        </div>

                    </a>
                    <a href="./tsstoredtls.php" class="col-md-6 col-12 temoCard tsc-scale tsc-tr06s tsc-cursorpointer">
                        <div
                            class="d-flex justify-content-between align-items-center  tsbg-card-bg bordr31 py-md-4 py-4 px-md-4 px-3">
                            <img class="col-2" src="./tsimg/qobon-temo.svg" alt="">
                            <div class="d-flex flex-column gap-1">
                                <span class="TSFntBold tsfs-22 tscl-0">تيمو</span>
                                <span class="TSFntMedium tsfs-16 tscl-0">احدث الملابس ومستلزمات المنزل واكثر</span>
                            </div>
                            <i class="fas position-relative fa-chevron-left tsfs-30"></i>
                        </div>

                    </a>
                    <a href="./tsstoredtls.php" class="col-md-6 col-12 temoCard tsc-scale tsc-tr06s tsc-cursorpointer">
                        <div
                            class="d-flex justify-content-between align-items-center  tsbg-card-bg bordr31 py-md-4 py-4 px-md-4 px-3">
                            <img class="col-2" src="./tsimg/qobon-temo.svg" alt="">
                            <div class="d-flex flex-column gap-1">
                                <span class="TSFntBold tsfs-22 tscl-0">تيمو</span>
                                <span class="TSFntMedium tsfs-16 tscl-0">احدث الملابس ومستلزمات المنزل واكثر</span>
                            </div>
                            <i class="fas position-relative fa-chevron-left tsfs-30"></i>
                        </div>

                    </a>
                    <a href="./tsstoredtls.php" class="col-md-6 col-12 temoCard tsc-scale tsc-tr06s tsc-cursorpointer">
                        <div
                            class="d-flex justify-content-between align-items-center  tsbg-card-bg bordr31 py-md-4 py-4 px-md-4 px-3">
                            <img class="col-2" src="./tsimg/qobon-temo.svg" alt="">
                            <div class="d-flex flex-column gap-1">
                                <span class="TSFntBold tsfs-22 tscl-0">تيمو</span>
                                <span class="TSFntMedium tsfs-16 tscl-0">احدث الملابس ومستلزمات المنزل واكثر</span>
                            </div>
                            <i class="fas position-relative fa-chevron-left tsfs-30"></i>
                        </div>

                    </a>
                    <a href="./tsstoredtls.php" class="col-md-6 col-12 temoCard tsc-scale tsc-tr06s tsc-cursorpointer">
                        <div
                            class="d-flex justify-content-between align-items-center  tsbg-card-bg bordr31 py-md-4 py-4 px-md-4 px-3">
                            <img class="col-2" src="./tsimg/qobon-temo.svg" alt="">
                            <div class="d-flex flex-column gap-1">
                                <span class="TSFntBold tsfs-22 tscl-0">تيمو</span>
                                <span class="TSFntMedium tsfs-16 tscl-0">احدث الملابس ومستلزمات المنزل واكثر</span>
                            </div>
                            <i class="fas position-relative fa-chevron-left tsfs-30"></i>
                        </div>

                    </a>
                    <a href="./tsstoredtls.php" class="col-md-6 col-12 temoCard tsc-scale tsc-tr06s tsc-cursorpointer">
                        <div
                            class="d-flex justify-content-between align-items-center  tsbg-card-bg bordr31 py-md-4 py-4 px-md-4 px-3">
                            <img class="col-2" src="./tsimg/qobon-temo.svg" alt="">
                            <div class="d-flex flex-column gap-1">
                                <span class="TSFntBold tsfs-22 tscl-0">تيمو</span>
                                <span class="TSFntMedium tsfs-16 tscl-0">احدث الملابس ومستلزمات المنزل واكثر</span>
                            </div>
                            <i class="fas position-relative fa-chevron-left tsfs-30"></i>
                        </div>

                    </a>
                    <a href="./tsstoredtls.php" class="col-md-6 col-12 temoCard tsc-scale tsc-tr06s tsc-cursorpointer">
                        <div
                            class="d-flex justify-content-between align-items-center  tsbg-card-bg bordr31 py-md-4 py-4 px-md-4 px-3">
                            <img class="col-2" src="./tsimg/qobon-temo.svg" alt="">
                            <div class="d-flex flex-column gap-1">
                                <span class="TSFntBold tsfs-22 tscl-0">تيمو</span>
                                <span class="TSFntMedium tsfs-16 tscl-0">احدث الملابس ومستلزمات المنزل واكثر</span>
                            </div>
                            <i class="fas position-relative fa-chevron-left tsfs-30"></i>
                        </div>

                    </a>
                    <a href="./tsstoredtls.php" class="col-md-6 col-12 temoCard tsc-scale tsc-tr06s tsc-cursorpointer">
                        <div
                            class="d-flex justify-content-between align-items-center  tsbg-card-bg bordr31 py-md-4 py-4 px-md-4 px-3">
                            <img class="col-2" src="./tsimg/qobon-temo.svg" alt="">
                            <div class="d-flex flex-column gap-1">
                                <span class="TSFntBold tsfs-22 tscl-0">تيمو</span>
                                <span class="TSFntMedium tsfs-16 tscl-0">احدث الملابس ومستلزمات المنزل واكثر</span>
                            </div>
                            <i class="fas position-relative fa-chevron-left tsfs-30"></i>
                        </div>

                    </a>
                    <a href="./tsstoredtls.php" class="col-md-6 col-12 temoCard tsc-scale tsc-tr06s tsc-cursorpointer">
                        <div
                            class="d-flex justify-content-between align-items-center  tsbg-card-bg bordr31 py-md-4 py-4 px-md-4 px-3">
                            <img class="col-2" src="./tsimg/qobon-temo.svg" alt="">
                            <div class="d-flex flex-column gap-1">
                                <span class="TSFntBold tsfs-22 tscl-0">تيمو</span>
                                <span class="TSFntMedium tsfs-16 tscl-0">احدث الملابس ومستلزمات المنزل واكثر</span>
                            </div>
                            <i class="fas position-relative fa-chevron-left tsfs-30"></i>
                        </div>

                    </a>
                    <a href="./tsstoredtls.php" class="col-md-6 col-12 temoCard tsc-scale tsc-tr06s tsc-cursorpointer">
                        <div
                            class="d-flex justify-content-between align-items-center  tsbg-card-bg bordr31 py-md-4 py-4 px-md-4 px-3">
                            <img class="col-2" src="./tsimg/qobon-temo.svg" alt="">
                            <div class="d-flex flex-column gap-1">
                                <span class="TSFntBold tsfs-22 tscl-0">تيمو</span>
                                <span class="TSFntMedium tsfs-16 tscl-0">احدث الملابس ومستلزمات المنزل واكثر</span>
                            </div>
                            <i class="fas position-relative fa-chevron-left tsfs-30"></i>
                        </div>

                    </a>
                    <a href="./tsstoredtls.php" class="col-md-6 col-12 temoCard tsc-scale tsc-tr06s tsc-cursorpointer">
                        <div
                            class="d-flex justify-content-between align-items-center  tsbg-card-bg bordr31 py-md-4 py-4 px-md-4 px-3">
                            <img class="col-2" src="./tsimg/qobon-temo.svg" alt="">
                            <div class="d-flex flex-column gap-1">
                                <span class="TSFntBold tsfs-22 tscl-0">تيمو</span>
                                <span class="TSFntMedium tsfs-16 tscl-0">احدث الملابس ومستلزمات المنزل واكثر</span>
                            </div>
                            <i class="fas position-relative fa-chevron-left tsfs-30"></i>
                        </div>

                    </a>




                </div>
                <?php /* pagination */ ?>
                <?php include './tscmn/pagination.php' ?>
            </div>

        </div>
    </section>

    <?php /* Footer */ ?>
    <?php include './tscmn/footer.php' ?>

    <!-- gotop icon -->
    <div id="ts-gototop" class="text-center position-fixed bottom-0 ms-4 mb-2 rounded-circle">
        <i class="fa-solid fa-angle-up"></i>
    </div>
    <!-- whats app icon -->
    <div id="ts-wap" class="ts-wap d-block fixed-bottom ms-auto me-2 mb-2 rounded-circle bg-transparent"
        title="تواصل مع ديروزا من خلال الواتسآب">
        <a href="https://web.whatsapp.com/send/?phone=966538834071&amp;text=%D9%85%D8%B1%D8%AD%D8%A8%D8%A7%20%D8%8C%20%D9%84%D9%82%D8%AF%20%D8%A8%D8%AF%D8%A3%D8%AA%20%D8%A7%D9%84%D9%85%D8%AD%D8%A7%D8%AF%D8%AB%D8%A9%20%D9%85%D9%86%20%D9%85%D9%88%D9%82%D8%B9%D9%83%D9%85%20%D8%A7%D9%84%D8%AA%D8%A7%D9%84%D9%8A%20%D9%88%D8%B1%D8%A7%D8%A8%D8%B7%D9%87%20https://derosa.sa"
            target="-blank">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
    </div>

    <script src="./tsjs/jquery-3.5.1.min.js"></script>
    <script src="./tsjs/owl.carousel.min.js"></script>
    <script src="./tsjs/bootstrap.bundle.min.js"></script>
    <script src="./tsjs/tsfldr/tsjs0.min.js"></script>
    <script src="./tsjs/tsfldr/tsjs_main.min.js"></script>
    <script src="./tsjs/tsfldr/tsjssearch.min.js"></script>
    <script src="./000_tschanges/tsjsfunccaller.min.js"></script>
    <script src="./000_tschanges/Test.min.js"></script>


</body>

</html>