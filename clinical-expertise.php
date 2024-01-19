<!DOCTYPE html>
<html lang="en">
<?php
include("includes/meta-header.php");
include("includes/functions.php");
?>
<body>
<?php include("includes/navigation.php");
$page = $client->fetchPage('clinical_expertise', 'clinical-expertise');

$pageTitle = $page->getField('title');
$pageDescription = $page->getField('description');
$pageTextCopy = $page->getField('text_copy');
$pageTeamSection = $page->getField('team_section');
$pagePhysicianSection = $page->getField('physician_section');
?>

<section class="section text-center bg-nile-blue text-white">
    <div class="container">
        <h1 class="section-title"><?php echo $pageTitle; ?></h1>
        <?php if($pageDescription){ ?>
            <p class="mb-0"><?php echo $pageIntro['description']; ?></p>
        <?php } ?>
    </div>
</section>

<section class="section bg-bluish-cyan">
    <div class="container">
        <h4><?php echo $pageTextCopy['heading']; ?></h4>
        <p class="mb-0"><?php echo $pageTextCopy['text']; ?></p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <img class="img-fluid mb-3 mb-md-0" src="<?php echo $pageTeamSection['team_image']; ?>" alt="<?php echo $pageTeamSection['heading']; ?>">
            </div>
            <div class="col-md-6">
                <h4><?php echo $pageTeamSection['heading']; ?></h4>
                <p class="mb-0"><?php echo $pageTeamSection['text']; ?></p>
            </div>
        </div>
    </div>
</section>

<section class="section bg-yellowish-orange bg-img bg-half-right" style="--img: url('<?php echo $pagePhysicianSection['image']; ?>')">
    <div class="container">
        <div class="col-md-6">
            <h4><?php echo $pagePhysicianSection['heading']; ?></h4>
            <p class="mb-0"><?php echo $pagePhysicianSection['text']; ?></p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php
        $content = [
            'page' => '1',
            'page_size' => '4',
            'tag_slug' => 'featured'
        ];
        $data = $client->fetchPosts($content);
        $featuredPosts = $data->getPosts();

        if (!empty($featuredPosts)){

        ?>
        <h3 class="text-center">Recent Publications from Our Experts</h3>
        <div id="newsCarousel" class="news-carousel owl-carousel owl-theme mt-3 mt-md-5 v-center-arrows">
            <?php
            foreach ($featuredPosts as $post) {

                $featured_image = accessProtected($post, 'featured_image');
                $featured_image_alt = accessProtected($post, 'featured_image_alt');
                $summary = $post->getSummary();
                $shortSummary = (strlen($summary) > 50) ? substr($summary, 0, 50) . '...' : $summary;
                $date = date_create(explode("T", $post->getPublished())[0]);
                $createdDate = date_format($date, "M d, Y");
                ?>
                <div class="item">
                    <?php if (isset($featured_image)) { ?>
                        <a href="/articles?id=<?php echo $post->getSlug(); ?>" class="img">
                            <img src="<?php echo $featured_image; ?>" alt="<?php echo $featured_image_alt; ?>" class="img-fluid">
                        </a>
                    <?php } else { ?>
                        <a href="/articles?id=<?php echo $post->getSlug(); ?>" class="img">
                            <img src="/assets/img/concerto-care-placeholder.jpg" alt="ConcertoCare Placeholder" class="img-fluid">
                        </a>
                    <?php } ?>
                    <div class="content">
                        <h5 class="title">
                            <a href="/articles?id=<?php echo $post->getSlug(); ?>"><?php echo $post->getTitle(); ?>..</a>
                        </h5>
                        <p><?php echo $shortSummary; ?></p>
                        <p><small><?php echo $createdDate; ?></small></p>
                    </div>
                </div>
                <?php
            }
            }
            ?>
        </div>
    </div>
</section>

<?php include("includes/footer.php"); ?>
<?php include("includes/footer-js.php"); ?>
<script>
    $(document).ready(function () {
        $("#newsCarousel").owlCarousel({
            items: 3,
            margin: 42,
            nav: true,
            dots: false,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    });
</script>
</body>
</html>
