<?php 
$title = ucwords(str_replace("-", " ", $_GET['id']));
include("includes/config.php");
include("includes/butterCmsAPI.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/meta-header.php");?>
<style>
    h2.articleTitle {font-size: 32px; margin-bottom: 24px;}
</style>
<body>
    <?php include("includes/navigation.php");?>
    <section class="layout-simple">
        <div class="container">
            <div class="main-content-container">
            <?php
                $s = $_GET['id'];
                $response = $client->fetchPost($s);
                $post = $response->getPost();
                ?>
                <h2 class="articleTitle">
                    <?php echo $post->getTitle(); ?>
                </h2>
                <?php echo $post->getBody();
            ?>
            </div>
        </div>
    </section>
    <?php include("includes/footer.php");?>
    <?php include("includes/footer-js.php");?>
</body>

</html>