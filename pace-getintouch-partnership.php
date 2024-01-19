<?php
include("includes/config.php");
include("includes/butterCmsAPI.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/meta-header.php");?>
<body>
<?php include("includes/navigation.php");?>
<section class="pace-getintouch-section">
    <div class="touch-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="section-title"><b>Get In</b> Touch</h1>
                    <p>Where you have a geenrat inquiry, interested in becoming a patient, become a provider or lorem ipsum dolor sit amet, we'd love to hear from you.</p>
                </div>
            </div>
            <ul class="nav touch">
                <li class="nav-item">
                    <a class="nav-link" href="./pace-getintouch-patient.php">I'm a Patient</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./pace-getintouch-caregiver.php">On Behalf of a Patient</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="./pace-getintouch-partnership.php">Partnership</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./pace-getintouch.php">General Questions</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div>
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

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="companyName" type="text" class="form-control" placeholder="Company Name">
                                    <label for="companyName">Company Name</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control" placeholder="Email *">
                                    <label for="email">Email *</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="phone" type="text" class="form-control" placeholder="Phone *">
                                    <label for="phone">Phone *</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>What type of partnership are you interested in discussing?</label>
                            <textarea rows="4" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Please provide any additional information you would like to share with us. (We aim to contact to you the same day)</label>
                            <textarea rows="4" class="form-control"></textarea>
                        </div>
                        <div class="text-right">
                            <input type="submit" class="btn" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="locations-side">
                    <h4 class="section-title underline"><b>Our</b> Location</h4>
                    <div>
                        <h5>Ohio</h5>
                        <p>xxx xxxxxxxxxxxxx xxxxxx <br>
                            xxxxxxxxxxx, xx xxxx <br>
                            xxx.xxx.xxxx</p>
                    </div>
                    <div>
                        <h5>New York</h5>
                        <p>xxx xxxxxxxxxxxxx xxxxxx <br>
                            xxxxxxxxxxx, xx xxxx <br>
                            xxx.xxx.xxxx</p>
                    </div>
                    <div>
                        <h5>Massachusetts</h5>
                        <p>xxx xxxxxxxxxxxxx xxxxxx <br>
                            xxxxxxxxxxx, xx xxxx <br>
                            xxx.xxx.xxxx</p>
                    </div>
                    <div>
                        <h5>Washington</h5>
                        <p>xxx xxxxxxxxxxxxx xxxxxx <br>
                            xxxxxxxxxxx, xx xxxx <br>
                            xxx.xxx.xxxx</p>
                    </div>
                    <div>
                        <h5>Virginia PACE</h5>
                        <p>xxx xxxxxxxxxxxxx xxxxxx <br>
                            xxxxxxxxxxx, xx xxxx <br>
                            xxx.xxx.xxxx</p>
                    </div>
                </aside>

            </div>
        </div>
    </div>
</section>

<?php include("includes/footer.php");?>
<?php include("includes/footer-js.php");?>
</body>
</html>