<?php
$basename = basename($PHP_SELF, '.php');
$totalPostPerPage = 6;
?>
<!DOCTYPE html>
<html lang="en">
    <?php
    include("includes/meta-header.php");
    include("includes/functions.php");
    ?>
<body>
<?php include("includes/navigation.php"); ?>
<section class="section bg-blue-squeeze text-center">
    <div class="container">
        <div class="row">
            <div class="offset-sm-2 col-sm-8">
                <h2 class="mb-4">Blog</h2>
                <h5 class="mb-4">The latest insights and perspectives from ConcertoCare on topics impacting patients and the industry<h5>
                <!--                <form class="search-form">-->
                <!--                    <input class="form-control" type="search" name="query" placeholder="Search article.." aria-label="Search">-->
                <!--                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>-->
                <!--                </form>-->
            </div>
        </div>
    </div>
</section>
<?php
$topic = (isset($_GET['topic']) and $_GET['topic'] != "") ? $_GET['topic'] : 'all';
$topicTitle = ucwords(str_replace("-", " ", $_GET['topic']));
$page = (isset($_GET['pg']) and $_GET['pg'] != "") ? $_GET['pg'] : 1;

$content = [
    'preview' => '1',
    'page' => $page,
    'order' => '-published',
    'page_size' => $totalPostPerPage,
    'level' => 2
];
if ($topic != 'all') {
    $content  ['fields.topic'] = $topic;
}
$result = $client->fetchPages('concertocare_blogs', $content);
$blogs = $result->getPages();
?>
<section class="section blogs-page-section">
    <div class="container">
        <div class="blog-filter form-group">
            <label for="filterByTopics">Topics</label>
            <form class="d-inline-block" id="filterForm" action="/blog">
                <select name="topic" class="form-control" id="filterByTopics">
                    <option value="all" <?php echo $topic == 'all' ? 'selected' : '' ?>>All</option>
                    <option value="covid-19" <?php echo $topic == 'covid-19' ? 'selected' : '' ?>>COVID-19</option>
                    <option value="geriatrics" <?php echo $topic == 'geriatrics' ? 'selected' : '' ?>>Geriatrics</option>
                    <option value="holidays" <?php echo $topic == 'holidays' ? 'selected' : '' ?>>Holidays</option>
                    <option value="home-care" <?php echo $topic == 'home-care' ? 'selected' : '' ?>>Home Care</option>
                    <option value="insurance" <?php echo $topic == 'insurance' ? 'selected' : '' ?>>Insurance</option>
                    <option value="lifestyle" <?php echo $topic == 'lifestyle' ? 'selected' : '' ?>>Lifestyle</option>
                    <option value="medication-management" <?php echo $topic == 'medication-management' ? 'selected' : '' ?>>Medication Management</option>
                    <option value="mental-health" <?php echo $topic == 'mental-health' ? 'selected' : '' ?>>Mental Health</option>
                    <option value="physicians" <?php echo $topic == 'physicians' ? 'selected' : '' ?>>Physicians</option>
                    <option value="social-care" <?php echo $topic == 'social-care' ? 'selected' : '' ?>>Social Care</option>
                    <option value="trends" <?php echo $topic == 'trends' ? 'selected' : '' ?>>Trends</option>
                    <option value="wellness" <?php echo $topic == 'wellness' ? 'selected' : '' ?>>Wellness</option>
                </select>
            </form>

        </div>
        <h3 class="mb-4"><?php echo $topic != 'all' ? $topicTitle : 'Latest Articles'; ?></h3>
        <div class="row">
            <?php if ($blogs) { ?>
                <?php foreach ($blogs as $blog) {
                    $date = date_create($blog->getPublished());
                    $createdDate = date_format($date, "M d, Y");
                    $featured_image = $blog->getField('featured_image');
                    $todayDate = date_create("M d, Y");
//                $diff = date_diff( $createdDate, $todayDate, false);
                    $description = strlen($blog->getField('description')) > 50 ? substr($blog->getField('description'), 0, 50) . "..." : $blog->getField('description');
                    ?>
                    <div class="col-md-4">
                        <a href="/blog/<?php echo $blog->getSlug(); ?>" class="blog-post-card">
                            <div class="blog-img mb-4">
                                <img src="<?php echo $featured_image ?: '/assets/img/concerto-care-placeholder.jpg'; ?>" alt="<?php echo $blog->getField('title'); ?>" width="360"
                                     height="360">
                            </div>
                            <h5 class="title mb-3"><?php echo $blog->getField('title'); ?></h5>
                            <div class="blog-desc">
                                <p><?php echo $description; ?></p>
                            </div>
                            <p class="blog-post-time"><?php echo $createdDate; ?></p>
                        </a>
                    </div>
                <?php } ?>
            <?php }else{ ?>
            <div class="col-md-12">
                <p class="text-center">There are no articles for the selected topic.</p>
            </div>
            <?php } ?>
        </div>
        <!--Pagination-->
        <?php
        article_pagination($result, $totalPostPerPage, $basename, $topic);
        ?>
    </div>
</section>

<?php include("includes/footer.php"); ?>
<?php include("includes/footer-js.php"); ?>

<script>
    $("#filterByTopics").on('change', function () {
        $('#filterForm').submit();
    });
</script>

</body>
</html>
