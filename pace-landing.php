<?php
include("includes/config.php");
include("includes/butterCmsAPI.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/meta-header.php");?>
<body>
<?php include("includes/navigation.php");?>
<section class="section pace-landing-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Location</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Virginia PACE</li>
                    </ol>
                </nav>

                <h1 class="section-title font-weight-bold">Virginia PACE</h1>
                <p>ConcertoPACE is now available simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p> when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>

                <a href="#" class="btn btn-dark-blue">CALL TO SCHEDULE (855) 492-7642</a>
            </div>
            <div class="col-lg-6">
                <div class="pace-contact-container">
                    <h5>Contact Us</h5>
                    <form class="concerto-form-style">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="firstName" type="text" class="form-control" placeholder="First Name">
                                    <label for="firstName">First Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="lastName" type="text" class="form-control" placeholder="Last Name">
                                    <label for="lastName">Last Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="custom-control-label" for="exampleRadios1">
                                            Becoming a Patient
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="custom-control-label" for="exampleRadios2">
                                            Becoming a Caregiver
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                        <label class="custom-control-label" for="exampleRadios3">
                                            Partnership
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                        <label class="custom-control-label" for="exampleRadios4">
                                            General Questions
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input id="email" type="email" class="form-control" placeholder="Your Email Address">
                            <label for="email">Your Email Address</label>
                        </div>
                        <div class="form-group">
                            <input id="phoneNumber" type="text" class="form-control" placeholder="Phone Number">
                            <label for="phoneNumber">Phone Number</label>
                        </div>
                        <div class="form-group">
                            <input id="companyName" type="text" class="form-control" placeholder="Company Name">
                            <label for="companyName">Company Name</label>
                        </div>
                        <div class="form-group">
                            <label>Which best describes your needs?</label>
                            <textarea rows="4" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Additional Comments about your project</label>
                            <textarea rows="4" class="form-control"></textarea>
                        </div>
                        <div class="text-right">
                            <input type="submit" class="btn btn-rounded-outline" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section why-choose-section">
    <div class="container">
        <h1 class="section-title"><b>Why Choose</b> ConcertoPACE</h1>
        <ul class="list-unstyled">
            <li><i class="fas fa-check"></i> <p>ConcertoPACE is now available simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p></li>
            <li><i class="fas fa-check"></i> <p>Typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ConcertoPACE is now available simply dummy text of the printing.</p></li>
            <li><i class="fas fa-check"></i> <p>Printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></li>
            <li><i class="fas fa-check"></i> <p>Industry's standard dummy text ever since the 1500s. Printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></li>
        </ul>
    </div>
</section>

<section class="section team-section">
    <div class="container">
        <h1 class="section-title"><b>Meet</b> Our Team</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="media team-member">
                    <img src="https://via.placeholder.com/150x175" class="img-fluid" alt="Nicholas Joseph, MD, NHA">
                    <div class="media-body">
                        <h5 class="mt-0">Nicholas Joseph, MD, NHA</h5>
                        <p>Executive Director</p>
                    </div>
                </div>
                <div class="media team-member">
                    <img src="https://via.placeholder.com/150x175" class="img-fluid" alt="Vanessa Hunter-Sims">
                    <div class="media-body">
                        <h5 class="mt-0">Vanessa Hunter-Sims</h5>
                        <p>Quality Improvement and Compliance</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="media team-member">
                    <img src="https://via.placeholder.com/150x175" class="img-fluid" alt="Nicholas Joseph, MD, NHA">
                    <div class="media-body">
                        <h5 class="mt-0">Bryan Cordeau</h5>
                        <p>Finance</p>
                    </div>
                </div>
                <div class="media team-member">
                    <img src="https://via.placeholder.com/150x175" class="img-fluid" alt="Vanessa Hunter-Sims">
                    <div class="media-body">
                        <h5 class="mt-0">Vanessa Hunter-Sims</h5>
                        <p>Bernie Loren</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("includes/footer.php");?>
<?php include("includes/footer-js.php");?>
</body>
</html>