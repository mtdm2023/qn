<?php
?>

<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>qobon-details</title>
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

	<style>
		.Qobn_bg {
			background-image: url('tsimg/qobon-home-qbncard-bg.svg') !important;

			max-height: 224.33px;
			aspect-ratio: 491.69/224.33;
		}


		.qbnCard_frst_prt {
			flex: 0 1 37.5% !important;
			/* (184.59 / 491.69) * 100 */


		}

		.qbnCard_scnd_prt {
			flex: 0 1 62.4% !important;
			/* (307.1 / 491.69) * 100 */

		}
	</style>
</head>

<body class="tsstoredtls TSWView tsrtl  position-relative">

	<div id="tssection-tsajxbg" class=""></div>
	<div id="tssection-tssection-tspgtop"></div>


	<?php /* ****************qobon Modal************ */ ?>
	<div class="modal fade p-0" id="staticBackdrop" aria-labelledby="exampleModalToggleLabel" tabindex="-1" aria-modal="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<?php /* all styles in modal */ ?>
				<style>
					.modal-content {
						background-image: url(./tsimg/qobon-modal-box.png);
						max-height: 728.57px;
						aspect-ratio: 995.71/728.57;
					}
				</style>
				<?php /* script for share icone */ ?>

				<div class="modal-header p-0">
					<?php /* exit-icon Here  */ ?>
					<div class="d-flex justify-content-between px-md-5 px-3 pt-md-5 pt-2   w-100 h-100">
						<div></div>
						<i class="tsc-cursorpointer modalExtIcn fas fa-xmark  fa-2x" data-bs-dismiss="modal"
							aria-label="Close"></i>
					</div>
				</div>
				<div class="modal-body p-0 px-md-5 px-4">
					<?php /* first part >>> logo and discount */ ?>
					<div class="row  px-2">
						<div class="col-7 p-0 ">
							<div class="row ">
								<div class="col-4">
									<div class="bdg_container  px-md-3 px-1 py-md-3 py-1">
										<img class="col-md-11 col-10 " src="./tsimg/qobon-qbndtls-temo-withcircle.svg" alt="">
									</div>
								</div>
								<div class="col-8">
									<div
										class="d-flex flex-column justify-content-center align-items-start gap-md-3 gap-0 ">
										<span class="TSFntBold tsfs-34 tscl-0 ">تيمو</span>
										<p class="col-md-9 col-12 TSFntLight tsfs-15 tscl-0    ">
											متجر إلكتروني عالمي يقدم تشكيلة واسعة من المنتجات بأسعار منافسة
										</p>
									</div>
								</div>

							</div>
						</div>
						<div class="qbnCard_frst_prt p-0">
							<div class="d-flex align-items-center w-100 h-100 ">
								<div
									class="discnt_sec w-100 h-auto py-md-3 py-1  d-flex justify-content-center align-items-center gap-3">
									<div
										class=" bordr60  tsbg-main d-flex justify-content-center  align-items-center   py-md-3 py-2 px-md-3 px-2 ">
										<div class="d-flex justify-content-between gap-2 align-items-center w-100  ">
											<img class="col-5" src="./tsimg/qobon-home-cats-discount-icon.svg" alt="">
											<span class="TSFntRegular tsfs-21 tscl-0 text-nowrap ">خصم</span>
										</div>
									</div>
									<span class="TSFntBold tsfs-50 tscl-0 text-nowrap">50 ريال</span>
								</div>
							</div>

						</div>
					</div>
					<?php /* second part all 3 texts */ ?>
					<div class="d-flex flex-column align-items-start gap-md-3 gap-sm-2 gap-2 px-5 mt-md-4 mt-1">
						<div class="d-flex align-items-start gap-4 ">
							<span class="TSFntMedium tsfs-20 tscl-0">التفاصيل</span>
							<span class="TSFntRegular tsfs-20 tscl-0">كاش باك 80% بحد اقصى 50 ريال - باستثناء العروض -
								(استخدام مره واحده)</span>
						</div>
						<div class="d-flex align-items-start gap-4 ">
							<span class="TSFntMedium tsfs-20 tscl-0">آخر استخدام للكوبون</span>
							<span class="TSFntSemiBold tsfs-20 tscl-text4">منذ ساعة تقريبا</span>
						</div>
						<div class="d-flex align-items-start gap-4 ">
							<span class="TSFntMedium tsfs-20 tscl-0">عدد الاستخدامات</span>
							<span class="TSFntSemiBold tsfs-20 tscl-text4">21039</span>
						</div>
						<hr class="w-100 tsbg-bg4 mt-md-4 mt-1">
					</div>
					<?php /* third part all 9 icons */ ?>

					<div class="row  row-cols-md-9 mt-md-5 mt-0 px-md-4 px-2 gy-md-2 gy-1 gx-md-2 gx-3">
						<div class="col p-md-2 p-1">
							<div class="d-flex justify-content-center h-100 w-100 tsc-tr06s tsc-tr-top">
								<a href="" class=" z-2 ">
									<img class=" w-100 " src="./tsimg/qobon-social-telegram.svg" alt="">
								</a>
							</div>
						</div>
						<div class="col p-md-2 p-1 ">
							<div class="d-flex justify-content-center h-100 w-100 tsc-tr06s tsc-tr-top">
								<a href="" class=" z-2 ">
									<img class=" w-100 " src="./tsimg/qobon-social-whatsapp.svg" alt="">
								</a>
							</div>
						</div>
						<div class="col p-md-2 p-1 ">
							<div class="d-flex justify-content-center h-100 w-100 tsc-tr06s tsc-tr-top">
								<a href="" class=" z-2 ">
									<img class=" w-100 " src="./tsimg/qobon-social-x.svg" alt="">
								</a>
							</div>
						</div>
						<div class="col p-md-2 p-1 ">
							<div class="d-flex justify-content-center h-100 w-100 tsc-tr06s tsc-tr-top">
								<a href="" class=" z-2 ">
									<img class=" w-100 " src="./tsimg/qobon-social-pinterest.svg" alt="">
								</a>
							</div>
						</div>
						<div class="col p-md-2 p-1 ">
							<div class="d-flex justify-content-center h-100 w-100 tsc-tr06s tsc-tr-top">
								<a href="" class=" z-2 ">
									<img class=" w-100 " src="./tsimg/qobon-social-instagram.svg" alt="">
								</a>
							</div>
						</div>
						<div class="col p-md-2 p-1 ">
							<div class="d-flex justify-content-center h-100 w-100 tsc-tr06s tsc-tr-top">
								<a href="" class=" z-2 ">
									<img class=" w-100 " src="./tsimg/qobon-social-facebook.svg" alt="">
								</a>
							</div>
						</div>
						<div class="col p-md-2 p-1 ">
							<div class="d-flex justify-content-center h-100 w-100 tsc-tr06s tsc-tr-top">
								<a href="" class=" z-2 ">
									<img class=" w-100 " src="./tsimg/qonon-modal-box-share-icon.svg" alt="">
								</a>
							</div>
						</div>
						<div class="col p-md-2 p-1 ">
							<div class="d-flex justify-content-center">
								<a href="" class="d-flex justify-content-center tsc-cursorpointer tsc-tr06s tsc-tr-top">
									<img class=" w-100" src="./tsimg/qonon-modal-box-like-icon.svg" alt="">
								</a>
							</div>
						</div>
						<div class="col p-md-2 p-1">
							<div class=" d-flex justify-content-center tsc-tr06s tsc-tr-down">
								<a href="" class="d-flex justify-content-center tsc-cursorpointer">
									<img class="w-100" src="./tsimg/qonon-modal-box-dislike-icon.svg" alt="">
								</a>
							</div>

						</div>
					</div>


					<div class=" row  w-100 mt-md-5  mt-1">
						<div
							class=" d-flex justify-content-center  align-items-center py-md-3 py-2 px-md-3 px-1 bordr60 tsbg-bg5 position-relative ms-3 ms-3  ">
							<div class="d-flex justify-content-around gap-2 align-items-center w-100  ">
								<span class="TSFntBold tsfs-50 tscl-0 ">T0SM</span>
								<span></span>
							</div>
							<a href=""
								class="d-flex justify-content-center align-items-center position-absolute end-0 h-100 w-50 bordr60 tsbg-bg1 tsc-cursorpointer">
								<span class="TSFntRegular tsfs-34 tscl-F tsc-tr06s tsc-scale">نسخ الكوبون</span>
							</a>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>




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
	<br>
	<section id="tssection-tstopbnr" class="tsc-sec-tstopbnr tsbg-0 w-100 h-auto mt-5 py-md-5">
		<div class="container  py-md-4 px-md-0 px-4">
			<div class="row ">
				<div class="col-md-2 col-3 d-flex justify-content-start align-items-center p-0">
					<img class="col-9" src="./tsimg/qobon-qbndtls-temo.svg" alt="">
				</div>
				<div
					class="col-md-10 col-9 d-flex flex-column justify-content-center align-items-start p-0 py-md-0 py-3 gap-md-2 gap-0 ">
					<h1 class="tscl-text1">تيمو</h1>
					<p class="col-md-10 col-11 p1 tscl-F pe-md-5 pe-0 m-0  ">يقدم أحدث الملابس ومستلزمات المنزل والمزيد،
						مع مجموعة
						واسعة من الخيارات التي تناسب جميع الأذواق وتوفر جودة عالية بتصاميم عصرية تلبي احتياجات العائلة
						والمنزل.</p>
				</div>
			</div>
		</div>

	</section>
	<?php /* all qobon-details codes  */ ?>
	<section id="tssection-tsqbnslist" class="tsc-sec-tsqbnslist w-100 h-auto pt-md-5 pt-2 mt-md-3 mt-1">
		<div class="container  position-relative p-0 pt-2 px-md-0 px-4 ">
			<div class="row w-100 h-auto">
				<h3 class="tscl-0">كل أكواد تيمو</h3>
			</div>
		</div>
		<div class="container  position-relative p-0 pt-4  px-md-0 px-4 mt-md-5 mt-2">
			<div class="row row-cols-md-3 row-cols-1 pt-2 ">
				<div class="col p-0 px-1 mb-2 position-relative">
					<div class="w-100 h-100 Qobn_bg tsbgprobsetter"></div>
					<div class="d-flex position-absolute top-0 start-0 w-100 h-100">
						<div class="qbnCard_frst_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-1">
							<img class="col-5" src="./tsimg/qobon-qbndtls-temo-withcircle.svg" alt="">
							<div
								class=" bordr60  tsbg-main d-flex justify-content-center  align-items-center py-2 px-md-2 px-1 ">
								<div class="d-flex justify-content-between gap-md-2 gap-1 align-items-center w-100  ">
									<img class="qbn_type_icn" src="./tsimg/qobon-home-cats-discount-icon.svg" alt="">
									<span class="TSFntRegular tsfs-14 tscl-0 text-nowrap">خصم</span>
								</div>
							</div>
						</div>
						<div class="qbnCard_scnd_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-3">
							<div
								class="bordr60  tsbg-main d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1  px-md-3 px-2 ">
								<div class="d-flex justify-content-between  align-items-center w-100 ">

									<span class="TSFntBold tsfs-21 tscl-0 text-nowrap ">20%</span>
								</div>
							</div>
							<span class="TSFntMedium tsfs-18 text-nowrap">يشمل جميع المنتجات</span>
							<a href=""
								class="bordr60  tsbg-bg1 d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1 px-md-4 px-3 "
								data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<div class="d-flex justify-content-between  align-items-center w-100  ">

									<span class="TSFntRegular tsfs-16 tscl-F text-nowrap px-1 ">استخدم الكوبون</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col p-0 px-1 mb-2 position-relative">
					<div class="w-100 h-100 Qobn_bg tsbgprobsetter"></div>
					<div class="d-flex position-absolute top-0 start-0 w-100 h-100">
						<div class="qbnCard_frst_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-1">
							<img class="col-5" src="./tsimg/qobon-qbndtls-temo-withcircle.svg" alt="">
							<div
								class=" bordr60  tsbg-main d-flex justify-content-center  align-items-center py-2 px-md-2 px-1 ">
								<div class="d-flex justify-content-between gap-md-2 gap-1 align-items-center w-100  ">
									<img class="qbn_type_icn" src="./tsimg/qobon-home-cats-discount-icon.svg" alt="">
									<span class="TSFntRegular tsfs-14 tscl-0 text-nowrap">خصم</span>
								</div>
							</div>
						</div>
						<div class="qbnCard_scnd_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-3">
							<div
								class="bordr60  tsbg-main d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1  px-md-3 px-2 ">
								<div class="d-flex justify-content-between  align-items-center w-100 ">

									<span class="TSFntBold tsfs-21 tscl-0 text-nowrap ">20%</span>
								</div>
							</div>
							<span class="TSFntMedium tsfs-18 text-nowrap">يشمل جميع المنتجات</span>
							<a href=""
								class="bordr60  tsbg-bg1 d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1 px-md-4 px-3 "
								data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<div class="d-flex justify-content-between  align-items-center w-100  ">

									<span class="TSFntRegular tsfs-16 tscl-F text-nowrap px-1 ">استخدم الكوبون</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col p-0 px-1 mb-2 position-relative">
					<div class="w-100 h-100 Qobn_bg tsbgprobsetter"></div>
					<div class="d-flex position-absolute top-0 start-0 w-100 h-100">
						<div class="qbnCard_frst_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-1">
							<img class="col-5" src="./tsimg/qobon-qbndtls-temo-withcircle.svg" alt="">
							<div
								class=" bordr60  tsbg-main d-flex justify-content-center  align-items-center py-2 px-md-2 px-1 ">
								<div class="d-flex justify-content-between gap-md-2 gap-1 align-items-center w-100  ">
									<img class="qbn_type_icn" src="./tsimg/qobon-home-cats-discount-icon.svg" alt="">
									<span class="TSFntRegular tsfs-14 tscl-0 text-nowrap">خصم</span>
								</div>
							</div>
						</div>
						<div class="qbnCard_scnd_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-3">
							<div
								class="bordr60  tsbg-main d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1  px-md-3 px-2 ">
								<div class="d-flex justify-content-between  align-items-center w-100 ">

									<span class="TSFntBold tsfs-21 tscl-0 text-nowrap ">20%</span>
								</div>
							</div>
							<span class="TSFntMedium tsfs-18 text-nowrap">يشمل جميع المنتجات</span>
							<a href=""
								class="bordr60  tsbg-bg1 d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1 px-md-4 px-3 "
								data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<div class="d-flex justify-content-between  align-items-center w-100  ">

									<span class="TSFntRegular tsfs-16 tscl-F text-nowrap px-1 ">استخدم الكوبون</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col p-0 px-1 mb-2 position-relative">
					<div class="w-100 h-100 Qobn_bg tsbgprobsetter"></div>
					<div class="d-flex position-absolute top-0 start-0 w-100 h-100">
						<div class="qbnCard_frst_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-1">
							<img class="col-5" src="./tsimg/qobon-qbndtls-temo-withcircle.svg" alt="">
							<div
								class=" bordr60  tsbg-main d-flex justify-content-center  align-items-center py-2 px-md-2 px-1 ">
								<div class="d-flex justify-content-between gap-md-2 gap-1 align-items-center w-100  ">
									<img class="qbn_type_icn" src="./tsimg/qobon-home-cats-discount-icon.svg" alt="">
									<span class="TSFntRegular tsfs-14 tscl-0 text-nowrap">خصم</span>
								</div>
							</div>
						</div>
						<div class="qbnCard_scnd_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-3">
							<div
								class="bordr60  tsbg-main d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1  px-md-3 px-2 ">
								<div class="d-flex justify-content-between  align-items-center w-100 ">

									<span class="TSFntBold tsfs-21 tscl-0 text-nowrap ">20%</span>
								</div>
							</div>
							<span class="TSFntMedium tsfs-18 text-nowrap">يشمل جميع المنتجات</span>
							<a href=""
								class="bordr60  tsbg-bg1 d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1 px-md-4 px-3 "
								data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<div class="d-flex justify-content-between  align-items-center w-100  ">

									<span class="TSFntRegular tsfs-16 tscl-F text-nowrap px-1 ">استخدم الكوبون</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col p-0 px-1 mb-2 position-relative">
					<div class="w-100 h-100 Qobn_bg tsbgprobsetter"></div>
					<div class="d-flex position-absolute top-0 start-0 w-100 h-100">
						<div class="qbnCard_frst_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-1">
							<img class="col-5" src="./tsimg/qobon-qbndtls-temo-withcircle.svg" alt="">
							<div
								class=" bordr60  tsbg-main d-flex justify-content-center  align-items-center py-2 px-md-2 px-1 ">
								<div class="d-flex justify-content-between gap-md-2 gap-1 align-items-center w-100  ">
									<img class="qbn_type_icn" src="./tsimg/qobon-home-cats-discount-icon.svg" alt="">
									<span class="TSFntRegular tsfs-14 tscl-0 text-nowrap">خصم</span>
								</div>
							</div>
						</div>
						<div class="qbnCard_scnd_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-3">
							<div
								class="bordr60  tsbg-main d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1  px-md-3 px-2 ">
								<div class="d-flex justify-content-between  align-items-center w-100 ">

									<span class="TSFntBold tsfs-21 tscl-0 text-nowrap ">20%</span>
								</div>
							</div>
							<span class="TSFntMedium tsfs-18 text-nowrap">يشمل جميع المنتجات</span>
							<a href=""
								class="bordr60  tsbg-bg1 d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1 px-md-4 px-3 "
								data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<div class="d-flex justify-content-between  align-items-center w-100  ">

									<span class="TSFntRegular tsfs-16 tscl-F text-nowrap px-1 ">استخدم الكوبون</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col p-0 px-1 mb-2 position-relative">
					<div class="w-100 h-100 Qobn_bg tsbgprobsetter"></div>
					<div class="d-flex position-absolute top-0 start-0 w-100 h-100">
						<div class="qbnCard_frst_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-1">
							<img class="col-5" src="./tsimg/qobon-qbndtls-temo-withcircle.svg" alt="">
							<div
								class=" bordr60  tsbg-main d-flex justify-content-center  align-items-center py-2 px-md-2 px-1 ">
								<div class="d-flex justify-content-between gap-md-2 gap-1 align-items-center w-100  ">
									<img class="qbn_type_icn" src="./tsimg/qobon-home-cats-discount-icon.svg" alt="">
									<span class="TSFntRegular tsfs-14 tscl-0 text-nowrap">خصم</span>
								</div>
							</div>
						</div>
						<div class="qbnCard_scnd_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-3">
							<div
								class="bordr60  tsbg-main d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1  px-md-3 px-2 ">
								<div class="d-flex justify-content-between  align-items-center w-100 ">

									<span class="TSFntBold tsfs-21 tscl-0 text-nowrap ">20%</span>
								</div>
							</div>
							<span class="TSFntMedium tsfs-18 text-nowrap">يشمل جميع المنتجات</span>
							<a href=""
								class="bordr60  tsbg-bg1 d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1 px-md-4 px-3 "
								data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<div class="d-flex justify-content-between  align-items-center w-100  ">

									<span class="TSFntRegular tsfs-16 tscl-F text-nowrap px-1 ">استخدم الكوبون</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col p-0 px-1 mb-2 position-relative">
					<div class="w-100 h-100 Qobn_bg tsbgprobsetter"></div>
					<div class="d-flex position-absolute top-0 start-0 w-100 h-100">
						<div class="qbnCard_frst_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-1">
							<img class="col-5" src="./tsimg/qobon-qbndtls-temo-withcircle.svg" alt="">
							<div
								class=" bordr60  tsbg-main d-flex justify-content-center  align-items-center py-2 px-md-2 px-1 ">
								<div class="d-flex justify-content-between gap-md-2 gap-1 align-items-center w-100  ">
									<img class="qbn_type_icn" src="./tsimg/qobon-home-cats-discount-icon.svg" alt="">
									<span class="TSFntRegular tsfs-14 tscl-0 text-nowrap">خصم</span>
								</div>
							</div>
						</div>
						<div class="qbnCard_scnd_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-3">
							<div
								class="bordr60  tsbg-main d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1  px-md-3 px-2 ">
								<div class="d-flex justify-content-between  align-items-center w-100 ">

									<span class="TSFntBold tsfs-21 tscl-0 text-nowrap ">20%</span>
								</div>
							</div>
							<span class="TSFntMedium tsfs-18 text-nowrap">يشمل جميع المنتجات</span>
							<a href=""
								class="bordr60  tsbg-bg1 d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1 px-md-4 px-3 "
								data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<div class="d-flex justify-content-between  align-items-center w-100  ">

									<span class="TSFntRegular tsfs-16 tscl-F text-nowrap px-1 ">استخدم الكوبون</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col p-0 px-1 mb-2 position-relative">
					<div class="w-100 h-100 Qobn_bg tsbgprobsetter"></div>
					<div class="d-flex position-absolute top-0 start-0 w-100 h-100">
						<div class="qbnCard_frst_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-1">
							<img class="col-5" src="./tsimg/qobon-qbndtls-temo-withcircle.svg" alt="">
							<div
								class=" bordr60  tsbg-main d-flex justify-content-center  align-items-center py-2 px-md-2 px-1 ">
								<div class="d-flex justify-content-between gap-md-2 gap-1 align-items-center w-100  ">
									<img class="qbn_type_icn" src="./tsimg/qobon-home-cats-discount-icon.svg" alt="">
									<span class="TSFntRegular tsfs-14 tscl-0 text-nowrap">خصم</span>
								</div>
							</div>
						</div>
						<div class="qbnCard_scnd_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-3">
							<div
								class="bordr60  tsbg-main d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1  px-md-3 px-2 ">
								<div class="d-flex justify-content-between  align-items-center w-100 ">

									<span class="TSFntBold tsfs-21 tscl-0 text-nowrap ">20%</span>
								</div>
							</div>
							<span class="TSFntMedium tsfs-18 text-nowrap">يشمل جميع المنتجات</span>
							<a href=""
								class="bordr60  tsbg-bg1 d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1 px-md-4 px-3 "
								data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<div class="d-flex justify-content-between  align-items-center w-100  ">

									<span class="TSFntRegular tsfs-16 tscl-F text-nowrap px-1 ">استخدم الكوبون</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col p-0 px-1 mb-2 position-relative">
					<div class="w-100 h-100 Qobn_bg tsbgprobsetter"></div>
					<div class="d-flex position-absolute top-0 start-0 w-100 h-100">
						<div class="qbnCard_frst_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-1">
							<img class="col-5" src="./tsimg/qobon-qbndtls-temo-withcircle.svg" alt="">
							<div
								class=" bordr60  tsbg-main d-flex justify-content-center  align-items-center py-2 px-md-2 px-1 ">
								<div class="d-flex justify-content-between gap-md-2 gap-1 align-items-center w-100  ">
									<img class="qbn_type_icn" src="./tsimg/qobon-home-cats-discount-icon.svg" alt="">
									<span class="TSFntRegular tsfs-14 tscl-0 text-nowrap">خصم</span>
								</div>
							</div>
						</div>
						<div class="qbnCard_scnd_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-3">
							<div
								class="bordr60  tsbg-main d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1  px-md-3 px-2 ">
								<div class="d-flex justify-content-between  align-items-center w-100 ">

									<span class="TSFntBold tsfs-21 tscl-0 text-nowrap ">20%</span>
								</div>
							</div>
							<span class="TSFntMedium tsfs-18 text-nowrap">يشمل جميع المنتجات</span>
							<a href=""
								class="bordr60  tsbg-bg1 d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1 px-md-4 px-3 "
								data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<div class="d-flex justify-content-between  align-items-center w-100  ">

									<span class="TSFntRegular tsfs-16 tscl-F text-nowrap px-1 ">استخدم الكوبون</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col p-0 px-1 mb-2 position-relative">
					<div class="w-100 h-100 Qobn_bg tsbgprobsetter"></div>
					<div class="d-flex position-absolute top-0 start-0 w-100 h-100">
						<div class="qbnCard_frst_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-1">
							<img class="col-5" src="./tsimg/qobon-qbndtls-temo-withcircle.svg" alt="">
							<div
								class=" bordr60  tsbg-main d-flex justify-content-center  align-items-center py-2 px-md-2 px-1 ">
								<div class="d-flex justify-content-between gap-md-2 gap-1 align-items-center w-100  ">
									<img class="qbn_type_icn" src="./tsimg/qobon-home-cats-discount-icon.svg" alt="">
									<span class="TSFntRegular tsfs-14 tscl-0 text-nowrap">خصم</span>
								</div>
							</div>
						</div>
						<div class="qbnCard_scnd_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-3">
							<div
								class="bordr60  tsbg-main d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1  px-md-3 px-2 ">
								<div class="d-flex justify-content-between  align-items-center w-100 ">

									<span class="TSFntBold tsfs-21 tscl-0 text-nowrap ">20%</span>
								</div>
							</div>
							<span class="TSFntMedium tsfs-18 text-nowrap">يشمل جميع المنتجات</span>
							<a href=""
								class="bordr60  tsbg-bg1 d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1 px-md-4 px-3 "
								data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<div class="d-flex justify-content-between  align-items-center w-100  ">

									<span class="TSFntRegular tsfs-16 tscl-F text-nowrap px-1 ">استخدم الكوبون</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col p-0 px-1 mb-2 position-relative">
					<div class="w-100 h-100 Qobn_bg tsbgprobsetter"></div>
					<div class="d-flex position-absolute top-0 start-0 w-100 h-100">
						<div class="qbnCard_frst_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-1">
							<img class="col-5" src="./tsimg/qobon-qbndtls-temo-withcircle.svg" alt="">
							<div
								class=" bordr60  tsbg-main d-flex justify-content-center  align-items-center py-2 px-md-2 px-1 ">
								<div class="d-flex justify-content-between gap-md-2 gap-1 align-items-center w-100  ">
									<img class="qbn_type_icn" src="./tsimg/qobon-home-cats-discount-icon.svg" alt="">
									<span class="TSFntRegular tsfs-14 tscl-0 text-nowrap">خصم</span>
								</div>
							</div>
						</div>
						<div class="qbnCard_scnd_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-3">
							<div
								class="bordr60  tsbg-main d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1  px-md-3 px-2 ">
								<div class="d-flex justify-content-between  align-items-center w-100 ">

									<span class="TSFntBold tsfs-21 tscl-0 text-nowrap ">20%</span>
								</div>
							</div>
							<span class="TSFntMedium tsfs-18 text-nowrap">يشمل جميع المنتجات</span>
							<a href=""
								class="bordr60  tsbg-bg1 d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1 px-md-4 px-3 "
								data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<div class="d-flex justify-content-between  align-items-center w-100  ">

									<span class="TSFntRegular tsfs-16 tscl-F text-nowrap px-1 ">استخدم الكوبون</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col p-0 px-1 mb-2 position-relative">
					<div class="w-100 h-100 Qobn_bg tsbgprobsetter"></div>
					<div class="d-flex position-absolute top-0 start-0 w-100 h-100">
						<div class="qbnCard_frst_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-1">
							<img class="col-5" src="./tsimg/qobon-qbndtls-temo-withcircle.svg" alt="">
							<div
								class=" bordr60  tsbg-main d-flex justify-content-center  align-items-center py-2 px-md-2 px-1 ">
								<div class="d-flex justify-content-between gap-md-2 gap-1 align-items-center w-100  ">
									<img class="qbn_type_icn" src="./tsimg/qobon-home-cats-discount-icon.svg" alt="">
									<span class="TSFntRegular tsfs-14 tscl-0 text-nowrap">خصم</span>
								</div>
							</div>
						</div>
						<div class="qbnCard_scnd_prt d-flex flex-column justify-content-center align-items-center gap-md-2 gap-3">
							<div
								class="bordr60  tsbg-main d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1  px-md-3 px-2 ">
								<div class="d-flex justify-content-between  align-items-center w-100 ">

									<span class="TSFntBold tsfs-21 tscl-0 text-nowrap ">20%</span>
								</div>
							</div>
							<span class="TSFntMedium tsfs-18 text-nowrap">يشمل جميع المنتجات</span>
							<a href=""
								class="bordr60  tsbg-bg1 d-flex justify-content-center  align-items-center gap-2 position-relative py-md-2 py-1 px-md-4 px-3 "
								data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<div class="d-flex justify-content-between  align-items-center w-100  ">

									<span class="TSFntRegular tsfs-16 tscl-F text-nowrap px-1 ">استخدم الكوبون</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<?php /* pagination */ ?>
			<div class="tspgngBlk text-center my-5 paginate">
				<nav>
					<ul id="tssection-ts_pagination" class="pagination d-flex w-100 h-auto justify-content-center align-items-center gap-2 mt-5" data-tsoutid="tssection-tspstslist_ajx" data-tscurpg="1">
						<li class="pg_num bordrRds50 border tsc-cursorpointer  d-flex justify-content-center align-items-center px-md-0 px-2 py-md-0 py-2  active_bg_black ">
							<a class="TSFntMedium tsfs-18" data-tspage="1" href="#">1</a>
						</li>
						<li class="pg_num bordrRds50 border tsc-cursorpointer  d-flex justify-content-center align-items-center px-md-0 px-2 py-md-0 py-2  ">
							<a class="TSFntMedium tsfs-18" data-tspage="2" href="">2</a>
						</li>
						<li class="pg_num bordrRds50 border tsc-cursorpointer  d-flex justify-content-center align-items-center px-md-0 px-2 py-md-0 py-2  ">
							<a class="TSFntMedium tsfs-18" data-tspage="2" href="">3</a>
						</li>
						<li class="pg_num bordrRds50 border tsc-cursorpointer  d-flex justify-content-center align-items-center px-md-0 px-2 py-md-0 py-2  ">
							<a class="TSFntMedium tsfs-18" data-tspage="2" href="">4</a>
						</li>
						<li class="nxt_pgsNms bordrRds50 tsbg-main tsc-cursorpointer  d-flex justify-content-center align-items-center px-md-0 px-2 py-md-0 py-2 ">
							<a class="next TSFntMedium tsfs-18" data-tspage="2" href=""><i class="fas position-relative tsfs-15 fa-chevron-left fa-1x"></i></a>
						</li>
					</ul>
				</nav>
			</div>


	</section>

	<?php /* related posts  */ ?>
	<section id="tssection-tsrelpsts" class="tsc-sec-tsrelpsts w-100 h-auto mt-md-5 pt-md-5 pt-2">
		<div class="container px-md-0 px-4 mt-md-5 mt-2">
			<div class="row w-100 h-auto">
				<h3 class="tscl-0">مقالات ذات صلة</h3>
			</div>
		</div>
		<div class="container p-0 px-md-0 px-4">

			<div class="owl-carousel owl-theme SliderX  mt-md-5 mt-4 text-nowrap ">
				<div class="tsitem  w-100 position-relative overflow-hidden bordrRds22">
					<div class="h-100 w-100 position-relative tsbg-card-bg ">
						<div class="d-flex flex-column">
							<img src="./tsimg/qobon-home-blogs-blogimg.jpg" alt="">
							<div class="px-4 h-100 pt-2">
								<span class="TSFntRegular tsfs-16 tscl-text2 ">November 18, 2024</span>
								<h4 class="tscl-0 text-wrap">الغاية هي الشكل وليس المحتوى</h4>
								<p class=" col-11 p4 tscl-0 text-wrap  tsc-text-justify text-start">هناك حقيقة مثبتة
									منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل
									الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة
									لوريم إيبسوم لأنها تعطي توزيعاَ</p>
							</div>
							<div class="gt-mor-btn pt-2 px-2 w-100 pb-2">
								<a href="./tspstdtls.php"
									class="d-flex justify-content-center  align-items-center bordr30  tsbg-0 py-2  ">
									<span class="TSFntMedium tsfs-21 tscl-F text-nowrap py-md-2 py-1">اعرض المزيد</span>
								</a>
							</div>

						</div>
						<div
							class="d-flex justify-content-center align-items-center gap-2 bordr60 tsbg-main py-1 px-md-3 px-2 position-absolute top-0 end-0 me-2 mt-2">
							<div class="d-flex justify-content-between  align-items-center w-100  ">

								<span class="TSFntRegular tsfs-22 tscl-0 text-nowrap ">توفير</span>
							</div>
						</div>
					</div>
				</div>
				<div class="tsitem  w-100 position-relative overflow-hidden bordrRds22">
					<div class="h-100 w-100 position-relative tsbg-card-bg ">
						<div class="d-flex flex-column">
							<img src="./tsimg/qobon-home-blogs-blogimg.jpg" alt="">
							<div class="px-4 h-100 pt-2">
								<span class="TSFntRegular tsfs-16 tscl-text2 ">November 18, 2024</span>
								<h4 class="tscl-0 text-wrap">الغاية هي الشكل وليس المحتوى</h4>
								<p class=" col-11 p4 tscl-0 text-wrap  tsc-text-justify text-start">هناك حقيقة مثبتة
									منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل
									الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة
									لوريم إيبسوم لأنها تعطي توزيعاَ</p>
							</div>
							<div class="gt-mor-btn pt-2 px-2 w-100 pb-2">
								<a href="./tspstdtls.php"
									class="d-flex justify-content-center  align-items-center bordr30  tsbg-0 py-2  ">
									<span class="TSFntMedium tsfs-21 tscl-F text-nowrap py-md-2 py-1">اعرض المزيد</span>
								</a>
							</div>

						</div>
						<div
							class="d-flex justify-content-center align-items-center gap-2 bordr60 tsbg-main py-1 px-md-3 px-2 position-absolute top-0 end-0 me-2 mt-2">
							<div class="d-flex justify-content-between  align-items-center w-100  ">

								<span class="TSFntRegular tsfs-22 tscl-0 text-nowrap ">توفير</span>
							</div>
						</div>
					</div>
				</div>
				<div class="tsitem  w-100 position-relative overflow-hidden bordrRds22">
					<div class="h-100 w-100 position-relative tsbg-card-bg ">
						<div class="d-flex flex-column">
							<img src="./tsimg/qobon-home-blogs-blogimg.jpg" alt="">
							<div class="px-4 h-100 pt-2">
								<span class="TSFntRegular tsfs-16 tscl-text2 ">November 18, 2024</span>
								<h4 class="tscl-0 text-wrap">الغاية هي الشكل وليس المحتوى</h4>
								<p class=" col-11 p4 tscl-0 text-wrap  tsc-text-justify text-start">هناك حقيقة مثبتة
									منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل
									الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة
									لوريم إيبسوم لأنها تعطي توزيعاَ</p>
							</div>
							<div class="gt-mor-btn pt-2 px-2 w-100 pb-2">
								<a href="./tspstdtls.php"
									class="d-flex justify-content-center  align-items-center bordr30  tsbg-0 py-2  ">
									<span class="TSFntMedium tsfs-21 tscl-F text-nowrap py-md-2 py-1">اعرض المزيد</span>
								</a>
							</div>

						</div>
						<div
							class="d-flex justify-content-center align-items-center gap-2 bordr60 tsbg-main py-1 px-md-3 px-2 position-absolute top-0 end-0 me-2 mt-2">
							<div class="d-flex justify-content-between  align-items-center w-100  ">

								<span class="TSFntRegular tsfs-22 tscl-0 text-nowrap ">توفير</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php /* FAQS  */ ?>
	<section id="tssection-tsfaqs" class="tsc-sec-tsfa	qs w-100 h-auto mt-md-5 pt-md-5 pt-2">
		<div class="container px-md-0 px-4 mt-md-5 mt-2">
			<div class="row w-100 h-auto">
				<h3 class="tscl-0">الاسئلة الشائعة</h3>
			</div>
		</div>

		<div class="container my-md-5 my-3 py-md-4 py-2">
			<?php /* !!! Note that each question when clicked on button it target defrent collapsed area */ ?>
			<?php /* first question */ ?>
			<div class="accordion mt-3" id="faqAccordion">
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button collapsed px-5" type="button" data-bs-toggle="collapse"
							data-bs-target="#collapseOne">
							<span class="TSFntSemiBold tsfs-26 tscl-0">هل يمكنني استخدام أكثر من كوبون في نفس
								الطلب؟</span>
						</button>
					</h2>
					<div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
						<div class="accordion-body">
							<p class="p1 col-11 px-4">
								للتحقق من حالة الكوبون، يمكنك زيارة صفحة "مشترياتي" في حسابك على قوبون. هناك ستجد
								قائمة بجميع الكوبونات التي تم استخدامها أو تلك التي لا تزال سارية. إذا كنت بحاجة إلى
								مزيد من المساعدة، يمكنك أيضًا التواصل مع فريق الدعم لدينا للحصول على تفاصيل إضافية.
								للتحقق من حالة الكوبون، يمكنك زيارة صفحة "مشترياتي" في حسابك على قوبون. هناك ستجد
								قائمة بجميع الكوبونات التي تم استخدامها أو تلك التي لا تزال سارية. إذا كنت بحاجة إلى
								مزيد من المساعدة، يمكنك أيضًا التواصل مع فريق الدعم لدينا للحصول على تفاصيل إضافية.
							</p>
						</div>
					</div>
				</div>
			</div>
			<?php /* second question */ ?>
			<div class="accordion mt-3" id="faqAccordion">
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button collapsed px-5" type="button" data-bs-toggle="collapse"
							data-bs-target="#collapseTwo">
							<span class="TSFntSemiBold tsfs-26 tscl-0">هل يمكنني استخدام أكثر من كوبون في نفس
								الطلب؟</span>
						</button>
					</h2>
					<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
						<div class="accordion-body">
							<p class="p1 col-11 px-4">
								للتحقق من حالة الكوبون، يمكنك زيارة صفحة "مشترياتي" في حسابك على قوبون. هناك ستجد
								قائمة بجميع الكوبونات التي تم استخدامها أو تلك التي لا تزال سارية. إذا كنت بحاجة إلى
								مزيد من المساعدة، يمكنك أيضًا التواصل مع فريق الدعم لدينا للحصول على تفاصيل إضافية.
							</p>
						</div>
					</div>
				</div>
			</div>
			<?php /* third question */ ?>
			<div class="accordion mt-3" id="faqAccordion">
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button collapsed px-5" type="button" data-bs-toggle="collapse"
							data-bs-target="#collapsefoure">
							<span class="TSFntSemiBold tsfs-26 tscl-0">هل يمكنني استخدام أكثر من كوبون في نفس
								الطلب؟</span>
						</button>
					</h2>
					<div id="collapsefoure" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
						<div class="accordion-body">
							<p class="p1 col-11 px-4">
								للتحقق من حالة الكوبون، يمكنك زيارة صفحة "مشترياتي" في حسابك على قوبون. هناك ستجد
								قائمة بجميع الكوبونات التي تم استخدامها أو تلك التي لا تزال سارية. إذا كنت بحاجة إلى
								مزيد من المساعدة، يمكنك أيضًا التواصل مع فريق الدعم لدينا للحصول على تفاصيل إضافية.
							</p>

						</div>
					</div>
				</div>
			</div>
			<?php /* fourth question */ ?>
			<div class="accordion mt-3" id="faqAccordion">
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button collapsed px-5" type="button" data-bs-toggle="collapse"
							data-bs-target="#collapsethree">
							<span class="TSFntSemiBold tsfs-26 tscl-0">هل يمكنني استخدام أكثر من كوبون في نفس
								الطلب؟</span>
						</button>
					</h2>
					<div id="collapsethree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
						<div class="accordion-body">
							<p class="p1 col-11 px-4">
								للتحقق من حالة الكوبون، يمكنك زيارة صفحة "مشترياتي" في حسابك على قوبون. هناك ستجد
								قائمة بجميع الكوبونات التي تم استخدامها أو تلك التي لا تزال سارية. إذا كنت بحاجة إلى
								مزيد من المساعدة، يمكنك أيضًا التواصل مع فريق الدعم لدينا للحصول على تفاصيل إضافية.
							</p>

						</div>
					</div>
				</div>
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
	<script>
		(function($) {
			$(document).ready(function() {
				$._tsslsp_tsrelpsts = 9000;
				$._tsslof_tsrelpsts = true;
			});
		})(jQuery);
	</script>
	<script src="./tsjs/tsfldr/tsjs_main.min.js"></script>
<script src="./tsjs/tsfldr/tsjssearch.min.js"></script>
	<script src="./000_tschanges/tsjsfunccaller.min.js"></script>	<script src="./000_tschanges/Test.min.js"></script>


</body>

</html>