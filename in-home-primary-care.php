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
            <p>For seniors and other adults who do not have a primary care provider (PCP), or are open to changing their
                PCP, ConcertoCare offers in-home adult care and orchestrates a range of services to help maintain
                physical and emotional health and independence at home.</p>
        </div>
    </div>
</section>

<section class="our-program-section">
    <div class="sm-container">
        <div class="row">
            <div class="col-lg-6">
                <hr class="orange-line">
                <h2 class="section-title">Who We Serve</h2>
                <p>ConcertoCare offers in-home care to Medicare, Medicaid, and other health plan members who either do
                    not have an existing primary care provider (PCP) or are open to changing their PCP. ConcertoCare’s
                    physician-led teams of in-home care providers, pharmacists, social workers, health coaches, care
                    managers, and others provide primary care house calls and coordinated support services to help
                    senior and other adult patients maintain physical and emotional health and independence at home.</p>
                <p><i>ConcertoCare currently provides In-Home Primary Care Services in Washington state. Get stated with
                        ConcertoCare and
                        <a href="/get-in-touch">enroll in our services</a> today.</i></p>
                <a class="btn btn-orange btn-rounded" href="/get-in-touch">Get In Touch</a>
            </div>
            <div class="col-lg-6">
                <img src="./assets/img/in-home-primary-care/image-1.png" class="img-fluid" alt="Our Program image">
                <img src="./assets/img/in-home-primary-care/image-1.png" class="img-fluid" alt="Our Program image">
            </div>
        </div>
        <div class="row what-we-offer">
            <div class="col-lg-6 order-12 order-md-1">
                <img src="./assets/img/in-home-primary-care/image-2.png" class="img-fluid" alt="Our Program image">
            </div>
            <div class="col-lg-6 order-1 order-md-12">
                <hr class="orange-line">
                <h2 class="section-title">What We Offer</h2>
                <p>ConcertoCare’s robust medical care model brings together an orchestra of pharmacists, behavioralists,
                    social workers, and health coaches customized to your care needs. Our primary care clinicians and
                    nurse and social work care managers learn what matters most to you and develop a complete care plan.
                    We provide in-home services using both in-person and virtual interactions. This complete approach to
                    your health allows you to have a strong voice in your care plan and stay in charge of your
                    health.</p>
            </div>
        </div>
    </div>
</section>

<section class="section how-work-section">
    <div class="container">
        <hr class="orange-line">
        <h2 class="section-title">How It Works</h2>
        <div class="description">
            <p>ConcertoCare’s robust medical care model brings together an orchestra of pharmacists, behavioralists,
                social workers, and health coaches customized to your care needs. Our primary care clinicians and nurse
                and social work care managers learn what matters most to you and develop a complete care plan. We
                provide in-home services using both in-person and virtual interactions. This complete approach to your
                health allows you to have a strong voice in your care plan and stay in charge of your health.</p>
        </div>
    </div>
    <div class="sm-container">
        <div class="card-heading">
            <p>Some of the key differences between ConcertoCare and a regular PCP are that:</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="how-work-card">
                    <h6>Bringing Care to You</h6>
                    <p>ConcertoCare focuses on providing in-home primary care– in other words, our providers come to
                        you. Many people find this more convenient than travelling into an office.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="how-work-card">
                    <h6>Comprehensive Health Support</h6>
                    <p>ConcertoCare offers a full multidisciplinary team that works closely with each other and with you
                        to support many different aspects of your health. We not only do sick visits, we also focus on
                        things like coordinated care, geriatrics, emotional health, support with medications, and many
                        other services.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include("includes/footer.php"); ?>
<?php include("includes/footer-js.php"); ?>

</body>
</html>
