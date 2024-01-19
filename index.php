<?php include("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/meta-header.php"); ?>
<body>
<?php include("includes/navigation.php"); ?>

<section class="hero-section">
    <video playsinline muted autoplay loop poster="./assets/img/mobile-hero.jpg" id="bgvid">
        <source src="./assets/videos/ConcertoCare.mp4" type="video/mp4">
    </video>
</section>
<style>
    h1.section-title {
        font-size: 38px;
    }
</style>
<section class="bg-blue-rackley py-5">
    <div class="container">
        <div class="main-content-container">
            <div class="row align-items-center">
                <div class="col-md-7 text-white">
                    <h2>Ask The Experts</h2>
                    <h6 class="font-weight-normal">Signup for our Live Chat on 9/7/2023 (Thursday)</h6>
                </div>
                <div class="col-md-5 text-center appointment-form">
                    <button type="button" class="btn" data-toggle="modal" data-target="#signupNow">Signup Now</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-section">
    <div class="add-block" hidden>
        <div class="block-header">
            <h5>Help and Guidance for COVID-19</h5>
        </div>
        <div class="block-body">
            <p>Get the latest COVID-19 updates for ConcertoCare patients.</p>
            <a href="/covid-19" class="btn btn-rounded btn-outline">Learn More</a>
        </div>
    </div>
    <div class="container">
        <div class="main-content-container">
            <h1 class="section-title">Home Visits</h1>
            <p>We know seniors want to stay independent and in their own homes. That is why our full team of health care
                providers make in-person and virtual house calls to take care of all your health needs right in your own
                home. Our patients say that’s music to their ears, especially as they seek to avoid the potential risk
                of exposure to COVID-19 from seeking medical care outside of the home.</p>

            <h1 class="section-title mt-5">Orchestrated For Your Care</h1>
            <p>Your health and social needs are our No. 1 priority. We work with you and your caregivers to assess your
                health goals and challenges. In addition to in-home medical care, the ConcertoCare team ensures your
                social needs are met by providing access to transportation, food support options, caregiver supports,
                advanced care planning, and when needed, palliative care. These support services have become even more
                important due to COVID-19, which has only increased the isolation for many seniors.</p>
            <div class="program-chart-img mt-5">
                <img class="img-fluid" src="./assets/img/home-note-chart.jpg" alt="Chart">
            </div>

            <h1 class="section-title mt-5 pt-5"><span>A Concerto</span> In Three Parts</h1>
            <p>Like a concerto – composed and performed in three movements – we offer three programs for seniors:</p>
            <ol>
                <li>ConcertoCare Partners</li>
                <li>In-Home Primary Care Provider</li>
                <li>Program of All-Inclusive Care for the Elderly (PACE) Services</li>
            </ol>
            <p>Each is orchestrated to improve your health outcomes and quality of life. </p>
            <p>ConcertoCare programs are supported by a combination of in-home medical, and behavioral and social
                services, enhanced by proprietary care pathways, advanced analytics, and virtual care technology. </p>
            <p>ConcertoCare delivers the right care to the right patients, right where they are best served: in their
                own homes. </p>
        </div>
    </div>
</section>
<section class="service-group service-1">
    <div class="row m-0">
        <div class="col-md-6 p-0">
            <div class="img-div left">
                <span>1</span>
            </div>
        </div>
        <div class="col-md-6 p-0">
            <div class="content right">
                <h2>ConcertoCare Partners</h2>
                <p>ConcertoCare serves patients with Medicare+Medicaid, Medicare Advantage or Medicare, who have complex
                    care needs and an existing primary care provider (PCP). Patients keep their existing doctors and
                    benefit plans.</p>
                <a href="/partners" class="btn btn-rounded btn-outline">Learn More</a>
            </div>
        </div>
    </div>
</section>
<section class="service-group service-2">
    <div class="row m-0">
        <div class="col-md-6  p-0 order-md-last">
            <div class="img-div right">
                <span>2</span>
            </div>
        </div>
        <div class="col-md-6 p-0">
            <div class="content left text-right">
                <h2>In-Home Primary<br> Care Provider</h2>
                <p>For Medicare+Medicaid, Medicare Advantage or Medicare-only seniors who do not have a primary care
                    provider (PCP), ConcertoCare offers in-home primary care and orchestrates a range of services to
                    help seniors maintain physical and emotional health and independence at home.</p>
                <a href="/in-home-primary-care" class="btn btn-rounded btn-outline">Learn More</a>
            </div>
        </div>
    </div>
</section>
<section class="service-group service-3">
    <div class="row m-0">
        <div class="col-md-6 p-0">
            <div class="img-div left">
                <span>3</span>
            </div>
        </div>
        <div class="col-md-6 p-0">
            <div class="content right pl-4">
                <img class="img-fluid" src="./assets/img/ConcertoPACE.png" alt="ConcertoPACE" style="max-width: 420px;">
                <p>Programs of All-Inclusive Care for the Elderly (PACE) is for seniors who have Medicare+Medicaid,
                    Medicare Advantage or Medicare only, and seek to remain independent and in their homes but whose
                    medical conditions meet the criteria for nursing home-level care.</p>
                <a href="/concertopace" class="btn btn-rounded btn-outline">Learn More</a>
            </div>
        </div>
    </div>
</section>
<section class="latest-news-section">
    <div class="container">
        <div class="main-content-container">
            <h1 class="section-title title-shadow"><i><span>Latest</span> News</i></h1>
            <hr>
            <p>ConcertoCare is a leading risk-bearing provider caring for the needs of vulnerable patient populations.
                Read our latest news here.</p>
            <div class="row">

                <?php
                require 'vendor/autoload.php'; // initiate and established the connection
                $apiToken = 'aa43eb35533c387c969af1f4858d3520441d4c5a'; // API token declaration
                use ButterCMS\ButterCMS;

                try {

                    $client = new ButterCMS($apiToken);
                    $page = "1";
                    $result = $client->fetchPosts([
                        'page' => $page,

                        'page_size' => 2
                    ]);

                    // Get the first post

                    $posts = $result->getPosts();
                    $post = $posts[0];
                    foreach ($posts as $post) {
                        $date = date_create(explode("T", $post->getPublished())[0]);
                        $createdDate = date_format($date, "M d, Y");
                        ?>

                        <div class="col-md-6">
                            <div class="news-card">
                                <span class="date"><?php echo $createdDate ?></span>
                                <h4 class="news-card-title"> <?php echo $post->getTitle(); ?></h4>
                                <p class="disc"><?php echo $post->getSummary(); ?></p>
                                <a href="/articles?id=<?php echo $post->getSlug(); ?>" class="btn btn-orange">Learn
                                    More</a>
                            </div>
                        </div>

                    <?php }
                } catch (Exception $e) {
                    echo "Error";

                    echo $e;
                } ?>
                <!--
                <div class="col-md-6">
                    <div class="news-card">
                        <span class="date">xxx</span>
                        <h4 class="news-card-title">xxx</h4>
                        <p class="disc">xxx...</p>
                        <a href="/" class="btn btn-orange">Learn More</a>
                    </div>
                </div>
                -->
            </div>
        </div>
    </div>
</section>
<?php include("includes/footer.php"); ?>
<?php include("includes/footer-js.php"); ?>

<!-- Eligibility Modal -->
<div class="modal fade patients-eligibility-modal signupPopuop" id="signupNow" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" class="signup-step-1">
                    <h3>Ask The Experts</h3>
                    <h6 class="font-weight-normal">Signup for our Live Chat on 9/7/2023 (Thursday)</h6>
                    <div class="form-row mt-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input id="firstName" name="firstName" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input id="lastName" name="lastName" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="emailAddress">Email Address</label>
                        <input id="emailAddress" name="emailAddress" type="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="timeZone">Time Zone</label>
                        <select id="timeZone" class="form-control">
                            <option value="pacificTime">Pacific Time</option>
                            <option value="pacificTime">Pacific Time</option>
                            <option value="pacificTime">Pacific Time</option>
                            <option value="pacificTime">Pacific Time</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="questionsChat">Questions For Chat <span class="font-weight-light">(Optional)</span></label>
                        <textarea id="questionsChat" name="comments" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="text-right">
                        <button id="signupFormSubmit" type="submit" class="btn btn-orange bg-arty-orange rounded-pill" value="Submit">Submit</button>
                    </div>
                </form>
                <form class="signup-step-2 d-none">
                    <h3>You’re Registered!</h3>
                    <div class="mt-5">
                        <p>Be sure to save the link below to participate live on <b>9/7 at 2PM ET</b>.</p>
                        <p><b>Meeting URL:</b><br>
                            https://tinyurl.com/concerto090723</p>
                        <p><b>Meeting ID:</b><br>
                            276 560 211 594</p> 
                        <p><b>Passcode:</b><br>
                            UapjQN</p>  
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $("#signupFormSubmit").click(function(){
        $(".signup-step-1").addClass("d-none");
        $(".signup-step-2").removeClass("d-none");
    });
    app.mount('#signupNow');
</script>

</body>
</html>