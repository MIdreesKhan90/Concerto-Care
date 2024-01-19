<?php
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$slug = array_pop($uriSegments);;
$title = ucwords(str_replace("-", " ", $slug));
?>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/meta-header.php"); ?>
<body>
<?php include("includes/navigation.php");
$page = $client->fetchPage('locations', $slug);
$pageTitle = $page->getField('title');
$pageDescription = $page->getField('description');
$pageAddress = $page->getField('address');
$pagePhone = $page->getField('phone_number');
$pageServices = $page->getField('services');
$pageTextImage = $page->getField('open_graph');
$pageTeamMembers = $page->getField('team_members');
$pageOfficesAddress = $page->getField('offices_address');
$pageTextSection = $page->getField('text_section');
?>

<section class="section text-center bg-nile-blue text-white">
    <div class="container">
        <?php
        if (!empty($pageTitle)) {
            echo '<h1 class="section-title">' . $pageTitle . '</h1>';
        }
        if (!empty($pageDescription)) {
            echo '<p>' . $pageDescription . '<p>';
        }
        ?>
    </div>
</section>
<?php //if ((!empty($pageAddress) && $pageAddress != '') || (!empty($pagePhone) && $pagePhone != '')) { ?>
<!--    <section class="section">-->
<!--        <div class="container">-->
<!--            <h3 class="text-center mb-3">Contact Info</h3>-->
<!--            <div class="address-box">-->
<!--                <div class="row justify-content-center">-->
<!--                    --><?php //if (!empty($pageAddress) && $pageAddress != '') { ?>
<!--                        <div class="col-sm border-sm-right">-->
<!--                            <h5 class="fw-semi-bold">Main Office:</h5>-->
<!--                            --><?php //echo nl2br($pageAddress); ?>
<!--                        </div>-->
<!--                        --><?php
//                    }
//                    if (!empty($pagePhone) && $pagePhone != '') {
//                        ?>
<!--                        <div class="col-sm">-->
<!--                            <h5 class="fw-semi-bold">Phone Number:</h5>-->
<!--                            <p class="mb-0">--><?php //echo $pagePhone; ?><!--</p>-->
<!--                        </div>-->
<!--                        --><?php
//                    }
//                    ?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<?php //}
//?>
<?php
if (!empty($pageOfficesAddress)) {
    ?>
    <section class="section pb-0">
        <div class="container">
            
            

            <div class="row">
                <div class="col-md-8 offset-md-4 text-center text-md-left">
                    <h3 class="mb-4">Contact Info</h3>
                </div>
            </div>

            <div class="address-list mt-4">
                <?php foreach ($pageOfficesAddress as $item) {
                    ?>
                    <div class="row mt-4">
                        <div class="col-sm-4 text-sm-right">
                            <h5 class="fw-semi-bold"><?php echo $item['office']; ?></h5>
                        </div>
                        <div class="col-sm-8 pt-1">
                            <?php echo $item['address']; ?>
                        </div>
                    </div>
                    <hr style="margin: 38px 0;">
                    <?php
                } ?>

            </div>
        </div>
    </section>
    <?php
} ?>


<?php
if (!empty($pageServices)) { ?>
    <section class="section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h5 class="text-sm-right fw-semi-bold">Services Offered</h5>
                </div>
                <div class="col-sm-8">
                    <ul class="services-list">
                        <?php
                        foreach ($pageServices as $pageService) {
                            echo '<li>' . $pageService['service'] . '</li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<!--<section class="section">-->
<!--    <div class="container">-->
<!--        <h3 class="text-center mb-3">Counties Served</h3>-->
<!--        <img class="img-fluid d-block mx-auto" src="/assets/img/location-map.jpg" alt="location-map">-->
<!--    </div>-->
<!--</section>-->
<?php
if (!empty($pageTextSection)) { ?>
    <section class="section bg-bluish-cyan text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h3 class="mb-4"><?php echo $pageTextSection['title']; ?></h3>
                    <p class="mb-0 "><?php echo $pageTextSection['text_copy']; ?></p>
                </div>
            </div>
        </div>
    </section>
    <?php
} ?>

<?php if (!empty($pageTextImage)) { ?>
    <section class="section">
        <div class="container">
            <div class="row">
                <?php if (!empty($pageTextImage['image'])) { ?>
                    <div class="col-md-4">
                        <img class="img-fluid" src="<?php echo $pageTextImage['image']; ?>" alt="<?php echo $pageTextImage['title']; ?>">
                    </div>
                <?php } ?>
                <div class="col-md-8">
                    <?php if (!empty($pageTextImage['image'])) { ?>
                        <h3 class="my-3"><?php echo $pageTextImage['title']; ?></h3>
                        <?php
                    }
                    if (!empty($pageTextImage['description'])) {
                        echo $pageTextImage['description'];
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php }
if (!empty($pageTeamMembers)) { ?>
    <section class="section bg-alabaster">
        <div class="container">
            <h3 class="text-center mb-5">Our <?php echo $pageTitle; ?> Team</h3>
            <div class="row">
                <?php
                foreach ($pageTeamMembers as $member) {
                    ?>
                    <div class="col-md-4">
                        <div class="member-card">
                            <?php if (!empty($member['image'])) { ?>
                                <div class="avatar"><img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>"></div>
                                <?php
                            }
                            if (!empty($member['name'])) { ?>
                                <h5 class="title"><?php echo $member['name']; ?></h5>
                                <?php
                            }
                            if (!empty($member['designation'])) { ?>
                                <p class="designation"><?php echo $member['designation']; ?></p>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <?php
}
include("includes/footer.php");
include("includes/footer-js.php");
?>
</body>
</html>
