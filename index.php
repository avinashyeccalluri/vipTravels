<!-- including files -->


<!-- ends including files -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <!-- font links -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500&display=swap" rel="stylesheet"> 
    <!-- fonr link ends -->
    <script
            src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous">
    </script>
    <!-- Animation on scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Animation on scroll ends -->
    <!-- Animate css -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <!-- semantic ui -->
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"
    /> -->
    <!-- semantic ui ends here ...\-->
    <!-- Animate css ends -->
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Luckiest+Guy&family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet"> 
    <!-- google fonts ends-->
    <script src="./app.js"></script>
    <title>VIP TRAVELS</title>
</head>
<body>
    <?php @include('./header.php'); ?>
    <section id="landing-page" class="landing-page">
        <div class="container">
            <div class="landing-page-heading animate__animated  animate__slideInDown" style="font-family: 'Bangers', cursive;">FIND THE BEST CAR</div>
            <div class="landing-page-sub-heading animate__animated animate__zoomIn animate__delay-1s" style="font-family: 'Luckiest Guy', cursive;" >TO TRAVEL IN AND FROM VELLORE</div>
        </div>
    </section>
    <section class="select-ride pt-2" id="select-ride">
        <div class="container">
            <div class="heading">Select your ride</div>
            <div class="tariff" style="font-style: italic;">
                <div class="car-tariff" data-aos="fade-right" data-aos-duration="750">
                    <ul ">
                        <li class=""><a href="./cardetails.php?id=hatchback">Hatchback <span class="pt-2"> (Indica, Etios Liva)</span></a></li>
                        <li class=""><a href="./cardetails.php?id=sedan">Sedan  (Etios, Swift Dzire)</a></li>
                        <li class="">Xylo</li>
                        <li class="">Innova</li>
                        <li class=""><a href="./cardetails.php?id=tempo">Tempo Traveller</a></li>
                    </ul>
                </div>
                <div class="horizontal-line">
                    
                </div>
                <div class="airport-tariff" data-aos="fade-left" data-aos-duration="750">
                    <ul>
                        <li class="">Airport Pickup/Drop</li>
                        <li class=""><a href="./cardetails.php?id=hatchback">Hatchback /-2250</a></li>
                        <li class=""><a href="./cardetails.php?id=sedan">Sedan /-2300</a></li>
                        <li class="">Xylo /-3500</li>
                        <li class="">Innova /-3700</li>
                        <li class=""><a href="./cardetails.php?id=tempo">Temp Traveller /-5600</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="car-images" class="car-images">
        <div class="container">
        <div class="heading pt-2">First- class car Rentals</div>
            <div class="car-image-list" style="color:white;">
                <a href="./cardetails.php?id=hatchback">
                    <div class="etios car-list" data-aos="zoom-out-down" data-aos-duration="750">
                        <img src="./images/etios.png" alt="" srcset="">
                        <div class="heading pt-2">Etios</div>
                    </div>
                </a>
                <a href="./cardetails.php?id=hatchback">
                <div class="swift car-list" data-aos="zoom-out-down" data-aos-duration="750">
                    <img src="./images/car swift.png" alt="" srcset="">
                    <div class="heading pt-2">Swift Dzire</div>
                </div>
                </a>
                <!-- <a href=""> -->
                    <div class="temp-traveller car-list" data-aos="zoom-out-down" data-aos-duration="750">
                        <img src="./images/innova.png" alt="" srcset="">
                        <div class="heading pt-2">Innova</div>
                    </div>
                <!-- </a> -->
                <a href="./cardetails.php?id=tempo">
                    <div class="innova car-list" data-aos="zoom-out-down" data-aos-duration="750">
                        <img src="./images/tempo.png" alt="" srcset="">
                        <div class="heading pt-2">Tempo Traveller</div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section id="why-us" class="why-us">
        <div class="container">
            <div class="heading pt-2">
                Why choose VIP TRAVELS ?
            </div>
            <div class="reasons">
                <div class="reasons-container" data-aos="fade-up-right">
                    <div class="reasons-heading">
                    <i class="star icon"></i> Premium Service
                    </div>
                    <div class="reasons-text">
                        Rent car provides high quality service to everyone who is looking for reliable car rentals
                    </div>
                </div>
                <div class="reasons-container" data-aos="flip-up">
                    <div class="reasons-heading">
                    <i class="map marker icon"></i>
                        Variety of Locations
                    </div>
                    <div class="reasons-text">
                        We have variety of car rental around and in Vellore.
                    </div>
                </div>
                <div class="reasons-container" data-aos="fade-up-left">
                    <div class="reasons-heading">
                    <i class="thumbs up icon"></i>
                        Qualified Team
                    </div>
                    <div class="reasons-text">
                        You can fully rely on team.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="popular-cars" class="popular-cars">
        <div class="container">
            <div class="heading pt-2">POPULAR CARS</div>
            <div class="popular-cars-outline">
                <div class="popular-cars-container">
                    <div class="popular-car-image">
                        <img src="./images/car swift.png" alt="swift car vip travels">
                    </div>
                    <div class="popular-car-price heading">
                                 Swift Dzire KM/10.50 Rs
                    </div>
                </div>
            </div>
            <div class="popular-cars-outline">
                <div class="popular-cars-container">
                    <div class="popular-car-price heading">
                        Toyota Innova Km/14rs
                    </div>
                    <div class="popular-car-image">
                        <img src="./images/etios.png" alt="" class="scale-1">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include './footer.php'; ?>
</body>
<script>
    AOS.init();
</script>
</html>