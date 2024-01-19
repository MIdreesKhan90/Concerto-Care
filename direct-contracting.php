<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/meta-header.php");?>
<body>
<?php include("includes/navigation.php");
$page = $client->fetchPage('direct_contracting', 'direct-contracting');

$pageIntro = $page->getField('intro');
$pageContent = $page->getField('content');
?>

<section class="section text-center bg-nile-blue text-white">
    <div class="container">
        <h1 class="section-title"><b>Direct</b> Contracting</h1>
    </div>
</section>

<section class="direct-contracting-section">
    <div class="container">
        <div class="main-content-container">
            <?php
            if (!empty($pageIntro)){
                echo '<p>'.$pageIntro.'<p>';
            }
            foreach ($pageContent as $content){
                if (!empty($content['fields']['heading'])){
                    echo '<h4>'.$content['fields']['heading'].'</h4>';
                }
                foreach($content['fields']['content'] as $key=>$item) {
                    echo '<ul>';
                    echo '<li>'.$item['list_item'].'</li>';
                    echo '</ul>';
                }
            }
            ?>
        </div>
    </div>
</section>
<?php include("includes/footer.php");?>
<?php include("includes/footer-js.php");?>
</body>
</html>