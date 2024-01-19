<?php
include("includes/config.php");
include("includes/butterCmsAPI.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/meta-header.php"); ?>
<body>
<?php include("includes/navigation.php"); ?>
<section class="section pace-appointment-section">
    <div class="container">
        <h1 class="section-title font-family-raleway">Enroll With <b>ConcertoCare</b></h1>
        <p>Come and experience why ConcertoCare is one of the fastest growing care models in the country. Please provide us with your contact info and we will aim to respond to
            your submission in 1-2 business days.</p>
        <div class="pace-request-inner">
            <h4 class="form-title">Online Enrollment</h4>
            <form class="enroll-form">
                <div class="form-group">
                    <label>Which ConcertoCare practice are you interested in enrolling in?</label>
                    <div>
                        <div class="custom-control custom-control-inline custom-radio">
                            <input id="Massachusetts" name="practice" value="Massachusetts" type="radio" class="custom-control-input">
                            <label for="Massachusetts" class="custom-control-label">Massachusetts</label>
                        </div>
                        <div class="custom-control custom-control-inline custom-radio">
                            <input id="New-york" name="practice" value="New York" type="radio" class="custom-control-input">
                            <label for="New-york" class="custom-control-label">New York</label>
                        </div>
                        <div class="custom-control custom-control-inline custom-radio">
                            <input id="Washington" name="practice" value="Washington" type="radio" class="custom-control-input">
                            <label for="Washington" class="custom-control-label">Washington</label>
                        </div>
                        <div class="custom-control custom-control-inline custom-radio">
                            <input id="Oregon" name="practice" value="Oregon" type="radio" class="custom-control-input">
                            <label for="Oregon" class="custom-control-label">Oregon</label>
                        </div>
                    </div>
                </div>
                <hr class="my-md-4">
                <p class="mb-md-5">Please select from ONE of the four options below, click on the link, complete all information, and upload or fax required attachments.</p>

                <label class="fw-bold">If you are a Patient enrolling yourself:</label>
                <div class="checkbox-groups mb-3 mb-md-5">
                    <div class="checkbox">
                        <input id="FullEnrollmentPacket1" name="checkOptions1" type="radio">
                        <label for="FullEnrollmentPacket1">Full Enrollment Packet</label>
                    </div>
                    <div class="checkbox">
                        <input id="ConsentFormsOnly1" name="checkOptions1" type="radio">
                        <label for="ConsentFormsOnly1">Consent Forms Only</label>
                    </div>
                </div>


                <label class="fw-bold">If you are a Legal Guardian / Power of Attorney enrolling on behalf of a patient:</label>
                <div class="checkbox-groups">
                    <div class="checkbox">
                        <input id="FullEnrollmentPacket2" name="checkOptions2" type="radio">
                        <label for="FullEnrollmentPacket2">Full Enrollment Packet</label>
                    </div>
                    <div class="checkbox">
                        <input id="ConsentFormsOnly2" name="checkOptions2" type="radio">
                        <label for="ConsentFormsOnly2">Consent Forms Only</label>
                    </div>
                </div>
                <div class="text-right">
                    <button id="generalFormSubmit" type="submit" class="btn btn-orange btn-rounded text-uppercase" value="Submit">Enroll Now</button>
                </div>
                <hr class="my-md-5">
                <h6>Please Note:</h6>
                <ul>
                    <li class="mb-3">The enrollment process generally takes a few days but can be up to 7 business days; once complete, the patient will be scheduled to be seen at
                        the provider's next visit to the community or residential area.</li>
                    <li class="mb-3">The patient will continue with their current primary care provider until seen by ConcertoCare.</li>
                    <li>If you have questions regarding enrollments, please email us at enrollment@concertocare.com.</li>
                </ul>


            </form>
        </div>
    </div>
</section>

<?php include("includes/footer.php"); ?>
<?php include("includes/footer-js.php"); ?>

</body>

</html>