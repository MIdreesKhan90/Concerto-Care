<head>
    <?php
    $currentURL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $baseURL = 'https://' . $_SERVER['HTTP_HOST'] . '/';

    // Removing the base URL from the current URL
    $relativeURL = str_replace($baseURL, '', $currentURL);

    if ($relativeURL == 'location/new-york') {
        // Insert Google Analytics code specific to this page
        ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-E2334KNPCJ"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'G-E2334KNPCJ');
        </script>
    <?php
    } else {
    // Insert Google Analytics code for rest of the pages
    ?>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-RF4JZJXED9"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'G-RF4JZJXED9');
        </script>
        <?php
    }
    ?>

    <?php
    include("config.php");
    include("butterCmsAPI.php");
    ?>
    <title><?php print $PAGE_TITLE; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>
    <!--
    <base href="https://concertocare.com">
    <link href="https://concertocare.com/" rel="canonical" />
    -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Cinzel:wght@600&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200;0,6..12,300;0,6..12,400;0,6..12,500;0,6..12,600;0,6..12,700;0,6..12,800;0,6..12,900;0,6..12,1000;1,6..12,200;1,6..12,300;1,6..12,400;1,6..12,500;1,6..12,600;1,6..12,700;1,6..12,800;1,6..12,900;1,6..12,1000&display=swap" rel="stylesheet">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="/assets/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/owlcarousel/assets/owl.carousel.min.css">
    <link href="/assets/css/main.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link href="/assets/css/responsive.css" rel="stylesheet">
</head>
