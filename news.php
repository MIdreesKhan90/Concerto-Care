<?php
$basename = basename($PHP_SELF, '.php');
$totalPostPerPage = 5;
?>
<!DOCTYPE html>
<html lang="en">
<?php
include("includes/meta-header.php");
include("includes/functions.php");
?>
<body>
<?php include("includes/navigation.php");

$page = $client->fetchPage('news', 'news');

$pageIntro = $page->getField('intro');
?>


<section class="section bg-img" style="--img: url('/assets/img/banners/news-banner.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="hero-box">
                    <h2><?php echo $pageIntro['heading']; ?></h2>
                    <p><?php echo $pageIntro['description']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section news-page-section">
    <div class="container">
        <?php
        $content = [
            'page' => '1',
            'page_size' => '3',
            'tag_slug' => 'featured'
        ];
        $data = $client->fetchPosts($content);
        $featuredPosts = $data->getPosts();

        if (!empty($featuredPosts)){

        ?>
        <h3 class="text-center">Featured Posts</h3>
        <div class="news-carousel row mt-3 mt-md-5 v-center-arrows">
            <?php
            foreach ($featuredPosts as $post) {

                $featured_image = accessProtected($post, 'featured_image');
                $featured_image_alt = accessProtected($post, 'featured_image_alt');
                $summary = $post->getSummary();
                $shortSummary = (strlen($summary) > 50) ? substr($summary, 0, 50) . '...' : $summary;
                $date = date_create(explode("T", $post->getPublished())[0]);
                $createdDate = date_format($date, "M d, Y");
                ?>
                <div class="col-md-4">
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
                                <a href="/articles?id=<?php echo $post->getSlug(); ?>"><?php echo $post->getTitle(); ?></a>
                            </h5>
                            <p><?php echo $shortSummary; ?></p>
                            <p><small><?php echo $createdDate; ?></small></p>
                        </div>
                    </div>
                </div>
                <?php
            }
            }
            ?>
        </div>

        <?php
        $tab = (isset($_GET['tab']) and $_GET['tab'] != "") ? $_GET['tab'] : 'all-posts';
        $page = (isset($_GET['pg']) and $_GET['pg'] != "") ? $_GET['pg'] : 1;
        $query = (isset($_GET['query']) and $_GET['query'] != "") ? $_GET['query'] : '';
        ?>
        <div class="card-content mt-md-5 mt-4">
            <nav class="blogs-nav">
                <ul class="nav nav-tabs" id="nav-tab">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($tab == 1 or $tab == 'all-posts') ? 'active' : '' ?>" id="nav-all-posts-tab"
                           href="<?php echo basename($PHP_SELF, '.php') ?>?tab=all-posts">All Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $tab == 'press-releases' ? 'active' : '' ?>" id="nav-press-releases-tab"
                           href="<?php echo basename($PHP_SELF, '.php') ?>?tab=press-releases">Press Releases</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $tab == 'in-the-news' ? 'active' : '' ?>" id="nav-in-the-news-tab"
                           href="<?php echo basename($PHP_SELF, '.php') ?>?tab=in-the-news">In the News</a>
                    </li>
                </ul>
                <form class="search-form form-inline">
                    <input class="form-control" name="query" type="search" placeholder="Search Articles" aria-label="Search">
                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </nav>
            <div class="tab-content">
                <div class="tab-pane fade show active">
                    <?php
                    $arg = [
                        'page' => $page,
                        'page_size' => $totalPostPerPage
                    ];
                    if ($tab != 'all-posts') {
                        $arg  ['category_slug'] = $tab;
                    }
                    if ($query != ''){
                        $result = $client->searchPosts($query,$arg);
                    }else{
                        $result = $client->fetchPosts($arg);
                    }
//                    $result = $client->fetchPosts($arg);
                    $posts = $result->getPosts();
                    if (!$posts) { ?>
                        <div class="no-articles">
                            <hr>
                            <p class="mt-4"><b>No Articles Found !</b></p>
                            <hr>
                        </div>
                        <?php
                    } else {
                        foreach ($posts as $post) {

                            $cat = accessProtected($post, 'categories');
                            $cat_name = accessProtected($cat[0], 'name');
                            $featured_image = accessProtected($post, 'featured_image');
                            $featured_image_alt = accessProtected($post, 'featured_image_alt');
                            $date = date_create(explode("T", $post->getPublished())[0]);
                            $createdDate = date_format($date, "M d, Y");
                            ?>

                            <div class="blog-card-item">
                                <div class="inner-content">
                                    <?php if (isset($featured_image)) { ?>
                                        <div class="left">
                                            <div class="logo-img">
                                                <img src="<?php echo $featured_image; ?>" alt="<?php echo $featured_image_alt; ?>">
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="left">
                                            <div class="logo-img">
                                                <img src="/assets/img/concerto-care-placeholder.jpg" alt="ConcertoCare Placeholder">
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <div class="right">
                                        <a class="title" href="/articles?id=<?php echo $post->getSlug(); ?>"><h5 class="fw-semi-bold"><?php echo $post->getTitle(); ?></h5></a>
                                        <p><?php echo $post->getSummary(); ?>..</p>
                                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                                            <a class="btn btn-orange btn-rounded mb-3 mb-md-0" href="/articles?id=<?php echo $post->getSlug(); ?>">Read More</a>
                                            <p class="date"><span class="d-inline-block mr-3"><?php echo $cat_name; ?></span> <?php echo $createdDate ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }  //end Foreach Loop

                    } // end else

                    article_pagination($result, $totalPostPerPage, $basename, $tab);

                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-12 text-center mt-5">
            <p>For media inquiries, please reach out to <a href="mailto:concerto@crosscutstrategies.com" style="text-decoration: underline;">concerto@crosscutstrategies.com</a></p>
          </div>
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
