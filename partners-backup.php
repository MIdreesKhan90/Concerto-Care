<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/meta-header.php");?>
</head>
<body>
<?php include("includes/navigation.php");?>

<section class="banner-section-patient">
    <img src="./assets/img/hero-partners.jpg">
</section>

<section  class="home-section">
    <div class="container">
        <div class="main-content-container">
            <h1 class="section-title"><span>Orchestrating </span> in-home <br>care for patients with <br>complex needs</h1>
            <p>Today’s healthcare system often fails to meet the needs of seniors and other adults with complex care needs. Lack of care team coordination and support with essential daily needs can lead to unnecessary ER visits, hospitalizations, and nursing home admissions for conditions that can be treated safely and effectively at home.</p>
            <p>Research shows that 88% of aging adults prefer to receive care at home, but high costs and lack of comprehensive in-home care options make it challenging for seniors and other vulnerable patients to receive the care they need.</p>
            <p>ConcertoCare is changing that by reshaping in-home healthcare delivery with a human-first, tech-enabled approach. We partner with you to provide in-home primary and complex care, reduce healthcare costs, and improve the quality of life for the patients and communities we serve.</p>
            <h1 class="section-title mt-5"><span>Collaboration model: </span> Three complementary offerings for plans, providers, and communities</h1>
            <p>ConcertoCare provides partners with three complementary in-home care offerings, each powered by our proprietary population health and analytics engine, Patient3D®.</p>
        </div>
    </div>
</section>

<div class="service-group-section offering-for-plans">
    <div class="container">
        <div class="main-content-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="service-group-card service-card-1">
                        <div class="left img-div">
                            <img src="./assets/img/home-partner-bg.jpg" alt="Home Partner">
                            <span>1</span>
                        </div>
                        <div class="right">
                            <div class="inner-content">
                                <h2>ConcertoCare Partners</h2>
                                <p>We partner with plans serving Medicare Advantage, Dual Eligible, and Medicaid members to provide wrap-around support to existing provider networks and Primary Care Physicians (PCPs). Our in-home care team works in close collaboration with existing PCPs and other care providers to deliver a range of intensive clinical, behavioral, and social support services – including , geriatric psychiatry, comprehensive medication management, social work, and behavioral health services –to reduce costs, elevate quality of care, and improve patient outcomes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="service-group-card service-card-2">
                        <div class="left">
                            <div class="inner-content">
                                <h2>In-Home Primary Care Provider</h2>
                                <p>In coordination with its Care Partners Program or as a standalone offering, ConcertoCare can also serve as the PCP of record for seniors and other adults with complex care needs, delivering comprehensive, value-based, in-home care. We provide the infrastructure and wraparound team to directly manage the full spectrum of care, delivered in the home, with a particular focus on geriatric clinical reasoning. </p>
                            </div>
                        </div>
                        <div class="right img-div">
                            <img src="./assets/img/in-home-program-img.png" alt="Home Partner">
                            <span>2</span>
                        </div>
                    </div>
                    <div class="service-group-card service-card-3">
                        <div class="left img-div">
                            <img class="img-fluid" src="./assets/img/concerto-pace-program-img.png" alt="Home Partner">
                            <span>3</span>
                        </div>
                        <div class="right">
                            <div class="inner-content">
                                <div class="logo">
                                    <img src="./assets/img/concertoPace-logo-blue.png" alt="logo PACE">
                                </div>
                                <p>This model focuses on the Program of All-Inclusive Care for the Elderly (PACE) and is designed for nursing home-eligible adults 55 years or older who can live safely in the home with PACE support. ConcertoCare’s PACE program expands on the center-based approach, combining healthcare and support services with home-based care, making it possible for seniors with complex health needs to remain at home. We partner with organizations with a shared vision to provide PACE services to the local community. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="transforming-section">
    <div class="container">
        <div class="main-content-container">
            <h1 class="section-title"><span>Transforming</span> care and outcomes</h1>
            <p>ConcertoCare believes that by placing patients at the center of all that we do, we can radically transform the experience and outcomes of care for those who need it most. We strive to support communities that have been historically underserved and to have a meaningful impact on health equity.</p>
            <p>Our multidisciplinary care team takes a proven, holistic approach to meet the complex health needsof vulnerable patients. We incorporate social determinants of health into all patientassessments and treatment plans to ensure all physical, psychological, behavioral, and social needs are met.</p>
            <p>This novel approach was developed by renowned experts in home-based geriatric medicine, digital health, palliative care, healthcare analytics, and value-based care, and is proven to drive improved outcomes across care quality, patient experience, and cost.</p>
        </div>
    </div>
</section>

<section class="partner-with-us">
    <div class="left"></div>
    <div class="right">
        <div class="inner-content">
            <h2>Partner with us</h2>
            <p>Interested in partnering with us? We take a tailored approach to each partnership. We begin by assessing your patient population. We then analyze data to identify who is most likely to benefit. Finally, we determine whether we can best serve your patients by collaborating with your existing provider network, directly providing health care, or integrating into the community.</p>
        </div>
    </div>
</section>

<section class="patients-contact-us">
    <div class="container">
        <div class="main-content-container">
            <h1 class="section-title"><span>Contact us </span> to learn more</h1>
            <form method="post" id="patientForm" class="mt-5">
                <div class="inner-content">
                    <p class="mt-3 mb-4 mb-md-5">Learn more about the complementary in-home care offering that best serves you.</p>
                    <input hidden name="contractForm" value="2">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <p>Which of our programs are you more interested in?</p>
                                <select name="toMail" id="toMail" class="form-control">
                                    <option value="" selected>Select contracting type..</option>
                                    <option value="walter@manalu.com">Care Partners</option>
                                    <option value="walter.manalu@gmail.com">In-Home Primary Care</option>
                                    <option value="walter@kreetiv.com">ConcertoPACE</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="firstName" id="firstName"  class="form-control"  placeholder="First Name">
                        <label for="firstName">First Name</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="lastName" id="lastName" class="form-control"  placeholder="Last Name">
                        <label for="lastName">Last Name</label>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control"  placeholder="Email Address">
                        <label for="email">Email Address</label>
                    </div>
                    <div class="form-group">
                        <input type="email" name="confirmEmail"  id="confirmEmail" class="form-control"  placeholder="Confirm Email Address">
                        <label for="confirmEmail">Confirm Email Address</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" id="phone" class="phone form-control"  placeholder="Phone Number">
                        <label for="phone">Phone Number</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="city" id="city" class="form-control"  placeholder="City">
                        <label for="city">City</label>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <input type="text" name="state" id="state" class="form-control"  placeholder="State">
                                <label for="state">State</label>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-4">
                                <input type="number" name="zipCode" id="zipCode" class="form-control"  placeholder="zipCode">
                                <label for="zipCode">Zip</label>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" id="patientFormSubmit" class="btn btn-orange">Submit</button>
                    </div>
                </div>
                <div class="spinner">
                    <i class="fas fa-spinner"></i>
                </div>
                <div class="alert alert-success my-4 text-center">Your form has been submitted successfully!</div>
            </form>

        </div>
    </div>
</section>
<?php include("includes/footer.php");?>
<?php include("includes/footer-js.php");?>
<script src="/assets/js/lib/jquery.mask.js"></script>
<script>
  jQuery(document).ready(function() {
    $('.phone').mask('000-000-0000');
    jQuery(document).on('click','#patientFormSubmit',function () {
      jQuery('#patientForm').validate( {
        rules: {
          toMail:{
            required: true
          },
          firstName: "required",
          lastName: "required",
          email: {
            required: true,
            email: true
          },
          confirmEmail: {
            required: true,
            email: true,
            equalTo: "#email"
          },
          phone: {
            required: true
          },
          city: {
            required: true,
          },
          state: {
            required: true
          },
          zipCode: {
            required: true,
            number:true
          }
        },
        messages: {
          toMail: "Please select contracting type",
          firstName: "Please enter your firstName",
          lastName: "Please enter your lastName",
          email: {
            required: "Please enter a valid email address"
          },
          confirmEmail: {
            required: "Please enter a valid email address",
            equalTo: "Please enter the same email as above"
          },
          phone: {
            required: "Please enter your phone number"
          },
          city: "Please enter City Name",
          state: "Please enter State",
          zipCode: "Please enter ZipCode"
        },
        errorElement: "em",
        submitHandler: function(element) {
          let frm = jQuery('#patientForm');
          let formData = frm.serialize();
          jQuery.ajax({
            type: 'POST',
            url: '/includes/mail',
            data: formData,
              success: function(res) {
                frm.find('.inner-content').hide();
                $('.spinner').fadeIn();
                frm.find("input[type=text],input[type=email],input[type=number], textarea").val("");
                $( element ).removeClass( "is-valid" ).removeClass( "is-invalid" );
                setTimeout(function(){
                  $('.spinner').hide();
                  $('.alert-success').fadeIn();
                }, 5000);
                setTimeout(function(){
                  $('.alert-success').hide();
                  frm.find('.inner-content').fadeIn();
                }, 10000);
              },
            error: function(xhr, status, error){
              console.log(xhr);
            }
          });
        }
      });
    });
    jQuery(document).on('submit','#patientForm',function (event) {
      event.preventDefault();
    });


  });
</script>

</body>
</html>