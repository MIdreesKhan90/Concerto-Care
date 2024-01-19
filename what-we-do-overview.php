<?php
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$slug = array_pop($uriSegments);
?>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/meta-header.php"); ?>
<body>
<?php include("includes/navigation.php");
$page = $client->fetchPage('what_we_do_overview', $slug);
$pageTitle = $page->getField('title');
$pageIntro = $page->getField('intro');
$pageProgramsTextCopy = $page->getField('programs_text_copy');
$pageProgram1 = $page->getField('program_1');
$pageProgram2 = $page->getField('program_2');
$pageProgram3 = $page->getField('program_3');
$pageBottomTextCopy = $page->getField('bottom_text_copy');
?>

<section class="section bg-img" style="--img: url('/assets/img/banners/hero.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="hero-box">
                    <h2><?php echo $pageIntro['heading']; ?></h2>
                    <p><?php echo $pageIntro['text_copy']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-8">
                <h4>Coordinating Care</h4>
            </div>
        </div>
        <p class="mb-5">ConcertoCare delivers at-home care to patients, as well as support for caregivers. This means we also work closely with other physicians and providers, as well as coordinate with payer and health plans. Learn how our programs work with each of these stakeholders.</p>
        <?php
        $content = [
            'page' => '1',
            'page_size' => '4'
        ];
        $data = $client->fetchPages('i_am_template',$content);
        $iAmPages = $data->getPages();

        if (!empty($iAmPages))
        {
        ?>
        <div class="container">
          <div class="row">
              <?php
              foreach ($iAmPages as $iAmPage) { ?>
            <div class="col-md-3">
                <a href="/<?= $iAmPage->getSlug() ?>">
                    <img src="<?= $iAmPage->getField('preview_image') ?>" class="img-fluid mb-4" alt="<?= $iAmPage->getField('title') ?>">
                    <h5 class="text-center fw-semi-bold"><?= $iAmPage->getField('title') ?></h5>
                </a>
            </div>
              <?php
              }
              ?>
          </div>
        </div>
        <?php
        }
        ?>
        <hr class="my-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <h4><?php echo $pageProgramsTextCopy['heading']; ?></h4>
            </div>
        </div>
        <p class="mb-5"><?php echo $pageProgramsTextCopy['text_copy']; ?></p>
        <div class="row">
            <div class="col-md-4">
                <a href="<?php echo $pageProgram1['link']; ?>">
                    <img src="<?php echo $pageProgram1['featured_image']; ?>" alt="<?php echo $pageProgram1['title']; ?>" class="img-fluid mb-4">
                    <h5 class="text-center fw-semi-bold"><?php echo $pageProgram1['title']; ?></h5>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo $pageProgram2['link']; ?>">
                    <img src="<?php echo $pageProgram2['featured_image']; ?>" alt="<?php echo $pageProgram2['title']; ?>" class="img-fluid mb-4">
                    <h5 class="text-center fw-semi-bold"><?php echo $pageProgram2['title']; ?></h5>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo $pageProgram3['link']; ?>">
                    <img src="<?php echo $pageProgram3['featured_image']; ?>" alt="<?php echo $pageProgram3['title']; ?>" class="img-fluid mb-4">
                    <h5 class="text-center fw-semi-bold"><?php echo $pageProgram3['title']; ?></h5>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section bg-casal bg-img bg-half-right" style="--img: url('/assets/img/clinical-model.jpg')">
    <div class="container">
        <div class="col-md-6">
            <h4 class="text-white mb-5">ConcertoCare Clinical Model <sup>
                    <small>TM</small>
                </sup></h4>
            <img src="/assets/img/svg/clinical-model-group.svg" alt="Program Support" class="d-block mx-auto img-fluid">
        </div>
    </div>
</section>

<section class="section">
    <div class="container text-center">
        <div class="p-3 p-md-5 text-center bg-twilight-blue md-3 mt-md-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h3 class="mb-3"><?php echo $pageBottomTextCopy['heading']; ?></h3>
                    <p><?php echo $pageBottomTextCopy['text_copy']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" hidden>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <h3 class="text-center mb-3">Frequently Asked Questions</h3>
                <p class="text-center mb-4">Each of these three programs is orchestrated with the same core, in-home care model and is composed
                    collaboratively with patients to improve clinical outcomes and quality of life.</p>
            </div>
        </div>
        <div class="accordion faq-accordion" id="accordionFAQ">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        How can I (or someone I know) enroll in your programs?
                    </button>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionFAQ">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Where are you located?
                    </button>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFAQ">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What insurances do you accept?
                    </button>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFAQ">
                    <div class="card-body">
                        <p>ConcertoCare gets to know you personally and assembles the appropriate orchestra of pharmacists, behavioralists, social workers, and health coaches to
                            accompany your health care journey.</p>
                        <p>ConcertoCare relies on its proven modular deployment model, CareDeployTM, to work quickly with ConcertoCare Partners to set up new markets in 120 days or
                            less.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("includes/footer.php"); ?>
<?php include("includes/footer-js.php"); ?>

</body>
</html>