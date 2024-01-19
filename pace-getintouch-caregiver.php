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
                    <a class="nav-link active" href="./pace-getintouch-caregiver.php">On Behalf of a Patient</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./pace-getintouch-partnership.php">Partnership</a>
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

                        <div class="form-group">
                            <label><strong>Role</strong></label>
                            <select class="form-control">
                                <option selected>Administrator</option>
                                <option>Caregiver</option>
                                <option>POA (Power of Attorney)</option>
                                <option>Guardian</option>
                            </select>
                        </div>
                        
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name">
                                    <label>First Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                    <label>Last Name</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email">
                                    <label>Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone">
                                    <label>Phone</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Company Name">
                                    <label>Company Name</label>
                                </div>
                            </div>
                        </div>

                        <p class="mt-5"><strong>Place of Service</strong></p>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="City">
                                    <label>City</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Zip Code">
                                    <label>State</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Zip Code">
                                    <label>Zip Code</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Please provide any additional information you would like to share with us (We aim to contact to you the same day)</label>
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