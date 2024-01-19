<?php
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$slug = array_pop($uriSegments);
?>
<!DOCTYPE html>
<html lang="en">
<?php
include("includes/meta-header.php");
include("includes/functions.php");
?>
<body>
<?php include("includes/navigation.php");

$page = $client->fetchPage('concertocare_blogs', $slug);
$pageTitle = $page->getField('title');
$pageDescription = $page->getField('description');
$pageFeaturedImage = $page->getField('featured_image');
$pageBody = $page->getField('body');
$date = date_create($page->getPublished());
$createdDate = date_format($date, "M d, Y");
$todayDate = date_create("M d, Y");
//$diff = date_diff('w', $createdDate, $todayDate, false);
$diff = $createdDate;
$pageAuthor = $page->getField('author');
//$pageTextImage = $page->getField('open_graph');
//$pageTeamMembers = $page->getField('team_members');

$allPages = $client->fetchPages('concertocare_blogs', [
    'order' => 'published',
]);

$totalPosts = (int)$allPages->getMeta()['count'];
$currentPage = 0;
$prevPage = 1;
$nextPage = 1;
foreach ($allPages->getPages() as $page) {
    $currentPage++;
    if ($slug == $page->getSlug()) {
        break;
    }
}
if ($currentPage > 1 && $currentPage < $totalPosts) {
    $prevPage = $currentPage - 1;
    $nextPage = $currentPage + 1;
} else {
    if ($currentPage == 1 && $currentPage == $totalPosts) {
        $prevPage = 1;
        $nextPage = 1;
    } elseif ($currentPage == 1 && $currentPage < $totalPosts) {
        $prevPage = $totalPosts;
        $nextPage = $currentPage + 1;
    } elseif ($currentPage > 1 && $currentPage == $totalPosts) {
        $prevPage = $currentPage - 1;
        $nextPage = 1;
    }
}

$nextPosts = $client->fetchPages('concertocare_blogs', [
    "page" => $nextPage,
    "page_size" => 1,
    'order' => 'published',
]);
$prevPosts = $client->fetchPages('concertocare_blogs', [
    "page" => $prevPage,
    "page_size" => 1,
    'order' => 'published',
]);
?>

<section class="section single-blog-hero bg-blue-squeeze">
    <div class="container">
        <a class="back-article" href="/blog"><i class="fas fa-arrow-left"></i> Back to Articles</a>
        <div class="row text-center mt-3">
            <div class="offset-sm-2 col-sm-8">
                <?php
                if (!empty($pageTitle)) {
                    echo '<h3 class="mb-3">' . $pageTitle . '</h3>';
                }
                echo '<p class="blog-info">' . $diff . ' | by ' . $pageAuthor . '<p>';
                ?>
            </div>
        </div>
    </div>
</section>

<section class="section single-blog-post-section pt-0">
    <div class="container">
        <div class="single-blog-post">
            <div class="main-content-container">
                <?php
                if ($pageFeaturedImage) {
                    echo '<img src="' . $pageFeaturedImage . '">';
                }
                if ($pageBody) {
                    echo $pageBody;
                }
                ?>
            </div>
        </div>
    <?php
    if ($totalPosts > 1){ ?>
        <div class="row mt-6">
            <div class="col-md-6">
                <?php
                foreach ($prevPosts->getPages() as $page) {
                    $date = date_create($page->getPublished());
                    $createdDate = date_format($date, "M d, Y");
                    ?>
        <div class="media article-navigations prev">
            <img src="<?php echo $page->getField('featured_image') ?: '/assets/img/concerto-care-placeholder.jpg'; ?>" alt="<?php echo $page->getField('title'); ?>">
            <div class="media-body">
                <h5 class="title mt-0"><?php echo $page->getField('title'); ?></h5>
                <p class="blog-post-time"><?php echo $createdDate; ?></p>
                <a href="/blog/<?php echo $page->getSlug(); ?>"><i class="fas fa-arrow-left"></i> Read Previous Article</a>
            </div>
        </div>
        <?php
        }
        ?>

    </div>
    <div class="col-md-6">
        <?php
        foreach ($nextPosts->getPages() as $page) {
            $date = date_create($page->getPublished());
            $createdDate = date_format($date, "M d, Y");
            ?>
            <div class="media article-navigations next">
                <img src="<?php echo $page->getField('featured_image') ?: '/assets/img/concerto-care-placeholder.jpg'; ?>" alt="<?php echo $page->getField('title'); ?>">
                <div class="media-body">
                    <h5 class="title mt-0"><?php echo $page->getField('title'); ?></h5>
                    <p class="blog-post-time"><?php echo $createdDate; ?></p>
                    <a href="/blog/<?php echo $page->getSlug(); ?>">Read Next Article <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    </div>
 <?php
    }
    ?>
    </div>
</section>

<?php include("includes/footer.php"); ?>
<?php include("includes/footer-js.php"); ?>

</body>
</html>