<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/get-in-touch.php":
			$CURRENT_PAGE = "GetInTouch";
			$PAGE_TITLE = "Get In Touch";
			break;
        case "/programs.php":
			$CURRENT_PAGE = "Programs";
			$PAGE_TITLE = "Programs";
			break;

		case "/about.php":
			$CURRENT_PAGE = "About";
			$PAGE_TITLE = "About Us";
			break;

		case "/news.php":
			$CURRENT_PAGE = "News";
			$PAGE_TITLE = "News";
			break;

		case "/articles.php":
			$CURRENT_PAGE = "News";
			$PAGE_TITLE = $title;
			break;

		case "/locations.php":
			$CURRENT_PAGE = "Locations";
			$PAGE_TITLE = "Locations";
			break;
        case "/locations-single.php":
            $CURRENT_PAGE = "Locations";
            $PAGE_TITLE = $title;
            break;

		case "/bio.php":
			$CURRENT_PAGE = "Bio";
			$PAGE_TITLE = $title;
			break;

        case "/patients.php":
            $CURRENT_PAGE = "Patients";
            $PAGE_TITLE = "Patients";
            break;

        case "/partners.php":
            $CURRENT_PAGE = "Partners";
            $PAGE_TITLE = "Partners";
            break;
        case "/thankyou.php":
            $CURRENT_PAGE = "ThankYou";
            $PAGE_TITLE = "Thank You";
            break;

		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Welcome to ConcertoCare";
	}
	$PHP_SELF = htmlspecialchars($_SERVER['PHP_SELF']);
?>