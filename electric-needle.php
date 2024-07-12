<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Construction
    </title>
    <meta name="author" content="Collin IT Solution">
    <meta name="description" content="Build Rich - Construction Equipments">
    <meta name="keywords" content="Build Rich">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/product/logo.jpg">

    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@300;400;500;600;700;800;900&amp;family=Public+Sans:wght@100;200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
        }

        section {
            scroll-margin-top: 50px;
            /* Adjust this value based on your header height */
            margin-bottom: 100px;
            /* Adjust this value based on the footer height */
        }

        button {
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            cursor: pointer;
        }

        #fixedButtons {
            z-index: 99;
            text-align: center;
            position: fixed;
            padding: 10px;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #f1f1f1;
            box-shadow: 0px -5px 5px -5px #333;
            display: none;
        }

        .th-btn2 {
            position: relative;
            z-index: 2;
            overflow: hidden;
            vertical-align: middle;
            display: inline-block;
            border: none;
            text-transform: uppercase;
            text-align: center;
            background-color: var(--theme-color);
            color: var(--white-color);
            font-family: var(--body-font);
            font-size: 13px;
            font-weight: 600;
            line-height: 1;
            padding: 15px 20px;
            border-radius: 0;
            margin: 5px;
        }

        .th-btn1 {
            position: relative;
            z-index: 2;
            overflow: hidden;
            vertical-align: middle;
            display: inline-block;
            border: none;
            text-transform: uppercase;
            text-align: center;
            background-color: var(--theme-color);
            color: var(--white-color);
            font-family: var(--body-font);
            font-size: 13px;
            margin: 3px;
            font-weight: 600;
            line-height: 1;
            padding: 15px 20px;
            border-radius: 0;
        }


        @media(max-width:785px) {
            #fixedButtons {
                text-align: left;
                padding: 5px 70px 5px 5px;
                padding-right: ;
            }

            .th-btn2 {
                display: none;
            }

            .th-btn1 {
                font-size: 11px;
                margin: 3px;
                font-weight: 400;
                line-height: 1;
                padding: 9.5px 7px;
                border-radius: 0;
            }

        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Electric Needle Vibrator</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>PRODUCTS</li>
                    <li>Construction Equipment</li>
                </ul>
            </div>
        </div>
    </div><br>


 <section id="ElectricNeedleVibrator">
        <div class="container" style="padding-top:50px;">
            <h1 style="    text-align: center;">Electric needle Vibrator</h1>
            <div class="row">
                <p style=" ; margin: revert; color: dark; font-size: 1.1em;">Needle Vibrators are most commonly used vibrator for concrete. It consists of a steel tube (with one end closed and rounded) having an eccentric vibrating element inside it. This steel tube called poker is connected to an electric motor or a Petrol / Diesel engine through a flexible tube.</p>
                <div class="col-sm-5" style=" text-align: center;">
                    <img src="assets/img/product/images8.jpeg" alt="Product Image" style="max-width: 250px; height: auto; margin: 10vh 0vh 0vh 10vh;">
                </div>
                <div class="col-sm-7" style="background-color:;">.
                    <h2 class="product-title">Types</h2>
                    <div class="product-rating">
                        <br>
                        <div class="checklist">
                            <ul>
                                <p style="font-weight: 700;color: #ff5e14;font-size: 20px;">Petrol / Kerosine Needle Vibrator: </p>
                                <li>Engine: 2Hp Single Phase / 3 Phase.</li>
                                <li>Make: Crompton / Godrej.</li>
                                <p style="font-weight: 700;color: #ff5e14;font-size: 20px;">Electric Needle Vibrator: </p>
                                <li>Engine: 2Hp 2 Stroke</li>
                                <li>Make – Greaves / Super Marshal.</li>
                            </ul><br>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

  
   <?php $productname="Electric needle Vibrator"; 
include 'quote-form-forproducts.php';
?>
	


    
    <script>
        window.onscroll = function() {
            toggleFixedButtons();
        };

        function toggleFixedButtons() {
            const fixedButtons = document.getElementById('fixedButtons');
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                fixedButtons.style.display = 'block';
            } else {
                fixedButtons.style.display = 'none';
            }
        }

        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);
            const offset = 130; // Adjust the offset based on your fixed header height
            const topOffset = section.offsetTop - offset;

            window.scrollTo({
                top: topOffset,
                behavior: 'smooth'
            });
        }
    </script>

    <?php include 'footer.php'; ?>

    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>