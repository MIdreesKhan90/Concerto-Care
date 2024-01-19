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
        <h1 class="section-title">Get In <b>Touch</b></h1>
        <p>Come and experience why ConcertoCare is one of the fastest growing care models in the country. Please provide us with your contact info and we will aim to respond to
            your submission in 1-2 business days.</p>

        <div class="pace-request-inner">
            <div class="row">
                <div class="col-lg-8">
                    <div class="appointment-form">
                        <div class="form-group">
                            <select id="chooseFormType" class="form-control">
                                <option value="patientForm">I'm a Patient</option>
                                <option value="patientBehalfForm">On Behalf of a Patient</option>
                                <option value="partnershipForm">I'm Interested in Partnership</option>
                                <option value="generalForm">I Have a General Question</option>
                            </select>
                        </div>
                        <?php
                        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        ?>
                        <form id="patientForm" class="form-type">
                            <input type="hidden" name="referringURL" value="<?php echo $actual_link; ?>">
                            <input type="hidden" name="action" value="patientForm">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstNamePatient">Patient First Name</label>
                                        <input id="firstNamePatient" name="firstName" type="text" class="form-control">
                                        <div id="firstNamePatientError"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastNamePatient">Patient Last Name</label>
                                        <input id="lastNamePatient" name="lastName" type="text" class="form-control">
                                        <div id="lastNamePatientError"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="emailPatient">Patient Email</label>
                                <input id="emailPatient" name="email" type="email" class="form-control">
                                <div id="emailPatientError"></div>
                            </div>
                            <div class="form-group">
                                <label for="phonePatient">Patient Phone Number</label>
                                <input id="phonePatient" name="phone" type="text" class="form-control">
                                <div id="phonePatientError"></div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="zipCodePatient">Patient Zip Code</label>
                                        <input id="zipCodePatient" name="zipCode" type="text" class="form-control">
                                        <div id="zipCodePatientError"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Patient Age</label>
                                <div>
                                    <div class="custom-control custom-control-inline custom-radio">
                                        <input id="agePatient1" name="age" value="Below 55" type="radio" class="custom-control-input">
                                        <label for="agePatient1" class="custom-control-label">Below 55</label>
                                    </div>
                                    <div class="custom-control custom-control-inline custom-radio">
                                        <input id="agePatient2" name="age" value="55-64" type="radio" class="custom-control-input">
                                        <label for="agePatient2" class="custom-control-label">55-64</label>
                                    </div>
                                    <div class="custom-control custom-control-inline custom-radio">
                                        <input id="agePatient3" name="age" value="65+" type="radio" class="custom-control-input">
                                        <label for="agePatient3" class="custom-control-label">65+</label>
                                    </div>
                                </div>
                                <div id="agePatient1Error"></div>
                            </div>
                            <div class="form-group">
                                <label for="commentsPatient">Additional Comments: (Optional)</label>
                                <textarea id="commentsPatient" name="comments" rows="4" class="form-control"></textarea>
                                <div id="commentsPatientError"></div>
                            </div>
                            <div class="text-center">
                                <button id="patientFormSubmit" type="submit" class="btn" value="Submit">Submit</button>
                            </div>
                        </form>
                        <!-- End of #patientForm -->

                        <form id="patientBehalfForm" class="form-type" style="display: none">
                            <input type="hidden" name="referringURL" value="<?php echo $actual_link; ?>">
                            <input type="hidden" name="action" value="patientBehalfForm">
                            <div class="form-group">
                                <label>Your Role(s):</label>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="custom-control custom-checkbox">
                                            <input id="administrator" name="roles[]" value="Administrator" type="checkbox" class="custom-control-input">
                                            <label for="administrator" class="custom-control-label">Administrator</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="custom-control custom-checkbox">
                                            <input id="caregiver" name="roles[]" value="Caregiver" type="checkbox" class="custom-control-input">
                                            <label for="caregiver" class="custom-control-label">Caregiver</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="custom-control custom-checkbox">
                                            <input id="familyMember" name="roles[]" value="Family Member" type="checkbox" class="custom-control-input">
                                            <label for="familyMember" class="custom-control-label">Family Member</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="custom-control custom-checkbox">
                                            <input id="friend" name="roles[]" value="Friend" type="checkbox" class="custom-control-input">
                                            <label for="friend" class="custom-control-label">Friend</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="custom-control custom-checkbox">
                                            <input id="guardian" name="roles[]" value="Guardian" type="checkbox" class="custom-control-input">
                                            <label for="guardian" class="custom-control-label">Guardian</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="custom-control custom-checkbox">
                                            <input id="powerOfAttorney" name="roles[]" value="Power of Attorney" type="checkbox" class="custom-control-input">
                                            <label for="powerOfAttorney" class="custom-control-label">Power of Attorney</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="custom-control custom-control-inline custom-checkbox">
                                            <input id="other" name="roles[]" value="Other" type="checkbox" class="custom-control-input">
                                            <label for="other" class="custom-control-label">Other</label>
                                        </div>
                                        <input id="otherDesc" name="otherDesc" type="text" class="other-desc form-control w-auto d-none">
                                        <div id="otherDescError"></div>
                                    </div>
                                </div>
                                <div id="caregiverError"></div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstNamePatientBehalf">Your First Name</label>
                                        <input id="firstNamePatientBehalf" name="firstName" type="text" class="form-control">
                                        <div id="firstNamePatientBehalfError"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastNamePatientBehalf">Your Last Name</label>
                                        <input id="lastNamePatientBehalf" name="lastName" type="text" class="form-control">
                                        <div id="lastNamePatientBehalfError"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="emailPatientBehalf">Your Email</label>
                                <input id="emailPatientBehalf" name="email" type="email" class="form-control">
                                <div id="emailPatientBehalfError"></div>
                            </div>
                            <div class="form-group">
                                <label for="phonePatientBehalf">Your Phone Number</label>
                                <input id="phonePatientBehalf" name="phone" type="text" class="form-control">
                                <div id="phonePatientBehalfError"></div>
                            </div>
                            <hr>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Patient Age</label>
                                        <div>
                                            <div class="custom-control custom-control-inline custom-radio">
                                                <input id="agePatientBehalf1" name="age" value="Below 55" type="radio" class="custom-control-input">
                                                <label for="agePatientBehalf1" class="custom-control-label">Below 55</label>
                                            </div>
                                            <div class="custom-control custom-control-inline custom-radio">
                                                <input id="agePatientBehalf2" name="age" value="55-64" type="radio" class="custom-control-input">
                                                <label for="agePatientBehalf2" class="custom-control-label">55-64</label>
                                            </div>
                                            <div class="custom-control custom-control-inline custom-radio">
                                                <input id="agePatientBehalf3" name="age" value="65+" type="radio" class="custom-control-input">
                                                <label for="agePatientBehalf3" class="custom-control-label">65+</label>
                                            </div>
                                        </div>
                                        <div id="agePatientBehalf1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="zipCodePatientBehalf">Patient Zip Code</label>
                                        <input id="zipCodePatientBehalf" name="zipCode" type="text" class="form-control">
                                        <div id="zipCodePatientBehalfError"></div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="commentsPatientBehalf">Additional Comments: (Optional)</label>
                                <textarea id="commentsPatientBehalf" name="comments" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="text-center">
                                <button id="patientBehalfFormSubmit" type="submit" class="btn" value="Submit">Submit</button>
                            </div>
                        </form>
                        <!-- End of #patientBehalfForm -->

                        <form id="partnershipForm" class="form-type" style="display: none">
                            <input type="hidden" name="referringURL" value="<?php echo $actual_link; ?>">
                            <input type="hidden" name="action" value="partnershipForm">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstNamePartnership">Your First Name</label>
                                        <input id="firstNamePartnership" name="firstName" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastNamePartnership">Your Last Name</label>
                                        <input id="lastNamePartnership" name="lastName" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="emailPartnership">Your Email</label>
                                <input id="emailPartnership" name="email" type="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phonePartnership">Your Phone Number</label>
                                <input id="phonePartnership" name="phone" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="typeOfPartnerPartnership">Type of Partner</label>
                                <select id="typeOfPartnerPartnership" name="typeOfPartner" class="form-control">
                                    <option value="Clinical Partner">Clinical Partner</option>
                                    <option value="Health Plan">Health Plan</option>
                                    <option value="Senior Living Community">Senior Living Community</option>
                                    <option value="Vendor">Vendor</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="outreach">Please tell us the nature of your outreach</label>
                                <textarea id="outreach" name="outreach" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="text-center">
                                <button id="partnershipFormSubmit" type="submit" class="btn" value="Submit">Submit</button>
                            </div>
                        </form>
                        <!-- End of #partnershipForm -->

                        <form id="generalForm" class="form-type" style="display: none">
                            <input type="hidden" name="referringURL" value="<?php echo $actual_link; ?>">
                            <input type="hidden" name="action" value="generalForm">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstNameGeneral">Your First Name</label>
                                        <input id="firstNameGeneral" name="firstName" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastNameGeneral">Your Last Name</label>
                                        <input id="lastNameGeneral" name="lastName" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="emailGeneral">Your Email</label>
                                <input id="emailGeneral" name="email" type="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phoneGeneral">Your Phone Number</label>
                                <input id="phoneGeneral" name="phone" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="companyGeneral">Your Company (Optional)</label>
                                <input id="companyGeneral" name="company" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="questionDescGeneral">Please leave your questions and comments below.</label>
                                <textarea id="questionDescGeneral" name="questionDesc" rows="4" class="form-control"></textarea>
                            </div>

                            <div class="text-center">
                                <button id="generalFormSubmit" type="submit" class="btn" value="Submit">Submit</button>
                            </div>
                        </form>
                        <!-- End of #generalForm -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="locations-side">
                        <h4 class="section-title underline"><b>Our</b> Locations</h4>
                        <div>
                            <h5><strong style="color: #282923">New York</strong></h5>
                            <p>104-07 Metropolitan Avenue <br>
                                Forest Hills (Queens), NY 11375
                            </p>
                        </div>
                        <div>
                            <h5><strong style="color: #282923">Ohio</strong></h5>
                            <p>70 Birch Alley <br>
                                Suite 240 <br>
                                Beavercreek, OH 45440
                            </p>
                        </div>
                        <div>
                            <h5><strong style="color: #282923">Massachusetts</strong></h5>
                            <p>800 West Cummings Park <br>
                                Suite 6900 <br>
                                Woburn, MA 01801
                            </p>
                        </div>
                        <div>
                            <h5><strong style="color: #282923">Washington & Oregon</strong></h5>
                            <p>6811 S. 204th Street <br>
                                Suite 280 <br>
                                Kent, WA 98032
                            </p>
                        </div>
                        <div>
                            <h5><strong style="color: #282923">North Carolina </strong></h5>
                            <p>4819 Emperor Blvd. <br>
                                Suite 400 <br>
                                Durham, NC 27702
                            </p>
                        </div>
                        <h4 class="section-title underline"><b>Our</b> PACE Centers</h4>
                        <div>
                            <h5><a href="https://concertopace.com/" target="_blank"><strong>California (ConcertoPACE of LA)</strong></a></h5>
                            <p>3670 Degnan Blvd.<br>
                                Los Angeles, CA 90018
                            </p>
                        </div>
                        <div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("includes/footer.php"); ?>
<?php include("includes/footer-js.php"); ?>
<script src="/assets/js/jquery.validate.js"></script>
<script src="/assets/js/jquery.mask.min.js"></script>
<script>

    function getInTouchFormSubmitter(button, formID) {
        const frm = jQuery(formID);
        const formData = frm.serialize();

        button.attr('disabled', true);
        button.html('Submitting... <i class="fas fa-spinner fa-spin"></i>');
        jQuery.ajax({
            type: 'POST',
            url: '/includes/appointment-mails',
            data: formData,
            dataType: 'JSON',
            success: function (res) {
                button.attr('disabled', false);
                button.text('Submit');
                frm[0].reset();
                if (res.type === 'success') {
                    document.location.href = '/thankyou';
                } else {
                    frm.append(`<div class="alert alert-${res.type} my-4 text-center">${res.text}</div>`);
                    setTimeout(function () {
                        frm.find('.alert').remove();
                    }, 5000);
                }
            },
            error: function (xhr, status, error) {
                console.log(xhr, status, error);
            }
        });
    }

    jQuery(document).ready(function ($) {
//        $('.date-of-birth').mask("00/00/0000", {
//            placeholder: "mm/dd/yyyy"
//        });

        $('#chooseFormType').on('change', function () {
            $('.form-type').hide();
            $('#' + $(this).val()).fadeIn();
        });

        $(".form-type",).submit(function (e) {
            e.preventDefault();
        });

        $("#patientFormSubmit").on('click', function () {
            const ths = $(this);
            $('#patientForm').validate({
                rules: {
                    firstName: "required",
                    lastName: "required",
                    email: {
                        required: '#phonePatient:blank',
                        email: true
                    },
                    phone: {
                        required: '#emailPatient:blank'
                    },
                    zipCode: {
                        required: true,
                        number: true
                    },
                    age: {
                        required: true,
                    },
                },
                messages: {
                    firstName: "Please enter your First Name",
                    lastName: "Please enter your Last Name",
                    email: {
                        required: "Please provide an email address OR phone number."
                    },
                    phone: {
                        required: "Please provide an email address OR phone number."
                    },
                    zipCode: "Please enter a valid Zip Code",
                    age: "Please select your age",
                },
                errorElement: "em",
                errorPlacement: function (error, element) {
                    let name = $(element).attr("id");
                    error.appendTo($("#" + name + "Error"));
                },
                submitHandler: function (element) {
                    getInTouchFormSubmitter(ths, '#patientForm');
                }
            });
        });

        $("#patientBehalfFormSubmit").on('click', function () {
            const ths = $(this);
            $('#patientBehalfForm').validate({
                rules: {
                    "roles[]": "required",
                    otherDesc: {
                        required: function (element) {
                            return $('#other').is(':checked')
                        }
                    },
                    firstName: "required",
                    lastName: "required",
                    phone: {
                        required: '#emailPatientBehalf:blank'
                    },
                    email: {
                        required: '#phonePatientBehalf:blank',
                        email: true
                    },
                    zipCode: {
                        required: true,
                        number: true
                    },
                    age: {
                        required: true,
                    },
                },
                messages: {
                    "roles[]": "Please select at least one option",
                    firstName: "Please enter your First Name",
                    lastName: "Please enter your Last Name",
                    email: {
                        required: "Please provide an email address OR phone number."
                    },
                    phone: {
                        required: "Please provide an email address OR phone number."
                    },
                    zipCode: "Please enter a valid Zip Code",
                    age: "Please select your Age",
                },
                errorElement: "em",
                errorPlacement: function (error, element) {
                    let name = $(element).attr("id");
                    error.appendTo($("#" + name + "Error"));
                },
                submitHandler: function (element) {
                    getInTouchFormSubmitter(ths, '#patientBehalfForm');
                }
            });
        });

        $("#partnershipFormSubmit").on('click', function () {
            const ths = $(this);
            $('#partnershipForm').validate({
                rules: {
                    firstName: "required",
                    lastName: "required",
                    phone: {
                        required: '#emailPartnership:blank'
                    },
                    email: {
                        required: '#phonePartnership:blank',
                        email: true
                    },
                    typeOfPartner: "required",
                    outreach: "required"
                },
                messages: {
                    firstName: "Please enter your First Name",
                    lastName: "Please enter your Last Name",
                    email: {
                        required: "Please provide an email address OR phone number."
                    },
                    phone: {
                        required: "Please provide an email address OR phone number."
                    },
                    typeOfPartner: "Please select one option",
                    outreach: "Please tell us the nature of your outreach",
                },
                errorElement: "em",
                submitHandler: function (element) {
                    getInTouchFormSubmitter(ths, '#partnershipForm');
                }
            });
        });

        $("#generalFormSubmit").on('click', function () {
            const ths = $(this);
            $('#generalForm').validate({
                rules: {
                    firstName: "required",
                    lastName: "required",
                    phone: {
                        required: '#emailGeneral:blank'
                    },
                    email: {
                        required: '#phoneGeneral:blank',
                        email: true
                    },
                    questionDesc: "required"
                },
                messages: {
                    firstName: "Please enter your First Name",
                    lastName: "Please enter your Last Name",
                    email: {
                        required: "Please provide an email address OR phone number."
                    },
                    phone: {
                        required: "Please provide an email address OR phone number."
                    },
                    questionDesc: "Please describe your question",
                },
                errorElement: "em",
                submitHandler: function (element) {
                    getInTouchFormSubmitter(ths, '#generalForm');
                }
            });
        });

        $('#other').on('change', function () {
            $('#otherDesc').toggleClass('d-inline-block');
        });
    });
</script>
</body>

</html>
