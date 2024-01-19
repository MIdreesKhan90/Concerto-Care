<!DOCTYPE html>
<html lang="en">
<?php include("includes/meta-header.php"); ?>
<body>
<?php include("includes/navigation.php");

$page = $client->fetchPage('leadership', 'leadership');
$pageIntro = $page->getField('intro');
$pageJourney = $page->getField('journey_section');
?>

<section class="section text-center bg-nile-blue text-white">
    <div class="container">
        <h1 class="section-title"><?php echo $pageIntro['heading']; ?></h1>
        <p class="mb-0"><?php echo $pageIntro['description']; ?></p>
    </div>
</section>

<section class="section">
    <div class="container">
        <h4><?php echo $pageJourney['heading']; ?></h4>
        <?php echo $pageJourney['text']; ?>
    </div>
</section>

<section class="section bg-bluish-cyan">
    <div class="container">
        <h3 class="text-center mb-5">Our Leadership Team</h3>
        <div class="row">
            <?php
            $content = [
                'preview' => '1',
                'page' => '1',
                'fields.category' => 'leadership',
                'order' => 'listing_order',
                'page_size' => '15',
            ];
            $bioArr = $client->fetchContentFields(['bios'], $content);
            $count = 0;
            $i = 0;
            foreach ($bioArr as $row) {
                foreach ($row as $key => $bio) {
                    ?>
                    <div class="col-md-4">
                        <a type="button" class="d-block leadership-card" href="/bio/<?php echo $bio['slug']; ?>">
                        <div class="member-card">
                            <div class="avatar"><img src="<?php echo $bio['picture']; ?>" alt="<?php echo $bio['title']; ?>" style="object-position: 27%"></div>
                                <h5 class="title"><?php echo $bio['title']; ?></h5>
                            <p class="designation"><?php echo $bio['position']; ?></p>
                        </div>
                        </a>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>

<section class="section bg-yellowish-orange">
    <div class="container">
        <h3 class="text-center mb-5">External Advisers</h3>
        <div class="row">
            <?php
            $content = [
                'preview' => '1',
                'page' => '1',
                'fields.category' => 'external-advisors',
                'order' => 'listing_order',
                'page_size' => '15',
            ];
            $bioArr = $client->fetchContentFields(['bios'], $content);
            foreach ($bioArr as $row) {
                foreach ($row as $key => $bio) {
                    ?>
                    <div class="col-md-4">
                        <a type="button" class="d-block leadership-card" href="/bio/<?php echo $bio['slug']; ?>">
                        <div class="member-card">
                            <div class="avatar"><img src="<?php echo $bio['picture']; ?>" alt="<?php echo $bio['title']; ?>"></div>
                                <h5 class="title"><?php echo $bio['title']; ?></h5>
                            <p class="designation"><?php echo $bio['position']; ?></p>
                        </div>
                        </a>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal leadership-modal fade" id="bioModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="media align-items-center mb-4">
                    <div class="avatar mr-3">
                        <img id="modalPicture" src="https://cdn.buttercms.com/hRTfCRDaSwKs3gVltLBu" alt="Generic placeholder image">
                    </div>
                    <div class="media-body">
                        <h5 id="modalTitle" class="mt-0">Title</h5>
                        <div id="modalPosition">position</div>
                    </div>
                </div>
                <div id="modalBody">
                    <p>Lorem ipsum body here</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>
<?php include("includes/footer-js.php"); ?>

<script>
    jQuery(document).ready(function () {
        const butter = Butter('aa43eb35533c387c969af1f4858d3520441d4c5a');


        $('#bioModal').on('show.bs.modal', function (event) {
            const button = $(event.relatedTarget);
            const recipient = button.data('bio');
            const modal = $(this);
            // Get Bio
            butter.content.retrieve(["bios"], {'fields.slug': recipient}).then(function(resp) {
                const item = resp.data.data.bios[0];
                modal.find('#modalTitle').text(item.title);
                modal.find('#modalPosition').text(item.position);
                modal.find('#modalPicture').attr('src',item.picture);
                modal.find('#modalPicture').attr('alt',item.title);
                modal.find('#modalBody').html(item.body);
            });
        });

        $('#bioModal').on('hide.bs.modal', function (e) {
            const modal = $(this);
            modal.find('#modalTitle').text("Title");
            modal.find('#modalPosition').text("Position");
            modal.find('#modalPicture').attr('src',"https://cdn.buttercms.com/hRTfCRDaSwKs3gVltLBu");
            modal.find('#modalPicture').attr('alt',"Picture");
            modal.find('#modalBody').html("Body here");
        })
    });
</script>

</body>
</html>
