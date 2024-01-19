<?php

$page = $client->fetchPage('footer', 'global-footer');
$footerLogo = $page->getField('footer_logo');
$footerAddress = $page->getField('address');
$footerQuickLinks = $page->getField('quick_links');
$footerTextCopy = $page->getField('text_copy');
$footerOtherLinks = $page->getField('other_links');

?>
<footer class="main-footer py-4 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php if ($footerLogo) { ?>
                    <a class="footer-logo mb-3 mb-md-5" href="/">
                        <img src="<?php echo $footerLogo; ?>" alt="ConcertoCare">
                    </a>
                <?php } ?>
                <div class="row">
                    <?php if (!empty($footerAddress)): ?>
                    <div class="col-md-6">
                        <div class="footer-widget">
                            <?php foreach ($footerAddress as $index => $address): ?>
                                <h6 <?php echo ($index != 0) ? 'class="mt-5"' : ''; ?>><?php echo $address['address_type']; ?></h6>
                                <p><?php echo $address['address']; ?></p>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($footerQuickLinks)): ?>
                    <div class="col-md-6">
                        <div class="footer-widget">
                            <h6>Quick Links</h6>
                                <ul class="footer-nav">
                                    <?php foreach ($footerQuickLinks as $quickLink): ?>
                                        <li>
                                            <a href="<?php echo $quickLink['url']; ?>"><?php echo $quickLink['label']; ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="footer-widgets p-0">
                    <h5>Sign Up for Our Newsletter</h5>
                    <form method="post" id="sendMessageForm" action="">
                        <input hidden name="footerForm" type="text" value="1">
                        <input class="form-control" id="userEmail" name="userEmail" type="email" placeholder="Email Address" required>
                        <input class="form-control" type="text" id="userFullName" name="userFullName" placeholder="Full Name">
                        <!--                        <textarea class="form-control" id="userMessage" name="userMessage" placeholder="Type Your Message..." rows="2" required></textarea>-->
                        <input id="submit"  type="submit" class="btn btn-lg btn-outline-light">
                    </form>
                    <div class="alert alert-success">Thank you for signing up for our newsletter! We look forward to staying in touch.</div>
                </div>
<!--                <div class="footer-form bg-grey-blue">-->
<!--                    <h2><b>Stay</b> Connected..</h2>-->
<!--                    <p>Stay informed with updates from ConcertoCare</p>-->
<!--                    <form method="post" id="sendMessageForm" action="">-->
<!--                        <input hidden name="footerForm" type="text" value="1">-->
<!--                        <div class="form-row">-->
<!--                            <div class="col">-->
<!--                                <input class="form-control" type="text" id="firstName" name="firstName" placeholder="First Name" required>-->
<!--                            </div>-->
<!--                            <div class="col">-->
<!--                                <input class="form-control" type="text" id="lastName" name="lastName" placeholder="Last Name" required>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <input class="form-control" type="email" id="userEmail" name="userEmail" placeholder="Email" required>-->
<!--                        <input class="form-control" type="text" id="userEmail" name="userEmail" placeholder="Title" required>-->
<!--                        <input class="form-control" type="text" id="userEmail" name="userEmail" placeholder="Company" required>-->
<!--                        <div class="text-right">-->
<!--                            <input id="submit" type="submit" value="Submit" class="btn btn-rounded btn-orange">-->
<!--                        </div>-->
<!--                    </form>-->
<!--                    <div class="alert alert-success" style="display: none">Your Message Has Been Received! A member of the ConcertoCare team will be in contact soon.</div>-->
<!--                </div>-->
            </div>
        </div>
        <?php if (!empty($footerTextCopy)): ?>
            <p class="mt-5 text-white"><?php echo $footerTextCopy;?></p>
        <?php endif; ?>
        <?php if (!empty($footerOtherLinks)): ?>
        <ul class="footer-nav-2">
            <?php foreach ($footerOtherLinks as $otherLink): ?>
                <li>
                    <a href="<?php echo $otherLink['url']; ?>"><?php echo $otherLink['label']; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </div>
</footer>
<ul class="social-icon fixed">
    <li><a href="https://twitter.com/ConcertoCare/" target="_blank"><i class="fab fa-twitter"></i></a></li>
    <li><a href="https://www.linkedin.com/company/concertocare" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
    <li><a href="https://www.facebook.com/profile.php?id=100090300390313" target="_blank"><i class="fab fa-facebook-f"></i></a><li>
    <!--
    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
    -->
</ul>

