<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rumah Sakit &amp; Umum Islam Kustati</title>
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awsome-all.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <?php require_once
        'assets/include/header.php';
    ?>


    <!-- breadcrumb area -->
    <div class="breadcrumb-area" style="background-image: url('assets/images/breadcrumb.png');">
        <div class="container">
            <div class="row justify-content-center">
                <nav aria-label="breadcrumb">
                    <h2 class="page-title">Meet Our Specialists
                    </h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">doctor</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <!-- team area -->
    <div class="team-area doc-team-area padding-top-115 padding-bottom-40">
        <div class="container">
            <div class="row margin-bottom-30">
                <div class="col-lg-12">
                    <div class="button-group filter-button-group">
                        <button class="active" data-filter="*">Semua Dokter</button>
                        <button data-filter=".cardio">Umum</button>
                        <button data-filter=".den">Gigi</button>
                        <button data-filter=".neu">Orthopedi</button>
                        <button data-filter=".ped">THT</button>
                        <button data-filter=".pol">Pulmonary</button>
                    </div>
                </div>
            </div>

            <script>
                // Select all buttons in the group
                const buttons = document.querySelectorAll('.filter-button-group button');

                // Add click event listener to each button
                buttons.forEach(button => {
                    button.addEventListener('click', () => {
                        // Remove the 'active' class from all buttons
                        buttons.forEach(btn => btn.classList.remove('active'));

                        // Add the 'active' class to the clicked button
                        button.classList.add('active');
                    });
                });
            </script>
            <div class="row justify-content-center grid">
                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 grid-item neu ped pol margin-bottom-30">
                    <div class="single-team">
                        <div class="img-box">
                            <img src="assets/images/team1.png" alt="">
                        </div>
                        <div class="cont-box">
                            <div class="social-links">
                                <a href="#"><span><i class="icofont-twitter"></i></span></a>
                                <a href="#"><span><i class="icofont-facebook"></i></span></a>
                                <a href="#"><span><i class="icofont-instagram"></i></span></a>
                            </div>
                            <h4 class="margin-top-10"><a href="doctor-single.php">Dr. jessica brown</a></h4>
                            <a href="doctor-single.php"> <span class="desig margin-top-10">Restorative
                                    Dentist</span></a>
                            <a href="doctor-single.php" class="link margin-top-10">Baca Selengkapnya <span><i
                                        class="icofont-simple-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 grid-item cardio  ped pol margin-bottom-30">
                    <div class="single-team">
                        <div class="img-box">
                            <img src="assets/images/team2.png" alt="">
                        </div>
                        <div class="cont-box">
                            <div class="social-links">
                                <a href="#"><span><i class="icofont-twitter"></i></span></a>
                                <a href="#"><span><i class="icofont-facebook"></i></span></a>
                                <a href="#"><span><i class="icofont-instagram"></i></span></a>
                            </div>
                            <h4 class="margin-top-10"><a href="doctor-single.php">Dr. Fessica brown</a></h4>
                            <a href="doctor-single.php"> <span class="desig margin-top-10">Restorative
                                    Dentist</span></a>
                            <a href="doctor-single.php" class="link margin-top-10">Baca Selengkapnya <span><i
                                        class="icofont-simple-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 grid-item cardio den neu margin-bottom-30">
                    <div class="single-team">
                        <div class="img-box">
                            <img src="assets/images/team3.png" alt="">
                        </div>
                        <div class="cont-box">
                            <div class="social-links">
                                <a href="#"><span><i class="icofont-twitter"></i></span></a>
                                <a href="#"><span><i class="icofont-facebook"></i></span></a>
                                <a href="#"><span><i class="icofont-instagram"></i></span></a>
                            </div>
                            <h4 class="margin-top-10"><a href="doctor-single.php">Dr. leopart brown</a></h4>
                            <a href="doctor-single.php"> <span class="desig margin-top-10">Restorative
                                    Dentist</span></a>
                            <a href="doctor-single.php" class="link margin-top-10">Baca Selengkapnya <span><i
                                        class="icofont-simple-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 grid-item  neu ped pol margin-bottom-30">
                    <div class="single-team">
                        <div class="img-box">
                            <img src="assets/images/team4.png" alt="">
                        </div>
                        <div class="cont-box">
                            <div class="social-links">
                                <a href="#"><span><i class="icofont-twitter"></i></span></a>
                                <a href="#"><span><i class="icofont-facebook"></i></span></a>
                                <a href="#"><span><i class="icofont-instagram"></i></span></a>
                            </div>
                            <h4 class="margin-top-10"><a href="doctor-single.php">Dr. norein brown</a></h4>
                            <a href="doctor-single.php"> <span class="desig margin-top-10">Restorative
                                    Dentist</span></a>
                            <a href="doctor-single.php" class="link margin-top-10">Baca Selengkapnya <span><i
                                        class="icofont-simple-right"></i></span></a>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 grid-item cardio den  pol margin-bottom-30">
                    <div class="single-team">
                        <div class="img-box">
                            <img src="assets/images/team01.png" alt="">
                        </div>
                        <div class="cont-box">
                            <div class="social-links">
                                <a href="#"><span><i class="icofont-twitter"></i></span></a>
                                <a href="#"><span><i class="icofont-facebook"></i></span></a>
                                <a href="#"><span><i class="icofont-instagram"></i></span></a>
                            </div>
                            <h4 class="margin-top-10"><a href="doctor-single.php">Dr. adam bill</a></h4>
                            <a href="doctor-single.php"> <span class="desig margin-top-10">Restorative
                                    Dentist</span></a>
                            <a href="doctor-single.php" class="link margin-top-10">Baca Selengkapnya <span><i
                                        class="icofont-simple-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 grid-item neu ped pol margin-bottom-30">
                    <div class="single-team">
                        <div class="img-box">
                            <img src="assets/images/team02.png" alt="">
                        </div>
                        <div class="cont-box">
                            <div class="social-links">
                                <a href="#"><span><i class="icofont-twitter"></i></span></a>
                                <a href="#"><span><i class="icofont-facebook"></i></span></a>
                                <a href="#"><span><i class="icofont-instagram"></i></span></a>
                            </div>
                            <h4 class="margin-top-10"><a href="doctor-single.php">Dr. denzel brown</a></h4>
                            <a href="doctor-single.php"> <span class="desig margin-top-10">Restorative
                                    Dentist</span></a>
                            <a href="doctor-single.php" class="link margin-top-10">Baca Selengkapnya <span><i
                                        class="icofont-simple-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 grid-item  neu ped pol margin-bottom-30">
                    <div class="single-team">
                        <div class="img-box">
                            <img src="assets/images/team03.png" alt="">
                        </div>
                        <div class="cont-box">
                            <div class="social-links">
                                <a href="#"><span><i class="icofont-twitter"></i></span></a>
                                <a href="#"><span><i class="icofont-facebook"></i></span></a>
                                <a href="#"><span><i class="icofont-instagram"></i></span></a>
                            </div>
                            <h4 class="margin-top-10"><a href="doctor-single.php">Dr. israt brown</a></h4>
                            <a href="doctor-single.php"> <span class="desig margin-top-10">Restorative
                                    Dentist</span></a>
                            <a href="doctor-single.php" class="link margin-top-10">Baca Selengkapnya <span><i
                                        class="icofont-simple-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 grid-item  ped pol margin-bottom-30">
                    <div class="single-team">
                        <div class="img-box">
                            <img src="assets/images/team04.png" alt="">
                        </div>
                        <div class="cont-box">
                            <div class="social-links">
                                <a href="#"><span><i class="icofont-twitter"></i></span></a>
                                <a href="#"><span><i class="icofont-facebook"></i></span></a>
                                <a href="#"><span><i class="icofont-instagram"></i></span></a>
                            </div>
                            <h4 class="margin-top-10"><a href="doctor-single.php">Dr.labrica brown</a></h4>
                            <a href="doctor-single.php"> <span class="desig margin-top-10">Restorative
                                    Dentist</span></a>
                            <a href="doctor-singphp" class="link margin-top-10">Baca Selengkapnya <span><i
                                        class="icofont-simple-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include('assets/include/sub_area.php'); ?>


    <?php include('assets/include/footer.php'); ?>


    <!-- scroll to up -->
    <div class="scrollup"><i class="fas fa-angle-double-up"></i></div>


    <!-- Javascript Files -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/counterup.min.js"></script>
    <script src="assets/js/vendor/jquery.meanmenu.min.js"></script>
    <script src="assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="assets/js/vendor/waypoints.min.js"></script>
    <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendor/easing.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>