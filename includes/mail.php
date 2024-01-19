
<?php

error_reporting(E_ALL ^ E_NOTICE);

if (isset($_POST['footerForm']) && !empty($_POST)) {
    $to = 'thebeat@concertocare.com';
//    $to = 'corporate.communications@concertocare.com';
    $fromEmail = 'noreply@concertocare.com';
    $subject = "The Beat - Subscribe";
    $userName = trim(stripcslashes($_POST['userFullName'])); // required
    $userEmail = trim(stripcslashes($_POST['userEmail'])); // required
//    $fromMessage = trim(stripcslashes($_POST['userMessage'])); // required
    ob_start();
    ?>
    <ul>
        <li>Full Name: <?php echo $userName ?></li>
        <li>Email: <?php echo $userEmail; ?></li>
<!--        <li>Message: --><?php //echo $fromMessage; ?><!--</li>-->
    </ul>
    <br/>
    ============================================================
  <?php
    sendMail($fromEmail,$to,$subject);
}
elseif (isset($_POST['contractForm']) && !empty($_POST)) {
    $mailTo = trim(stripcslashes($_POST['toMail']));
    $to = $mailTo;
    $subject = "New Partner's Contact Form Submission";
    $firstName = trim(stripcslashes($_POST['firstName'])); // required
    $lastName = trim(stripcslashes($_POST['lastName'])); // required
    $fromEmail = trim(stripcslashes($_POST['email'])); // required
    $userPhone = trim(stripcslashes($_POST['phone'])); // required
    $userCity = trim(stripcslashes($_POST['city'])); // required
    $userState = trim(stripcslashes($_POST['state'])); // required
    $userZipCode = trim(stripcslashes($_POST['zipCode'])); // required
    ob_start();
    ?>
    <ul>
        <li>Full Name: <?php echo $firstName ?>  <?php echo $lastName ?></li>
        <li>Email: <?php echo $fromEmail; ?></li>
        <li>Phone: <?php echo $userPhone; ?></li>
        <li>City: <?php echo $userCity; ?></li>
        <li>State: <?php echo $userState; ?></li>
        <li>zipCode: <?php echo $userZipCode; ?></li>
    </ul>
    <br/>
    ============================================================
    <?php
    sendMail($fromEmail,$to,$subject);

} else {
    $output = json_encode(array('type' => 'danger', 'text' => 'You can not access it directly!'));
    die($output);
}

function sendMail($fromEmail,$to,$subject){

    $body = ob_get_contents();
    ob_end_clean();
    // create email headers
    $headers = "From: $fromEmail <$fromEmail>\r\n" .
        'Reply-To: ' . $fromEmail . "\r\n" .
        "Content-type: text/html";
    echo $fromEmail;
    echo $to;
    echo $subject;
    $mail = mail($to, $subject, $body, $headers);

    if ($mail) {
        $output = json_encode(array('type' => 'success', 'text' => 'Thanks for your Email'));
        die($output);
    } else {
        $output = json_encode(array('type' => 'danger', 'text' => 'Something going wrong with sending mail...'));
        die($output);
    }
}

?>
