<?php
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$slug = array_pop($uriSegments);
$title = ucwords(str_replace("-", " ", $slug));
include("includes/config.php");
include("includes/butterCmsAPI.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/meta-header.php"); ?>
<body>
<?php include("includes/navigation.php"); ?>
<?php
$bioArr = $client->fetchContentFields(['bios'], [
    'preview' => '1',
    'page' => '1',
    'fields.slug' => $slug
]);
    $bio = $bioArr['bios'][0];
?>
<section class="bio-hero-section">
    <div class="container">
        <a href="/leadership#ourLeadsSection" class="btn-back"><i class="fa fa-angle-left"></i></a>
        <div class="bio-header">
            <div class="member-profile">
                <div class="member-img">
                    <img src="<?php echo $bio['picture']; ?>" alt="<?php echo $bio['title']; ?>">
                </div>
                <div class="member-detail">
                    <?php if (!empty($bio['bio_header'])) { ?>
                        <h1><?php echo $bio['bio_header']; ?></h1>
                    <?php } else { ?>
                        <h1><?php echo $bio['title']; ?></h1>
                    <?php } ?>
                    <p><?php echo $bio['position']; ?> </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bio-detail-section">
    <div class="container">
        <div class="main-content-container">
            <?php
            if (!empty($bio['quote_text']) || $bio['quote_text'] != '') { ?>
            <div class="bio-quote-section">
                <p><?php echo $bio['quote_text']; ?></p>
            </div>
            <?php } ?>
            <div class="mt-3">
                <?php echo $bio['body']; ?>
            </div>
        </div>
    </div>
</section>
<?php include("includes/footer.php"); ?>
<?php include("includes/footer-js.php"); ?>
</body>
</html>
