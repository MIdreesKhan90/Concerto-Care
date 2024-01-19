<!-- JavaScript
================================================== -->
<script src="/assets/js/jquery-3.3.1.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<!--<script src="/assets/js/lib/jquery.validate.js"></script>-->
<script src="/assets/owlcarousel/owl.carousel.min.js"></script>
<script src="https://cdnjs.buttercms.com/buttercms-1.2.8.min.js"></script>
<script src="/assets/js/main.js"></script>
<script>
    jQuery(document).ready(function() {
        jQuery("#sendMessageForm").on('submit', function(event) {
            event.preventDefault();
            var formData = jQuery(this).serialize();
            function clearForm() {
                var frm = $('#sendMessageForm');
                frm.find("input[type=text],input[type=email], textarea").val("");
            }
            jQuery.ajax({
                type: 'POST',
                url: '/includes/mail',
                data: formData,
                success: function(res) {
                    $('#sendMessageForm').hide();
                    $('.alert-success').fadeIn();
                    setTimeout(function(){
                        $('.alert-success').hide();
                        $('#sendMessageForm').fadeIn();
                    }, 5000);
                    clearForm();

                },
                error: function(xhr, status, error){
                    console.log(xhr);
                }
            });
        });
//
//        jQuery('#playVideo').on('click',function(){
//            autoPlayVideo('3TczK1aSIzg');
//        });
//        $('#playVideo').on('click', function() {
//            $("#video")[0].src += "?autoplay=1";
//        });

        $('#playVideoBtn').on('click', function(ev) {

            $("#video")[0].src += "&autoplay=1";
            $(this).delay(3000).fadeOut();
            ev.preventDefault();
        });

        $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
            var $subMenu = $(this).next('.dropdown-menu');
            if ($subMenu.length) {
                e.preventDefault();
                e.stopPropagation();
                $subMenu.toggleClass('show');
                return false;
            }
        });
    });
</script>

