<?php
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$slug = array_pop($uriSegments);
?>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/meta-header.php"); ?>
<body>
<?php include("includes/navigation.php");

$page = $client->fetchPage('i_am_template', $slug);
$pageTitle = $page->getField('title');
$pageDescription = $page->getField('description');
$pageContent = $page->getField('content');
$pageHeaderImage = $page->getField('background_image');
$pageHeroImage = $page->getField('hero_image');

?>

<style>
    .bg-alabaster {
        background-color: #fff !important ;
    }
</style>
<section class="section i-am-hero-section bg-img" style="--img: url('<?php echo $pageHeaderImage; ?>')">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="hero-box">
                    <h2><?php echo $pageTitle; ?></h2>
                    <?php if ($pageDescription) { ?>
                        <p><?php echo $pageDescription ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-6">
                <img src="<?php echo $pageHeroImage;?>" class="img-fluid hero-img" alt="<?php echo $pageTitle; ?>">
            </div>
        </div>
    </div>
</section>

<?php foreach ($pageContent as $index => $section) { ?>
    <section class="section bg-<?php echo $section['background_color']; ?>">
        <div class="container">
            <h3><?php echo $section['heading']; ?></h3>
            <?php echo $section['body']; ?>
        </div>
    </section>
<?php } ?>

<?php include("includes/footer.php"); ?>
<?php include("includes/footer-js.php"); ?>

</body>
</html>
