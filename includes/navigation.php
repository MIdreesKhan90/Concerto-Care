<header class="main-header position-relative">
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="/"><img src="/assets/img/logos/concerto-care.png" alt="ConcertoCare"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
<!--                    <span class="navbar-toggler-icon"></span>-->
                    <span></span>
                    <span></span>
                    <span></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Who We Are</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/our-mission">Our Mission</a>
                                <a class="dropdown-item" href="/leadership">Our Leadership</a>
                                <a class="dropdown-item" href="/clinical-expertise">Our Expertise</a>
                                <a class="dropdown-item" href="/our-technology">Our Technology</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">What We Do</a>
                            <div class="dropdown-menu">
                                <div class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Overview</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="/i-am-a-patient">Patients</a>
                                        <a class="dropdown-item" href="/i-am-a-caregiver">Caregivers</a>
                                        <a class="dropdown-item" href="/i-am-a-provider">Providers</a>
                                        <a class="dropdown-item" href="/i-am-a-health-plan">Health Plans</a>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="/partners">ConcertoCare Partners</a>
                                <a class="dropdown-item" href="/in-home-primary-care">In-Home Primary Care</a>
                                <a class="dropdown-item" href="/concertopace">ConcertoPACE</a>
                            </div>
                        </li>

                        <li class="nav-item" hidden>
                            <a class="nav-link" href="#">Who We Serve</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Locations</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/locations">Overview</a>
                                <?php
                                $content = [
                                    'preview' => '1',
                                    'order' => 'title',
                                    'level' => 2
                                ];
                                $pages = $client->fetchPages('locations', $content);
                                $locations = $pages->getPages();
                                foreach ($locations as $location) {
                                    ?>
                                    <a class="dropdown-item" href="/location/<?php echo $location->getSlug(); ?>">
                                        <?php echo $location->getField('title'); ?></a>
                                    <?php
                                }
                                ?>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">News & Insights</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/news">News</a>
                                <a class="dropdown-item" href="/blog">Blog</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Careers</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/careers">Why ConcertoCare?</a>
                                <a class="dropdown-item" href="/careers-positions">Open Positions</a>
                            </div>
                        </li>

                        <!-- <li class="nav-item">
                        <a class="nav-link <?php if ($CURRENT_PAGE == "Index") { ?>active<?php } ?>" href="/">Home</a>
                    </li> -->
                        <!--					<li class="nav-item">-->
                        <!--						<a class="nav-link --><?php //if ($CURRENT_PAGE == "About") {?><!--active--><?php //}?><!--" href="/about">About US</a>-->
                        <!--					</li>-->
                        <!--					<li class="nav-item">-->
                        <!--						<a class="nav-link --><?php //if ($CURRENT_PAGE == "What We Do") {?><!--active-->
                        <?php //}?><!--" href="/what-we-do">What We Do</a>-->
                        <!--					</li>-->

                        <!--					<li class="nav-item">-->
                        <!--						<a class="nav-link --><?php //if ($CURRENT_PAGE == "Locations") {?><!--active-->
                        <?php //}?><!--" href="/locations">Locations</a>-->
                        <!--					</li>-->
                        <!--					-->
                        <!--					<li class="nav-item">-->
                        <!--						<a class="nav-link --><?php //if ($CURRENT_PAGE == "Careers") {?><!--active--><?php //}?><!--" href="/careers">Careers</a>-->
                        <!--					</li>-->

                    </ul>
                </div>
                <a class="btn btn-orange btn-rounded text-capitalize <?php if ($CURRENT_PAGE == "GetInTouch") { ?>active<?php } ?>" href="/get-in-touch">Get In
                    Touch</a>
            </nav>
        </div>
    </div>
</header>
