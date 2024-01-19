<?php
header("Access-Control-Allow-Origin: *");
error_reporting(E_ALL ^ E_NOTICE);
if (isset($_REQUEST) && !empty($_REQUEST)) {

    $to = 'enrollment@concertocare.com';
    $cc = 'neil.agarwal@concertocare.com';

    $referringURL = trim(stripcslashes($_POST['referringURL'])); // required
    //   Patient Form
    if (isset($_REQUEST) && $_REQUEST['action'] == 'patientForm') {

        $subject = "Patient's Appointment Form Submission";
        $firstName = trim(stripcslashes($_POST['firstName'])); // required
        $lastName = trim(stripcslashes($_POST['lastName'])); // required
        $fromEmail = trim(stripcslashes($_POST['email'])); // required
        $phone = trim(stripcslashes($_POST['phone'])); // required
        $zipCode = trim(stripcslashes($_POST['zipCode'])); // required
        $age = trim(stripcslashes($_POST['age'])); // required
        $comments = trim(stripcslashes($_POST['comments']));
        $fromName = $firstName . ' ' . $lastName; // required
        ob_start();
        ?>
        <ul>
            <li>Referring URL: <?php echo $referringURL ?></li>
            <li>Patient First Name: <?php echo $firstName ?></li>
            <li>Patient Last Name: <?php echo $lastName ?></li>
            <?php if ($fromEmail) { ?>
                <li>Patient Email: <?php echo $fromEmail; ?></li>
            <?php } ?>
            <?php if ($phone) { ?>
                <li>Patient Phone Number: <?php echo $phone; ?></li>
            <?php } ?>
            <li>Patient Zip Code: <?php echo $zipCode; ?></li>
            <li>Patient Age: <?php echo $age; ?></li>
            <li>Additional Comments: <?php echo $comments; ?></li>
        </ul>
        <br/>
        ============================================================
        <?php
        $body = ob_get_contents();
        ob_end_clean();
    }
    // End of Patient Form
    // Patient Behalf
    elseif (isset($_REQUEST) && $_REQUEST['action'] == 'patientBehalfForm') {
        $subject = "Behalf of a Patient Appointment Form Submission";
        $roles = $_POST['roles']; // required
        $otherDesc = trim(stripcslashes($_POST['otherDesc'])); // required

        $firstName = trim(stripcslashes($_POST['firstName'])); // required
        $lastName = trim(stripcslashes($_POST['lastName'])); // required
        $fromEmail = trim(stripcslashes($_POST['email'])); // required
        $phone = trim(stripcslashes($_POST['phone'])); // required
        $age = trim(stripcslashes($_POST['age'])); // required
        $zipCode = trim(stripcslashes($_POST['zipCode'])); // required
        $comments = trim(stripcslashes($_POST['comments']));
        $fromName = $firstName . ' ' . $lastName; // required
        ob_start();
        ?>
        <ul>
            <li>Referring URL: <?php echo $referringURL ?></li>
            <li>Your Role(s): <?php echo implode(', ', $roles); ?></li>
            <?php if (in_array('Other', $roles)) { ?>
                <li>Other: <?php echo $otherDesc ?></li>
            <?php } ?>
            <li>Your First Name: <?php echo $firstName ?></li>
            <li>Your Last Name: <?php echo $lastName ?></li>
            <?php if ($fromEmail) { ?>
                <li> Your Email: <?php echo $fromEmail; ?></li>
            <?php } ?>
            <?php if ($phone) { ?>
                <li> Your Phone: <?php echo $phone; ?></li>
            <?php } ?>
            <li>Patient Age: <?php echo $age; ?></li>
            <li>Patient Zip Code: <?php echo $zipCode; ?></li>
            <li>Additional Comments: <?php echo $comments; ?></li>
        </ul>
        <br/>
        ============================================================
        <?php
        $body = ob_get_contents();
        ob_end_clean();
    }
    // End of Patient Behalf
    // Partnership Form
    elseif (isset($_REQUEST) && $_REQUEST['action'] == 'partnershipForm') {
        $subject = "Partnership Appointment Form Submission";
        $firstName = trim(stripcslashes($_POST['firstName'])); // required
        $lastName = trim(stripcslashes($_POST['lastName'])); // required
        $fromEmail = trim(stripcslashes($_POST['email'])); // required
        $phone = trim(stripcslashes($_POST['phone'])); // required
        $typeOfPartner = trim(stripcslashes($_POST['typeOfPartner'])); // required
        $outreach = trim(stripcslashes($_POST['outreach']));

        $fromName = $firstName . ' ' . $lastName; // required
        ob_start();
        ?>
        <ul>
            <li>Referring URL: <?php echo $referringURL ?></li>
            <li>Your First Name: <?php echo $firstName ?></li>
            <li>Your Last Name: <?php echo $lastName ?></li>
            <?php if ($fromEmail) { ?>
                <li>Your Email: <?php echo $fromEmail; ?></li>
            <?php } ?>
            <?php if ($phone) { ?>
                <li>Your Phone Number: <?php echo $phone; ?></li>
            <?php } ?>
            <li>Type of Partner: <?php echo $typeOfPartner; ?></li>
            <li>Nature of your Outreach: <?php echo $outreach; ?></li>
        </ul>
        <br/>
        ============================================================
        <?php
        $body = ob_get_contents();
        ob_end_clean();
    }
    // End of Partnership Form

    // General Form
    elseif (isset($_REQUEST) && $_REQUEST['action'] == 'generalForm') {
        $subject = "General Question Form Submission";
        $firstName = trim(stripcslashes($_POST['firstName'])); // required
        $lastName = trim(stripcslashes($_POST['lastName'])); // required
        $fromEmail = trim(stripcslashes($_POST['email'])); // required
        $phone = trim(stripcslashes($_POST['phone'])); // required
        $company = trim(stripcslashes($_POST['company'])); // required
        $questionDesc = trim(stripcslashes($_POST['questionDesc'])); // required

        $fromName = $firstName . ' ' . $lastName; // required
        ob_start();
        ?>
        <ul>
            <li>Referring URL: <?php echo $referringURL ?></li>
            <li>Your First Name: <?php echo $firstName ?></li>
            <li>Your Last Name: <?php echo $lastName ?></li>
            <?php if ($fromEmail) { ?>
                <li>Your Email: <?php echo $fromEmail; ?></li>
            <?php } ?>
            <?php if ($phone) { ?>
                <li>Your Phone Number: <?php echo $phone; ?></li>
            <?php } ?>
            <li>Your Company: <?php echo $company; ?></li>
            <li>Question Description: <?php echo $questionDesc; ?></li>
        </ul>
        <br/>
        ============================================================
        <?php
        $body = ob_get_contents();
        ob_end_clean();
    }
    // End of General Form

    // create email headers
    $headers = "From: noreply@concertocare.com <noreply@concertocare.com>\r\n" .
        "Reply-To: noreply@concertocare.com\r\n" .
        'Cc: ' . $cc . "\r\n" .
        "Content-type: text/html";

    $mail = mail($to, $subject, $body, $headers);

    if ($mail) {
        $output = json_encode(array('type' => 'success', 'text' => 'Thanks for your Email'));
        die($output);
    } else {
        $output = json_encode(array('type' => 'danger', 'text' => 'Something going wrong with sending mail...'));
        die($output);
    }
} else {
    $output = json_encode(array('type' => 'danger', 'text' => 'You can not access it directly!'));
    die($output);
}
?>
