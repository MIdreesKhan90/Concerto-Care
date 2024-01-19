<!DOCTYPE html>
<html lang="en">
<?php include("includes/meta-header.php");?>
<body>
<?php include("includes/navigation.php");?>
<section class="section bg-img" style="--img: url('/assets/img/banners/hero.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-sm-6">
                <div class="hero-box">
                    <h2>Locations</h2>
                    <p>ConcertoCare has a national footprint designed to serve communities with large senior populations.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .location-box {
        min-height: 140px;
        border-radius: 4px;
    }
    .location-box h4 {
        font-size: 24px;
        color: #5A7FA6;
    }
</style>
<section class="section">
    <div class="container">
        <h4 class="text-center mb-5">Find More Information On Our Locations</h4>
        <div class="row justify-content-center">
            <?php
            $content = [
                'preview' => '1',
                'order' => 'title',
                'page_size' => '10',
                'level' => 2
            ];
            $pages = $client->fetchPages('locations', $content);
            $locations = $pages->getPages();
            foreach($locations as $location) {
                ?>
                <div class="col-md-4">
                    <a href="/location/<?php echo $location->getSlug(); ?>" class="location-box">
                        <h4><?php echo $location->getField('title'); ?></h4>
                    </a>
                </div>
           <?php
            }
            ?>
        </div>
    </div>
</section>
<?php include("includes/footer.php");?>
<?php include("includes/footer-js.php");?>

</body>
</html>