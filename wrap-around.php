<?php
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$slug = array_pop($uriSegments);
?>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/meta-header.php"); ?>
<body>
<?php include("includes/navigation.php");


?>

<section class="section wrap-hero-section text-white text-center">
    <div class="container">
        <h1 class="page-title">Wrap Around Support</h1>
        <div class="description">
            <p>Our CarePartners in-home support program is provided in partnership with your health insurance plan and
                offers you medical care right in your own home – and at no cost to you. When you join the program, you
                keep your current primary care doctor, specialists, and all of the benefits and services you have
                already have access to through your health insurance plan.
            </p>
        </div>
    </div>
</section>

<section class="section what-we-offer-section">
    <div class="sm-container">
        <div class="row">
            <div class="col-md-6">
                <hr class="orange-line">
                <h2 class="section-title">What We Offer</h2>
                <p>CarePartners gives you an extra layer of convenient, personalized in-home medical services meant to
                    support your health and give you more time to focus on the people and things you love.</p>
                <a class="btn btn-orange btn-rounded mobile-display-none" href="/">Contact Us</a>
            </div>
            <div class="col-md-6">
                <img src="./assets/img/we-offer-left-top-image.png" class="img-fluid w-100 mobile-display-none" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="we-offer-card">
                    <div class="left-card">
                        <h6>Immediate Care & Support</h6>
                        <ul class="card-list">
                            <li>Urgent care visits when you need care unexpectedly</li>
                            <li>Help with understanding and taking your medications.</li>
                            <li>Mental health support</li>
                            <li>Help before or after a hospital stay</li>
                            <li>Support for your caregivers</li>
                        </ul>
                    </div>
                    <div class="right-card">
                        <h6>Convenience & Accessibility</h6>
                        <ul class="card-list">
                            <li>Regular medical check-ups in your home (or another place that is convenient to you)</li>
                            <li>24/7/365 phone availability, including evenings, weekends, and all holidays.</li>
                            <li>Virtual visits using a laptop, tablet, or phone (with team assistance)</li>
                            <li>And much more</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="./assets/img/we-offer-left-bottom-image.jpg" class="img-fluid w-100 mobile-display-none"
                     alt="">
            </div>
        </div>
        <div class="mobile-display">
            <img src="./assets/img/we-offer-left-top-image.png" class="img-fluid w-100" alt="">
            <a class="btn btn-orange btn-rounded" href="/">Contact Us</a>
        </div>
    </div>
</section>

<section class="section how-work-section">
    <div class="container">
        <hr class="orange-line">
        <h2 class="section-title">How It Works</h2>
        <div class="description">
            <p>CarePartners gives you an extra layer of convenient, personalized in-home medical services meant to
                support your health and give you more time to focus on the people and things you lov</p>
        </div>
    </div>
    <div class="sm-container">
        <div class="row">
            <div class="col-md-6">
                <div class="how-work-card">
                    <h6>Seamless Onboarding : Your First In-Home Checkup and Enrollment Process</h6>
                    <ul class="card-list">
                        <li>We schedule your first in-home checkup visit – this is based on your schedule and needs</li>
                        <li>Ahead of your appointment, our team will call to confirm and create a plan to provide the
                            best care possible.
                        </li>
                        <li>During your first in-home visit, you sign a form confirming you’d like to be a part of our
                            program (that’s it – no long questionnaires to fill out) and then we conduct our initial
                            check-up to better understand your health and needs
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="how-work-card">
                    <h6>Customized In-Home Healthcare Solutions</h6>
                    <p>Our teams work with you and your regular doctor to develop a detailed personal Care Plan that
                        outlines what’s needed to manage your health and well-being.</p>
                    <ul class="card-list">
                        <li>Regular in-home visits based on your health care needs and goals.</li>
                        <li>A wide variety of custom services and supports – ranging from specialist doctor
                            consultations,
                            vaccine scheduling, or help with understanding your medications, to other more
                            lifestyle-oriented supports like fitness recommendations, coaching sessions, or connections
                            to
                            community resources. Everything is personalized to you.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bottom-description">
            <p>As a member of the CarePartners in-home support program, you have access to a whole team dedicated to
                your health and well-being. The care team is available 24/7 to address your regular and urgent care
                needs.</p>
        </div>
    </div>
</section>


<?php include("includes/footer.php"); ?>
<?php include("includes/footer-js.php"); ?>

</body>
</html>
