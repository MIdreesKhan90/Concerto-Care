<?php
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$slug = array_pop($uriSegments);
?>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/meta-header.php"); ?>
<body>
<?php include("includes/navigation.php");

$page = $client->fetchPage('whiteblue_template', $slug);
$pageTitle = $page->getField('title');
$pageDescription = $page->getField('description');
$pageContent = $page->getField('content');

?>

<section class="section home-primary-hero-section text-white text-center">
    <div class="container">
        <h1 class="page-title"><?php echo $pageTitle; ?></h1>
        <div class="description">
            <p>ConcertoCare partners with your current doctor to bring additional support right to your home. Our
                in-home care team is an extension of your physician that helps to deliver medical support that is
                customized to your individual needs. We work with your health insurance plan to provide these services
                at no additional cost to you.</p>
        </div>
    </div>
</section>

<section class="our-program-section">
    <div class="sm-container">
        <div class="row">
            <div class="col-lg-6">
                <hr class="orange-line">
                <h2 class="section-title">Our Program</h2>
                <p>ConcertoCare partners with your current doctor to bring additional support right to your home. Our
                    in-home care team is an extension of your physician that helps to deliver medical support that is
                    customized to your individual needs. We work with your health insurance plan to provide these
                    services at no additional cost to you.</p>
                <p><i>Learn more about how ConcertoCare works with your current provider to deliver wrap-around support
                        services</i></p>
                <a class="btn btn-orange btn-rounded" href="/">Wrap Around Page</a>
            </div>
            <div class="col-lg-6">
                <img src="./assets/img/our-program.jpg" class="img-fluid" alt="Our Program image">
            </div>
        </div>
    </div>
</section>

<section class="section support-services-section text-white">
    <div class="sm-container">
        <hr class="orange-line">
        <h3 class="section-title">Support Services</h3>
        <div class="description">
            <p>We customize medical care support to meet your individual needs. This can range from in-home support to
                help manage chronic conditions or occasional in-home check-ups and health coaching to help you stay
                healthy and on your feet.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="support-services-card">
                    <div class="card-icon">
                        <img src="./assets/img/support-services-icons/urgent-home-checkups.png" alt="Urgent Home Checkups Icon">
                    </div>
                    <h6>Urgent Home Checkups</h6>
                    <p>We can provide both regular in-home checkups and urgent care if you need it.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="support-services-card">
                    <div class="card-icon">
                        <img src="./assets/img/support-services-icons/chronic-care-solutions.png" alt="Urgent Home Checkups Icon">
                    </div>
                    <h6>Chronic Care Solutions</h6>
                    <p>We can help you manage any of your chronic conditions (such as heart and lung conditions,
                        diabetes, or kidney disease).</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="support-services-card">
                    <div class="card-icon">
                        <img src="./assets/img/support-services-icons/lifestyle-goals.png" alt="Urgent Home Checkups Icon">
                    </div>
                    <h6>Lifestyle Goals</h6>
                    <p>We can help you with lifestyle goals like nutrition, exercise, and weight loss.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="support-services-card">
                    <div class="card-icon">
                        <img src="./assets/img/support-services-icons/demand-medications.png" alt="Urgent Home Checkups Icon">
                    </div>
                    <h6>On Demand Medications</h6>
                    <p>We can help you with your medications, order refills, or see if there are medications you no
                        longer need.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="support-services-card">
                    <div class="card-icon">
                        <img src="./assets/img/support-services-icons/mental-health.png" alt="Urgent Home Checkups Icon">
                    </div>
                    <h6>Mental Health</h6>
                    <p>We can help you manage symptoms from depression, anxiety, or other mental health conditions.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="support-services-card">
                    <div class="card-icon">
                        <img src="./assets/img/support-services-icons/healthy-life.png" alt="Urgent Home Checkups Icon">
                    </div>
                    <h6>Healthy Life</h6>
                    <p>We can help you access medical equipment, healthy meals, transportation, and housing that meets
                        your needs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-program-section bg-light-white">
    <div class="sm-container">
        <div class="row">
            <div class="col-lg-6">
                <img src="./assets/img/our-team-img.jpg" class="img-fluid" alt="Our Program image">
            </div>
            <div class="col-lg-6">
                <hr class="orange-line">
                <h2 class="section-title">Our Teams</h2>
                <p>Our teams are made up of doctors, nurses, pharmacists, social workers, mental health professionals,
                    community health workers and more. Every person is different. We work closely with you, your family
                    members and caregivers, and your primary and specialist doctors to understand your individual health
                    goals – whatever they may be – and help you succeed in achieving them.</p>
            </div>
        </div>
    </div>
</section>

<section class="availability-section">
    <div class="sm-container">
        <hr class="orange-line">
        <h3 class="section-title">Availability</h3>
        <div class="description">
            <p>We currently provide our CarePartners in-home support program in Ohio and North Carolina through
                partnerships with specific health plans. If you are eligible for this program, you will have already
                receive outreach via your existing health plan with instructions on how to enroll. If you have not
                received outreach and would like more information about our CarePartners programs in Ohio and North
                Carolina.</p>
        </div>
        <div class="text-center">
            <a class="btn btn-orange btn-rounded" href="/get-in-touch">Get In Touch</a>
        </div>
        <div class="availability-card">
            <img class="img-fluid" src="./assets/img/availability.png" alt="availability">
            <div class="content">
                <p>I don’t have a primary care doctor that I see regularly. Can I still join your program?</p>
                <p>Yes! If you live in Ohio or North Carolina and are eligible for our program through your health
                    insurance plan, but don’t have a regular primary care doctor, we can help you find a new primary
                    care doctor when you join our program. Please contact us today to enroll.</p>
            </div>
        </div>
    </div>
    <div class="section-bottom-strip"></div>
</section>

<?php include("includes/footer.php"); ?>
<?php include("includes/footer-js.php"); ?>

</body>
</html>
